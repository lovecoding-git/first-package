<?php

namespace LovecodingGit\FirstPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LovecodingGit\FirstPackage\FirstPackage
 */
class FirstPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'first-package';
    }
}
