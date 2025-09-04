<!--The HTML elements for the application-->
<!Doctype html>
<html>
    <head>
        <title>Addition Calculator</title>
    </head>

    <body>
        <h1>Addition Calculator</h1>
        <form method="post" action="">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required>
            <br><br>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>
            <br><br>
            <input type="submit" name="calculator" value="add">
        </form>

        <!--PHP code used for calculating addition-->
        <?php
            //check for form submission and perform addition
            if (isset($_POST['calculator'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $sum = $num1 + $num2;
                echo "<h2>Sum Result: $sum</h2>";
            }
        ?>
    </body>
</html>