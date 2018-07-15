<?php

$status = "GET";

function validate_input($data) {
    $data = trim($data);
    # $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $status = "POST";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscrição</title>
</head>
<body>
<?php
echo $status;
?>
<form method="post" action="inscricao.php" enctype="multipart/form-data">
    <h1>Inscrição</h1>
    <h2>Dados do responsável</h2>
    <p>Primeiro nome (ex: João):</p>
    <input type="text" name="firstname"/>
    <p class="error"></p>
    <p>Segundo nome (ex: Silveira Silva):</p>
    <input type="text" name="secondname"/>
    <p class="error"></p>
    <p>RG ou RNE (somente números, . ou -):</p>
    <input type="text" name="rg"/>
    <p class="error"></p>
    <p>CPF (somente números):</p>
    <input type="text" name="cpf"/>
    <p class="error"></p>
    <h3>Endereço:</h3>
    <p>Rua:</p>
    <input type="text" name="street"/>
    <p class="error"></p>
    <p>Número:</p>
    <input type="text" name="number"/>
    <p class="error"></p>
    <p>Complemento:</p>
    <input type="text" name="street2"/>
    <p class="error"></p>
    <p>Bairro:</p>
    <input type="text" name="area"/>
    <p class="error"></p>
    <p>Cidade:</p>
    <input type="text" name="city"/>
    <p class="error"></p>
    <p>Estado:</p>
    <input type="text" name="state"/>
    <p class="error"></p>
    <h3>Contato:</h3>
    <p>E-mail:</p>
    <input type="text" name="email"/>
    <p class="error"></p>
    <p>Repetir e-mail:</p>
    <input type="text" name="emailverify"/>
    <p class="error"></p>
    <p>Telefone principal:</p>
    <input type="text" name="ddd1"/>
    <input type="text" name="phone1"/>
    <p class="error"></p>
    <p>Telefone secundário:</p>
    <input type="text" name="ddd2"/>
    <input type="text" name="phone2"/>
    <p class="error"></p>
    <h3>Comprovante de Docência</h3>
    <p>Documento no formato PDF com tamanho máximo de 10MB</p>
    <input type="file" name="pdfdocument"/>
    <p class="error"></p>
    <h2>Dados do projeto</h2>
    <p>Categoria do projeto:</p>
    <select name="category">
        <option value="">Educação Infantil</option>
        <option value="">Educação Fundamental I</option>
        <option value="">Educação Fundamental II</option>
        <option value="">Ensino Médio</option>
        <option value="">Educação de Jovens e Adultos</option>
        <option value="">Xadrez</option>
        <option value="">Hipnoterapia</option>
    </select>
    <p class="error"></p>
    <p>Tema do projeto:</p>
    <input type="text" name="theme"/>
    <p class="error"></p>
    <p>Título da iniciativa:</p>
    <input type="text" name="title"/>
    <p class="error"></p>
    <p>Data da implatação:</p>
    <input type="date" name="date"/>
    <p class="error"></p>
    <p>Nome da instituição:</p>
    <input type="text" name="institution"/>
    <p class="error"></p>
    <p>Unidade administrativa:</p>
    <input type="text" name="unity"/>
    <p class="error"></p>
    <p>Link do video ou reportagem sobre o projeto:</p>
    <input type="text" name="video"/>
    <p class="error"></p>
    <p>Ao marcar a caixa a seguir, você concorda com todos os termos do regulmaneto do concurso: <input type="checkbox" name="agree" value="1"/></p>
    <input type="submit" value="Finalizar inscrição"/>
</form>
</body>
</html>