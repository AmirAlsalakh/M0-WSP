<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Namn och Efternamn</h1>
    <?php
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $newname = $name." " . $lastname;

    echo("<p>Ditt namn och efternamn är " . $newname . " </p>");
    ?>
</body>
</html>