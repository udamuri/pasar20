<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\CheckNumberLoop;
use App\Libraries\RajaOngkir;
use App\Libraries\Raja;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {
        $request->validate([
            'count' => 'required|numeric|min:0',
        ]);

        $count = $request->input('count') ?? 0;
        $model = new CheckNumberLoop($count);
        $model->run();

        return redirect()->route('home.index')->with([
                'model' => $model->getResult()
        ]);
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rajaongkir()
    {
        return view('rajaongkir')->with([
            'province' => RajaOngkir::getProvince()
        ]);
    }

    public function rajaongkirResult(Request $request) {
        try {
            $request->validate([
                'weight' => 'required|numeric|min:1000',
                'city' => 'required|numeric|min:0',
                'courier' => 'required|string|in:tiki,jne,pos',
            ]);
    
            $ongkir = new Raja("501");
            $model = $ongkir->getCost($request->input('city'), $request->input('weight'), $request->input('courier'));
            
            $from = "";
            if(isset($model['origin_details'])) {
                $from = isset($model['origin_details']['city_name']) ? $model['origin_details']['city_name'] :  "";
            }
    
            $to = "";
            if(isset($model['destination_details'])) {
                $to = isset($model['destination_details']['city_name']) ? $model['destination_details']['city_name'] : "";
            } 
            
            $results = isset($model['results']) ? $model['results'] : [];
    
            return redirect()->route('home.rajaongkir')->with([
                'model' => [
                    'from' => $from,
                    'to' => $to,
                    'weight' => $request->input('weight'),
                    'results' => $results,
                ]
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('home.rajaongkir')->with([
                'model' => [
                    'from' => "",
                    'to' => "",
                    'weight' => "",
                    'results' => [],
                ]
            ]);
        }
    }



    
}
