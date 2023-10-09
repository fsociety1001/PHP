<?php
// verifica conexão
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Conectado com sucesso!';
?>
