<?php

namespace App\Http\Controllers;

use App\Models\BillInfo;
use Illuminate\Http\Request;

class BillInfoController extends Controller
{
    //
    public function index(){
        $info = BillInfo::get();
        return json_decode($info);
    }

    public function submitInfo(Request $request){
        $info = new BillInfo;
        $info->brand_name = $request-> post("brand_name");
        $info->brand_id = $request-> post("brand_id");
        $info->status = $request-> post("status");
        $info->due = $request-> post("due");
        $info->due_info = $request-> post("due_info");

        if($info->save()){
            return response()->json([
                'code' => 0,
                'msg' => 'Success'
            ]);
            return response()->json([
                'code' => -1,
                'msg' => 'Fail'
            ]);
        }
    }
}
