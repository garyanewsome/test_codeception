<?php


class CancelBtnCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // $I->waitPageLoad();
        $I->wantTo('Click React input box and then click Cancel button');
        $I->amOnPage('/');
        $I->see('Laravel');
        $I->seeElement('input', ['value' => '01/01/2018']);

        $I->click('/html/body/div[1]/div/div/div/div[1]/input'); // xpath to first input box
        $I->click('Cancel');
    }
}
