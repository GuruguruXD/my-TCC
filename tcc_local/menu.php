<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php');
        
    }

    $logado = $_SESSION['email'];
    
    

   
    
    if(isset($_POST['submit'])){
    
    $arquivo = $_FILES['arquivo'];

    $arquivoNovo = explode('.',$arquivo['name']);
    
    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg' && $arquivoNovo[sizeof($arquivoNovo)-1] != 'png'){
        move_uploaded_file($arquivo['tmp_name'],'arquivo/'.$arquivo['name']);
    }else{
        move_uploaded_file($arquivo['tmp_name'],'arquivo/'.$arquivo['name']);
    }
    $string = implode($arquivo);
    }




    if(isset($_POST['submit'])){
        



        include_once('config.php');

		$destinatario = $_POST['destinatario'];
		$assunto = $_POST['assunto'];
		$mensaguem = $_POST['mensaguem'];
		$prioridade = $_POST['prioridade'];
        $email = $_SESSION['email'];
		

		$result = mysqli_query($conexao,"INSERT INTO menu(destinatario,assunto,mensaguem,prioridade,arquivo,email) 
		VALUES('$destinatario','$assunto','$mensaguem','$prioridade','$string','$email')");
	}

?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="menu.css">
        <title>HELPIF</title>
        <style>
            .final input{
                width: 65%;
                margin-top: 2.5rem;
                border: none;
                background-color: #5568FE;
                border-radius: 5px;
                cursor: pointer;
                color: #CBD0F7;
                position: relative;
                left: 205px;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <nav>
                <div></div>
                <img src="https://private-user-images.githubusercontent.com/131190860/238470389-f4bfff2d-7812-4c93-8c36-3c90fcab6cff.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJrZXkiOiJrZXkxIiwiZXhwIjoxNjg4NTA3NDE2LCJuYmYiOjE2ODg1MDcxMTYsInBhdGgiOiIvMTMxMTkwODYwLzIzODQ3MDM4OS1mNGJmZmYyZC03ODEyLTRjOTMtOGMzNi0zYzkwZmNhYjZjZmYucG5nP1gtQW16LUFsZ29yaXRobT1BV1M0LUhNQUMtU0hBMjU2JlgtQW16LUNyZWRlbnRpYWw9QUtJQUlXTkpZQVg0Q1NWRUg1M0ElMkYyMDIzMDcwNCUyRnVzLWVhc3QtMSUyRnMzJTJGYXdzNF9yZXF1ZXN0JlgtQW16LURhdGU9MjAyMzA3MDRUMjE0NTE2WiZYLUFtei1FeHBpcmVzPTMwMCZYLUFtei1TaWduYXR1cmU9NGEyYzQyNjYwMWZjNWFlY2FiNDRiMGQ2YjY1Y2Q2OGYzZjA2YmMxN2E1ZjZlYzcxZTM5ZGNlNjE4ZDkxOGZmOSZYLUFtei1TaWduZWRIZWFkZXJzPWhvc3QmYWN0b3JfaWQ9MCZrZXlfaWQ9MCZyZXBvX2lkPTAifQ.zymJ8pqY3kgohjAeJtJB0Dift0OtH8f7IRXxEhfvPK8">
            
        
            <ul id="botoesMenu">
                
                <a href="mensagens">
                    <li>
                        <p>Mensagens Enviadas</p>
                    </li>
                </a>
                <a href="sair.php">
                    <li>
                        <p>Sair</p>
                    </li>
                </a>
            </ul>
        </nav>
        <section>
            <div class="form-header">
                <div class="title">
                    <h1>Mensagem</h1>
                </div>
                <div class="form">
                    <form action="menu.php" method="POST" enctype="multipart/form-data"> 
                        <div class="input-group">
                            <div class="input-box">
                            
                                <label>Destinatário</label>
                            
                                <select name="destinatario">
                                    
                                    <option value="opcao0">--Selecione o Destinatário--</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Reitoria">Reitoria</option>
                                    <option value="Diretor">Diretor</option>
                                    <option value="Diretor de Ensino">Diretor de Ensino</option>
                                    
                                </select>
                            </div>
                            
                            <div class="input-box">
                                
                                <label>Assunto</label>
                                
                                <select name="assunto">
                                    
                                    <option value="opcao0">--Selecione o Assunto--</option>
                                    <option value="Reclamação">Reclamação</option>
                                    <option value="Denúncia">Denúncia</option>
                                    <option value="Elogio">Elogio</option>
                                    
                                </select>
                            </div>                 
                            
                            <div class="input-box">
                                
                                <label for="descricao">Mensagem</label>
                                
                                <textarea name="mensaguem" id="message" cols="50" rows="4" placeholder="Sua Mensagem"></textarea>
                                
                            </div>
                            
                            <div class="input-box">
                                
                                <label >Prioridade</label>
                                
                                <select name="prioridade">
                                    <option value="opcao0">--Selecione a Prioridade--</option>
                                    <option value="Baixa">Baixa</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Alta">Alta</option>
                                    <option value="Urgente">Urgente</option>
                                </select>
                                
                                <div class="input-box">
                                
                                <label>Anexar Arquivo</label>
                                
                                <input class="arquivo" name="arquivo" type="file" />
                                 
                            </div>
                        </div>
                    </form>
                    <div class="final">
                        <input type="submit" name= "submit" value="Cadastrar Mensagem">
                    </div>
                    
                    
                </div>
            </div>
        </section>
    </body>
</html>