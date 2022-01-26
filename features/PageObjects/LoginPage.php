<?php

namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

class LoginPage extends Page{
    protected $path = '/';

    public function greet(){
        echo "Hello from the other side!!";
    }
}

