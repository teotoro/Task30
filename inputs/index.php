<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Task 30</title>
        <link rel="stylesheet" href="styles.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
        500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"/>
        </head>
    <body>
    <?php
        $result = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
            $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
            $operation = $_POST["operation"];

            if ($num1 === false || $num2 === false) {
                $result = "Invalid input. Please enter valid numbers.";
            } else {
                switch ($operation) {
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "*":
                        $result = $num1 * $num2;
                        break;
                    case "/":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Cannot divide by zero";
                        }
                        break;
                    default:
                        $result = "Invalid operation";
                }
            }
        }
        ?>

        <section class="task01">
            <h1>The Quattromatic Brainiac</h1>
            <form action="" method="post" class="c-form">
                <input class="input-item" type="text" name="num1" pattern="\d+(\.\d{1,2})?" title="Please enter a number">
                <select class="input-item option" name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input class="input-item" type="text" name="num2" pattern="\d+(\.\d{1,2})?" title="Please enter a number">
                <input class="input-item submit" type="submit" value="Calculate">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<h2 class='result'>The result is: $result</h2>";
                }
            ?>
            <a href="second.php" class="prev-btn">Second Task >> </a>
        </section>
    </body>
</html>