<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include 'styles.css' ?>
    </style>
</head>


<body>
    <div class="container">
        <h2>Even Odd Checker</h2>
        <form method="POST" action="">
            <input type="number" name="userInputNumber" placeholder="Give The Number To Check">

            <br>
            <br>
            <button class="button" type="submit">Even Or Odd ?</button>
            <div id="result">
                <?php



                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $userInputNumber = $_POST['userInputNumber'];

                    if ($userInputNumber == 0) {
                        echo "You have given Zero : which as per Google is , Even Number";
                        return;
                    } else {
                        echo $userInputNumber % 2 == 0 ? "Even Number" : "Odd Number";

                    }

                }

                ?>
            </div>

        </form>

    </div>

</body>

</html>