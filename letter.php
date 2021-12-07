<?php

if(isset($_GET["word"])){ //asking does this exist

  /*  $countBs=0;
    for($i=0;$i<strlen($_GET["word"]);$i++){
        if($_GET["word"][$i]== 'b'){
            $countBs++;
        }
    }
    print $countBs;
    */
    
    print substr_count($_GET["word"], "b");
}

?>