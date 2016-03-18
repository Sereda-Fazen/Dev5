<?php
use \Step\Acceptance;

class TestCest {


    function MyContestsXX012(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();

        $MyAccountPage->accountXX012ContestAdd();
        $I->getVisibleText('Click Browse and choose a file from your computer to upload.');

        $MyAccountPage->accountXX012ContestDelete();
        $I->see('Your XX012 Contest account was successfully deleted', 'li.success-msg');

    }











}
