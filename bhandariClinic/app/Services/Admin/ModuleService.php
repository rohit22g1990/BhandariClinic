<?php
namespace App\Services\Admin;

use App\Model\Admin\Module;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;


class ModuleService extends AbstractService
{
    public $message;
    /**
     * Save setting data
     *
     * @param Request $request
     */
    public function save(Request $request)
    {
        $module = $this->getInstance($request, new MOdule());
        if ($request->hasFile('image')) {
            $imagePath = '/Admin/Modules';
            $imageName = $request->file('image')->getClientOriginalName();
//            $request->image->storeAs('images/' . $imagePath, $imageName);

            $request->image->move(public_path('images') . $imagePath, $imageName);
            $module->image = $imagePath . '/' . $imageName;
        }
        $module->save();
    }

//    /**
//     * Get module instance
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
        $modules = DB::table('modules')
            ->select('modules.id as id',
                'modules.name',
                'modules.title',
                'modules.description',
                'modules.is_hidden',
                'modules.image',
                'pages.page_name'
            )
            ->join('pages', 'modules.page_id', '=', 'pages.id')
            ->get();

        return $modules->toArray();
    }

    public function getModuleById($id)
    {
        if ('new' === $id) {
            return new Module();
        }
        return DB::table('modules')->where('id', $id)->first();
    }
}
