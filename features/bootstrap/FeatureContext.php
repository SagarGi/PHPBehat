<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am on homepage
     */
    public function iAmOnHomepage()
    {
        throw new PendingException();
    }

    /**
     * @When I login using valid credentials
     */
    public function iLoginUsingValidCredentials()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see my account section
     */
    public function iShouldSeeMyAccountSection()
    {
        throw new PendingException();
    }
}
