<?php

abstract class Action
{
    protected $get, $post;
    protected $view = "index";
    
    public function __construct($get, $post)
    {
        $this->get = $get;
        $this->post = $post;
    }
    
    public function getParameters($name)
    {
        if (isset($this->get[$name]))
        {
            return $this->get[$name];
        }
        else if(isset($this->post[$name]))
        {
            return $this->post[$name];
        }
        return false;
    }
    
    public function render()
    {
        include('view/_layout.php');
    }
    
    abstract public function execute();
}
