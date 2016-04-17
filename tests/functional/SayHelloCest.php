<?php

class SayHelloCest
{
    // tests
    public function sayHelloForTicket1(FunctionalTester $I)
    {
        $I->amOnPage('/say-hello');
        $I->see('say hello for ticket 1');
    }
}