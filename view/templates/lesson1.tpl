<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/lesson1.css">
    <title>Lesson 1: </title>
</head>
<body>
    <div class="content">
        <h2 class="title">Drag and drop the fruits in the right box</h2>
        <div class="empties">
            <div class="fruit">
                <h3>Apple</h3>
                <div id="apple-1" class="empty"></div>
            </div>
            <div class="fruit">
                <h3>Pear</h3>
                <div id="pear-1" class="empty"></div>
            </div>
            <div class="fruit">
                <h3>Pineapple</h3>
                <div id="pineapple-1" class="empty"></div>
            </div>
        </div>
        <div class="fillings">
            <div class="empty initial">
                <div id="apple-2" class="apple filling" draggable="true">
                    <img src="img/lesson1/apple.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pear-2" class="filling" draggable="true">
                    <img src="img/lesson1/pear.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pineapple-2" class="filling" draggable="true">
                    <img src="img/lesson1/pineapple.png" alt="" draggable="false">
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="button" id="check">Check</button>
            <a class="button" href="index.php?action=show_lessons"> Return </a>

        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>