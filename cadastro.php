<?php

$nomeCompleto = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$urlFacebook = $_POST['urlFacebook'];
$urlImagem = $_POST['urlImagem'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

list($ano, $mes, $dia) = explode('-', $data);

$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 64) / 25) / 365.25);

echo "Nome Completo:<strong style='color:purple;'>$nomeCompleto</strong><br>";
echo "Email: $email <br>";
echo "Idade: $data = $idade Anos <br>";
echo "Facebook: <a href='$urlFacebook'>$urlImagem</a> <br>";
echo "Estado: $estado <br>";
echo "Cidade: $cidade <br>";
echo "<center><img src='$urlImagem' width='300px' height='300px''></center>";
#back-end

//verifica se o método get está enviando dados

if (isset($_POST['nome'])) {
    echo "\n<h1>Envio de dados método <em>POST</em></h1>";

    echo "\n<pre>\n";
    print_r($_POST); #Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome:</strong>\n");
    print("$_POST[nome]");

    print("\n<br><strong>E-mail:</strong>\n");
    print("$_POST[email]");

    print("\n<br><strong>urlFacebook:</strong>\n");
    print("$_POST[urlFacebook]");

    print("\n<br><strong>urlImagem:</strong>\n");
    print("$_POST[urlImagem]");

    print("\n<br><strong>Data:</strong>\n");
    print("$_POST[data_de_nascimento]");
}


