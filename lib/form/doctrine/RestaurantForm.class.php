<?php

/**
 * Restaurant form.
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RestaurantForm extends BaseRestaurantForm {

  public function configure() {
    unset(
            $this['created_at'], $this['updated_at']
    );

    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Logo',
                'edit_mode' => !$this->isNew(),
                'template' => '<div><img src="%file%" /><br />%input%<br />%delete% %delete_label%</div>',
                'file_src' => '/uploads' . DIRECTORY_SEPARATOR . 'restaurant' . DIRECTORY_SEPARATOR . $this->getObject()->getImage(),
            ));

    $this->validatorSchema['image'] = new sfValidatorFile(array(
                'required' => true,
                'path' => sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'restaurant',
                'mime_types' => 'web_images',
            ));
    $this->validatorSchema['image_delete'] = new sfValidatorPass();
  }

  protected function processUploadedFile($oField, $sFilename = null, $aValues = null) {
    $mReturn = parent::processUploadedFile($oField, $sFilename, $aValues);
    if ($mReturn != "") {
      $aThumbs[] = array('dir' => '75x75', 'width' => 75, 'height' => 75);
      $aThumbs[] = array('dir' => '150x150', 'width' => 150, 'height' => 150);
      foreach ($aThumbs as $aThumb) {
        $sCurrentFile = sfConfig::get('sf_upload_dir') . '/restaurant/' . $aThumb['dir'] . '/' . $mReturn;
        if (is_file($sCurrentFile))
          unlink($sCurrentFile);
      }
      foreach ($aThumbs as $aThumb) {
        $thumbnail = new sfThumbnail($aThumb['width'],
                        $aThumb['height'],
                        true,
                        false
        );
        $thumbnail->loadFile(sfConfig::get('sf_upload_dir') . "/restaurant/" . $mReturn);
        $thumbnail->save(sfConfig::get('sf_upload_dir') . '/restaurant/' . $aThumb['dir'] . '/' . $mReturn, 'image/png');
      }
    }
    return $mReturn;
  }

}
