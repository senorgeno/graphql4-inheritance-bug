<?php

namespace GenedTest\Models;


class City extends \Page
{

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'City';

    /**
     * @var string
     */
    private static $singular_name = 'City';

    /**
     * @var string
     */
    private static $plural_name = 'Citys';

    /**
     * @var string
     */
    private static $default_sort = 'ID ASC';

    public function getRestaurants()
    {
        return Restaurant::get();
    }


    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canCreate($member = null, $context = [])
    {
        return true;
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canEdit($member = null, $context = [])
    {
        return true;
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canDelete($member = null, $context = [])
    {
        return true;
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canView($member = null, $context = [])
    {
        return true;
    }

}
