<?php 
$function = $_POST["function"];

if ($function == "test") {
    test();
}
function test(){
    echo "Test";
}
?>