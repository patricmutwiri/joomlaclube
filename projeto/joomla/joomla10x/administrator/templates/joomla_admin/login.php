<?php
/**
* @version $Id: login.php 5975 2006-12-11 01:26:33Z robs $
* @package Joomla / Tradu��o JoomlaClube 2008 - www.joomlaclube.com.br
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Acesso restrito' );

$tstart = mosProfiler::getmicrotime();
?>
<?php echo "<?xml version=\"1.0\"?>\r\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $mosConfig_sitename; ?> - Administration [Joomla!]</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<style type="text/css">
@import url(templates/joomla_admin/css/admin_login.css);
</style>
<script language="javascript" type="text/javascript">
	function setFocus() {
		document.loginForm.usrname.select();
		document.loginForm.usrname.focus();
	}
</script>
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site .'/images/favicon.ico';?>" />
</head>
<body onload="setFocus();">
<div id="wrapper">
	<div id="header">
			<div id="joomla"><img src="templates/joomla_admin/images/header_text.png" alt="Joomla! Logo" /></div>
	</div>
</div>
<div id="ctr" align="center">
	<?php
	// handling of mosmsg text in url
	include_once( $mosConfig_absolute_path .'/administrator/modules/mod_mosmsg.php' );
	?>
	<div class="login">
		<div class="login-form">
			<img src="templates/joomla_admin/images/login.gif" alt="Autentica��o para �rea de Administra��o" />
			<form action="index.php" method="post" name="loginForm" id="loginForm">
			<div class="form-block">
				<div class="inputlabel">Nome do Usu�rio</div>
				<div><input name="usrname" type="text" class="inputbox" size="15" /></div>
				<div class="inputlabel">Senha</div>
				<div><input name="pass" type="password" class="inputbox" size="15" /></div>
				<div align="left"><input type="submit" name="submit" class="button" value="Autenticar" /></div>
			</div>
			</form>
		</div>
		<div class="login-text">
			<div class="ctr"><img src="templates/joomla_admin/images/security.png" width="128" height="128" alt="security" /></div>
			<p>Bem vindo ao Joomla!</p>
			<p>Utilize um nome de usu�rio e senha v�lidos para ter acesso ao Painel de Administra��o do Site</p>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div id="break"></div>
<noscript>
!Aviso! O Javascript deve estar ativado para uma correta opera&ccedil;&atilde;o da administra&ccedil;&atilde;o.
</noscript>
<div class="footer" align="center">
	<div align="center">
   Tradu��o do Joomla produzido por: 
<a href="http://www.joomlaclube.com.br/" target="_blank"><strong>JoomlaClube</strong></a><br /><br />
		<?php echo $_VERSION->URL; ?>
	</div>
</div>
</body>
</html>