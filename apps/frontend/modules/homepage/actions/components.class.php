<?php
class homepageComponents extends sfComponents
{
  public function executeLoginForm(sfWebRequest $request)
  {
    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin');
    $this->loginForm = new $class();
  }
}
