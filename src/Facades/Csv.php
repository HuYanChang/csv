<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019/1/24
 * Time: 18:14
 */
namespace Cxp\Csv\Facades;
use Illuminate\Support\Facades\Facade;
class Csv extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'csv';
    }
}