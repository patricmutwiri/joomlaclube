<?php
/**
* @version $Id: install1.php 5975 2006-12-11 01:26:33Z robs $
* @package Joomla / Tradução JoomlaClube 2008 - www.joomlaclube.com.br
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Set flag that this is a parent file
define( "_VALID_MOS", 1 );

/** Include common.php */
require_once( 'common.php' );

$DBhostname = mosGetParam( $_POST, 'DBhostname', '' );
$DBuserName = mosGetParam( $_POST, 'DBuserName', '' );
$DBpassword = mosGetParam( $_POST, 'DBpassword', '' );
$DBname  	= mosGetParam( $_POST, 'DBname', '' );
$DBPrefix  	= mosGetParam( $_POST, 'DBPrefix', 'jos_' );
$DBDel  	= intval( mosGetParam( $_POST, 'DBDel', 0 ) );
$DBBackup  	= intval( mosGetParam( $_POST, 'DBBackup', 0 ) );
$DBSample  	= intval( mosGetParam( $_POST, 'DBSample', 1 ) );

echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Joomla! - Instalador Web</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="install.css" type="text/css" />
<script  type="text/javascript">
<!--
function check() {
	// form validation check
	var formValid=false;
	var f = document.form;
	if ( f.DBhostname.value == '' ) {
		alert('Por favor, informe o Nome do Servidor');
		f.DBhostname.focus();
		formValid=false;
	} else if ( f.DBuserName.value == '' ) {
		alert('Por favor, informe o Nome do Usuário do Banco de Dados');
		f.DBuserName.focus();
		formValid=false;
	} else if ( f.DBname.value == '' ) {
		alert('Por favor informe um Nome para seu novo Banco de Dados');
		f.DBname.focus();
		formValid=false;
	} else if ( f.DBPrefix.value == '' ) {
		alert('Você tem que entrar com um prefixo Joomla MySQL.');
		f.DBPrefix.focus();
		formValid=false;
	} else if ( f.DBPrefix.value == 'old_' ) {
		alert('Você não pode usar " old_ " como o MySQL prefixo porque Joomla.');
		f.DBPrefix.focus();
		formValid=false;
	} else if ( confirm('Você tem certeza que as configurações estão corretas? \n Joomla tentará agora criar um Banco de Dados com as informações que você forneceu')) {
		formValid=true;
	}

	return formValid;
}
//-->
</script>
</head>
<body onload="document.form.DBhostname.focus();">
<div id="wrapper">
  <div id="header">
    <div id="joomla"><img src="header_install.png" alt="Instalação do Joomla" /></div>
  </div>
</div>
<div id="ctr" align="center">
	<form action="install2.php" method="post" name="form" id="form" onsubmit="return check();">
	<div class="install">
		<div id="stepbar">
			<div class="step-off">
				Checagem de <br /> pré-instalação 
			</div>
			<div class="step-off">
				Licença
			</div>
			<div class="step-on">
				1º passo
			</div>
			<div class="step-off">
				2º passo
			</div>
			<div class="step-off">
				3º passo
			</div>
			<div class="step-off">
				4º passo
			</div>
		</div>
		<div id="right">
			<div class="far-right">
				<input class="button" type="submit" name="next" value="Próximo >>"/>
  			</div>
	  		<div id="step">
	  			1º passo
	  		</div>
  			<div class="clr"></div>
  			<h1>Configuração do Banco de Dados MySQL:</h1>
	  		<div class="install-text">
  	   			<p>Configurar o Joomla para executar em seu servidor envolve 4 passos simples...</p>
  	   			<p>Por favor informe o nome do servidor onde o Joomla será instalado, normalmente é 'localhost'.</p>
    			<p>Informe o Nome e Senha do usuário MySQL e o Nome do Banco de Dados que você deseja usar com o Joomla.</p>
    			<p>Informe o prefixo da tabela que será usada por esta instalação do Joomla e selecione o que fazer com tabelas existentes de instalações anteriores.</p>
    			<p>Instale os dados de exemplo a menos que você seja um membro experiente e deseja iniciar com um site limpo.</p>
  			</div>
			<div class="install-form">
  				<div class="form-block">
  		 			<table width="67%" class="content2">
  		  			<tr>
  						<td></td>
  						<td></td>
  						<td></td>
  					</tr>
  		  			<tr>
  						<td colspan="2">
  							Nome do Servidor
  							<br/>
  							<input class="inputbox" type="text" name="DBhostname" value="<?php echo "$DBhostname"; ?>" />
  						</td>
			  			<td>
			  				<em>normalmente 'localhost'</em>
			  			</td>
  					</tr>
					<tr>
			  			<td colspan="2">
			  				Nome do Usuário MySQL
			  				<br/>
			  				<input class="inputbox" type="text" name="DBuserName" value="<?php echo "$DBuserName"; ?>" />
			  			</td>
			  			<td>
			  				<em>Algo como 'root' ou um Nome de Usuário fornecido por seu servidor</em>
			  			</td>
  					</tr>
			  		<tr>
			  			<td colspan="2">
			  				Senha do MySQL
			  				<br/>
			  				<input class="inputbox" type="text" name="DBpassword" value="<?php echo "$DBpassword"; ?>" />
			  			</td>
			  			<td>
			  				<em>Para a segurança do site a utilização de senha para a conta mysql é obrigatória</em>
			  			</td>
					</tr>
  		  			<tr>
  						<td colspan="2">
  							Nome do Banco de Dados MySQL
  							<br/>
  							<input class="inputbox" type="text" name="DBname" value="<?php echo "$DBname"; ?>" />
  						</td>
			  			<td>
			  				<em>Alguns servidores têm o nome do banco de dados já determinado para o site. Utilize a prefixo de tabela neste caso para diferenciar os sites Joomla.</em>
			  			</td>
  					</tr>
  		  			<tr>
  						<td colspan="2">
  							Prefixo da Tabela MySQL
  							<br/>
  							<input class="inputbox" type="text" name="DBPrefix" value="<?php echo "$DBPrefix"; ?>" />
  						</td>
			  			<td>
			  			<!--
			  			<em>Não use 'old_' a menos que seja para backup de tabelas</em>
			  			-->
			  			</td>
  					</tr>
  		  			<tr>
			  			<td>
			  				<input type="checkbox" name="DBDel" id="DBDel" value="1" <?php if ($DBDel) echo 'checked="checked"'; ?> />
			  			</td>
						<td>
							<label for="DBDel">Eliminar as tabelas existentes?</label>
						</td>
  						<td>
  						</td>
			  		</tr>
  		  			<tr>
			  			<td>
			  				<input type="checkbox" name="DBBackup" id="DBBackup" value="1" <?php if ($DBBackup) echo 'checked="checked"'; ?> />
			  			</td>
						<td>
							<label for="DBBackup">Fazer backup das tabelas?</label>
						</td>
  						<td>
  							<em>Qualquer backup de tabelas de instalações anteriores do Joomla serão sobreescritas</em>
  						</td>
			  		</tr>
  		  			<tr>
			  			<td>
			  				<input type="checkbox" name="DBSample" id="DBSample" value="1" <?php if ($DBSample) echo 'checked="checked"'; ?> />
			  			</td>
						<td>
							<label for="DBSample">Instalar dados de exemplo?</label>
						</td>
			  			<td>
			  				<em>Não desmarque a menos que tenha experiência com o Joomla!</em>
			  			</td>
			  		</tr>
		  		 	</table>
  				</div>
			</div>
		</div>
		<div class="clr"></div>
	</div>
	</form>
</div>
<div class="clr"></div>
<div class="ctr">
	<a href="http://www.joomla.org" target="_blank">JoomlaClube</a> Comunidade do Joomla no Brasil.<br />
	<a href="http://www.joomla.org" target="_blank">Joomla!</a> é um Software Livre liberado sob a licença GNU/GPL.
</div>
</body>
</html>