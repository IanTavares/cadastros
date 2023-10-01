<?php

class db{

private $host = 'localhost';

private $usuarios = 'root';

private $senha = '';

private $database = 'cadastros';

public function conecta_mysql(){

    $con = mysqli_connect($this->host, $this->usuarios, $this->senha, $this->database);

    return $con;
}


}


?>