<?php

class Controller
{
  protected $getParameters = array(), $postParameters = array();
  
  public function __construct()
  {
    $this->getParameters = $_GET;
    $this->postParameters = $_POST;
  }
  
  public function execute()
  {
    $actionName = ucfirst($this->getActionName()) . 'Action';
    try
    {
      $action = new $actionName($this->getParameters, $this->postParameters);
      $action->execute();
      $action->render();
    }
    catch(Exception $e)
    {
      
    }
  }
  
  protected function getActionName()
  {
    if(isset($this->getParameters['action']))
    {
      return $this->getParameters['action'];
    }
    return 'default';
  }
}