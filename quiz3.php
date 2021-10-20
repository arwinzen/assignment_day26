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
    <h2>Q3</h2>
    <?php
        // Declare an array $students('kevin','amir','azizi','amirul'). Add another name 'arjun' into the array *note - must add at the end of each array, not assuming its the 5th array
        $students = ["kevin", "amir", "azizi", "amirul"];
        array_push($students, "arjun");
        echo "Students: "."<br>";
        echo "<pre>";
        foreach ($students as $student) {
            echo $student;
            echo "<br>";
        }
        echo "</pre>";
    ?>
</body>
</html>