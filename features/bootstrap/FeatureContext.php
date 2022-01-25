<?php

// use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
// use Behat\Gherkin\Node\PyStringNode;
// use Behat\Gherkin\Node\TableNode;
// use Behat\Behat\Context\SnippetAcceptingContext;
// use Behat\MinkExtension\Context\MinkContext;
// use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
// use Behat\Testwork\Hook\Scope\AfterSuiteScope;
use Pages\LoginPage;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
     /**
     * @var LoginPage
     */
    private $loginPage;

    public function __construct()
    {
        $this->$loginPage = new LoginPage();
    }


    // public function __construct(LoginPage $loginPage){
    //     $this->loginPage = $loginPage;
    // }

    
    // /**
    //  * @Given the has browsed to login page
    //  */
    //  public function theHasBrowsedToLoginPage()
    //  {
    //      // echo "Visiting the login page....";
    //      $this->visitPath("/");
    //     // $this->loginPage->navigateToLoginPage();

    //  }
     
    //  /**
    //   * @When the user logs in with username :arg1 and password :arg2
    //   */
    //  public function theUserLogsInWithUsernameAndPassword($username, $password)
    //  {
    //      $this->getSession()->getPage()->fillField('user-name', $username);
    //      $this->getSession()->getPage()->fillField('password', $password);
    //      $this->getSession()->getPage()->find('css', '#login-button')->click();

    //  }
     
    //  /**
    //   * @Then the user should be able to see the homepage
    //   */
    //  public function theUserShouldBeAbleToSeeTheHomepage()
    //  {
    //      $appLogoLocator = $this->getSession()->getPage()->find('css', '.title');
    //      if(!$appLogoLocator){
    //          throw new Exception('cannot locate element!!!');
    //      }

    //      if($appLogoLocator->getText() != "PRODUCTS"){
    //         throw new Exception('Unmatched Text!');
    //      }
    //  }
}
