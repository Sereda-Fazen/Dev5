<?php
use Step\Acceptance;

/**
 * @group 4_checkout_1
 */
class CheckoutCest
{

    /**
     * Check On Checkout With Use Credit Card (visa) For Guest
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */


    function checkOnCheckoutVisaCard(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkOnShoppingCart();
        $I->checkProcessTypeData();

    }
}


