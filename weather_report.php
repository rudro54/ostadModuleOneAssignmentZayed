<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include 'styles.css' ?>
    </style>
</head>


<body>
    <div class="container">
        <h2>Weather Report</h2>
        <form method="POST" action="">
            <input type="number" name="userInputTemp" placeholder="Give The Temp You Are In">

            <br>
            <br>
            <button class="button" type="submit">Weather Now</button>
            <div id="result">
                <?php



                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $userInputTemp = $_POST['userInputTemp'];

                    if ($userInputTemp <= 0) {
                        echo "Its Freezing!!!";

                    } else if ($userInputTemp <= 30) {
                        echo "Its Cool!!";

                    } else {
                        echo "Its Warm!!";
                    }

                }

                ?>
            </div>

        </form>

    </div>

</body>

</html>