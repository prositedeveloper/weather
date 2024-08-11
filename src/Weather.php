<?php 

namespace Prositedeveloper\Weather;
use Prositedeveloper\Weather\API\WeatherClient;

use Prositedeveloper\Weather\Models\Result;
use IlluminateAgnostic\Arr\Support\Arr;

class Weather 
{
    private string $location;
    private WeatherClient $client;

    public function __construct(string $apiKey)
    {
        $this->client = new WeatherClient($apiKey);
    }

    public function location(string $location): Weather 
    {
        $this->location = $location;
        return $this; 
    }

    public function get(): Result
    {
        $data = $this->client->request($this->location);

        return (new Result())
            ->setCelsius(Arr::get($data, 'current.temp_c', 0))
            ->setFahrenheit(Arr::get($data, 'current.temp_f', 0));
    }
}