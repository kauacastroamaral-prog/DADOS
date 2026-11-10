<?php





//194.61.238.119  novo ip
// host = localhost ou ip da vps
$host ='localhost';
$db ='kaua755';
$user ='kaua755';
$pass ='755!@#';
$charset ='utf8mb4';

try{
     
    $pdo =new PDO("mysql:host=$host; dbname=$db; charset=$charset",
    $user,
    $pass
);


$pdo -> setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION

);

echo"Conectado com sucesso!";

} catch (PDOException $e) {

    echo "Erro ao conectar ao banco de dados.\n";
    echo  $e->getMessage();

}







?>