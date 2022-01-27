<?php


use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
class FeatureContext extends MinkContext implements Context
{

    
    // /**
    //  * @Given the has browsed to login page
    //  */
    //  public function theHasBrowsedToLoginPage()
    //  {
    //      echo "Browsing to login page....";
    //      $this->visitPath("/");

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
