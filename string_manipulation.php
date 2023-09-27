<?php
function modifyText($text) {
    
    $textLower = strtolower($text);

    $textModified = str_replace("brown", "red", $textLower);

    echo $textModified;
}

$text = "The quick brown fox jumps over the lazy dog.";
modifyText($text);
?>
