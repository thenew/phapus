<?php

class IndexPostAction extends Action
{
    protected $view = 'post/index';

    public function execute()
    {
        $modelName = ucfirst(basename(__FILE__, '.php'));
        $m = new $modelName();
        
        $this->posts = $m->all();
    }
}

class ShowPostAction extends Action
{
    protected $view = 'post/show';

    public function execute()
    {
        $modelName = ucfirst(basename(__FILE__, '.php'));
        $m = new $modelName();

        $this->post = $m->find($this->getParameters('id'));
    }
}

class NewPostAction extends Action
{
    protected $view = 'post/new';

    public function execute()
    {
    }
}

class CreatePostAction extends Action
{
    protected $view = 'post/show';

    public function execute()
    {
        $modelName = ucfirst(basename(__FILE__, '.php'));
        $m = new $modelName();

        $post = $m->create($this->post);
        header('Location: ?action=ShowPost&id='.$post->id);
    }
}