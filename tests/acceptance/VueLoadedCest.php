<?php


class VueLoadedCest
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
        $I->wantTo('Confim and see that VueJS wrote text to the DOM');
        $I->amOnPage('/');
        $I->waitPageLoad();
        $I->see('Hello Vue you beautiful thing you!');
    }
}
