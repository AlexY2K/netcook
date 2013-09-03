<?php
// lib/form/ContactForm.class.php
class ContactForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormInputText(),
      'email'   => new sfWidgetFormInputText(),
      'nb' => new sfWidgetFormInputText(),
      'time' => new sfWidgetFormTime()
    ));

    $this->widgetSchema->setLabels(array(
      'name'    => 'Nom, Prénom',
      'email'   => 'Adresse email',
      'nb' => 'Nombre de couverts',
      'time' => "Heure d'arriv&eacute;e"
   ));

   $this->widgetSchema->setFormFormatterName('list');
  }
}
