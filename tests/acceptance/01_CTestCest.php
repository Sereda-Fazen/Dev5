<?php
use \Step\Acceptance;

/**
 * @group test_test
 */
class CTestCest {


    function loginSuccess(Step\Acceptance\Steps $I, \Page\Login $loginPage) {
        $loginPage->login('dev.denimio@yahoo.com', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
        //test5

    }

















}
