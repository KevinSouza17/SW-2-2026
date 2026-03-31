<?php
// JSON_ERROR_NONE = 0 - Nenhum erro ocorreu
// JSON_ERROR_DEPTH = 1 - A profundidade máxima excedida (padrão 512 níveis)
// Como resolver: aumentar o limite ou reestruturar o JSON
// $data = json_decode($json_str, false, 1024);

// JSON_ERROR_STATE_MISMATCH = 2 - Erro de parâmetro inválido ou estado inconsistente
// Como resolver: verificar se o JSON está bem formado

// JSON_ERROR_CTRL_CHAR = 3 - Caractere de controle encontrado
// Como resolver: escapar ou remover caracteres de controle
// $json_str = preg_replace('/[\x00-\x1F\x7F]/', '', $json_str);

// JSON_ERROR_SYNTAX = 4 - Erro de sintaxe no JSON
// Como resolver: validar aspas duplas, colchetes, vírgulas e estrutura

// JSON_ERROR_UTF8 = 5 - Codificação UTF-8 inválida
// Como resolver: converter para UTF-8
// $json_str = utf8_encode($json_str);
// $json_str = mb_convert_encoding($json_str, 'UTF-8', 'auto');

// Como verificar erros:
// $obj = json_decode($json_str);
// if (json_last_error() !== JSON_ERROR_NONE) {
//     echo "Erro: " . json_last_error_msg();
// }