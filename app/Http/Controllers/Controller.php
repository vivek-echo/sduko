<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public $token;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->token = $this->getToken();
    }

    public function getState()
    {
        // dd($this->getToken());
        $queryremitter =  Http::withToken($this->getToken())->get('https://www.universal-tutorial.com/api/states/India')->json();
        return response()->json([
            'data' => $queryremitter
        ], 200);
    }

    public function getToken()
    {
        $queryremitter =  Http::withHeaders([
            'accept' => 'application/json',
            'api-token' => config('Constant.api_key'),
            'user-email' => config('Constant.api_mail')
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken')->json();
        return $queryremitter['auth_token'];
    }

    public function getCity()
    {
        $getData = request()->all();

        $queryremitter =  Http::withToken($this->getToken())->get('https://www.universal-tutorial.com/api/cities/' . $getData['stateId'] . '')->json();
        return response()->json([
            'data' => $queryremitter
        ], 200);
    }
    public function getAddPost()
    {
        $getData = request()->all();
        $queryData = DB::table('posttable as PT')
            ->where('PT.deletedFlag', 0)->where('status',1)->selectRaw('PT.pId,PT.postHeading,PT.createdOn,PT.status,PT.modelAge,PT.postDesc,PT.state,PT.city,PT.whatsApp,PT.phoneNo,PT.serviceType');

        if($getData['serviceType'] != 0 ){
            $queryData = $queryData->where('PT.serviceType',$getData['serviceType']);
        }
         if( $getData['stateId'] != "" ){
            $queryData = $queryData->where('PT.state',$getData['stateId']);
        }
        if( $getData['cityId'] != "" ){
            $queryData = $queryData->where('PT.city',$getData['cityId']);
        }
            $queryData = $queryData->get();
        $respnse = [];
        foreach ($queryData as $key => $data) {
            $respData['sl'] = $key + 1;
            $respData['pId'] = $data->pId;
            $respData['typeS'] ='';
            if($data->serviceType == 1)
            {
                $respData['typeS'] = "Massage";
            }else if($data->serviceType == 2){
                $respData['typeS'] = "Male Escort";
            }else if($data->serviceType == 3){
                $respData['typeS'] = "Female Escort";
            }
            $respData['postHeading'] = $data->postHeading;
            $respData['postDesc'] = $data->postDesc;
            $respData['modelAge'] = $data->modelAge;
            $respData['state'] = $data->state;
            $respData['city'] = $data->city;
            $respData['whatsApp'] = $data->whatsApp;
            $respData['phoneNo'] = $data->phoneNo;
            $respData['status'] = $data->status;
            $respData['image'] = DB::table('postimage')->where('postId', $respData['pId'])->first()->image;
            array_push($respnse, $respData);
        }
        return response()->json([
            'data' => $respnse
        ], 200);
    }
}
