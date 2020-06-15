<?php

namespace Pjsaran\LaravelMediaLibrary;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pjsaran\LaravelMediaLibrary\Skeleton\SkeletonClass
 */
class LaravelMediaLibraryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-media-library';
    }
}
