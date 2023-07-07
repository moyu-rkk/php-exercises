<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mad-libs-game-update.php" method="get">
        Color: <input type="text" name="color" value="<?php echo isset($_GET['color']) ? $_GET['color'] : ''; ?>"> <br>
        Plural Noun: <input type="text" name="pluralNoun" value="<?php echo isset($_GET['pluralNoun']) ? $_GET['pluralNoun'] : ''; ?>"> <br>
        Celebrity: <input type="text" name="celebrity" value="<?php echo isset($_GET['celebrity']) ? $_GET['celebrity'] : ''; ?>"> <br>
        <input type="submit">
    </form>
    <br>

    <?php
      $color = isset($_GET["color"]) ? $_GET["color"] : "___";
      $pluralNoun = isset($_GET["pluralNoun"]) ? $_GET["pluralNoun"] : "___";
      $celebrity = isset($_GET["celebrity"]) ? $_GET["celebrity"] : "___";

      echo "Roses are $color <br> ";
      echo "$pluralNoun are blue <br> ";
      echo "I love $celebrity <br> ";
    ?>
</body>
</html>
