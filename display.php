<?php
    // include "items.php";
    function display($person){
        global $persons, $products; 
        echo $person." goes to a shop"."<br>";
        echo $person." sees 8 items:"."<br>";
        for ($i = 0; $i < sizeof($products); $i++){
            echo $products[$i]."<br>";
        }
    }

?>