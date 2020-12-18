<?php


namespace GenedTest\Models;

use SilverStripe\ORM\DataExtension;

class MemberExtension extends DataExtension
{
    public function getAccountBalances()
    {
        return [
            ['currency' => 'NZD', 'amount' => 4],
            ['currency' => 'NZD', 'amount' => 8],

            ['currency' => 'NZD', 'amount' => 3],
            ['currency' => 'NZD', 'amount' => 11],

            ['currency' => 'NZD', 'amount' => 14],
            ['currency' => 'NZD', 'amount' => 85],

            ['currency' => 'USD', 'amount' => 43],
            ['currency' => 'USD', 'amount' => 85],
        ];
    }

    public function canView($member = null)
    {
        return true;
    }
}
