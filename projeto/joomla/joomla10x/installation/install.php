<?php
/**
* @version $Id: install.php 5975 2006-12-11 01:26:33Z robs $
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

if (file_exists( '../configuration.php' ) && filesize( '../configuration.php' ) > 10) {
	header( 'Location: ../index.php' );
	exit();
}
/** Include common.php */
include_once( 'common.php' );
function writableCell( $folder ) {
	echo "<tr>";
	echo "<td class=\"item\">" . $folder . "/</td>";
	echo "<td align=\"left\">";
	echo is_writable( "../$folder" ) ? '<b><font color="green">Editável</font></b>' : '<b><font color="red">Não Editável</font></b>' . "</td>";
	echo "</tr>";
}
?>
<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
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
  <div id="div">
    <div id="header">
      <div id="joomla"><img src="header_install.png" alt="Instalação do Joomla" /></div>
    </div>
  </div>
</div>
<div id="ctr" align="center">
	<form action="install1.php" method="post" name="adminForm" id="adminForm">
	<div class="install">
	<div id="stepbar">
		<div class="step-off">Checagem de <br /> pré-instalação</div>
		<div class="step-on">Licença</div>
		<div class="step-off">1º passo</div>
		<div class="step-off">2º passo</div>
		<div class="step-off">3º passo</div>
		<div class="step-off">4º passo</div>
	</div>
	<div id="right">
		<div id="step">Licença</div>
		<div class="far-right">
		<input class="button" type="submit" name="next" value="Próximo &gt;&gt;"/>
		</div>
		<div class="clr"></div>
		<h1>Licença GNU/GPL:</h1>
		<div class="licensetext">
				<a href="http://www.joomla.org">Joomla </a> é um Software Livre liberado sob a licença GNU/GPL.
		</div>
		<div class="clr"></div>
		<div class="license-form">
			<div class="form-block" style="padding: 0px;">
				<iframe src="gpl.html" class="license" frameborder="0" scrolling="auto"></iframe>
			</div>
		</div>
		<div class="clr"></div>
		<div class="clr"></div>
		</div>
		<div id="break"></div>
	<div class="clr"></div>
	<div class="clr"></div>
	</div>
	</form>
</div>
<div class="ctr">
	<a href="http://www.joomla.org" target="_blank">JoomlaClube</a> Comunidade do Joomla no Brasil.<br />
	<a href="http://www.joomla.org" target="_blank">Joomla!</a> é um Software Livre liberado sob a licença GNU/GPL.
</div>
</body>
</html>