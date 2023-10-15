<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include 'styles.css' ?>
    </style>
</head>


<body>
    <div class="container">
        <h2>Grade Calculator</h2>
        <form method="POST" action="">
            <input type="number" name="firstScore" placeholder="First Score">
            <input type="number" name="secondScore" placeholder="Second Score">
            <input type="number" name="thirdScore" placeholder="Third score">
            <br>
            <br>
            <button class="button" type="submit">Grade Calculate</button>
            <div id="result">
                <?php



                if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                    $firstScore = $_POST['firstScore'];
                    $secondScore = $_POST['secondScore'];
                    $thirdScore = $_POST['thirdScore'];

                    $averageScore = ($firstScore + $secondScore + $thirdScore) / 3;


                    if ($averageScore >= 90 && $averageScore <= 100) {
                        echo 'Your Grade is A with Average Score ' . $averageScore;
                    } else if ($averageScore >= 80 && $averageScore <= 89) {
                        echo 'Your Grade is B with Average Score ' . $averageScore;
                    } else if ($averageScore >= 70 && $averageScore <= 79) {
                        echo 'Your Grade is A with Average Score ' . $averageScore;
                    } else if ($averageScore <= 70 && $averageScore >= 33) {
                        echo 'Your Grade is F with Average Score' . $averageScore;

                    } else {
                        echo "You have failed Us!! with so poor marks :" . $averageScore;
                    }





                }

                ?>
            </div>

        </form>

    </div>

</body>

</html>