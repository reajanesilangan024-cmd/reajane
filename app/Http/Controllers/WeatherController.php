<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // Existing Admin Dashboard Weather
    public function getWeather()
    {
        $weather = $this->fetchWeather();

        return view('dashboard', compact('weather'));
    }

    // Separate Weather Dashboard
    public function weatherDashboard()
    {
        $weather = $this->fetchWeather();

        return view('weather.dashboard', compact('weather'));
    }

    // Fetch weather data from OpenWeather
    private function fetchWeather()
    {
        $city = env('OPENWEATHER_CITY', 'Arakan');
        $country = env('OPENWEATHER_COUNTRY', 'PH');
        $apiKey = env('OPENWEATHER_API_KEY');

        $weather = [
            'available' => false,
            'city' => $city,
            'location' => $city . ', Philippines',
            'temperature' => null,
            'description' => null,
            'humidity' => null,
            'wind_speed' => null,
            'error' => null,
        ];

        // Check API key
        if (empty($apiKey)) {
            $weather['error'] =
                'API KEY IS EMPTY. Check your .env file.';

            return $weather;
        }

        try {
            $response = Http::timeout(10)->get(
                'https://api.openweathermap.org/data/2.5/weather',
                [
                    'q' => $city . ',' . $country,
                    'appid' => $apiKey,
                    'units' => 'metric',
                ]
            );

            // Successful response
            if ($response->successful()) {

                $data = $response->json();

                $weather['available'] = true;

                $weather['city'] =
                    $data['name'] ?? $city;

                $weather['location'] =
                    ($data['name'] ?? $city) . ', Philippines';

                $weather['temperature'] =
                    isset($data['main']['temp'])
                        ? round($data['main']['temp'], 1)
                        : null;

                $weather['description'] =
                    isset($data['weather'][0]['description'])
                        ? ucfirst($data['weather'][0]['description'])
                        : null;

                $weather['humidity'] =
                    $data['main']['humidity'] ?? null;

                $weather['wind_speed'] =
                    $data['wind']['speed'] ?? null;

            } else {

                $weather['error'] =
                    'OpenWeather Error: HTTP ' .
                    $response->status();

                if ($response->json('message')) {
                    $weather['error'] .=
                        ' - ' . $response->json('message');
                }
            }

        } catch (\Illuminate\Http\Client\ConnectionException $e) {

            $weather['error'] =
                'Connection Error: Cannot connect to OpenWeather.';

        } catch (\Exception $e) {

            $weather['error'] =
                'Laravel Error: ' . $e->getMessage();
        }

        return $weather;
    }
}