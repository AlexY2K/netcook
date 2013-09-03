<?php

/**
 * deals module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage deals
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDealsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'deals' : 'deals_'.$action;
  }
}
