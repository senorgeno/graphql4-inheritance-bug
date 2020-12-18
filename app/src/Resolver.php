<?php


namespace GenedTest\Resolvers;


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
}
