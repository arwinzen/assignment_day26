<?php 
    $persons = ["Kevin", "Arwin"];
    $products = ["pen", "pencil", "eraser", "gum", "ruler", "notebook", "coffee", "milo"];

    // kevin shops
    function kevin_shops(){
        global $persons, $products;
        display($persons[0]);
        echo $persons[0]." bought ".$products[rand(0, (sizeof($products) - 1))];
        echo "<br>";
        echo "<br>";
    }

    // arwin shops
    function arwin_shops(){
        global $persons, $products;
        // display();
        echo "<br>";

        echo $persons[1]." buys:<br>";
        for ($i = 0; $i < 3; $i++){
            echo $products[rand(0, (sizeof($products) - 1))]."<br>";
        }
        echo "<br>";
        
        
        $arwin_items = array_rand($products,3);
        
        echo $persons[1]." then buys:<br>";
        foreach($arwin_items as $items){
            echo $products[$items]."<br>";
            unset($products[$items]);
        }
    }
?>