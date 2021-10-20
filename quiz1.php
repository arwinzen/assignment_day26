<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Day 26 Assignment</title>
 <link rel="stylesheet" href="">
 <style>
        *{ 
            padding: 0; 
            margin: 0; 
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif; 
            font-size: calc(1.5vh + 1vw + 1%); 
            line-height: 1.5;
        }
        body{ 
            overflow: auto; 
            min-height: 100vh; 
            width: 100%; 
            padding: 0.5rem 1rem;   
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <h1>PHP Day 7 Assignment (Arwin Goo Zen)</h1>
    <h2>Stars for hire</h2>
    <form action="quiz1.php" method="POST">
        <label for="stars">Choose a pattern :</label>
        <select id="stars" name="stars">
            <option value="half">Right-angled Triangle</option>
            <option value="full">Full Triangle</option>
        </select>
        <input type="submit">
    </form>
    
    <?php
        // Question 1
        // a. List out stars in a 5 * 5 triangular pattern
        // echo "<h2>Question 1</h2>\n";

        // declare variable for height of triangle
        // var_dump($pattern);

        function halfStars($height){
            //initialise loop, set $i to "*" and concatenate an extra "*" each time through the loop
            for ($i = "*"; strlen($i) <= $height; $i .= "*"){
                // display $i (concatenated stars) followed by a newline
                echo "${i}"."<br>";
            }
        }

        function fullStars($height){
            halfStars($height);
            // initialise loop, set $i to height, decrease $i each time through the loop
            for ($i = $height; $i >= 0; $i--){
                // display "*" multiplied by the the value of $i --> 5,4,3,2,1
                echo str_repeat("*", $i)."<br>";
            }
        }

        function displayStars($pattern){
            $height = 5;
            if ($pattern === "half"){
                halfStars($height);
            } else if ($pattern === "full"){
                fullStars($height);
            }
        }

        if(isset($_POST['stars'])){
            displayStars($_POST["stars"]);
        }
        
    ?>
</body>
</html>