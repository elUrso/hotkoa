<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscrição</title>
</head>
<body>
<form method="POST" action="inscricao.php">
    <h1>Inscrição</h1>
    <h2>Dados do responsável</h2>
    <p>Primeiro nome (ex: João):</p>
    <input type="text" name="firstname" value="Pedrp"/>
    <p>Segundo nome (ex: Silveira Silva):</p>
    <input type="text" name="secondname"/>
    <p>RG ou RNE (somente números, . ou -):</p>
    <input type="text" name="rg"/>
    <p>CPF (somente números):</p>
    <input type="text" name="cpf"/>
    <h3>Endereço:</h3>
    <p>Rua:</p>
    <input type="text" name="street"/>
    <p>Número:</p>
    <input type="text" name="number"/>
    <p>Complemento:</p>
    <input type="text" name="street2"/>
    <p>Bairro:</p>
    <input type="text" name="area"/>
    <p>Cidade:</p>
    <input type="text" name="city"/>
    <p>Estado:</p>
    <input type="text" name="state"/>
    <h3>Contato:</h3>
    <p>E-mail:</p>
    <input type="text" name="email"/>
    <p>Repetir e-mail:</p>
    <input type="text" name="emailverify"/>
    <p>Telefone principal:</p>
    <input type="text" name="ddd1"/>
    <input type="text" name="phone1"/>
    <p>Telefone secundário:</p>
    <input type="text" name="ddd2"/>
    <input type="text" name="phone2"/>
    <h3>Comprovante de Docência</h3>
    <p>Documento no formato PDF com tamanho máximo de 10MB</p>
    <input type="file" name="pdfdocument"/>
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
    <p>Tema do projeto:</p>
    <input type="text" name="theme"/>
    <p>Título da iniciativa:</p>
    <input type="text" name="title"/>
    <p>Data da implatação:</p>
    <input type="date" name="date"/>
    <p>Nome da instituição:</p>
    <input type="text" name="institution"/>
    <p>Unidade administrativa:</p>
    <input type="text" name="unity"/>
    <p>Link do video ou reportagem sobre o projeto:</p>
    <input type="text" name="video"/>
    <p>Ao marcar a caixa a seguir, você concorda com todos os termos do regulmaneto do concurso: <input type="checkbox" name="agree" value="1"/></p>
    <input type="submit" value="Finalizar inscrição"/>
</form>
</body>
</html>