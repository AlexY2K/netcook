<?php

class RegisterForm extends sfGuardUserForm {

  public function configure($form = null) {
    $profileForm = new EntityForm($form);
    $this->embedForm('profile', $profileForm);
    // Remove all widgets we don't want to show
    unset(
            $this['is_active'], $this['is_super_admin'], $this['updated_at'], $this['groups_list'], $this['permissions_list'], $this['last_login'], $this['created_at'], $this['salt'], $this['algorithm']
    );

    // Setup proper password validation with confirmation

    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    if ($this->getObject()->isNew()) {
      $this->validatorSchema['password']->setOption('required', true);
    }
    $this->widgetSchema['password_confirmation'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_confirmation'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_confirmation', 'after', 'password');

    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_confirmation', array(), array('invalid' => 'The two passwords must be the same.')));
    $this->validatorSchema['profile']['sf_guard_user_id']->setOption('required', false);

//    $this->widgetSchema['profile']['image'] = new sfWidgetFormInputFileEditable(array(
//      'label' => 'Image',
//      'edit_mode' => !$this->isNew(),
//      'template'  => '<div><img src="%file%" /><br />%input%<br />%delete% %delete_label%</div>',
//      'file_src' => '/uploads'.DIRECTORY_SEPARATOR.'products'.DIRECTORY_SEPARATOR.$this->embeddedForms['profile']['image'],
//    ));
//
//    $this->validatorSchema['profile']['image'] = new sfValidatorFile(array(
//      'required' => true,
//      'path' => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'products',
//      'mime_types' => 'web_images',
//    ));
//    $this->validatorSchema['profile']['image_delete'] = new sfValidatorPass();
  }

//  protected function processUploadedFile($oField, $sFilename = null, $aValues = null)
//  {
//      $mReturn = parent::processUploadedFile($oField, $sFilename, $aValues);
//      if ($mReturn != "") {
//            $aThumbs[] = array('dir' => '130x130', 'width' => 130,  'height' => 130);
//          foreach ($aThumbs as $aThumb)
//          {
//              $sCurrentFile = sfConfig::get('sf_upload_dir').'/user/130x130/'. $mReturn;
//              if (is_file($sCurrentFile)) unlink($sCurrentFile);
//          }
//          foreach ($aThumbs as $aThumb)
//          {
//              $thumbnail = new sfThumbnail(130,
//                                           130,
//                                           true,
//                                           false
//                           );
//              $thumbnail->loadFile(sfConfig::get('sf_upload_dir')."/user/".$mReturn);
//              $thumbnail->save(sfConfig::get('sf_upload_dir').'/user/130x130/'.$mReturn,
//                               'image/png');
//          }
//      }
//      return $mReturn;
//  }
}
