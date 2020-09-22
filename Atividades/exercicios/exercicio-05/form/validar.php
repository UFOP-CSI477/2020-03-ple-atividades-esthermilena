<?php

    $name = $_POST['nome']; 
    $adress =  $_POST['endereco']; 
    $cpf = $_POST['cpf']; 
    $number = $_POST['contato']; 


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["nome"]);
            $adress = test_input($_POST["endereco"]);
            $cpf = test_input($_POST["cpf"]);
            $number = test_input($_POST["contato"]);
           
          }
          
          function test_input($data) {
            $data = trim($data);
            return $data;
        }

        echo "<h1>olá, $user!</h1>";
        echo "<p>Mora em: $adress</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Telefone: $number</p>";
        echo '<a href="index.php">Voltar</a>';