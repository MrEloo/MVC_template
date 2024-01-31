<?php

class Router
{

    public function __construct()
    {
    }

    public function handleRequest(array $get): void
    {
        if (isset($get["route"]) && $get["route"] === "a-propos") {
            $about = new PageController();
            $about->about();
        } else if (!isset($get['route']) || ($get['route'] === 'home')) {
            $homePage = new PageController();
            $homePage->home();
        } else if (isset($get["route"]) && $get["route"] === "contact") {
            $contactPage = new PageController;
            $contactPage->contact();
        } else {
            $errorPage = new PageController();
            $errorPage->errorPage();
        }
    }
}
