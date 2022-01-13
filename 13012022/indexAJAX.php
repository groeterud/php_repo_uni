<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Search Engine</title>
    <script typ="text/javascript" src="auto_complete.js"></script>
</head>
<body>
    <h2>Who do you want to find?</h2>
    <p><b>Type the first eltter of the person:</b></p>
    <form action="index.php" method="POST">
        <p><input type="text" size=40 id="txtHint" onkeyup="showName(this.value)"></p>
    </form>
    <p>The persons recognized by the system are: <span id="txtName"></span></p>
</body>
</html>