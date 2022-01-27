<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Page\LoginPage;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\MinkExtension\Context\RawMinkContext;


class PageContext extends RawMinkContext implements Context, SnippetAcceptingContext{

    

    private $loginPage;

    public function __construct(LoginPage $loginPage){
        // var_dump($loginPage);
        $this->loginPage = $loginPage;
    }

    /**
     * @Given the has browsed to login pages
     */
    public function theHasBrowsedToLoginPages()
    {
       $this->loginPage->open();
    }
}