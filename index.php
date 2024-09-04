<!DOCTYPE html>
<html>
<head>
    <title>Hello World PHP</title>
</head>
<body>
    <h1><?php echo 'Hello World!';?> </h1>

    <form method="post">
        <button type = "submit" name="displayMessage">Show Hello World</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['displayMessage'])) {
        echo "<p> Hello World! </p>";
    }
    ?>
</body>
</html>



