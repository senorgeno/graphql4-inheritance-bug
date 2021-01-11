<?php


namespace GenedTest\Resolvers;

use GenedTest\Models\Restaurant;
use SilverStripe\GraphQL\Schema\Plugin\PaginationPlugin;

class Resolver
{
    public static function paginateAccountBalances($maxLimit)
    {
        return function ($obj, $args) {
            $limitedResults = array_slice($obj, $args['offset'], $args['limit']);
            return PaginationPlugin::createPaginationResult(
                count($obj),
                $limitedResults,
                $args['limit'],
                $args['offset']
            );
        };
    }

    public static function paginateRestaurants($maxLimit)
    {
        //return Restaurant::get();
        return function ($obj, $args) {

            // $limitedResults = array_slice($obj, $args['offset'], $args['limit']);
            return PaginationPlugin::createPaginationResult(
                count($obj),
                Restaurant::get(),
                $args['limit'],
                $args['offset']
            );
        };
    }

//    public static function paginateRestaurants(array $context): Closure
//    {
//        $maxLimit = $context['maxLimit'];
//
//        return function ($list, array $args, array $context, ResolveInfo $info) use ($maxLimit) {
//            if (!$list instanceof Limitable) {
//                //var_dump(count($list)); die();
//                return PaginationPlugin::createPaginationResult(count($list), $list, $maxLimit, 0);
//            }
//
//            $offset = $args['offset'];
//            $limit = $args['limit'];
//            $total = $list->count();
//
//            $limit = min($limit, $maxLimit);
//
//            // Apply limit
//            /* @var Limitable $list */
//            $limitedList = $list->limit($limit, $offset);
//            return PaginationPlugin::createPaginationResult($total, $limitedList, $limit, $offset);
//        };
//    }
}
