<?php
echo "Choose conversion type:\n";
echo "1. Celsius to Fahrenheit\n";
echo "2. Fahrenheit to Celsius\n";
echo "Enter your choice (1 or 2): ";
$choice = (int)readline();

switch ($choice) {
    case 1:
        echo "Enter temperature in Celsius: ";
        $celsius = (float)readline();
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "Temperature in Fahrenheit: " . $fahrenheit . "°F\n";
        break;

    case 2:
        echo "Enter temperature in Fahrenheit: ";
        $fahrenheit = (float)readline();
        $celsius = ($fahrenheit - 32) * 5/9;
        echo "Temperature in Celsius: " . $celsius . "°C\n";
        break;

    default:
        echo "Invalid choice. Please enter 1 or 2.\n";
}
?>
