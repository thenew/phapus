<?php

class BDD
{
    public static $connected = false;
    public static $conn = null;

    public static function connectToServer()
    {
        $host       = 'localhost';
        $dbname     = 'phapus';
        $username   = 'root';
        $password   = '';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        self::$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password, $options);
        self::$connected = true;
    }

    public static function requete($query, $class=null)
    {
        if(!self::$connected)
        {
            self::connectToServer();
        }
        // return object (instance of class)
        if($class)
        {
            $results = self::$conn->prepare($query);
            $results->setFetchMode( PDO::FETCH_CLASS, $class);
            $results->execute();
            $object = $results->fetchAll( PDO::FETCH_CLASS );
            return $object;
        }
        else
        {
            $results = self::$conn->query($query);
            return $results;
        }
    }

    public static function insert($values, $table)
    {
        if(!self::$connected)
        {
            self::connectToServer();
        }

        foreach ($values as $field => $v)
            $ins[] = ':' . $field;

        $ins = implode(',', $ins);
        $fields = implode(',', array_keys($values));

        $query = 'INSERT INTO '.$table.' ('.$fields.') VALUES ('.$ins.')';
        // var_dump($query);die;

        $results = self::$conn->prepare($query);
        foreach ($values as $f => $v)
        {
            $results->bindValue(':' . $f, $v);
        }
        return $results->execute();
    }

}