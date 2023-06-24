<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = $_POST['arr'];
    $arr = explode(' ', $string);
    sort($arr);
    $minSum = array_sum(array_slice($arr,0,4));
    $maxSum = array_sum(array_slice($arr,1,5));
    header('Location: index.php?min=' . $minSum . '&max=' . $maxSum);
}
?>