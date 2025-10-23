<?php

namespace Tests;

use Tests\Support\AcceptanceTester;

class HomepageCest
{
    public function verifyDate2025(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('October 23-25, 2025');
    }
}