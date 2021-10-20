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
    <h1>PHP Day 26 Assignment</h1>
    <h2>Q4</h2>
    <form action="quiz4_answers.php" method="POST">
        <label for="stars">Choose a question :</label>
        <br>
        <select id="stars" name="stars">
            <option value="q_name">What is your name?</option>
            <option value="q_hobby">What is your favourite hobby?</option>
            <option value="q_club">Which football club do you support?</option>
        </select>
        <input type="text" name="answer" autocomplete="off" required autofocus>
        <input type="submit">
    </form>
    <?php
        // Create 3 questions(What's your name?, What is your hobby?, What is your favourite club?) each in one function and using $output as display variable on each function. In the website, allow user to choose which question and each questions will call a function to input, process and display on the main class to echo $output. *note - take extra measure to ensure if nothing is submitted, the page shows empty, not the previous input
    ?>
</body>
</html>