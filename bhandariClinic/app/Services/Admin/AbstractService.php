<?php
namespace App\Services\Admin;

use App\Model\Admin\Module;
use App\Model\Admin\ModuleCart;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;


class AbstractService
{
    public const MESSAGE_SUCCESS_INSERT = 'New %s created successfully';
    public const MESSAGE_SUCCESS_UPDATE = '%s updated successfully';
    public const MESSAGE_FAIL = 'Oops! Something went wrong!!!';

    /**
     * Get instance
     *
     * @param Request $request
     * @return bool
     */
    public function getInstance(Request $request, Object $modelObject)
    {
//        $module = new ModuleCart();
        if (!empty($request->input('id'))) {
            $this->message = sprintf(AbstractService::MESSAGE_SUCCESS_UPDATE, 'Module');
            return $modelObject->map($request->all(), $modelObject->findById($request->input('id')));
        }
        $this->message = sprintf(AbstractService::MESSAGE_SUCCESS_INSERT, 'Module');

        return $modelObject->map($request->all());
    }

    /**
     * Get all the modules
     */
    public function getModuleCarts($pageId)
    {
        $modules = DB::table('module_carts AS mc')
            ->select('mc.id as id',
                'mc.name',
                'mc.icon',
                'mc.title',
                'mc.description',
                'mc.is_hidden',
                'mc.image',
                'm.id as moduleId'
            )
            ->join('modules AS m', 'm.id', '=', 'mc.module_id')
            ->where('m.page_id', '=' , $pageId)
            ->get();
        $moduleCart = [];
        foreach ($modules->toArray() as $key => $module) {
            $moduleCart[$module->moduleId][] = $module;
        }

        return $moduleCart;
    }
}
