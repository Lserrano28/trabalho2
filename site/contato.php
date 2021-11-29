<?php
    if(isset($_POST['submit'])){
        // print_r('nome: ' . $_POST['nome']);
        // print_r('<br>']);
        // print_r('sexo: ' . $_POST['sexo']);
        // print_r('<br>']);
        // print_r('email: ' . $_POST['email']);
        // print_r('<br>']);
        // print_r('escolha: ' . $_POST['escolha']);
        // print_r('<br>']);
        // print_r('peso: ' . $_POST['peso']);
        // print_r('<br>']);
        // print_r('altura: ' . $_POST['altura']);
        // print_r('<br>']);
        // print_r('tamanho pé: ' . $_POST['tamanhope']);
        // print_r('<br>']);
        // print_r('conte: ' . $_POST['conte']);
        // print_r('<br>']);
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $email = $_POST['email'];
        $escolha = $_POST['escolha'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $tamanhope = $_POST['tamanhope'];
        $conte = $_POST['conte'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sexo,email,escolha,peso,altura,tamanhope,conte) VALUES ($nome,$sexo,$email,$escolha,$peso,$altura,$tamanhope,$conte)")

    }
    ?>
    


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>css bg</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="scripts.js"></script>
</head>
<body>
    <div id="mainmenu">
        <img src="img/logo.png" alt="" class="logo">
        <nav class="menu">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="index.html">Sobre</a></li>
                <li><a href="portifolio.html">Portifolio</a></li>
                <li><a href="contato.php">Contato</a></li>
                
            </ul>
        </nav>
        <nav  class="socialmenu">
                <a class="btn" href="#" >
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn" href="#" >
                    <i class="fab fa-instagram"></i>
                </a>
        </nav>
    </div>
    <main>
        <h1 id="contatoh1">Contato</h1>
    <div id="contato">
        <form action="contato.php" method="POST" class="infoPranchas">
        <table border="0" aria-describedby="precos">
            <tr>
                <th colspan="2" id="nome">Informações para fabricação de prancha</th>
            </tr>
    
            <tr>
                <td id="nome">
                    <label for="name">Digite seu nome: </label>
                    <input type="text" name="nome" id="name" required class="form-element-field">
                </td>
                <td id="codigo">
                    <label for="sexo">Sexo: </label>
                    <input type="radio" name="sexo" id="masc" required>
                    <label for="masc">Masculino </label>
                    <input type="radio" name="sexo" id="femi" required>
                    <label for="femi">Feminino </label>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="email">Digite seu email: </label>
                    <input type="email" name="email" id="email" required class="form-element-field">
                </td>
                <td>
                    <label for="escolha">Escolha o tipo de prancha: </label>
                    <input list="escolhaPrancha"  id="escolha" name="escolha" class="form-element-field">

                    <datalist id="escolhaPrancha">
                        <option value="fish">
                        <option value="long">
                        <option value="pranchinha">
                
                    </datalist>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="peso">Digite seu Peso: </label>
                    <input type="text" name="peso" id="peso" required class="form-element-field">
                </td>
                <td>
                    <label for="altura">Digite seu altura: </label>
                    <input type="text" name="altura" id="altura" required class="form-element-field">
                </td>
        
            </tr>

            <tr>
                <td>
                    <label for="tamanhope">Digite seu tamanho do seu pé: </label>
                    <input type="text" name="tamanhope" id="tamanhope" required class="form-element-field">
                </td>
                <td>
                    <label for="conte">Detalhes: </label>
                    <textarea id="conte" name="conte" row="2" cols="20" class="form-element-field"></textarea>
                </td>
        
            </tr>
        </table>
<tfoot> <input type="submit" value="Enviar"></tfoot>
</div>
</body>


<footer class="site-footer">
        <p>todos os direitos não reservados :p - Desenvolvido por Leandro Serrano</p>
    </footer>
</table>