<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php
exec("grep  -E " . escapeshellcmd($_GET['pattern'])." contentFile", $output);
echo "&ltpre>";
echo "Result from query on messages\n";
print_r($output);
echo "&lt/pre>";
?>
 </body>
</html>
