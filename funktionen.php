<?php
    function ersteFunktion(){
        echo "<br><p>Text aus der ersten Funktion</p>";
    }

    function zweiteFunktion($counter, $zahl){
        echo "<p>$zahl ist ein Text aus der $counter Funktion</p>";
    }

    function dritteFunktion($zahl1, $zahl2){
        $ergebnis = $zahl1 + $zahl2;
        return $ergebnis;
    }
    function quadrat($zahl1 = 2, $zahl2 = 4){
        $ergebnis = $zahl1 * $zahl2;
        return $ergebnis;
    }
    function quadrat_referenz(&$value){
        echo "<p>Wert in der Funktion: $value</p>";
        $value = $value * $value;
        echo $value . "<p>";
    }
?>