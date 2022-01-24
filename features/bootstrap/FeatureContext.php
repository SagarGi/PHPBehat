<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{


    /**
     * @BeforeSuite 
     */

    // public static function beforeSuite(BeforeSuiteScope $Scope){
    //     echo "This is Before running test..............";
    // }

    //   /**
    //  * @AfterSuite 
    //  */

    // public static function afterSuite(AfterSuiteScope $Scope){
    //     echo "This is After running a feature..............";
    // }

    //  /**
    //  * @BeforeFeature
    //  */

    // public static function beforeFeature(){
    //     echo "This is Before running a feature..............";
    // }

    //   /**
    //  * @AfterFeature
    //  */

    // public static function afterFeature(){
    //     echo "This is After running a  feature..............";
    // }

    // /**
    //  * @BeforeScenario @loginscenario
    //  */

    // public static function beforeEachScenario(){
    //     echo "This is Before running a scenario..............";
    // }

    //   /**
    //  * @AfterScenario @loginscenario
    //  */

    // public static function afterEachScenario(){
    //     echo "This is After running a  scenario..............";
    // }



    /**
     * @Given the has browsed to login page
     */
     public function theHasBrowsedToLoginPage()
     {
         // echo "Visiting the login page....";
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
         if(!$appLogoLocator){
             throw new Exception('cannot locate element!!!');
         }

         if($appLogoLocator->getText() != "PRODUCTS"){
            throw new Exception('Unmatched Text!');
         }
     }
}
