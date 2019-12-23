<?php 

class FirstAndroidCest
{
    public function _before(Driver $I)
    {
    }

    // tests
    public function tryToTest(Driver $I)
    {
        $I->getCurrentActivity();
    }
}
