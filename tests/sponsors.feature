Feature: sponsors
  In order to recognize the amazing sponsor
  As a conference organizer
  I need to make sure that they are on the sponsors page

  Scenario Outline: try sponsors
    Given I am on the "sponsors" page
    Then I should see "<sponsor>" as a "<level>" sponsor
    Examples:
      | sponsor             | level     |
      | Laravel             | Platinum  |
      | PHP Architect       | Platinum  |
      | Roave               | Platinum  |
      | Vonage              | Platinum  |
      | Geocodio            | Gold      |
      | Sentry              | Gold      |
      | Vehikl              | Gold      |
      | Datadog             | Silver    |
      | Remote Dev Force    | Silver    |
      | BigTuna Interactive | Bronze    |
      | Droptica            | Bronze    |
      | Laravel Shift       | Bronze    |
      | Omni's Brews        | Bronze    |
      | Victory             | Bronze    |
      | PHPStan             | Community |
      | TheWeeklyDrop       | Community |
