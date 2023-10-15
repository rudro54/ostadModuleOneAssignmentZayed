<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include 'styles.css' ?>
    </style>
</head>


<body>
    <div class="container">
        <h2>Comparison Tool</h2>
        <form method="POST" action="">
            <input type="number" name="userInputFirst" placeholder="First Number">
            <input type="number" name="userInputSecond" placeholder="Second Number">

            <br>
            <br>
            <button class="button" type="submit">Compare The Numbers</button>
            <div id="result">
                <?php



                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $userInputFirst = $_POST['userInputFirst'];
                    $userInputSecond = $_POST['userInputSecond'];

                    if ($userInputFirst == $userInputSecond) {
                        echo "Both Numbers Are Equal.. Try With Different Numbers";
                        return;
                    }

                    echo ($userInputFirst > $userInputSecond ? "First One Is Larger" : "Second One is Larger");

                }

                ?>
            </div>

        </form>

    </div>

</body>

</html>