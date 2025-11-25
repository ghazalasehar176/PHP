<?php 
$person = ["biya" =>21 ,
            "zara" => 17,
            "sara" => 29 ,
            "kashaf" => 31,
            "ali" => 10];

foreach($person as $key => $value){
  ?>   <ul>
             <li><?php echo "Name is: ".$key.", Age is: ".$value?></li>           
    </ul>
     <?php
}
?>
