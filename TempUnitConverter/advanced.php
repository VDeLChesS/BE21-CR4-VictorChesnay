<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-ClassWork2-Exercise6</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.scss">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">CodeFactory</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="advanced.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="C:\xampp\htdocs\CodeFactory\phpDay2\factorial.php">Factorial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <header class="container-fluid">
                    <div class="p-5 text-center bg-light">
                        <h1 class="mb-3">PHP-ClassWork2 DailyChallenge</h1><br><br>
                        <h2 class="mb-3">Fahrenheit-to-Celsius Converter</h2><br>
                    </div>
                </header>
            </div>
            <div class="row">
                <div class="col">
                    <form action="advanced.php" method="post">
                        <fieldset>
                            <legend>Temperature Converter</legend>
                            <div class="mb-3">
                                <label for="number" class="form-label">Enter the Temperature here : </label>
                                <input type="number" class="form-control" id="number" name="number">
                                <label for="from_unit" class="form-label">Select the unit of the temperature : </label>
                                <input list="from_unit" name="from_unit">
                                <datalist id="from_unit">
                                    <option value="Celsius">
                                    <option value="Fahrenheit">
                                    <option value="Kevin">
                                </datalist>
                            </div>
                            <div class="mb-3">
                                <label for="to_unit" class="form-label">Select the unit you want it to Convert : </label>
                                <input list="to_unit" name="to_unit">
                                <datalist id="to_unit">
                                    <option value="Celsius">
                                    <option value="Fahrenheit">
                                    <option value="Kevin">
                                </datalist>
                            </div>
                            <button type="submit" class="btn btn-primary">Convert</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                    // Get the temperature from the form
                    $input = isset($_POST['number']) ? $_POST['number'] : '';
                    $from_unit = isset($_POST['from_unit']) ? $_POST['from_unit'] : '';
                    $to_unit = isset($_POST['to_unit']) ? $_POST['to_unit'] : '';

                    function fahrenheitToCelsius($fahrenheit) {
                        return ($fahrenheit - 32) * (5/9);
                    }

                    function fahrenheitToKelvin($fahrenheit) {
                        return ($fahrenheit - 32) * (5/9) + 273.15;
                    }

                    function celsiusToFahrenheit($celsius) {
                        return $celsius * 9/5 + 32;
                    }

                    function celsiusToKelvin($celsius) {
                        return $celsius + 273.15;
                    }

                    function kelvinToCelsius($kelvin) {
                        return $kelvin - 273.15;
                    }

                    function kelvinToFahrenheit($kelvin) {
                        return ($kelvin - 273.15) * 9/5 + 32;
                    }

                    if ($from_unit == 'Fahrenheit' && $to_unit == 'Celsius') {
                        $result = fahrenheitToCelsius($input);
                        echo "<p>$input °F is $result °C</p>";
                    } elseif ($from_unit == 'Fahrenheit' && $to_unit == 'Kelvin') {
                        $result = fahrenheitToKelvin($input);
                        echo "<p>$input °F is $result K</p>";
                    } elseif ($from_unit == 'Celsius' && $to_unit == 'Fahrenheit') {
                        $result = celsiusToFahrenheit($input);
                        echo "<p>$input °C is $result °F</p>";
                    } elseif ($from_unit == 'Celsius' && $to_unit == 'Kelvin') {
                        $result = celsiusToKelvin($input);
                        echo "<p>$input °C is $result K</p>";
                    } elseif ($from_unit == 'Kelvin' && $to_unit == 'Celsius') {
                        $result = kelvinToCelsius($input);
                        echo "<p>$input K is $result °C</p>";
                    } elseif ($from_unit == 'Kelvin' && $to_unit == 'Fahrenheit') {
                        $result = kelvinToFahrenheit($input);
                        echo "<p>$input K is $result °F</p>";
                    } elseif ($from_unit == "" && $to_unit == "") {
                        echo "<p>Please select the units</p>";
                    } else {
                        echo "<p>Please select the correct units</p>";
                    }

                    // Get temperature in Fahrenheit, for example, 75°F
                    // Convert Fahrenheit to Celsius
                    $FahrTempTo_CelsTemp = fahrenheitToCelsius((float)$input);
                    // Convert Fahrenheit to Kelvin
                    $FahrTempTo_kelvTemp = fahrenheitToKelvin((float)$input);
                    // Convert Celsius to Fahrenheit
                    $CelsTempTo_FahrTemp = celsiusToFahrenheit((float)$input);
                    // Convert Celsius to Kelvin
                    $CelsTempTo_KelvTemp = celsiusToKelvin((float)$input);
                    // Convert Kelvin to Celsius
                    $KelvTempTo_CelsTemp = kelvinToCelsius((float)$input);
                    // Convert Kelvin to Fahrenheit
                    $KelvTempTo_FahrTemp = kelvinToFahrenheit((float)$input);

                    $message = '';
                    $image = '';
                    if ($from_unit == 'Celsius' && $to_unit == 'Fahrenheit' or $from_unit == 'Celsius' && $to_unit == 'Kelvin') {
                        if ($input >= 0 && $input <= 5) {
                            $message = 'Very cold';
                            $image = 'very_cold_image.jpg';
                        } elseif ($input >= 6 && $input <= 10) {
                            $message = 'Cold';
                            $image = 'cold_image.jpg';
                        } elseif ($input >= 11 && $input <= 15) {
                            $message = 'Pleasant';
                            $image = 'pleasant_image.jpg';
                        } elseif ($input >= 16 && $input <= 20) {
                            $message = 'Warm';
                            $image = 'warm_image.jpg';
                        } else {
                            $message = 'Hot';
                            $image = 'hot_image.jpg';
                        }
                        // Display the result
                        echo "<p>$message</p>";
                        echo "<img src='$image' alt='$message'>";
                    } elseif ($from_unit == 'Fahrenheit' && $to_unit == 'Celsius' or $from_unit == 'Fahrenheit' && $to_unit == 'Kelvin') {
                        // Convert Fahrenheit to Celsius
                        if ($input >= 32 && $input <= 41) {
                            $message = 'Very cold';
                            $image = 'very_cold_image.jpg';
                        } elseif ($input >= 42.8 && $input <= 50) {
                            $message = 'Cold';
                            $image = 'cold_image.jpg';
                        } elseif ($input >= 51.8 && $input <= 59) {
                            $message = 'Pleasant';
                            $image = 'pleasant_image.jpg';
                        } elseif ($input >= 60.8 && $input <= 68) {
                            $message = 'Warm';
                            $image = 'warm_image.jpg';
                        } else {
                            $message = 'Hot';
                            $image = 'hot_image.jpg';
                        }
                        // Display the result
                        echo "<p>$message</p>";
                        echo "<img src='$image' alt='$message'>";
                    } elseif ($from_unit == 'Kelvin' && $to_unit == 'Celsius' or $from_unit == 'Kelvin' && $to_unit == 'Fahrenheit') {
                        // Convert Kelvin to Celsius
                        if ($input >= 273.15 && $input <= 278.15) {
                            $message = 'Very cold';
                            $image = 'very_cold_image.jpg';
                        } elseif ($input >= 279.15 && $input <= 283.15) {
                            $message = 'Cold';
                            $image = 'cold_image.jpg';
                        } elseif ($input >= 284.15 && $input <= 288.15) {
                            $message = 'Pleasant';
                            $image = 'pleasant_image.jpg';
                        } elseif ($input >= 289.15 && $input <= 293.15) {
                            $message = 'Warm';
                            $image = 'warm_image.jpg';
                        } else {
                            $message = 'Hot';
                            $image = 'hot_image.jpg';
                        }
                        // Display the result
                        echo "<p>$message</p>";
                        echo "<img src='$image' alt='$message'>";
                    } else {
                        echo "<p>Please select the correct units</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
