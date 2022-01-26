<?php

namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPage extends Page{
    protected $path = 'https://www.saucedemo.com';
    public function greet(){
        echo "Hello  from the other side!!";
    }
}
