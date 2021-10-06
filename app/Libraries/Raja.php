<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Libraries;

use GuzzleHttp\Client;

/**
 * Description of Raja
 *
 * @author muri
 */
class Raja {

    private $origin;

    public function __construct($origin) {
        $this->origin = $origin ?? "501";
    }

    /**
     * 
     */
    public function getCost($destination, $weight, $courier) {
        //tiki, jne, pos
        //501 = Yogyakarta

        try {

            $body = [
                ["name" => "origin", "contents" => $this->origin],
                ["name" => "destination", "contents" => $destination],
                ["name" => "weight", "contents" => $weight],
                ["name" => "courier", "contents" => $courier],
            ];

            $client = new Client();
            $response = $client->request('POST', config('app.raja_ongkir_url') . 'cost', [
                'headers' => [
                    'key' => config('app.raja_ongkir_key')
                ],
                'multipart' => $body,
                'debug' => FALSE
            ]);

            $arrData = [];

            if ($response->getStatusCode() == 200) {
                $json = $response->getBody();
                $arrBody = json_decode($json, true);
                if (isset($arrBody['rajaongkir'])) {
                    $data = isset($arrBody['rajaongkir']['results']) ? $arrBody['rajaongkir']['results'] : [];
                    $arrData = $arrBody['rajaongkir'];
                }
            }

            return $arrData;
        } catch (\Exception $e) {
            return redirect()->route('home.index')->with(['error' => 'Uh oh! ' . $e->getMessage() ]);
        }
    }

}
