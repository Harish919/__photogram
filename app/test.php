<pre>
<?php

print("_SERVER \n");
print_r($_SERVER);

print("_GET \n");
print_r($_GET);

print("_POST \n");
print_r($_POST);

print("FILES");
print_r($_FILES);

print("COOKIE");
print_r($_COOKIE);

echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";    
echo $_SERVER["PHP_SELF"];

?>
</pre>



