<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Temperature Converter</h2>
        <form method="POST" action="">
            <input type="number" name="inputValue" placeholder="Enter Value">
            <h5>Choose Your Conversion Value</h5>
            <select name="convertType">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select><br>
            <br>
            <br>
            <button class="button" type="submit">Convert</button>
            <div id="result">
                <?php
                $celsiusResult = 0;
                $fahrenheitResult = 0;

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $inputValue = $_POST['inputValue'];
                    $convertType = $_POST['convertType'];


                    if ($convertType == 'celsius') {
                        $celsiusResult = ($inputValue - 32) * 5 / 9;
                        echo $celsiusResult;


                    } else if ($convertType == 'fahrenheit') {
                        $fahrenheitResult = ($inputValue * 9 / 5) + 32;
                        echo $fahrenheitResult;

                    }

                }





                ?>
            </div>

        </form>
    </div>
</body>

</html>