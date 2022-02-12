<?php
/*  CONSTANTES MANUAIS */
define('LANGUAGE','PT-BR'); //algo para você definir que sera imutável

/*  CONSTANTES MÁGICAS*/
echo 'LANGUAGE: ';
var_dump (LANGUAGE);
echo '<br>'; echo '<br>'; echo 'FILE: ';
var_dump (__FILE__); //Retorna o caminha que você está acessando
echo '<br>'; echo '<br>'; echo 'LINE: ';
var_dump (__LINE__); //Mostra a linha que ela foi executada
echo '<br>'; echo '<br>'; echo 'DIR: ';
var_dump (__DIR__); //Contêm o diretório(pasta) em que no qual o programa(atual) se encontra 