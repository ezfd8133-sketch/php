<?php
    $loop=array(

    array("London","Britan"),
    array("Paris","France"),
    array("Texas", "Usa"),
    array("LA", "Usa")
    );
        //foreach
       foreach($loop as $loops){
            foreach($loops as $loopa){
            echo "$loopa <br>";
            echo "<br>";
            }
        
    }
    //for loop
    $ditet=["Hane","Marte","Merkur","Ejte","Premte","Shtune","Dielle"];


    for($i=0;$i<count($ditet);$i++){
        echo $ditet[$i];
        echo "<hr>";
    }

    // w -> Create one if no exists
    //r+ -> read and write
    //a+ -> append
    $my_file=fopen("ds.txt","a+");
    // $all_text=fread($my_file,100);
    // $my_text=$all_text."\n Kujdes me karrige! \n";
    
    for($i=1;$i<101;$i++){
    fwrite($my_file,"\n TEST TEST TEST 1 $i\n");
    }
    fclose($my_file);
?>