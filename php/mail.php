<html>
<body>
<?php
$to='sirmochi45@gmail.com';
$subject='Concurso Instituto Criativo';
$content='<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Premio de educação criativa e inovadora</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h3>Muito obrigado por sehjhajhj increver no Prêmio de Educação Criativa e Inovadora do Instituto Criativo</h3>
    <p>Registramos seu projeto em nosso sistema, agora é só aguardar o resultado!<br/>
    Seu número de matrícula do projeto é <strong>A3903</strong>.</p>
    <p>Para consultar sua inscrição, acesse <a href="http://institutocriativo.org.br/concurso">institutocriativo.org.br/concurso</a> e clique em consultar inscrição.<br/>
    É necessário apenas o CPF do responsável e o número de matrícula do projeto.</p>
    <p>Atenciosamente,<br/>
    Organização do Prêmio de Educação Criativa e Inovadora do Instituto Criativo</p>
    <p><a href="http://institutocriativo.org.br/">Instituto Criativo</a></p>
</body>
</html>';
$headers='From: <concurso2018@institutocriativo.org.br>' . "\r\n";
$headers.='Reply-To: <concurso2018@institutocriativo.org.br>' . "\r\n";
$headers.='X-Mailer: PHP/' . phpversion() ."\r\n";
$headers.= 'MIME-Version: 1.0' . "\r\n";
$headers.= 'Content-type: text/html; charset=utf-8 '. "\r\n";

if (mail($to, $subject, $content, $headers)) {
    echo "mail sent";
} else {
    echo "error sending mail";
}
?>
</body>
</html>