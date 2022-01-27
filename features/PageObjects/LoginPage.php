<?php

namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;

class LoginPage extends Page{
    protected $path = '/';
    protected $usernameSelector;
    protected $passwordSelector;
    protected $loginButtonSelector;

    public function __construct(){
        $this->usernameSelector = "user-name";
        $this->passwordSelector = "password";
        $this->loginButtonSelector = "login-button";
    }

    public function fillFileds($username, $password){
        $this->findField($this->usernameSelector)->setValue($username);
        $this->findField($this->passwordSelector)->setValue($password);
        $this->findField($this->usernameSelector)->setValue($username);
    }
    
}

