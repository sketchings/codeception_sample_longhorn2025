# Codception Sample Longhorn PHP 2025

Sample Project Created for "Bridge the Testing Gap" at Longhorn PHP 2025

See Tutorial Details at https://joind.in/talk/2d2fa

Steps to create:
1. Followed the [Codeception Quickstart](https://codeception.com/quickstart) to "Setup for a single test suite"
   1. Install via Composer
      - `composer require "codeception/codeception" --dev`
   2. Acceptance Testing (only) *NOTE:* Changed the suite name to lower case to other documentation
      - `php vendor/bin/codecept init acceptance`
   3. Write a Basic Test
      - renamed our Cest.php file
      - added similar code FirstCest
   3. Configure Acceptance Tests
      - Changed `tests/Acceptance.suite.yml` to use the PhpBrowser like the quickstart
      - Added the https://longhornphp.com url
   4. Added Module for PhpBrowswer
      - `composer require codeception/module-phpbrowser --dev`
   5. RUN!
      - `php vendor/bin/codecept run --steps`
2. Added BDD feature file following [Codeception Docs: BDD](https://codeception.com/docs/BDD)
   1. `php vendor/bin/codecept g:feature acceptance sponsors`
   2. Updated the `tests/sponsors.feature` file to look for one sponsor using "sponsor" and "level" variables
   3. Generated snippets `php vendor/bin/codecept gherkin:snippets acceptance`
   4. Pasted the snippets into `tests/Support/AcceptanceTester.php`
   5. Updated the `tests/sponsors.feature` to use a [Scenerio Outline](https://codeception.com/docs/BDD#examples)
3. Updated the test to look for "sponsor" WITHIN the `div` containing the "level" `h3`
4. Run test from a single file: `php vendor/bin/codecept run --steps acceptance sponsors.feature`
5. Run all tests: `php vendor/bin/codecept run --steps`