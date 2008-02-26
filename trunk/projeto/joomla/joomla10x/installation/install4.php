<?php
/**
* @version $Id: install4.php 5973 2006-12-11 01:26:33Z robs $
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

// Include common.php
require_once( 'common.php' );
require_once( '../includes/database.php' );

$DBhostname = mosGetParam( $_POST, 'DBhostname', '' );
$DBuserName = mosGetParam( $_POST, 'DBuserName', '' );
$DBpassword = mosGetParam( $_POST, 'DBpassword', '' );
$DBname  	= mosGetParam( $_POST, 'DBname', '' );
$DBPrefix  	= mosGetParam( $_POST, 'DBPrefix', '' );
$sitename  	= mosGetParam( $_POST, 'sitename', '' );
$adminEmail = mosGetParam( $_POST, 'adminEmail', '');
$siteUrl  	= mosGetParam( $_POST, 'siteUrl', '' );
$absolutePath = mosGetParam( $_POST, 'absolutePath', '' );
$adminPassword = mosGetParam( $_POST, 'adminPassword', '');

$filePerms = '';
if (mosGetParam($_POST,'filePermsMode',0))
	$filePerms = '0'.
		(mosGetParam($_POST,'filePermsUserRead',0) * 4 +
		 mosGetParam($_POST,'filePermsUserWrite',0) * 2 +
		 mosGetParam($_POST,'filePermsUserExecute',0)).
		(mosGetParam($_POST,'filePermsGroupRead',0) * 4 +
		 mosGetParam($_POST,'filePermsGroupWrite',0) * 2 +
		 mosGetParam($_POST,'filePermsGroupExecute',0)).
		(mosGetParam($_POST,'filePermsWorldRead',0) * 4 +
		 mosGetParam($_POST,'filePermsWorldWrite',0) * 2 +
		 mosGetParam($_POST,'filePermsWorldExecute',0));

$dirPerms = '';
if (mosGetParam($_POST,'dirPermsMode',0))
	$dirPerms = '0'.
		(mosGetParam($_POST,'dirPermsUserRead',0) * 4 +
		 mosGetParam($_POST,'dirPermsUserWrite',0) * 2 +
		 mosGetParam($_POST,'dirPermsUserSearch',0)).
		(mosGetParam($_POST,'dirPermsGroupRead',0) * 4 +
		 mosGetParam($_POST,'dirPermsGroupWrite',0) * 2 +
		 mosGetParam($_POST,'dirPermsGroupSearch',0)).
		(mosGetParam($_POST,'dirPermsWorldRead',0) * 4 +
		 mosGetParam($_POST,'dirPermsWorldWrite',0) * 2 +
		 mosGetParam($_POST,'dirPermsWorldSearch',0));

if ((trim($adminEmail== "")) || (preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $adminEmail )==false)) {
	echo "<form name=\"stepBack\" method=\"post\" action=\"install3.php\">
		<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\" />
		<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\" />
		<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\" />
		<input type=\"hidden\" name=\"DBname\" value=\"$DBname\" />
		<input type=\"hidden\" name=\"DBPrefix\" value=\"$DBPrefix\" />
		<input type=\"hidden\" name=\"DBcreated\" value=\"1\" />
		<input type=\"hidden\" name=\"sitename\" value=\"$sitename\" />
		<input type=\"hidden\" name=\"adminEmail\" value=\"$adminEmail\" />
		<input type=\"hidden\" name=\"siteUrl\" value=\"$siteUrl\" />
		<input type=\"hidden\" name=\"absolutePath\" value=\"$absolutePath\" />
		<input type=\"hidden\" name=\"filePerms\" value=\"$filePerms\" />
		<input type=\"hidden\" name=\"dirPerms\" value=\"$dirPerms\" />
		</form>";
	echo "<script>alert('Deve indicar um endereço de e-mail do admin.'); document.stepBack.submit(); </script>";
	return;
}

if($DBhostname && $DBuserName && $DBname) {
	$configArray['DBhostname']	= $DBhostname;
	$configArray['DBuserName']	= $DBuserName;
	$configArray['DBpassword']	= $DBpassword;
	$configArray['DBname']	 	= $DBname;
	$configArray['DBPrefix']	= $DBPrefix;
} else {
	echo "<form name=\"stepBack\" method=\"post\" action=\"install3.php\">
		<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\" />
		<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\" />
		<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\" />
		<input type=\"hidden\" name=\"DBname\" value=\"$DBname\" />
		<input type=\"hidden\" name=\"DBPrefix\" value=\"$DBPrefix\" />
		<input type=\"hidden\" name=\"DBcreated\" value=\"1\" />
		<input type=\"hidden\" name=\"sitename\" value=\"$sitename\" />
		<input type=\"hidden\" name=\"adminEmail\" value=\"$adminEmail\" />
		<input type=\"hidden\" name=\"siteUrl\" value=\"$siteUrl\" />
		<input type=\"hidden\" name=\"absolutePath\" value=\"$absolutePath\" />
		<input type=\"hidden\" name=\"filePerms\" value=\"$filePerms\" />
		<input type=\"hidden\" name=\"dirPerms\" value=\"$dirPerms\" />
		</form>";

	echo "<script>alert('As informações fornecidas sobre a Base de Dados estão incorretas e/ou vazias'); document.stepBack.submit(); </script>";
	return;
}

if ($sitename) {
	if (!get_magic_quotes_gpc()) {
		$configArray['sitename'] = addslashes($sitename);
	} else {
		$configArray['sitename'] = $sitename;
	}
} else {
	echo "<form name=\"stepBack\" method=\"post\" action=\"install3.php\">
		<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\" />
		<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\" />
		<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\" />
		<input type=\"hidden\" name=\"DBname\" value=\"$DBname\" />
		<input type=\"hidden\" name=\"DBPrefix\" value=\"$DBPrefix\" />
		<input type=\"hidden\" name=\"DBcreated\" value=\"1\" />
		<input type=\"hidden\" name=\"sitename\" value=\"$sitename\" />
		<input type=\"hidden\" name=\"adminEmail\" value=\"$adminEmail\" />
		<input type=\"hidden\" name=\"siteUrl\" value=\"$siteUrl\" />
		<input type=\"hidden\" name=\"absolutePath\" value=\"$absolutePath\" />
		<input type=\"hidden\" name=\"filePerms\" value=\"$filePerms\" />
		<input type=\"hidden\" name=\"dirPerms\" value=\"$dirPerms\" />
		</form>";

	echo "<script>alert('O nome do site não foi informado'); document.stepBack2.submit();</script>";
	return;
}

if (file_exists( '../configuration.php' )) {
	$canWrite = is_writable( '../configuration.php' );
} else {
	$canWrite = is_writable( '..' );
}

if ($siteUrl) {
	$configArray['siteUrl']=$siteUrl;
	// Fix for Windows
	$absolutePath= str_replace("\\\\","/", $absolutePath);
	$configArray['absolutePath']=$absolutePath;
	$configArray['filePerms']=$filePerms;
	$configArray['dirPerms']=$dirPerms;

	$config = "<?php\n";
	$config .= "if(!defined('RG_EMULATION')) { define( 'RG_EMULATION', 0 ); }\n";
	$config .= "\$mosConfig_offline = '0';\n";
	$config .= "\$mosConfig_host = '{$configArray['DBhostname']}';\n";
	$config .= "\$mosConfig_user = '{$configArray['DBuserName']}';\n";
	$config .= "\$mosConfig_password = '{$configArray['DBpassword']}';\n";
	$config .= "\$mosConfig_db = '{$configArray['DBname']}';\n";
	$config .= "\$mosConfig_dbprefix = '{$configArray['DBPrefix']}';\n";
	$config .= "\$mosConfig_lang = 'brazilian_portuguese';\n";
	$config .= "\$mosConfig_absolute_path = '{$configArray['absolutePath']}';\n";
	$config .= "\$mosConfig_live_site = '{$configArray['siteUrl']}';\n";
	$config .= "\$mosConfig_sitename = '{$configArray['sitename']}';\n";
	$config .= "\$mosConfig_shownoauth = '0';\n";
	$config .= "\$mosConfig_useractivation = '1';\n";
	$config .= "\$mosConfig_uniquemail = '1';\n";
	$config .= "\$mosConfig_offline_message = 'Este site está em manutenção...<br /> Por favor, volte mais tarde.';\n";
	$config .= "\$mosConfig_error_message = 'Este site está temporariamente indisponível.<br /> Por favor, volte mais tarde';\n";
	$config .= "\$mosConfig_debug = '0';\n";
	$config .= "\$mosConfig_lifetime = '900';\n";
	$config .= "\$mosConfig_session_life_admin = '1800';\n";
	$config .= "\$mosConfig_session_type = '0';\n";
	$config .= "\$mosConfig_MetaDesc = 'Joomla - Sistema de Portal Dinâmico e de Gerenciamento de Conteúdo';\n";
	$config .= "\$mosConfig_MetaKeys = 'Joomla, joomla';\n";
	$config .= "\$mosConfig_MetaTitle = '1';\n";
	$config .= "\$mosConfig_MetaAuthor = '1';\n";
	$config .= "\$mosConfig_locale = 'pt_BR';\n";
	$config .= "\$mosConfig_offset = '0';\n";
	$config .= "\$mosConfig_offset_user = '-3';\n";
	$config .= "\$mosConfig_hideAuthor = '0';\n";
	$config .= "\$mosConfig_hideCreateDate = '0';\n";
	$config .= "\$mosConfig_hideModifyDate = '0';\n";
	$config .= "\$mosConfig_hidePdf = '".intval( !is_writable( "{$configArray['absolutePath']}/media/" ) )."';\n";
	$config .= "\$mosConfig_hidePrint = '0';\n";
	$config .= "\$mosConfig_hideEmail = '0';\n";
	$config .= "\$mosConfig_enable_log_items = '0';\n";
	$config .= "\$mosConfig_enable_log_searches = '0';\n";
	$config .= "\$mosConfig_enable_stats = '0';\n";
	$config .= "\$mosConfig_sef = '0';\n";
	$config .= "\$mosConfig_vote = '0';\n";
	$config .= "\$mosConfig_gzip = '0';\n";
	$config .= "\$mosConfig_multipage_toc = '1';\n";
	$config .= "\$mosConfig_allowUserRegistration = '1';\n";
	$config .= "\$mosConfig_link_titles = '0';\n";
	$config .= "\$mosConfig_error_reporting = -1;\n";
	$config .= "\$mosConfig_list_limit = '30';\n";
	$config .= "\$mosConfig_caching = '0';\n";
	$config .= "\$mosConfig_cachepath = '{$configArray['absolutePath']}/cache';\n";
	$config .= "\$mosConfig_cachetime = '900';\n";
	$config .= "\$mosConfig_mailer = 'mail';\n";
	$config .= "\$mosConfig_mailfrom = '$adminEmail';\n";
	$config .= "\$mosConfig_fromname = '{$configArray['sitename']}';\n";
	$config .= "\$mosConfig_sendmail = '/usr/sbin/sendmail';\n";
	$config .= "\$mosConfig_smtpauth = '0';\n";
	$config .= "\$mosConfig_smtpuser = '';\n";
	$config .= "\$mosConfig_smtppass = '';\n";
	$config .= "\$mosConfig_smtphost = 'localhost';\n";
	$config .= "\$mosConfig_back_button = '1';\n";
	$config .= "\$mosConfig_item_navigation = '1';\n";
	$config .= "\$mosConfig_secret = '" . mosMakePassword(16) . "';\n";
	$config .= "\$mosConfig_pagetitles = '1';\n";
	$config .= "\$mosConfig_readmore = '1';\n";
	$config .= "\$mosConfig_hits = '1';\n";
	$config .= "\$mosConfig_icons = '1';\n";
	$config .= "\$mosConfig_favicon = 'favicon.ico';\n";
	$config .= "\$mosConfig_fileperms = '".$configArray['filePerms']."';\n";
	$config .= "\$mosConfig_dirperms = '".$configArray['dirPerms']."';\n";
	$config .= "\$mosConfig_helpurl = 'http://help.joomla.org';\n";
	$config .= "\$mosConfig_multilingual_support = '0';\n";
	$config .= "\$mosConfig_editor = 'tinymce';\n";
	$config .= "\$mosConfig_admin_expired = '1';\n";
	$config .= "\$mosConfig_frontend_login = '1';\n";
	$config .= "\$mosConfig_frontend_userparams = '1';\n";
	$config .= "\$mosConfig_itemid_compat = '0';\n";
	$config .= "setlocale (LC_TIME, \$mosConfig_locale);\n";
	$config .= "?>";

	if ($canWrite && ($fp = fopen("../configuration.php", "w"))) {
		fputs( $fp, $config, strlen( $config ) );
		fclose( $fp );
	} else {
		$canWrite = false;
	} // if

	$salt = mosMakePassword(16);
	$crypt = md5($adminPassword.$salt);
	$cryptpass = $crypt.':'.$salt;

	$database = new database( $DBhostname, $DBuserName, $DBpassword, $DBname, $DBPrefix );
	$nullDate = $database->getNullDate();

	// create the admin user
	$installdate = date('Y-m-d H:i:s');
	$query = "INSERT INTO `#__users` VALUES (62, 'Administrator', 'admin', '$adminEmail', '$cryptpass', 'Super Administrator', 0, 1, 25, '$installdate', '$nullDate', '', '')";
	$database->setQuery( $query );
	$database->query();
	// add the ARO (Access Request Object)
	$query = "INSERT INTO `#__core_acl_aro` VALUES (10,'users','62',0,'Administrator',0)";
	$database->setQuery( $query );
	$database->query();
	// add the map between the ARO and the Group
	$query = "INSERT INTO `#__core_acl_groups_aro_map` VALUES (25,'',10)";
	$database->setQuery( $query );
	$database->query();

	// chmod files and directories if desired
	$chmod_report = "Permissões de Diretórios e Arquivos não alteradas.";
	if ($filePerms != '' || $dirPerms != '') {
		$mosrootfiles = array(
			'administrator',
			'cache',
			'components',
			'images',
			'language',
			'mambots',
			'media',
			'modules',
			'templates',
			'configuration.php'
		);
		$filemode = NULL;
		if ($filePerms != '') $filemode = octdec($filePerms);
		$dirmode = NULL;
		if ($dirPerms != '') $dirmode = octdec($dirPerms);
		$chmodOk = TRUE;
		foreach ($mosrootfiles as $file) {
			if (!mosChmodRecursive($absolutePath.'/'.$file, $filemode, $dirmode)) {
				$chmodOk = FALSE;
			}
		}
		if ($chmodOk) {
			$chmod_report = 'Permissões de Diretórios e Arquivos alteradas com sucesso.';
		} else {
			$chmod_report = 'As Permissões dos Diretórios não puderam ser alteradas.<br />'.
							'Por favor, altere manualmente as permissões de arquivos (CHOMOD 0644), diretórios gerais (CHOMOD 0755) e diretórios de media e cache do Joomla! (CHOMOD 0766) ou instale o componente joomlaXplorer.';
		}
	} // if chmod wanted
} else {
?>
	<form action="install3.php" method="post" name="stepBack3" id="stepBack3">
	  <input type="hidden" name="DBhostname" value="<?php echo $DBhostname;?>" />
	  <input type="hidden" name="DBusername" value="<?php echo $DBuserName;?>" />
	  <input type="hidden" name="DBpassword" value="<?php echo $DBpassword;?>" />
	  <input type="hidden" name="DBname" value="<?php echo $DBname;?>" />
	  <input type="hidden" name="DBPrefix" value="<?php echo $DBPrefix;?>" />
	  <input type="hidden" name="DBcreated" value="1" />
	  <input type="hidden" name="sitename" value="<?php echo $sitename;?>" />
	  <input type="hidden" name="adminEmail" value="$adminEmail" />
	  <input type="hidden" name="siteUrl" value="$siteUrl" />
	  <input type="hidden" name="absolutePath" value="$absolutePath" />
	  <input type="hidden" name="filePerms" value="$filePerms" />
	  <input type="hidden" name="dirPerms" value="$dirPerms" />
	</form>
	<script>alert('Não foi indicado o URL do Site'); document.stepBack3.submit();</script>
<?php
}
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Joomla! - Instalador Web</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="install.css" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="joomla"><img src="header_install.png" alt="InstalaçãoJoomla!" /></div>
	</div>
</div>
<div id="ctr" align="center">
	<form action="dummy" name="form" id="form">
	<div class="install">
		<div id="stepbar">
			<div class="step-off">Checagem de <br /> pré-instalação</div>
			<div class="step-off">Licença</div>
			<div class="step-off">1º passo</div>
			<div class="step-off">2º passo</div>
			<div class="step-off">3º passo</div>
			<div class="step-on">4º passo</div>
		</div>
		<div id="right">
			<div id="step">4º passo</div>
			<div class="far-right">
				<input class="button" type="button" name="runSite" value="Ver Site"
<?php
				if ($siteUrl) {
					echo "onClick=\"window.location.href='$siteUrl/index.php' \"";
				} else {
					echo "onClick=\"window.location.href='".$configArray['siteURL']."/index.php' \"";
				}
?>/>
				<input class="button" type="button" name="Admin" value="Administração"
<?php
				if ($siteUrl) {
					echo "onClick=\"window.location.href='$siteUrl/administrator/index.php' \"";
				} else {
					echo "onClick=\"window.location.href='".$configArray['siteURL']."/administrator/index.php' \"";
				}
?>/>
			</div>
			<div class="clr"></div>
			<h1>Parabéns! O Joomla está instalado</h1>
			<div class="install-text">
				<p>Clique em "Ver Site " para iniciar o site Joomla! ou em "Administração"
					para entrar na Área de Administração onde pode fazer alterações ao Site.</p>
			</div>
			<div class="install-form">
				<div class="form-block">
					<table width="100%">
						<tr><td class="error" align="center">LEMBRE-SE DE REMOVER COMPLETAMENTE<br/>O DIRETÓRIO INSTALLATION</td></tr>
						<tr><td align="center"><h5>Detalhes da Autenticação do Administrador</h5></td></tr>
						<tr><td align="center" class="notice"><b>Nome de Usuário: admin</b></td></tr>
						<tr><td align="center" class="notice"><b>Senha: <?php echo $adminPassword; ?></b></td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td align="right">&nbsp;</td></tr>
<?php						if (!$canWrite) { ?>
						<tr>
							<td class="small">
								Seu arquivo de configuração tem Permissão -> Somente Leitura, ou houve um problema na criação do arquivo de configuração. Você terá que fazer o upload do seguinte código manualmente. Clique na área de texto para selecionar todo o código.
							</td>
						</tr>
						<tr>
							<td align="center">
								<textarea rows="5" cols="60" name="configcode" onClick="javascript:this.form.configcode.focus();this.form.configcode.select();" ><?php echo htmlspecialchars( $config );?></textarea>
							</td>
						</tr>
<?php						} ?>
						<tr><td class="small"><?php /*echo $chmod_report*/; ?></td></tr>
					</table>
				</div>
			</div>
			<div id="break"></div>
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
</html>