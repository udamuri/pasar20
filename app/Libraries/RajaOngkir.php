<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Libraries;

use GuzzleHttp\Client;

/**
 * Description of Frontend
 *
 * @author muri
 */
class RajaOngkir {

    public function __construct() {
        
    }

    public static function getProvince() {

        $client = new Client();
        $response = $client->request('GET', config('app.raja_ongkir_url') . 'province', [
            'headers' => [
                'key' => config('app.raja_ongkir_key'),
            ],
            'debug' => FALSE
        ]);

        $arrData = [];

        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $arrBody = json_decode($json, true);
            if (isset($arrBody['rajaongkir'])) {
                $data = isset($arrBody['rajaongkir']['results']) ? $arrBody['rajaongkir']['results'] : [];

                foreach ($data as $key => $value) {
                    $arrData[] = [
                        'id' => $value['province_id'],
                        'text' => $value['province']
                    ];
                }
            }
        }

        return $arrData;
    }

    public static function getCity($province_id, $city_id = 0) {
        $client = new Client();
        $response = $client->request('GET', config('app.raja_ongkir_url') . 'city', [
            'headers' => [
                'key' => config('app.raja_ongkir_key'),
            ],
            'query' => [
                'province' => $province_id,
            ],
            'debug' => FALSE
        ]);

        $arrData = [];
        $arrSelected = [];

        if ($response->getStatusCode() == 200) {
            $json = $response->getBody();
            $arrBody = json_decode($json, true);
            if (isset($arrBody['rajaongkir'])) {
                $data = isset($arrBody['rajaongkir']['results']) ? $arrBody['rajaongkir']['results'] : [];

                foreach ($data as $key => $value) {
                    $arrData[] = [
                        'id' => $value['city_id'],
                        'text' => $value['city_name']
                    ];

                    if ($value['city_id'] == $city_id) {
                        $arrSelected[] = [
                            'id' => $value['city_id'],
                            'text' => $value['city_name']
                        ];
                    }
                }
            }
        }

        return $arrData;
    }
    
}
