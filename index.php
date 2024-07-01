<?php

class allArea
{
    public $length;
    public $width;
    public $base;
    public $height;
    public $radius;
    public function areaOfReactangle($lengthOfRect, $widthOfRect)
    {
        $this->length = $lengthOfRect;
        $this->width = $widthOfRect;

        $area = $this->length * $this->width;
        return $area;
    }

    public function areaOfCube($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;

        $area = $this->length * $this->width * $this->height;
        return $area;
    }

    public function triangle($base, $height)
    {
        $this->base = $base;
        $this->height = $height;

        $area = 0.5 * $this->base * $this->height;
        return $area;
    }

    public function circle($radius)
    {
        $this->radius = $radius;
        $Pi = M_PI;

        $area = $Pi * $this->radius * $this->radius;
        $formatted_area = number_format($area, 2);
        return $formatted_area;
    }
}

class tempConverter
{
    public $celsius;
    public $fahrenheit;

    public function fahrenheitToCelsius($fahrenheit)
    {
        $this->fahrenheit = $fahrenheit;

        $calc = ($this->fahrenheit - 32) * 5 / 9;
        $formattedCalc = number_format($calc, 2);
        return $formattedCalc;
    }
    public function celsiusToFahrenheit($celsius)
    {
        $this->celsius = $celsius;
        $calc = ($this->celsius * 9 / 5) + 32;
        return $calc;
    }

    public function celsiusToKelvin($celsius)
    {
        $this->celsius = $celsius;

        $calc = $this->celsius + 273.15;

        return $calc;
    }
}

class AreaCalculator extends allArea
{
    public function __construct($name)
    {
        echo "Hello {$name}! Starting Area Calculator & Temperature Converter......";
    }
    public function __destruct()
    {
        echo "Thanks for Using both Area Calculator and Temperature Converter.";
    }
}


$calculator = new AreaCalculator("Jobayer");
echo "<br>";

$rectangleArea = $calculator->areaOfReactangle(5, 10);
echo "Area of Rectangle: " . $rectangleArea . "<br>";

$cubeArea = $calculator->areaOfCube(3, 3, 3);
echo "Area of Cube: " . $cubeArea . "<br>";

$triangleArea = $calculator->triangle(4, 6);
echo "Area of Triangle: " . $triangleArea . "<br>";

$circleArea = $calculator->circle(5);
echo "Area of Circle: " . $circleArea . "<br>";

$converter = new tempConverter();

$fahrenTocel = $converter->fahrenheitToCelsius(62);
$celToFahren = $converter->celsiusToFahrenheit(20);
$celToKelvin =  $converter->celsiusToKelvin(44);

echo "Fahrenheit to Celsius: " . $fahrenTocel ."<br>";

echo "Celsius to Fahrenheit: " . $celToFahren . "<br>";

echo "Celsius to Kelvin:  " . $celToKelvin ."<br>";
