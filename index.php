<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        body{
            padding-left: 25rem;
        }
        .boto{
            margin-left: 15rem;
        }
        .box{
    background: #708090;
    border-radius: 10px;
    height: 42rem;
    margin: 2rem 2rem 0;
    width: 40rem;
    text-align: justify;
    font-size: 25px;
    padding: 1rem;
    }
    @media print{
        body {
            padding: 0;
        }
        .botoes{
            visibility: hidden;
        }
        .box{
            margin: 0;
        }
    }
    </style>
    <div class="box">
<form method="POST">	
Nome:
<input type="text" name="nome">
<br>
<br>
Caracteristica:
<input type="text" name="carac">
<br>
<br>
Carne:
<input type="number" name="carne">
<br>
<br>
Frango:
<input type="number" name="frango">
<br>
<br>
Coração:
<input type="number" name="coracao">
<br>
<br>
Kafta
<input type="number" name="kafta">
<br>
<br>
Pão de alho
<input type ="number" name="pao">
<br>
<br>
Queijo
<input type ="number"  name="queijo">
<br>
</div>
<br>
<div class="botoes">
<button  class="btn btn-success boto">Cadastrar</button>
<button  class="btn btn-success" onclick="window. print()">Imprimir pagina</button>
</div>
</form>
<?php
if ($_POST) {
$nome=$_POST['nome'];
$email=$_POST['carac'];
$carne=$_POST['carne'];
$frango=$_POST['frango'];
$coracao=$_POST['coracao'];
$kafta=$_POST['kafta'];
$pao=$_POST['pao'];
$queijo=$_POST['queijo'];
$texto="Nome: ".$_POST['nome']."\r\n".
"Caracteristica: ".$_POST['carac']."\r\n".
"Carne: ".$_POST['carne']."\r\n"
."Frango: ".$_POST['frango']."\r\n"
."Coração: ".$_POST['coracao']."\r\n"
."Kafta: ".$_POST['kafta']."\r\n"
."Pão de alho: ".$_POST['pao']."\r\n"
."Queijos: ".$_POST['queijo']."\r\n"
."\r\n\r\n";
$arquivo = fopen("registro.txt", "a+");
fwrite($arquivo, $texto);
fclose($arquivo);
echo "<script>alert('Cadastrado com Sucesso!');</script>";
}
?>