Feature: Visiting Wikipedia

    Scenario: Search for an article on homepage
        Given I am on "/"
        When I fill in "text" with "abc"
        And I press the "the button"
        Then I should see "Broadcasting"