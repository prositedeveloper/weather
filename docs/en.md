# Weather


### Install

```shell
composer require prositedeveloper/weather
```

### Usage 

```php 

use prositedeveloper\Weather\Weather;

// https://www.weatherapi.com/docs/
$apiKey = "*******";

$weather = new Weather($apiKey);

$weather = $weather
    ->location('Moscow')
    ->get();


echo "Weather in Celsius: {$weather->getCelsius()}\n";
echo "Fahrenheit weather: {$weather->getFahrenheit()}";