<?php

namespace App\Http\Controllers;

use App\Http\Helper\CalculatePlan;
use Illuminate\Http\Request;
use App\Models\PhoneCare;
use App\Models\DddValues;

class HomeController extends Controller{

  public function index(){

    $plans = PhoneCare::all();
    $values = DddValues::all();
    return view('home', compact('plans','values'));

  }

  public function calculation(Request $request){

    $care = $request->phone_care;
    $from = $request->from;
    $to   = $request->to;
    $time = $request->duration;
    if($care == 'Escolha o plano' || $from == 'DDD de Origem' || $to == 'DDD de Destino'){
      return response()->json([
        'msg' => 'Preencha todos os campos',
        'status' => '0',
      ]);
    }

    $v = DddValues::where('ddd_from', $from)->where('ddd_to', $to)->first();
    $value = (double)$v->value_min;

    $plan = new CalculatePlan;
    $no_plan = $plan->noPlan($value, $time);
    $with_plan = $plan->plan($value, $time, $care);

    $data = [
      'care' => $care,
      'from' => $from,
      'to'   => $to,
      'time' => $time,
      'no_plan' => $no_plan,
      'with_plan' => $with_plan,
    ];

    return response()->json([
      'status' => '1',
      'data' => $data,
    ]);
  }

}
