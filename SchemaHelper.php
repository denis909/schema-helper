<?php

namespace denis909\yii;

use Yii;

class SchemaHelper
{

    public static function createIndex(string $name, string $tableName, $columns = [], $unique = false)
    {
        Yii::$app->db->createCommand()->createIndex($name, $tableName, $columns, $unique)->execute();
    }    

    public static function createView(string $tableName, string $sql)
    {
        $sql = 'CREATE VIEW ' . $tableName . ' AS ' . $sql;

        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function dropView(string $tableName)
    {
        $sql = 'DROP VIEW ' . $tableName;

        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function createTemporaryTable(string $tableName, string $sql)
    {
        $sql = 'CREATE TEMPORARY TABLE ' . $tableName . ' ' . $sql;

        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function dropTemporaryTable(string $tableName)
    {
        $sql = 'DROP TEMPORARY TABLE ' . $tableName;

        return Yii::$app->db->createCommand($sql)->execute();
    }

}