<?php

abstract class ORM
{
    // public $id;
    private $class, $table;

    public function __construct()
    {
        $this->class = ucfirst(get_class($this));
        $this->table = strtolower(get_class($this));
    }

    public function all($limit = 20)
    {
        $req = 'SELECT * FROM '.$this->table.' LIMIT '.$limit;
        // TODO : retourner un tableau d'objets sur le modèle SelectOne
        return BDD::requete($req, $this->class);
    }

    public function find($id)
    {
        $req = 'SELECT * FROM '.$this->table.' m WHERE m.id = '.$id;
        $result = BDD::requete($req, $this->class);
        return $result['0'];
    }

    public function last()
    {
        $req = 'SELECT * FROM '.$this->table.' m ORDER BY m.id DESC LIMIT 1';
        $result = BDD::requete($req, $this->class);
        return $result['0'];
    }

    public function create($values = array())
    {
        $r = BDD::insert($values, $this->table);
        if($r) {
            return $this->last();
        } else {
            return 'error';
        }
    }

}