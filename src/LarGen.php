<?php

namespace LarGen;

use PhpParserQuery\PQuery;

class LarGen
{
    protected $pQuery;

    public function __construct(PQuery $pQuery)
    {
        $this->pQuery = $pQuery;
    }

    public function genMigration($name, $fields, $foreignKeys)
    {

    }

    //создает модель и отношения у связанных моделей
    public function genModelWithRelations($name, $fields, $relations)
    {

    }

    //////////////
    /////Поля/////
    //////////////
    //$name - имя миграции
    public function addFieldMigration($name, $field, $args[])
    {

    }

    public function changeFieldMigration($name, $field, $args[])
    {

    }

    public function removeFieldMigration($name, $field, $args[])
    {

    }

    //public function hasFieldMigration($name, $field, $args[])
    //{
    //}

    ///////////////
    /////Ключи/////
    ///////////////
    public function addForeignKey($name, $foreignKey, $args[])
    {

    }

    public function changeForeignKey($name, $foreignKey, $args[])
    {

    }

    public function removeForeignKey($name, $foreignKey, $args[])
    {

    }

    //public function hasForeignKey($name, $foreignKey, $args[])
    //{
    //}

    /////////////////////
    /////Поля модели/////
    /////////////////////
    public function addFieldModel($name, $field, $args[])
    {

    }

    public function changeFieldModel($name, $field, $args[])
    {

    }

    public function removeFieldModel($name, $field, $args[])
    {

    }

    //public function hasFieldModel($name, $field, $args[])
    //{
    //}



    //////////////////////////
    /////Отношения модели/////
    //////////////////////////
    public function addRelations($name, $field, $args[])
    {

    }

    public function changeRelations($name, $field, $args[])
    {

    }

    public function removeRelations($name, $field, $args[])
    {

    }

    //public function hasRelation($name, $field, $args[])
    //{
    //}

    //hasRelations() - если одно отношение правильное, второе нет - выкидывает ошибку
}
