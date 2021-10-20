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
    <h2>Q2</h2>
    <form action="quiz2.php" method="POST">
        <label for="stars">Name :</label>
        <input type="text" name="name" autocomplete="off" autofocus required>
        <br>
        <label for="stars">IC :</label>
        <input type="text" name="ic" autocomplete="off" autofocus required>
        <br>
        <label for="stars">Phone number :</label>
        <input type="text" name="phone_num" autocomplete="off" autofocus required>
        <br>
        <input type="submit">
    </form>
    
    <?php
        // Create 4 functions(getName,getIC,getMobile,displayInfo). In the website to click button to load each function in sequence and receive all 3 inputs and on function displayInfo to display all input received 
        function getInputs($input){
            $data = $_POST[$input];
            return $data;
        }

        function displayInfo(){
            echo getInputs("name")."<br>";
            echo getInputs("ic")."<br>";
            echo getInputs("phone_num")."<br>";
        }
        
        if( isset($_POST['name'], $_POST['ic'], $_POST['phone_num'])){
            displayInfo();
        }
    ?>
</body>
</html>