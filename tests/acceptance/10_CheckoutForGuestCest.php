<?php
use Step\Acceptance;

/**
 * @group 4_checkout
 */
class CheckoutForGuestCest
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

    /**
     * Check On Checkout With Use Gift Card For Guest
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */


    function checkCheckoutForGuest (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkCheckoutGuestWithGiftCard();

    }

    /**
     * Check On Checkout With Use PayPal
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */

    function checkCheckoutForGuestPayPal (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutForGuestPayPal();

    }



    function checkCheckoutForGuestWithAddingDifferentAddress (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutForGuestWithAddingDifferentAddress();

    }





}
