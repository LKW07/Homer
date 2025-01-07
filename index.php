<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Homer - Smart Home</title>
</head>
<body>
    <div class="header">
        <h1>Homer</h1>
    </div>
    <div class="main">
        <form action="views/story.php" method="post">
            <input type="submit" value="Story">
        </form>
    </div>
    <?php
        include "modules/footer.php";
    ?>
</body>
</html>