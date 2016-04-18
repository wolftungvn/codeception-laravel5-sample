<?php

class SayHelloCest
{
    // tests
    public function sayHelloForTicket1(FunctionalTester $I)
    {
        $I->amOnPage('/say-hello');
        $I->see('say hello for ticket 1');
    }

    public function sayHelloForHotFix1(FunctionalTester $I)
    {
        $I->amOnPage('/say-hello-hot-fix');
        $I->see('say hello for HF ticket 1');
    }
}