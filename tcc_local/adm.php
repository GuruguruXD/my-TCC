<?php
    include_once('config.php');
    $sql = "SELECT * FROM menu ORDER BY id DESC";

    $result = $conexao->query($sql);


?>





<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="adm.css">

    <style>
        
        .pagina{
            right: 37%;
            bottom: 31%;
            position: relative;
        }

        h1 {
            margin: 0;
            padding: 10px;
        }
        .pagina h1::after{
            content:'';
            display: block;
            width: 5rem;
            height: 0.3rem;
            background-color: #5568FE;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
            
            
        }
        
        table{
            border-radius: 15px 15px 0 0 ;
            border-collapse: collapse;
            text-align: center;
            width: 1500px;
            height: 100px;
            position: absolute;
            color: #CBD0F7;
            background-color: #181920;
            right: 9%;
            bottom: 100px;
            top: 28vh;
            
            
        }
        th, td {
            
            border-bottom: 1px solid;
            padding: 5px;
            text-align: center;
        }
        
        

        
    </style>


</head>
<body>
    <nav>
        <div></div>
        <img src="https://private-user-images.githubusercontent.com/131190860/238470389-f4bfff2d-7812-4c93-8c36-3c90fcab6cff.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJrZXkiOiJrZXkxIiwiZXhwIjoxNjg4NTA3NDE2LCJuYmYiOjE2ODg1MDcxMTYsInBhdGgiOiIvMTMxMTkwODYwLzIzODQ3MDM4OS1mNGJmZmYyZC03ODEyLTRjOTMtOGMzNi0zYzkwZmNhYjZjZmYucG5nP1gtQW16LUFsZ29yaXRobT1BV1M0LUhNQUMtU0hBMjU2JlgtQW16LUNyZWRlbnRpYWw9QUtJQUlXTkpZQVg0Q1NWRUg1M0ElMkYyMDIzMDcwNCUyRnVzLWVhc3QtMSUyRnMzJTJGYXdzNF9yZXF1ZXN0JlgtQW16LURhdGU9MjAyMzA3MDRUMjE0NTE2WiZYLUFtei1FeHBpcmVzPTMwMCZYLUFtei1TaWduYXR1cmU9NGEyYzQyNjYwMWZjNWFlY2FiNDRiMGQ2YjY1Y2Q2OGYzZjA2YmMxN2E1ZjZlYzcxZTM5ZGNlNjE4ZDkxOGZmOSZYLUFtei1TaWduZWRIZWFkZXJzPWhvc3QmYWN0b3JfaWQ9MCZrZXlfaWQ9MCZyZXBvX2lkPTAifQ.zymJ8pqY3kgohjAeJtJB0Dift0OtH8f7IRXxEhfvPK8">
    

        <ul id="botoesMenu">
            <a href="#Perfil">
            <li>
                <p>Perfil</p>
            </li>
        </a>
        
        <a href="mensagens">
            <li>
                <p>Mensagens Enviadas</p>
            </li>
        </a>
        <a href="#sair">
            <li>
                <p>Sair</p>
            </li>
        </a>
        </ul>
    </nav>
    <div class="pagina">
        <h1>Menssagens</h1>
    </div>
   
    <div class="geral">
        <table class="table">

            <thead>
                <tr>
                    <th>#</th>      
                    <th>email</th>
                    <th>destinatario</th>
                    <th>assunto</th>
                    <th>mensaguem</th>
                    <th>prioridade</th>
                    <th>arquivo anexo</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['destinatario']."</td>";
                        echo "<td>".$user_data['assunto']."</td>";
                        echo "<td>".$user_data['mensaguem']."</td>";
                        echo "<td>".$user_data['prioridade']."</td>";
                        echo "<td>".$user_data['arquivo']."</td>";
                        echo "</tr>";
                    }
                                    
                
                
                ?>


            </tbody>

        </table>
    </div>
   
    
</body>
</html>