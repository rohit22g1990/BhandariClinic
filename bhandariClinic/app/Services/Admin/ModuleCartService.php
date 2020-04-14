<?php
namespace App\Services\Admin;

use App\Model\Admin\Module;
use App\Model\Admin\ModuleCart;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;


class ModuleCartService extends AbstractService
{
    public $message;
    /**
     * Save setting data
     *
     * @param Request $request
     */
    public function save(Request $request)
    {
        $moduleCart = $this->getInstance($request, new ModuleCart());
        if ($request->hasFile('image')) {
            $imagePath = '/Admin/Modules';
            $imageName = $request->file('image')->getClientOriginalName();

            $request->image->move(public_path('images') . $imagePath, $imageName);
            $moduleCart->image = $imagePath . '/' . $imageName;
        }

        $moduleCart->save();
    }

//    /**
//     * Get instance
//     *
//     * @param Request $request
//     * @return bool
//     */
//    public function getInstance(Request $request)
//    {
//        $module = new Module();
//        if (!empty($request->input('id'))) {
//            $this->message = sprintf(AbstractService::MESSAGE_SUCCESS_UPDATE, 'Module');
//            return $module->map($request->all(), $module->findById($request->input('id')));
//        }
//        $this->message = sprintf(AbstractService::MESSAGE_SUCCESS_INSERT, 'Module');
//
//        return $module->map($request->all());
//    }

    /**
     * Get all the modules
     */
    public function getAll()
    {
        $modules = DB::table('module_carts AS mc')
            ->select('mc.id as id',
                'mc.name',
                'mc.icon',
                'mc.title',
                'mc.description',
                'mc.is_hidden',
                'mc.image',
                'm.name as moduleName'
            )
            ->join('modules AS m', 'mc.module_id', '=', 'm.id')
            ->get();

        return $modules->toArray();
    }

    public function getModuleCartById($id)
    {
        if ('new' === $id) {
            return new ModuleCart();
        }
        return DB::table('module_carts')->where('id', $id)->first();
    }
}
