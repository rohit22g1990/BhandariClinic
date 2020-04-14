<?php
namespace App\Services;

use App\Model\Admin\Module;
use App\Services\Admin\AbstractService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;


class HomeService extends AbstractService
{
    public function getGoogleReviews()
    {
//        $client = new Client();
//        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJ206X-XXAwjsRQrscY7rT9rw&fields=name,rating,formatted_phone_number,reviews&key=AIzaSyBSxYKh-RcxhaJ3_KMgijaIg0qF2x6DpbU');
//        $statusCode = $response->getStatusCode();
//
//        return $response->getBody()->getContents();
    }

    public function getModuleContentsByPageId(int $id)
    {
        $modules = Module::all()->where('page_id', '=', $id)->toArray();

        return array_column($modules, null, 'id');
    }
}
