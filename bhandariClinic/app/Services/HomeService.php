<?php
namespace App\Services;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HomeService
{
    public function getGoogleReviews()
    {
//        $client = new Client();
//        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJ206X-XXAwjsRQrscY7rT9rw&fields=name,rating,formatted_phone_number,reviews&key=AIzaSyBSxYKh-RcxhaJ3_KMgijaIg0qF2x6DpbU');
//        $statusCode = $response->getStatusCode();
//
//        return $response->getBody()->getContents();
    }

    public function getContactDetails()
    {

    }
}
