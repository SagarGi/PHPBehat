Feature: Login
    As a user
    I want to login
    So that only i can have an access to my account

    Scenario: Login with valid credential.
        Given the has browsed to login pages
        When the user logs in with username "standard_user" and password "secret_sauce"
        Then the user should be able to see the homepage
