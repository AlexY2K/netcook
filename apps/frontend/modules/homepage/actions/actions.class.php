<?php

/**
 * homepage actions.
 *
 * @package    test
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->restaurants = Doctrine::getTable('restaurant')->getAll();
    $this->recentRestaurants = Doctrine::getTable('restaurant')->getRecentRestaurants();
    $this->cities = Doctrine::getTable('restaurant')->getCities();
    $this->forward404Unless($this->restaurants);
  }
  
  public function executeListing(sfWebRequest $request)
  {
    $this->restaurants = Doctrine::getTable('restaurant')->getAllByPostalCode($request->getParameter('postal_code'));
  }

  public function executeSubmit(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $params = array(
      'name' => $request->getParameter('name'),
      'email' => $request->getParameter('email'),
      'nb' => $request->getParameter('nb'),
      'time' => $request->getParameter('time')
    );

    sfView::NONE;
    $referer = $request->getReferer();
    $this->getUser()->setFlash('notice', 'Your reservation has been sent, you will be contacted upon validation');
    $this->redirect($referer);
  }

  public function executeAutocomplete(sfWebRequest $request)
  {
    $result = Doctrine_Core::getTable('Cities')
      ->findCityByName($request['q']);

    $data = "";

    foreach($result as $city){
      $data[] = $city[0];
    }

    sfConfig::set('sf_web_debug', false);
    return $this->renderText(json_encode($data));
  }

  public function executeGetCityZipcode(sfWebRequest $request)
  {
    $result = Doctrine_Core::getTable('Cities')
      ->findCityZipCodeByName($request['q']);

    sfConfig::set('sf_web_debug', false);
    return $this->renderText(json_encode($result->getCp()));
  }

  public function executeSignup(sfWebRequest $request)
  {
    $this->form = new RegisterForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('sf_guard_user'));
      if($this->form->isValid())
      {
        $this->form->save();
 
        $this->getUser()->signIn($this->form->getObject());
        $this->getUser()->setFlash('notice', 'Votre profil a bien été mis à jour');
        $this->redirect('@homepage');
      }
    }
  }

  public function executeMentions(sfWebRequest $request)
  {

  }

  public function executeCgv(sfWebRequest $request)
  {

  }
}
