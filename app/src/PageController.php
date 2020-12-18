<?php

namespace {

    use GenedTest\Models\City;
    use GenedTest\Models\Restaurant;
    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\Security\Member;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
//            for ($i = 0; $i <= 5;  $i++) {
//                $r = Restaurant::create(['Title' => 'restaurant-' . $i]);
//                $r->write();
//                $city = City::create(['Title' => 'city-' . $i]);
//                $city->write();
//                $member = Member::create(['FirstName' => 'member-'. $i, 'Surname' => 'member-' . $i]);
//                $member->write();
//            }
//
//            die('done');
        }
    }
}
