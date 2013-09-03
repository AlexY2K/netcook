<?php

/**
 * Restaurant form base class.
 *
 * @method Restaurant getObject() Returns the current form's model object
 *
 * @package    test
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRestaurantForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'entity_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Entity'), 'add_empty' => false)),
      'image'       => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'postal_code' => new sfWidgetFormInputText(),
      'type'        => new sfWidgetFormInputText(),
      'phone'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'open_time'   => new sfWidgetFormTime(),
      'close_time'  => new sfWidgetFormTime(),
      'status'      => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'entity_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Entity'))),
      'image'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'address'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'postal_code' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'open_time'   => new sfValidatorTime(array('required' => false)),
      'close_time'  => new sfValidatorTime(array('required' => false)),
      'status'      => new sfValidatorBoolean(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Restaurant', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('restaurant[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Restaurant';
  }

}
