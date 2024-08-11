# Weather 

Package for getting weather for any location

# Install
```
composer require prositedeveloper/weather
```

# Usage 

```
<?php 

use ProSitedeveloper\Weather\Weather 

// https://www.weatherapi.com/docs/
$apiKey = '*******';

$weather = new Weather($apiKey);

$weather = $weather
    ->location('Moscow')
    ->get()

echo "Weather in celsius: {$weather->getCelsius()}\n"
echo "Weather in fahrenheit: {$weather->getFahrenheit()}"
```