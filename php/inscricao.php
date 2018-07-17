<?php

# File upload configuration

$pdfsent = false;
$validpdf = false;
$errpdf = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_FILES["pdfdocument"])) {
    $file = $_FILES["pdfdocument"];
    $pdfsent = true;
    $pdf_path = "pdf/";
    $pdf_name = "test.pdf";
    $extension = pathinfo(strtolower(basename($file['name'])), PATHINFO_EXTENSION);
    $validpdfname = true;
    if (file_exists($pdf_path . $pdf_name)) $validpdfname = false;
    $validpdfsize = false;
    if ($file["size"] < 5000000) $validpdfsize = true;
    $validpdfextension = false;
    if ($extension == "pdf") $validpdfextension = true;
    if ($validpdfname and $validpdfextension and $validpdfsize) $validpdf = true;
}

# Validation Variables

$status = "GET";

$firstname = "";
$validfirstname = false;
$errfirstname = "";

$secondname = "";
$validsecondname = false;
$errsecondname = "";

$rg = "";
$validrg = false;
$errrg = "";

$cpf = "";
$validcpf = false;
$errcpf = "";

$cep = "";
$validcep = false;
$errcep = "";

$street = "";
$validstreet = false;
$errstreet = "";

$street2 = "";

$number = "";

$area = "";
$validarea = false;
$errarea = "";


$city = "";
$validcity = false;
$errcity = "";

$state = "AC";
$validstate = true;

$email = "";
$validemail= false;
$erremail = "";

$emailverify = "";
$validemailverify = false;
$erremailverify = "";

$ddd1 = "";
$validddd1 = false;
$errddd1 = "";

$phone1 = "";
$validphone1= false;
$errphone1 = "";

$ddd2 = "";
$validddd2 = false;
$errddd2 = "";

$phone2 = "";
$validphone2= false;
$errphone2 = "";

$role = "";
$validrole = false;
$errrole = "";

$degree = "";
$validdegree = false;
$errdegree = "";

function validate_input($data) {
    $data = trim($data);
    # $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function printVar($name,$value) {
    return "<p>" . $name . ":" . validate_input($value) . "</p>";
}

function verifycpf($cpf) {
    if(strlen($cpf) == 11 and
    $cpf != '00000000000' and
    $cpf != '11111111111' and
    $cpf != '22222222222' and
    $cpf != '33333333333' and
    $cpf != '44444444444' and
    $cpf != '55555555555' and
    $cpf != '66666666666' and
    $cpf != '77777777777' and
    $cpf != '88888888888' and
    $cpf != '99999999999') {
        $d1 = 0;
        for ($i=8; $i >= 0; $i--) {
            $d1 += $cpf{$i} * ($i + 1);
        }
        $d1 = ($d1 % 11) % 10;
        $d2 = 0;
        for ($i=8; $i >= 0; $i--) {
            $d2 += $cpf{$i} * ($i);
        }
        $d2 = (($d2 + ($d1 * 9)) % 11) % 10;
        if ($cpf{9} == $d1 and $cpf{10} == $d2) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $status = "POST";
    $firstname = validate_input($_POST["firstname"]);
    if(is_string($firstname) and $firstname != "") {
        $validfirstname = true;
    } else {
        $errfirstname = "Primeiro nome em branco.";
    }
    $secondname = validate_input($_POST["secondname"]);
    if(is_string($secondname) and $secondname != "") {
        $validsecondname = true;
    } else {
        $errsecondname = "Segundo nome em branco.";
    }
    $rg = validate_input($_POST["rg"]);
    if(is_string($rg) and $rg != "") {
        $validrg = true;
    } else {
        $errrg = "RG inválido.";
    }
    $cpf = validate_input($_POST["cpf"]);
    if(is_string($cpf) and $cpf != "" and !(preg_match("/[^0123456789]/", $cpf)) and verifycpf($cpf)) {
        $validcpf = true;
    } else {
        $errcpf = "CPF inválido.";
    }
    $cep = validate_input($_POST["cep"]);
    if(is_string($cep) and $cep != "" and !(preg_match("/[^0123456789]/", $cep)) and strlen($cep) == 8) {
        $validcep = true;
    } else {
        $errcep = "CEP inválido.";
    }
    $street = validate_input($_POST["street"]);
    if(is_string($street) and $street != "") {
        $validstreet = true;
    } else {
        $errstreet = "Logradouro em branco.";
    }
    $number = validate_input($_POST["number"]);
    $street2 = validate_input($_POST["street2"]);
    $area = validate_input($_POST["area"]);
    if(is_string($area) and $area != "") {
        $validarea = true;
    } else {
        $errarea = "Bairro em branco.";
    }
    $city = validate_input($_POST["city"]);
    if(is_string($city) and $city != "") {
        $validcity = true;
    } else {
        $errcity = "Cidade em branco.";
    }
    $statecode = validate_input($_POST["state"]);
    if(is_string($statecode) and $statecode != "") {
        switch ($statecode) {
            case "AC" :
                $state = "AC";
                break;
            case "AL" :
                $state = "AL";
                break;
            case "AP" :
                $state = "AP";
                break;
            case "AM" :
                $state = "AM";
                break;
            case "BA" :
                $state = "BA";
                break;
            case "CE" :
                $state = "CE";
                break;
            case "DF" :
                $state = "DF";
                break;
            case "ES" :
                $state = "ES";
                break;
            case "GO" :
                $state = "GO";
                break;
            case "MA" :
                $state = "MA";
                break;
            case "MT" :
                $state = "MT";
                break;
            case "MS" :
                $state = "MS";
                break;
            case "MG" :
                $state = "MG";
                break;
            case "PA" :
                $state = "PA";
                break;
            case "PB" :
                $state = "PB";
                break;
            case "PR" :
                $state = "PR";
                break;
            case "PE" :
                $state = "PE";
                break;
            case "PI" :
                $state = "PI";
                break;
            case "RJ" :
                $state = "RJ";
                break;
            case "RN" :
                $state = "RN";
                break;
            case "RS" :
                $state = "RS";
                break;
            case "RO" :
                $state = "RO";
                break;
            case "RR" :
                $state = "RR";
                break;
            case "SC" :
                $state = "SC";
                break;
            case "SP" :
                $state = "SP";
                break;
            case "SE" :
                $state = "SE";
                break;
            case "TO" :
                $state = "TO";
                break;
            default:
                $state = "AC";
                break;
        }
    }
    $email = validate_input($_POST["email"]);
    if(is_string($email) and $email != "" and filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validemail = true;
    } else {
        $erremail = "E-mail inválido.";
    }
    $emailverify = validate_input($_POST["emailverify"]);
    if(is_string($emailverify) and $emailverify == $email) {
        $validemailverify = true;
    } else {
        $erremailverify = "E-mails não coincidem.";
    }
    $ddd1 = validate_input($_POST["ddd1"]);
    if(is_string($ddd1) and $ddd1 != "" and !(preg_match("/[^0123456789]/", $ddd1)) and strlen($ddd1) == 2) {
        $validddd1 = true;
    } else {
        $errddd1 = "DDD inválido.";
    }
    $phone1 = validate_input($_POST["phone1"]);
    if(is_string($phone1) and $phone1 != "" and !(preg_match("/[^0123456789]/", $phone1)) and (strlen($phone1) == 8 or strlen($phone1) == 9)) {
        $validphone1 = true;
    } else {
        $errphone1 = "Telefone inválido.";
    }
    $ddd2 = validate_input($_POST["ddd2"]);
    if((is_string($ddd2) and $ddd2 != "" and !(preg_match("/[^0123456789]/", $ddd2)) and strlen($ddd2) == 2) or strlen($ddd2) == 0) {
        $validddd2 = true;
    } else {
        $errddd2 = "DDD inválido.";
    }
    $phone2 = validate_input($_POST["phone2"]);
    if((is_string($phone2) and $phone2 != "" and !(preg_match("/[^0123456789]/", $phone2)) and (strlen($phone2) == 8 or strlen($phone2) == 9)) or strlen($phone2) == 0) {
        $validphone2 = true;
    } else {
        $errphone2 = "Telefone inválido.";
    }
    $role = validate_input($_POST["role"]);
    if(is_string($role) and $role != "") {
        $validrole = true;
    } else {
        $errrole = "Cargo nome em branco.";
    }
    $degree = validate_input($_POST["degree"]);
    if(is_string($degree) and $degree != "") {
        $validdegree = true;
    } else {
        $errdegree = "Formação em branco.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="inscricao.css"/>
    <title>Inscrição</title>
</head>
<body>
<?php
echo $status;
?>
<form method="post" action="inscricao.php" enctype="multipart/form-data">
    <h1>Inscrição</h1>
    <p class="error">* campo obrigatório</p>
    <h2>Dados do responsável</h2>
    <p>Primeiro nome (ex: João):</p>
    <input type="text" name="firstname" value="<?php echo $firstname;?>"/>
    <p class="error">* <?php echo $errfirstname; ?></p>
    <p>Segundo nome (ex: Silveira Silva):</p>
    <input type="text" name="secondname" value="<?php echo $secondname;?>"/>
    <p class="error">* <?php echo $errsecondname; ?></p>
    <p>RG ou RNE (ex: 00.000.000-0):</p>
    <input type="text" name="rg" value="<?php echo $rg?>"/>
    <p class="error">* <?php echo $errrg; ?></p>
    <p>CPF (somente números):</p>
    <input type="text" name="cpf" value="<?php echo $cpf?>"/>
    <p class="error">* <?php echo $errcpf; ?></p>
    <h3>Endereço:</h3>
    <p>CEP (somente números):</p>
    <input type="text" name="cep" value="<?php echo $cep?>"/>
    <p class="error">* <?php echo $errcep; ?></p>
    <p>Logradouro:</p>
    <input type="text" name="street" value="<?php echo $street?>"/>
    <p class="error">* <?php echo $errstreet; ?></p>
    <p>Número:</p>
    <input type="text" name="number" value="<?php echo $number?>"/>
    <p class="error"></p>
    <p>Complemento:</p>
    <input type="text" name="street2" value="<?php echo $street2?>"/>
    <p class="error"></p>
    <p>Bairro:</p>
    <input type="text" name="area" value="<?php echo $area?>"/>
    <p class="error">* <?php echo $errarea; ?></p>
    <p>Cidade:</p>
    <input type="text" name="city" value="<?php echo $city?>"/>
    <p class="error">* <?php echo $errcity; ?></p>
    <p>Estado:</p>
    <select name="state">
        <option value="AC" <?php if($state == "AC") echo "selected"; ?>>AC</option>
        <option value="AL" <?php if($state == "AL") echo "selected"; ?>>AL</option>
        <option value="AP" <?php if($state == "AP") echo "selected"; ?>>AP</option>
        <option value="AM" <?php if($state == "AM") echo "selected"; ?>>AM</option>
        <option value="BA" <?php if($state == "BA") echo "selected"; ?>>BA</option>
        <option value="CE" <?php if($state == "CE") echo "selected"; ?>>CE</option>
        <option value="DF" <?php if($state == "DF") echo "selected"; ?>>DF</option>
        <option value="ES" <?php if($state == "ES") echo "selected"; ?>>ES</option>
        <option value="GO" <?php if($state == "GO") echo "selected"; ?>>GO</option>
        <option value="MA" <?php if($state == "MA") echo "selected"; ?>>MA</option>
        <option value="MT" <?php if($state == "MT") echo "selected"; ?>>MT</option>
        <option value="MS" <?php if($state == "MS") echo "selected"; ?>>MS</option>
        <option value="MG" <?php if($state == "MG") echo "selected"; ?>>MG</option>
        <option value="PA" <?php if($state == "PA") echo "selected"; ?>>PA</option>
        <option value="PB" <?php if($state == "PB") echo "selected"; ?>>PB</option>
        <option value="PR" <?php if($state == "PR") echo "selected"; ?>>PR</option>
        <option value="PE" <?php if($state == "PE") echo "selected"; ?>>PE</option>
        <option value="PI" <?php if($state == "PI") echo "selected"; ?>>PI</option>
        <option value="RJ" <?php if($state == "RJ") echo "selected"; ?>>RJ</option>
        <option value="RN" <?php if($state == "RN") echo "selected"; ?>>RN</option>
        <option value="RS" <?php if($state == "RS") echo "selected"; ?>>RS</option>
        <option value="RO" <?php if($state == "RO") echo "selected"; ?>>RO</option>
        <option value="RR" <?php if($state == "RR") echo "selected"; ?>>RR</option>
        <option value="SC" <?php if($state == "SC") echo "selected"; ?>>SC</option>
        <option value="SP" <?php if($state == "SP") echo "selected"; ?>>SP</option>
        <option value="SE" <?php if($state == "SE") echo "selected"; ?>>SE</option>
        <option value="TO" <?php if($state == "TO") echo "selected"; ?>>TO</option>
    </select>
    <p class="error">*</p>
    <h3>Contato:</h3>
    <p>E-mail:</p>
    <input type="text" name="email" value="<?php echo $email;?>"/>
    <p class="error">* <?php echo $erremail;?></p>
    <p>Repetir e-mail:</p>
    <input type="text" name="emailverify"  value="<?php echo $emailverify;?>"/>
    <p class="error">* <?php echo $erremailverify;?></p>
    <p>Telefone principal (Apenas números):</p>
    (0<input type="text" class="ddd" name="ddd1" value="<?php echo $ddd1;?>"/>)
    <input type="text" name="phone1"  value="<?php echo $phone1;?>"/>
    <p class="error">* <?php echo $errddd1 . $errphone1;?></p>
    <p>Telefone secundário  (Apenas números):</p>
    (0<input type="text" class="ddd" name="ddd2" value="<?php echo $ddd2;?>"/>)
    <input type="text" name="phone2" value="<?php echo $phone2;?>"/>
    <p class="error"><?php echo $errddd2 . $errphone2;?></p>
    <p>Cargo:</p>
    <input type="text" name="role" value="<?php echo $role;?>"/>
    <p class="error">* <?php echo $errrole;?></p>
    <p>Formação Acadêmica:</p>
    <input type="text" name="degree" value="<?php echo $degree;?>"/>
    <p class="error">* <?php echo $errdegree;?></p>
    <h3>Comprovante de Docência</h3>
    <p>Documento no formato PDF com tamanho máximo de 5MB</p>
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
    <input type="file" name="pdfdocument"/>
    <p class="error"></p>
    <h2>Dados da Instituição</h2>
    <p>Nome da instituição:</p>
    <input type="text" name="institution"/>
    <p class="error"></p>
    <p>Unidade administrativa:</p>
    <input type="text" name="unity"/>
    <p class="error"></p>
    <h2>Dados do Projeto</h2>
    <p>Categoria do projeto:</p>
    <select name="category">
        <option value="EI">Educação Infantil</option>
        <option value="EFI">Educação Fundamental I</option>
        <option value="EFII">Educação Fundamental II</option>
        <option value="EM">Ensino Médio</option>
        <option value="EJA">Educação de Jovens e Adultos</option>
        <option value="ES">Ensino Superior</option>
        <option value="XA">Xadrez</option>
        <option value="HI">Hipnoterapia</option>
    </select>
    <p class="error"></p>
    <p>Tema do projeto:</p>
    <input type="text" name="theme"/>
    <p class="error"></p>
    <p>Título da iniciativa:</p>
    <input type="text" name="title"/>
    <p class="error"></p>
    <p>Data da implatação:</p>
    <span class="observation">A iniciativa deve ter no máximo 1 (um) ano de implantação, estar em implantação.</span><br/>
    <input type="date" name="date"/>
    <p class="error"></p>
    <p>Link do video ou reportagem sobre o projeto:</p>
    <input type="text" name="video"/>
    <p class="error"></p>
    <h3>Resumo da Iniciativa:</h3>
    <span class="observation">Resumo da iniciativa com no máximo 250 palavras em parágrafo único e citando a criatividade e inovação visadas pela iniciativa.</span><br/>
    <textarea id="summary" type="text" name="summary" rows="25" cols="60" onkeyup="wordcount();"></textarea><br/>
    <span id="count"></span>
    <p class="error"></p>
    <p>Integrantes da equipe de desenvolvimento da iniciativa (caso haja)</p>
    <input type="hidden" name="memberscounter" id="memberscounter" value="1"/>
    <div class="members" id="members">
    </div>
    <button type="button" onclick="addmember();">Adicionar integrante</button>
    <p>Parceiros da iniciativa (caso haja)</p>
    <span class="observation">Órgãos, instituições e/ou entidades parceiras no desenvolvimento da iniciativa.</span><br/>
    <input type="hidden" name="partnerscounter" id="partnerscounter" value="1"/>
    <div class="partners" id="partners">
    </div>
    <button type="button" onclick="addpartner();">Adicionar parceiro</button>
    <p>Ao marcar a caixa a seguir, afirmo que li a Portaria que dispõe sobre o Concurso Cultural Prêmio Instituto Criativo de Educação, Criatividade e Inovação, a que estabelece procedimentos para as inscrições e apresentação dos trabalhos no Concurso Cultural Prêmio de Educação, Criatividade e Inovação – 2018 e todas as instruções para o preenchimento da Ficha de Inscrição e do Relato da Iniciativa. Estou ciente das regras estabelecidas e sou inteiramente responsável pelas informações prestadas.
    <input type="checkbox" name="agree" value="1"/></p>
    <input type="submit" value="Finalizar inscrição"/>
</form>
<script>
const wordcount = () => {
    const text = document.querySelector("#summary");
    const count = document.querySelector("#count");
    count.innerText = text.value.replace(/[^A-Z0-9ãõçâêôáéíóúàü\-]/ig, " ").trim().split(/\s+/).length;
};
const addmember = (Name, Role, CPF) => {
    Name = (Name)?String(Name):String();
    Role = (Role)?String(Role):String();
    CPF = (CPF)?String(CPF):String();
    const field = document.querySelector("#members");
    const counter = document.querySelector("#memberscounter");
    const n = Number(counter.value);
    counter.value = String(n + 1);
    field.innerHTML = field.innerHTML + `<p>Nome</p><input type="text" name="member${n}" value="${Name}"/><p>Cargo</p><input type="text" name="memberRole${n}" value="${Role}"/><p>CPF</p><input type="text" name="memberCPF${n}" value="${CPF}"/>`;
};
const addpartner = (Name) => {
    Name = (Name)?String(Name):String();
    const field = document.querySelector("#partners");
    const counter = document.querySelector("#partnerscounter");
    const n = Number(counter.value);
    counter.value = String(n + 1);
    field.innerHTML = field.innerHTML + `<p>Nome</p><input type="text" name="partner${n}" value="${Name}"/>`;
};
</script>
</body>
</html>