<?php
 
class menuComponents extends sfComponents
{
  public function executeContactForm()
  {
    $this->form = new ContactForm();
  }

  public function executeSubmit()
  {
    $this->forward404Unless($request->isMethod('post'));
 
    $params = array(
      'name'    => $request->getParameter('name'),
      'email'   => $request->getParameter('email'),
      'message' => $request->getParameter('message'),
    );
 
    $this->redirect('contact/thankyou?'.http_build_query($params));
  }
 
  public function executeThankyou()
  {
  }
}
