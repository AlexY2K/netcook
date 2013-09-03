<?php

/**
 * restaurant module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage restaurant
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRestaurantGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%name%% - %%address%% - %%type%% - %%phone%% - %%description%% - %%open_time%% - %%close_time%% - %%status%% - %%city%% - %%postal_code%% - %%image%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Restaurant List';
  }

  public function getEditTitle()
  {
    return 'Edit Restaurant';
  }

  public function getNewTitle()
  {
    return 'New Restaurant';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'name',  1 => 'address',  2 => 'type',  3 => 'phone',  4 => 'description',  5 => 'open_time',  6 => 'close_time',  7 => 'status',  8 => 'city',  9 => 'postal_code',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'name',  1 => 'address',  2 => 'type',  3 => 'phone',  4 => 'description',  5 => 'open_time',  6 => 'close_time',  7 => 'status',  8 => 'city',  9 => 'postal_code',  10 => 'image',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'entity_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'image' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'address' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'city' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'postal_code' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'phone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'open_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Time',),
      'close_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Time',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'entity_id' => array(),
      'image' => array(),
      'name' => array(),
      'address' => array(),
      'city' => array(),
      'postal_code' => array(),
      'type' => array(),
      'phone' => array(),
      'description' => array(),
      'open_time' => array(),
      'close_time' => array(),
      'status' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'entity_id' => array(),
      'image' => array(),
      'name' => array(),
      'address' => array(),
      'city' => array(),
      'postal_code' => array(),
      'type' => array(),
      'phone' => array(),
      'description' => array(),
      'open_time' => array(),
      'close_time' => array(),
      'status' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'entity_id' => array(),
      'image' => array(),
      'name' => array(),
      'address' => array(),
      'city' => array(),
      'postal_code' => array(),
      'type' => array(),
      'phone' => array(),
      'description' => array(),
      'open_time' => array(),
      'close_time' => array(),
      'status' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'entity_id' => array(),
      'image' => array(),
      'name' => array(),
      'address' => array(),
      'city' => array(),
      'postal_code' => array(),
      'type' => array(),
      'phone' => array(),
      'description' => array(),
      'open_time' => array(),
      'close_time' => array(),
      'status' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'entity_id' => array(),
      'image' => array(),
      'name' => array(),
      'address' => array(),
      'city' => array(),
      'postal_code' => array(),
      'type' => array(),
      'phone' => array(),
      'description' => array(),
      'open_time' => array(),
      'close_time' => array(),
      'status' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'restaurantForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'restaurantFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
