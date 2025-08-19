<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Matematik test</h1>
<h2>Resultat</h2>

<body>
    <?php
    $ans1 = $_POST['q1'];
    $ans2  = $_POST['q2'];
    $ans3 = $_POST['q3'];
    $ans4 = $_POST['q4'];
    $ans5 = $_POST['q5'];
    $points = 0;

    if ($ans1 == 9)
        $points++;
    if ($ans2 == 15)
        $points++;
    if ($ans3 == 4)
        $points++;
    if ($ans4 == 3)
        $points++;
    if ($ans5 == 6)
        $points++;

    echo ("<p> Du har fått totalt " . $points . " Utav 5 poäng </p>")
    ?>
</body>

</html>