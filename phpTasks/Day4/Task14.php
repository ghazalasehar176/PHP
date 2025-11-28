<!-- Alphanumeric Code Analyzer -->

<form method="post">
    <input type="text" name="inputText" placeholder="Enter your string " class="mb-2">
    <button name="btn_check" class="btn btn-dark">Analyze</button>
</form>
<?php
if(isset($_POST['btn_check'])){
    $text = $_POST["inputText"];

    $totalLetter = 0;
    $upper = 0;
    $lower = 0;
    $digit = 0;
    $special = 0;

    for($i =0; $i<strlen($text); $i++){
        $char = $text[$i];

        if(ctype_alpha($char)){
            $totalLetter++;

            if(ctype_upper($char)){
                $upper++;
            }
            else{
                $lower++;
            }

        }else if(ctype_digit($char)){
            $digit++;
        }
        else{
            $special++;
        }
    }


    echo "Total letter is: ".$totalLetter."\n";
    echo "upper letter is: ".$upper."\n";
    echo "lower letter is: ".$lower."\n";
    echo "digit letter is: ".$digit."\n";
    echo "special letter is: ".$special."\n";
}
?>