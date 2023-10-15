<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include 'styles.css' ?>
    </style>
</head>


<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="POST" action="">
            <input type="number" name="userInputFirstNumber" placeholder="Your First Number">
            <input type="number" name="userInputSecondNumber" placeholder="Your Second Number">
            <h5>Choose Your Conversion Value</h5>
            <select name="calculate">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>

            </select><br>
            <br>
            <br>
            <button class="button" type="submit">Calculate</button>
            <div id="result">
                <?php
                $userInputFirst = $_POST['userInputFirstNumber'];
                $userInputSecond = $_POST['userInputSecondNumber'];
                $calculate = $_POST['calculate'];

                $result = 0;


                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $result = 0;

                    switch ($calculate) {
                        case "add":
                            $result = $userInputFirst + $userInputSecond;
                            echo "Result : " . $result . "\n";
                            break;
                        case "subtract":
                            $result = $userInputFirst - $userInputSecond;
                            echo "Result : " . $result . "\n";
                            break;
                        case "multiply":
                            $result = $userInputFirst * $userInputSecond;
                            echo "Result : " . $result . "\n";
                            break;
                        case "divide":

                            if ($userInputSecond != 0) {
                                $result = $userInputFirst / $userInputSecond;
                                echo "Result : " . $result . "\n";


                            } else {
                                echo "Can not divide by Zero";
                            }
                            break;

                    }



                }

                ?>
            </div>

        </form>

    </div>

</body>

</html>