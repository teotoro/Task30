<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task 30</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
    500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet" />
</head>
<body>  
    <section class="task02">
        <h2>The Circus of Ranges</h2>
        <div class="num-wrapper"> 
            <form action="" method="post" class="c-form">
                <input class="input-item" type="text" name="num3" pattern="\d+(\.\d{1,2})?">
                <input class="input-item submit" type="submit" value="Check">
            </form>
            <?php        
            $number = '';
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num3 = filter_input(INPUT_POST, 'num3', FILTER_VALIDATE_FLOAT);
                if ($num3 !== false) {
                    if ($num3 <= 50) {
                        $number = "Your number is in this range:";
                        echo "<h2 class='result'>$number</h2>";
                        for ($i = 0; $i <= 50; $i++) {
                            echo "<span>$i</span>";
                        }
                    } else if ($num3 <=100){
                        $number = "Your number is in this range:";
                        echo "<h2 class='result'>$number</h2>";
                        for ($i = 51; $i <= 100; $i++) {
                            echo "<span>$i</span>";
                        }
                    } else {
                        $number = "<span>Your number is out of the range!</span>";
                        echo "<h2 class='result'>$number</h2>";
                    }
                }
            }
            ?>              
        </div>
        <a href="index.php" class="prev-btn"><< First Task</a>
    </section>
</body>
</html>