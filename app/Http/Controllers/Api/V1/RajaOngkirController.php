<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\RajaOngkir;

class RajaOngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function city($id)
    {
        try {
            $model = RajaOngkir::getCity($id);
            return response()->json($model);
        } catch (\Exception $ex) {
            return response()->json([], 200);
        }
    }
}
