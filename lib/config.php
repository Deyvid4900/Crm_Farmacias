<?php
// Caminhos


//Configurações do banco de dados.
define('DB_HOST', 'sql.freedb.tech');
define('DB_NAME', 'freedb_Crm_Farmacias');
define('DB_USER', 'freedb_Deydey123');
define('DB_PASS', 'm#nU!2q6U!3@ZvH');

#Caminhos absolutos
$pastaInterna="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'lib/css/');
define('DIRJS',DIRPAGE.'lib/js/');

