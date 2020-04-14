<?php

namespace App\Model\Admin;

use App\Model\AbstractModel;
use Illuminate\Database\Eloquent\Model;

class ModuleCart extends AbstractModel
{
    protected $tableColumns = [
        'id',
        'name',
        'icon',
        'title',
        'description',
        'module_id',
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
        'icon',
        'title',
        'description',
        'module_id',
        'image',
        'is_hidden',
    ];

    public function findById(int $id)
    {
        if (empty($id)) {
            return null;
        }

        return ModuleCart::find($id);
    }
}
