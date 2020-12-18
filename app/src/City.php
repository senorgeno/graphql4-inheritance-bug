<?php

namespace GenedTest\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;

class City extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar',
    ];

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
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldsToTab('Root.Main', [

        ]);
        $this->extend('updateCMSFields', $fields);

        return $fields;
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canCreate($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canEdit($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canDelete($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
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
