<?php

namespace Zowesoft\GeonameSearch;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zowesoft\GeonameSearch\Skeleton\SkeletonClass
 */
class GeonameSearchFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geonamesearch';
    }
}
