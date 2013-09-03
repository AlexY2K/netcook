
<?php

/**
 * home actions.
 *
 * @package    test
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    $this->latestDeals = Doctrine::getTable('deals')->getLatestDeals();
    $this->latestRestaurants = Doctrine::getTable('restaurant')->getLatestRestaurants();
    $this->bestDeals = Doctrine::getTable('deals')->getBestDeals();
    $this->permanentDeals = Doctrine::getTable('deals')->getPermanentDeals();
  }

  public function executeListing(sfWebRequest $request) {
    $this->restaurants = Doctrine::getTable('restaurant')->getAllByPostalCode($request->getParameter('postal_code'));
  }

  public function executeSignup(sfWebRequest $request) {
    $this->form = new RegisterForm();

    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter('sf_guard_user'));
      if ($this->form->isValid()) {
        $this->form->save();

        $this->getUser()->signIn($this->form->getObject());
      }
    }
  }

  public function executeAutocomplete(sfWebRequest $request) {
    $result = Doctrine_Core::getTable('Restaurant')
            ->findCityByName($request['q']);

    $data = "";

    foreach ($result as $city) {
      $data[] = $city[0] . " (" . $city[1] . ")";
    }

    if (empty($data)) {
      $data[] = "Désolé, nous n'avons pas encore de références dans cette ville !";
    }

    sfConfig::set('sf_web_debug', false);
    return $this->renderText(json_encode($data));
  }

  public function executeGetCityZipcode(sfWebRequest $request) {
    $result = Doctrine_Core::getTable('Restaurant')
            ->findCityByZipCode($request['q']);

//    sfConfig::set('sf_web_debug', false);
    return $this->renderText(json_encode($result->getPostalCode()));
  }

  public function executeDetail(sfWebRequest $request) {
    $this->restaurant = $this->getRoute()->getObject();
    $this->deals = Doctrine_Core::getTable('Deals')
            ->getDealsById($this->restaurant->id);
    $this->forward404Unless($this->restaurant);
  }

  public function executeProfile(sfWebRequest $request) {
    $this->form = new RegisterForm($this->getUser()->getGuardUser());

    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter('sf_guard_user'));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('notice', 'Votre profil a bien été mis à jour');
        $this->redirect('@homepage');
      }
    }
  }

  public function executeMentions(sfWebRequest $request) {
  }

  public function executeContact(sfWebRequest $request) {
  }

  public function executeQui(sfWebRequest $request) {
  }

  public function executeConcept(sfWebRequest $request) {
  }

  public function executeMemberCard(sfWebRequest $request) {
    $this->member = Doctrine_Core::getTable('entity')
            ->getUser($this->getUser()->getGuardUser());
  }

}
