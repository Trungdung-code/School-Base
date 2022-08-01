<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/14/2018
 * Time: 7:50 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class PaginatorFactory
{

    public static function getPaginator($items, $perPage=10, $page=null, $options=[]) {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}