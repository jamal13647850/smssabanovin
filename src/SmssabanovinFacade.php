<?php
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/3/2018
 * Time: 12:08 AM
 */

namespace pgsavis\smssabanovin;


use Illuminate\Support\Facades\Facade;

class SmssabanovinFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return 'smssabanovin';
    }
}