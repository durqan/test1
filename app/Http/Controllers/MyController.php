<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function table()
    {

        $month = $_GET['month'];

        $year = $_GET['year'];

        $day_from = '01';

        $day_to = cal_days_in_month(CAL_GREGORIAN, $_GET['month'], $_GET['year']);

        $type_of_customer = $_GET['type_of_customer'];

        $table = payments::select('summa', 'acnt_id', 'pay_id')->whereBetween('date', ["$year-$month-$day_from", "$year-$month-$day_to"])->with('service')->get();

        $final_table = [];

        foreach ($table as $key => $value) {

            if(!isset($final_table[$value->service->name])){
                $final_table[$value->service->name]['income'] = 0;
                $final_table[$value->service->name]['expenditure'] = 0;
                $final_table[$value->service->name]['recosting'] = 0;
                $final_table[$value->service->name]['total'] = 0;
            }

            if ($value->pay_id == 1 || $value->pay_id == 4) {
                $final_table[$value->service->name]['income'] +=  $value->summa;
            }
            if ($value->pay_id == 2) {
                $final_table[$value->service->name]['expenditure'] +=  $value->summa;
            }
            if ($value->pay_id == 3) {
                $final_table[$value->service->name]['recosting'] +=  $value->summa;
            }

            $final_table[$value->service->name]['total'] += $value->summa;
        }
        return view('table', ['table' => $final_table]);
    }
}
