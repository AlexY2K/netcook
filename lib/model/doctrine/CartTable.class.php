<?php

/**
 * CartTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CartTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CartTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Cart');
    }
}