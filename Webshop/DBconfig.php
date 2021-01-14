<?php

 DEFINE("USER","root");
 DEFINE("USER", "");
try {
    $verbinding = new
    PDO('mysql:host=localhost;dbname=webshop',USER,PASSWORD);
    $verbinding->collator_set_attribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXECPTION );
}catch(PDOException $e) {
    echo $e->getMessage();
    echo "kon geen verbinding maken.";
}

?>