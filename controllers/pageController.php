<?php

class PageController
{


    public function __construct()
    {
    }



    public function home(): void
    {
        $route = 'home';
        require 'templates/layout.phtml';
    }

    public function about(): void
    {
        $route = 'about';
        require 'templates/layout.phtml';
    }

    public function contact(): void
    {
        $route = 'contact';
        require 'templates/layout.phtml';
    }

    public function errorPage(): void
    {
        $route = 'error';
        require 'templates/layout.phtml';
    }
}
