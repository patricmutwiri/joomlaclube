<?php
/**
* @version $Id: syscheck.english.php 5073 2009-04-29 10:28:30Z Sigrid Suski $
* @package: Sigsiu Online Business Index 2
* ===================================================
* @author
* Name: Sigrid & Radek Suski, Sigsiu.NET
* Email: sobi@sigsiu.net
* Url: http://www.sigsiu.net
* ===================================================
* @copyright Copyright (C) 2006 - 2009 Sigsiu.NET (http://www.sigsiu.net). All rights reserved.
* @license see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL.
* You can use, redistribute this file and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation.
*
* Translation by Elvis Vinicius
* elvisvinicius@pevermelho.com
*/

// no direct access
defined( '_SOBI2_' ) || ( trigger_error("Acesso restrito", E_USER_ERROR) && exit() );
define('_SOBI2SC_STATE_0', '<span style="color: rgb(255, 0, 0); font-weight: bold;">Desconhecido</span>');
define('_SOBI2SC_STATE_1', '<span style="font-weight: bold; color: rgb(51, 204, 0);">Perfeito</span>');
define('_SOBI2SC_STATE_2', '<span style="font-weight: bold; color: rgb(0, 153, 0);">OK</span>');
define('_SOBI2SC_STATE_3', '<span style="color: rgb(153, 153, 0); font-weight: bold;">Deve estar OK</span>');
define('_SOBI2SC_STATE_4', '<span style="color: rgb(255, 204, 51); font-weight: bold;">Pode causar problemas</span>');
define('_SOBI2SC_STATE_5', '<span style="color: rgb(255, 0, 0); font-weight: bold;"><b>Não aceitável</b></span>');
define('_SOBI2SC_STATE_6', '<span style="color: rgb(255, 0, 0);">Deve funcionar, mas a pasta é editável para <b>TODOS</b><br/>Possível <b>risco de segurança</b></span>');
define('_SOBI2SC_STATE_7', '<span style="color: rgb(255, 0, 0);">Deve funcionar, mas o arquivo é editável para <b>TODOS</b><br/>Possível <b>risco de segurança</b></span>');
define('_SOBI2SC_HEADER_SUBJECT', 'Configuração');
define('_SOBI2SC_HEADER_STATE', 'Estado');
define('_SOBI2SC_HEADER_STATE_OK', 'Estado OK?');
define('_SOBI2SC_PHPVER_IS', 'Versão do PHP:');
define('_SOBI2SC_APACHE_IS', 'Versão do Apache:');
define('_SOBI2SC_MYSQL_IS', 'Versão do MySQL:');
define('_SOBI2SC_MEMLIM_IS', 'PHP Memory Limit:');
define('_SOBI2SC_TIMELIM_IS', 'Tempo de execução dos scripts PHP:');
define('_SOBI2SC_SM_IS', 'PHP Safe Mode:');
define('_SOBI2SC_RG_IS', 'PHP Register Globals:');
define('_SOBI2SC_ERG_IS', 'CMS RG Emulation:');
define('_SOBI2SC_GD_IS', 'GD Library:');
define('_SOBI2SC_IM_IS', 'iconv/mbstring Library:');
define('_SOBI2SC_CHARSET_IS', 'Charset:');
define('_SOBI2SC_DBCOL_IS', 'Database Collation:');
define('_SOBI2SC_FILES_PERMS', 'Permissão de Pastas e Arquivos');
define('_SOBI2SC_FILENAME', 'Pasta ou Nome do Arquivo');
define('_SOBI2SC_FILE_W', 'Editável');
define('_SOBI2SC_FILE_O', 'Dono');
define('_SOBI2SC_FILE_G', 'Grupo');
define('_SOBI2SC_CMS_IS', 'CMS:');
define('_SOBI2SC_AT_IS', 'Template do Admin:');
define('_SOBI2SC_CHAT_IS', 'A solução para incluir tags personalizadas no cabeçalho a partir de componentes parece faltar neste template da administração. O Painel de Controle do SOBI2 provavelmente não funcionará corretamente.');
define('_SOBI2SC_WARNING', 'Aviso');
define('_SOBI2SC_TEMPLATE_CHECK', 'Verificação padrão de Template:');
define('_SOBI2SC_JS_CONF', 'Este template inclui vários JavaScripts que podem entrar em conflito com a biblioteca MooTools. A função de pesquisa SOBI2 podem não funcionar corretamente.');
define('_SOBI2SC_GET_FILE', 'Download System Check Log File');
?>