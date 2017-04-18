<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
//use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request;

class TicketsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }
    
    private function getAccesstoken($uri){
        
        $postfields = "grant_type=password&username=test1%40test2.com&password=Aa234567%21&client_id=3&client_secret=aZkbSrqEDk0d4eTdVB87eVbkdZZk9Oz43ypCIO3f&scope=*";
                
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION =>  CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        $obj_response = json_decode($response);
        
        if(isset($obj_response->access_token)){
            //return $obj_response->access_token;
            return $obj_response->token_type . ' ' . $obj_response->access_token;
        }
            
        
        return false;
        
    }

    public function index(Request $requestParam) {
        
        $uri = "http://travellogix.api.test.conceptsol.com";
        $endpoint_search = "/api/Ticket/Search";
        $endpoint_auth = "/Token";
                        
        $access_token = $this->getAccesstoken($uri.$endpoint_auth);
        
        if($access_token) {

            // create our http client (Guzzle)
            $http = new Client(
                    [
                        'base_uri' => $uri, 
                        'headers'  => [
                            'Authorization' => $access_token,
                            'Content-Type'  => 'application/json'
                        ]
                    ],
                    [
                        'request.options' => [
                            'exceptions' => false,
                        ]
                    ]
                );            
                    
            $arrayParam =  (array) $requestParam;
            
            $response = $http->request('PUT', $endpoint_search, ['json'=> $arrayParam]);
            
            return $this->success($response->getBody(), 200);
        }
        
        return $this->error("Unautorized", 401);
                
        
    }

}
