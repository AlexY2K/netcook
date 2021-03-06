<?php

/**
 * CitiesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CitiesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CitiesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cities');
    }
    public static function findCityByName($name, $limit=10)
    {
      return Doctrine_Core::getTable('Cities')
        ->createQuery('c')
        ->select("nom")
        ->where("c.nom LIKE '$name%'")
        ->limit($limit)
        ->execute(array(), Doctrine::HYDRATE_NONE);
    }

    public static function findCityByZipCode($zipcode, $limit=10)
    {
      return Doctrine_Core::getTable('Cities')
        ->createQuery('c')
        ->select("nom")
        ->where("c.cp LIKE '$zipcode%'")
        ->limit($limit)
        ->execute(array(), Doctrine::HYDRATE_NONE);
    }

    public function findCityZipCodeByName($name)
  {
    return Doctrine_Core::getTable('Cities')
        ->createQuery('c')
      ->select('c.cp')
      ->where('c.nom = ?', $name)
      ->fetchOne();
  }
}
