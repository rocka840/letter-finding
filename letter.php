<?php


if(isset($_GET['count'])){
    $string = $_GET['count'];


foreach (count_chars($string, 1) as $i => $val) {
    if (chr($i) == "b") {
    echo "There were '$val' instance(s) of b in the string." . "<br>";
    }
}

}