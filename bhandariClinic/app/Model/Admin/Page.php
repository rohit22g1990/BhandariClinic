<?php

namespace App\Model\Admin;

use App\Model\AbstractModel;
use Illuminate\Database\Eloquent\Model;

class Page extends AbstractModel
{
    const HOME_PAGE_ID = 1;

    protected $tableColumns = [
        'id',
        'page_name',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'page_name',
    ];
}
