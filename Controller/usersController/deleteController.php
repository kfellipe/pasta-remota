<?php
session_start();

include_once "../Model/sales.php";
$idUser = $_POST['id-user'];
$prod->deleteProdByOwner($idUser);
$sales->deleteSaleByOwner($idUser);
$users->deleteUser($_SESSION['logado']);
unset($_SESSION['logado']);
$_SESSION['message'] = "Usuário excluido com sucesso!";
header("Location: ../");