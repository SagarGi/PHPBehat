<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Page\LoginPage;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class PageContext extends Page implements Context, SnippetAcceptingContext{
    private $loginPage;

    public function __construct(LoginPage $loginPage){
        $this->$loginPage = $loginPage;
    }
}