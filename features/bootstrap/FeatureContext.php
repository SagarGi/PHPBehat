<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{


    /**
     * @Given the has browsed to login page
     */
    public function theHasBrowsedToLoginPage()
    {
        $this->visitPath("/");
    }

    /**
     * @When the user logs in with username :arg1 and password :arg2
     */
    public function theUserLogsInWithUsernameAndPassword($username, $password)
    {
        $this->getSession()->getPage()->fillField('user-name', $username);
        $this->getSession()->getPage()->fillField('password', $password);
        $this->getSession()->getPage()->find('css', '#login-button')->click();
    }

    /**
     * @Then the user should be able to see the homepage
     */
    public function theUserShouldBeAbleToSeeTheHomepage()
    {
        $appLogoLocator = $this->getSession()->getPage()->find('css', '.title');
        assert($appLogoLocator->getText(),"Products");
    }
}
