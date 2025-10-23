<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */
    /**
     * @Given I am on the :arg1 page
     */
    public function iAmOnThePage($arg1)
    {
        $this->amOnPage($arg1);
    }

    /**
     * @Then I should see :sponsor as a :level sponsor
     */
    public function iShouldSeeAsASponsor($sponsor, $level)
    {
        $this->see($sponsor);
        $this->see($level);
    }

}
