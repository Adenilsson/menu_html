<?php 
$status = 0;
try {
    $conexao = new PDO("mysql:host=localhost; dbname=crudsimples", "root", "");
    $status =1;
} catch (PDOException $erro) {
    $status =0
}
 echo "=================== ".$status;


//https://alexandrebbarbosa.wordpress.com/2016/09/04/php-pdo-crud-completo/