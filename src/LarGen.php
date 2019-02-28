<?php

namespace Ra1ngo\LarGen;

use Ra1ngo\PhpParserQuery\PQuery;

use Artisan;
use Illuminate\Support\Str;
use Illuminate\Support\Composer;
use Illuminate\Database\Migrations\MigrationCreator;

class LarGen
{
    protected $creator;
    protected $composer;

    public function __construct(MigrationCreator $creator, Composer $composer)
    {
        $this->creator = $creator;
        $this->composer = $composer;
    }

    public function genMigration($name, $fields = [], $foreignKeys = [])
    {
        $file = $this->createMigration($name);
        dd($file);
        /*
        $pQuery = new PQuery
        $pQuery->parse($file);
        $node = pQuery->find('Stmt\ClassMethod','up')->find('Expr\Closure');
        получить $поля
        $this->createFieldMigrationNode($node, $полe);
        $this->createRelationMigrationNode($node, $отношение);
        */

    }

    //создает модель и отношения у связанных моделей
    public function genModelWithRelations($name, $fields = [], $relations = [])
    {

    }

    //////////////
    /////Поля/////
    //////////////
    //$name - имя миграции
    public function addFieldMigration($name, $field, $args = [])
    {

    }

    public function changeFieldMigration($name, $field, $args = [])
    {

    }

    public function removeFieldMigration($name, $field, $args = [])
    {

    }

    //public function hasFieldMigration($name, $field, $args[])
    //{
    //}

    ///////////////
    /////Ключи/////
    ///////////////
    public function addForeignKey($name, $foreignKey, $args = [])
    {

    }

    public function changeForeignKey($name, $foreignKey, $args = [])
    {

    }

    public function removeForeignKey($name, $foreignKey, $args = [])
    {

    }

    //public function hasForeignKey($name, $foreignKey, $args[])
    //{
    //}

    /////////////////////
    /////Поля модели/////
    /////////////////////
    public function addFieldModel($name, $field, $args = [])
    {

    }

    public function changeFieldModel($name, $field, $args = [])
    {

    }

    public function removeFieldModel($name, $field, $args = [])
    {

    }

    //public function hasFieldModel($name, $field, $args[])
    //{
    //}



    //////////////////////////
    /////Отношения модели/////
    //////////////////////////
    public function addRelations($name, $field, $args = [])
    {

    }

    public function changeRelations($name, $field, $args = [])
    {

    }

    public function removeRelations($name, $field, $args = [])
    {

    }

    //public function hasRelation($name, $field, $args[])
    //{
    //}

    //hasRelations() - если одно отношение правильное, второе нет - выкидывает ошибку



    protected function createMigration($name)
    {
        $table = Str::plural(Str::snake(class_basename($name)));
        $migration_name = "create_{$table}_table";
        $create = true;
        $migrationPath = database_path().DIRECTORY_SEPARATOR.'migrations';

        $file = $this->creator->create(
            $migration_name, $migrationPath, $table, $create
        );

        $this->composer->dumpAutoloads();

        return $file;
    }

    /*
    protected function createIndexMigrationNode(&$node, $отношение)
    {

    }

    protected function createForeignMigrationNode(&$node, $отношение)
    {

    }


    protected function createFieldMigrationNode(&$node, $полe)
    {

    }

    protected function createRelationMigrationNode(&$node, $отношение)
    {

    }
    */
}
