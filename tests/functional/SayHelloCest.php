<?php

class SayHelloCest
{
    // tests
    public function sayHelloForTicket1(FunctionalTester $I)
    {
        $I->amOnPage('/say-hello');
        $I->see('say hello for ticket 1');
    }

    // tests
    public function sayHelloForTicket2(FunctionalTester $I)
    {
        $I->amOnPage('/say-xin-chao');
        $I->see('say XIN CHAO for ticket 2');
    }
}