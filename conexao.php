<?php
// CONEXAO COM O BANCO DE DADOS E ARMAZENAMENTO DAS VARIAVES
$link = mysqli_connect("localhost", "root", "", "mensagem");

if (!$link) {
echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
echo "Debugging errno: " . PHP_EOL;
echo "Debugging error: " . PHP_EOL;
exit;
}

if(!empty($_POST['enviar'])) {
$nome = $_POST['nome'];
$email = $_POST['email'];
$serie = $_POST['serie'];
$mensagem = $_POST['mensagem'];

$query = "INSERT INTO formulario (nome, email, serie, mensagem) VALUES ('$nome', '$email', '$serie', '$mensagem')";

$result = mysqli_query($link, $query);

echo "Obrigado por respoder nosso formulario!<br> Agradecemos a atenção.";

}

?>
