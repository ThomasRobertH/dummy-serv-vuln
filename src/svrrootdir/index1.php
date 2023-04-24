<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php
  $preamble ="grep -E".$_GET['pattern'];
  $preamble="grep 'bob' "; 
exec($preamble. "contentFile", $output);
echo "&ltpre>";
echo "Result from query on messages\n";
print_r($output);
echo "&lt/pre>";
?>
 </body>
</html>
