<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\Context,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use GuzzleHttp\Client; 


/**
 * Defines application features from the specific context.
 */
class APIContext implements Context
{
    public $_response;

    public function _construct()
    {
      
    }

    // getting parameter from the context
    // multiple parameters can be passed through the context as per the requirements

     /**
     * @Given I request :arg1
     */
    public function iRequest($requestEndpoint)
    {
        $client = new Client(['base_uri' => 'https://api.github.com'.$requestEndpoint]);
        $responseFromAPI = $client->get('/');
        $this->_response = $responseFromAPI;
        // echo $response->getBody()->getContents();
    }

    /**
     * @Then the response should be JSON
     */
    public function theResponseShouldBeJson()
    {
        // echo $this->_response->getBody()->getContents();
        $dataFromAPI = json_decode($this->_response->getBody(true));
        if(empty($dataFromAPI)){
            throw new Exception("The Response was not a JSON\n".$this->_response);
        }
    }

     /**
     * @Then the response status code should be :arg1
     */
    public function theResponseStatusCodeShouldBe($status)
    {
        echo $this->_response->getStatusCode();
       if((string)$this->_response->getStatusCode() !== $status){
        throw new Exception("The Response was not a JSON\n".$status. 'Received = ' .  $this->_response->getStatusCode());
       }
    }


    /**
     * @Then the response has a :arg1 property
     */
    public function theResponseHasAProperty($propertyName)
    {
   
        $dataFromAPI = $this->_response->getBody()->getContents();
        if(!empty($dataFromAPI)){
            if(!isset($dataFromAPI->$propertyName)){
                throw new Exception("Property ". $propertyName .' is not set in the JSON response');
            }
        }
    }

    /**
     * @Then the :arg1 property equals :arg2
     */
    public function thePropertyEquals($key, $value)
    {
        $dataFromAPI = $this->_response->getBody()->getContents();
        
        // echo $dataFromAPI.$key;
        // echo $dataFromAPI.$value;

        if(!empty($dataFromAPI)){
            if(!isset($dataFromAPI->key)){
                throw new Exception("Key '".$key."' is not set!\n");
            }
            if(!isset($dataFromAPI->value)){
                throw new Exception("Key '".$value." 'Did not matched! " . 'Given is ' . $value);
            }
            
        }
    }
}
