<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function index(){

        $result=DB::select(DB::raw("select count( * ) as TotalOrder,Book_Name from deal group by Book_Name"));
        $ChartData="";
        foreach($result as $list){
            $ChartData.="['".$list->Book_Name."',".$list->TotalOrder."],";
           
        }
        $arr['ChartData']=rtrim($ChartData,",");
        return  view('Order.chart',$arr);


    }
}
