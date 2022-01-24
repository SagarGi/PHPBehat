Feature: Login

    As a user
    I want to login
    So that only i can have an access to my account

    Scenario: Login with valid credential

        Given I am on "/"
        When I fill in "user-name" with "standard_user"
        When I fill in "password" with "secret_sauce"
        And I press "login-button"
        Then I should see "Products"
