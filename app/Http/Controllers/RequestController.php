<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\BaseController as BaseController;
use App\Requst;

class RequestController extends Controller
{
    //

public function create(Request $request){
  //  $client = new \GuzzleHttp\Client();
//$response = $client->request('POST', 'https://api.github.com/repos/guzzle/guzzle');
//$response->mess

//echo $response->getStatusCode(); 

	//$input = $request->all();
	//echo $input->status; 
    //$validator =    Validator::make($input, [
    //'name'=> 'required',
    //'details'=> 'required' 
   // ] );

    //if ($validator -> fails()) {
        # code...
      //  return $this->sendError('error validation', $validator->errors());
   // }

   // $req = Requst::create($input);
   // return $this->sendResponse($req->toArray(), 'Request  created succesfully');
    }
}
