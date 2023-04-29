<?php

use GuzzleHttp\Client;

function getAllCities()
{
    $cities = file_get_contents('./city.list.json');
    $cities = json_decode($cities, true);
    $egyptian_cities =  array();
    foreach ($cities as $city) {
        foreach ($city as $key => $value) {
            if ($key === "country" && $value === "EG")
                array_push($egyptian_cities, $city);
        }
    }

    return (($egyptian_cities));
}
function curl_get_weather()
{
    if (!empty($_GET["lon"]) && !empty($_GET["lat"])) {
        $city_lon = $_GET["lon"];
        $city_lat = $_GET["lat"];
        $apiKey = _KEY_API;
        $apiUrl =  "https://api.openweathermap.org/data/2.5/weather?lat=" . $city_lat . "&lon=" . $city_lon . "&appid=" . $apiKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        return ($data);
    }
}
function guzzle_get_weather()
{
    if (!empty($_GET["lon"]) && !empty($_GET["lat"])) {
        $city_lon = $_GET["lon"];
        $city_lat = $_GET["lat"];
        $apiKey = _KEY_API;
        $client = new Client([
            'base_uri' => 'https://api.openweathermap.org',
        ]);
        $response = $client->request('GET', '/data/2.5/weather', [
            'query' => [
                'lat' => $city_lat,
                'lon' => $city_lon,
                'appid' => $apiKey,
            ]
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body, true);
        return ($arr_body);
    }
}
