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
    <h2>Display Info</h2>
    
    <?php
        // Create 3 questions(What's your name?, What is your hobby?, What is your favourite club?) each in one function and using $output as display variable on each function. In the website, allow user to choose which question and each questions will call a function to input, process and display on the main class to echo $output. *note - take extra measure to ensure if nothing is submitted, the page shows empty, not the previous input
        
        function getInputs($input){
            $data = $_POST[$input];
            return $data;
        }

        echo getInputs("answer");




    ?>
    <form action="quiz4.php">
        <input type="submit" value="Back">
    </form>
</body>
</html>