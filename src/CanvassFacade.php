<?php

namespace LBHurtado\Canvass;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LBHurtado\Canvass\Skeleton\SkeletonClass
 */
class CanvassFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'canvass';
    }
}
