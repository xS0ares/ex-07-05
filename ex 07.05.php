<?php
$semestre = $_POST["mes"];
$trimestre = $_POST["mes"];

echo"QUESTÃO 1 e 2<br>";
if($semestre <= 6 and $semestre >=1){
    echo "Você digitou o número $semestre e este corresponde a um mês do 1° semestre do ano!<br>";
}
elseif($semestre <=12 and $semestre >=7){
	echo "Você digitou o número $semestre e este corresponde a um mês do 2° semestre do ano!<br>";
}

else{
echo"Erro encontrado, não existe mês com este número!<br><br><br>";}
//FIM DA QUESTÃO 1

if($trimestre <=3 and $trimestre >=1){
	echo "Você digitou o número $trimestre e este corresponde a um mês do 1° trimestre do ano!<br><br><br>";
}

elseif($trimestre <=6 and $trimestre >=4){
	echo "Você digitou o número $trimestre e este corresponde a um mês do 2° trimestre do ano!<br><br><br>";
}

elseif($trimestre <=9 and $trimestre >=7){
	echo "Você digitou o número $trimestre e este corresponde a um mês do 3° trimestre do ano!<br><br><br>";
}

elseif($trimestre <=12 and $trimestre >=10){
	echo "Você digitou o número $trimestre e este corresponde a um mês do 4° trimestre do ano!<br><br><br>";
}

else{
echo"Erro encontrado, não existe mês com este número!<br><br><br>";}
//FIM DA QUESTÃO 2

echo"QUESTÃO 3<br>";
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$nome = $_POST["nome"];	

if($sexo == "feminino" && $idade <=25){
	echo"$nome, VOCÊ FOI ACEITA.<br>";
}
else{
	echo"$nome, TENTE NOVAMENTE NA PRÓXIMA<br><br><br>";}
	//FIM DA QUESTÃO 3

echo"QUESTÃO 4<br>";
if($_POST["numero"]){	

$num = $_POST["numero"];

    if($num %2 == 0){
        echo"o número $num é par";
    }else{
		echo "O número $num é impar";
	}
}	

?>