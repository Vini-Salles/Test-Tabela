<?php
$req = filter_input (INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req) {
    case 1:
        /*Pegando o nome no campo formulário Nome*/
        $nome = filter_input (INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
        /*Pegando o email no campo formulário Período*/
        $periodo = filter_input (INPUT_POST, "txtPeriodo", FILTER_SANITIZE_STRING);
        /*Pegando o email no campo formulário Idade*/
        $idade = filter_input (INPUT_POST, "txtIdade", FILTER_SANITIZE_STRING);
        /*Pegando o email no campo formulário Telefone*/
        $telefone = filter_input (INPUT_POST, "txtTelefone", FILTER_SANITIZE_STRING);
        /*Pegando o email no campo formulário Descrição*/
        $descritivo = filter_input (INPUT_POST, "txtDescritivo", FILTER_SANITIZE_STRING);
    break;
}

?>