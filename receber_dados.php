<?php
# Back-end



if (isset($_POST['nome'])) {
    echo "\n<h1>Envio de dados método <em>POST</em> </h1>";
    echo "\n<pre>\n";
    print_r($_POST); #Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome:</strong>");
    print("$_POST[nome]");

    print("\n<br><strong>email:</strong>");
    print("$_POST[email]");


    print("\n<br><strong>senha:</strong>");
    print("$_POST[senha]");

    print("\n<br><strong>dataDeNascimento:</strong>");
    print("$_POST[data_de_nascimento]");
}
