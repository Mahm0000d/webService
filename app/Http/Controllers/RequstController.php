<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use App\Http\Controllers\BaseController as BaseController;
use App\Requst;

class RequstController extends Controller
{
    //


public function index()
{
    # code...
    $requsts = Requst::all();
     return $this->sendResponse($requsts->toArray());
}    

public function store(Request $request){
    
   // $access_key="34c47938ba05a8c94b117e37f170edf7";
    $input = $request->all();
    $flight_number=$input['flightNumber'];
try{
    $response = Http::get('http://api.aviationstack.com/v1/flights?access_key=34c47938ba05a8c94b117e37f170edf7&flight_number='.$flight_number.'&limit=1');


}catch(Exception $e){
echo $response->status;
}
 
   // $response = $client->request('GET', 'http://api.aviationstack.com/v1/flights?access_key=34c47938ba05a8c94b117e37f170edf7&flight_number='.$flight_number.'&limit=1');
//$response->mess
//echo $response->body(); 


	
	//echo $response->status; 
    //$validator =    Validator::make($input, [
    //'name'=> 'required',
    //'details'=> 'required' 
   // ] );

    //if ($validator -> fails()) {
        # code...
      //  return $this->sendError('error validation', $validator->errors());
   // }

   $req=  Requst::create(['status'=>$response->status(),'flightNumber'=>$flight_number]);
    return $this->sendResponse($req->toArray());
    }

    public function sendResponse($result){
        $response = [
          
            'data' => $result
            
        ];
        return response()->json($response);
    }

    public function sendError($error , $errorMessages = [] , $code = 404){
        $response = [
            'success' => false ,
            'message' => $error
        ];
        if (!empty($errorMessages)) {
            # code...
            $response['date'] = $errorMessages;
        }
        return response()->json($response , $code);
        
    }

}
