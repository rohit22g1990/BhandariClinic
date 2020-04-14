<?php

namespace App\Model\Admin;

use App\Model\AbstractModel;
use Illuminate\Database\Eloquent\Model;

class Module extends AbstractModel
{
    const HOME_PAGE_BANNER_ID = 1;
    const FEATURE_CART_ID = 2;
    const AWESOME_SERVICE_ID = 3;

    protected $tableColumns = [
        'id',
        'name',
        'title',
        'description',
        'page_id',
        'image',
        'is_hidden',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'page_id',
        'image',
        'is_hidden',
    ];

    public function findById(int $id)
    {
        if (empty($id)) {
            return null;
        }

        return Module::find($id);
    }
}
