<?php
//comentário de uma linha
/*
O estudante Hudson do rocha
n1 = 7
n2 = 9
n3 = 6
onde a média = (n1+n2+n3)/3
se a média >= 7 
    ele foi aprovado
se a média >= 4 
    está no conselho
senão
    reprovada
*/

$student = "Hudson Rocha";
$n1 = 7;
$n2 = 7;
$n3 = 7;
$average = ($n1+$n2+$n3)/3;


if ($average >= 7){
    echo "O aluno $student ficou com a média igual a $average e foi aprovado";
}
elseif($average>=4){
    echo "O aluno $student ficou com a média igual a $average e foi para o conselho";
}
else{
    echo "O aluno $student ficou com a média igual a $average e foi reprovado";
}

?>