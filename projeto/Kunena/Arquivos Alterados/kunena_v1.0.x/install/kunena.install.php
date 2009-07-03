<?php
/**
 * @version $Id: kunena.install.php 465 2009-02-20 06:59:43Z fxstein $
 * Kunena Component
 * @package Kunena
 *
* @Copyright (C) 2008 - 2009 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.bestofjoomla.com
 *
 * Based on Joomlaboard Component
 * @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @author TSMF & Jan de Graaff
 **/
//
// Dont allow direct linking
defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');

// Help get past php timeouts if we made it that far
// Joomla 1.5 installer can be very slow and this helps avoid timeouts
set_time_limit(300);
ini_set("memory_limit", "32M");

// Minimum version requirements
DEFINE('KUNENA_MIN_PHP', '4.3.0');
DEFINE('KUNENA_MIN_MYSQL', '5.0.0');

global $mainframe;
//Get right Language file
if (file_exists($mainframe->getCfg('absolute_path') . '/administrator/components/com_kunena/language/kunena.' . $mainframe->getCfg('lang') . '.php')) {
    include ($mainframe->getCfg('absolute_path') . '/administrator/components/com_kunena/language/kunena.' . $mainframe->getCfg('lang') . '.php');
}
else {
    include ($mainframe->getCfg('absolute_path') . '/administrator/components/com_kunena/language/kunena.english.php');
}

include_once($mainframe->getCfg("absolute_path")."/administrator/components/com_kunena/lib/fx.upgrade.class.php");

function com_install() {
	global $database, $mainframe, $mosConfig_absolute_path;

	// Determine MySQL version from phpinfo
	$database->setQuery("SELECT VERSION() as mysql_version");
	$mysqlversion = $database->loadResult();

	//before we do anything else we want to check for minimum system requirements
	if (version_compare(phpversion(), KUNENA_MIN_PHP, ">=") && version_compare($mysqlversion, KUNENA_MIN_MYSQL, ">="))
	{
		// we're on 4.3.0 or later

		//change fb menu icon
		$database->setQuery("SELECT id FROM #__components WHERE admin_menu_link = 'option=com_kunena'");
		$id = $database->loadResult();

		//add new admin menu images
		if(defined('_JEXEC') && class_exists('JApplication'))
		{
			// J1.5
			$database->setQuery("UPDATE #__components SET admin_menu_img  = 'components/com_kunena/images/kunenafavicon.png'" . ",   admin_menu_link = 'option=com_kunena' " . "WHERE id='".$id."'");
		}
		else
		{
			// J1.0
			$database->setQuery("UPDATE #__components SET admin_menu_img  = '../administrator/components/com_kunena/images/kunenafavicon.png'" . ",   admin_menu_link = 'option=com_kunena' " . "WHERE id='".$id."'");
		}
		$database->query() or trigger_dbwarning("Não foi possível definir imagem do menu do admin.");

		//install & upgrade class
		$fbupgrade = new fx_Upgrade("com_kunena", "kunena.install.upgrade.xml", "fb_", "install", false);

		// Legacy enabler
		// Versions prior to 1.0.5 did not came with a version table inside the database
		// this would make the installer believe this is a fresh install. We need to perform
		// a 'manual' check if this is going to be an upgrade and if so create that table
		// and write a dummy version entry to force an upgrade.

		$database->setQuery( "SHOW TABLES LIKE '%fb_messages'" );
		$database->query() or trigger_dbwarning("Não foi possível pesquisar por tabela de mensagens.");

		if($database->getNumRows()) {
			// fb tables exist, now lets see if we have a version table
			$database->setQuery( "SHOW TABLES LIKE '%fb_version'" );
			$database->query() or trigger_dbwarning("Não foi possível pesquisar por tabela de versão.");;
			if(!$database->getNumRows()) {
				//version table does not exist - this is a pre 1.0.5 install - lets create
				$fbupgrade->createVersionTable();
				// insert dummy version entry to force upgrade
				$fbupgrade->insertDummyVersion();
			}
		}
		// Start Installation/Upgrade
		$fbupgrade->doUpgrade();

		// THIS PROCEDURE IS UNTRANSLATED!
	?>

<style>
.fbscs {
	margin: 0;
	padding: 0;
	list-style: none;
}

.fbscslist {
	list-style: none;
	padding: 5px 10px;
	margin: 3px 0;
	border: 1px solid #66CC66;
	background: #D6FEB8;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
}

.fbscslisterror {
	list-style: none;
	padding: 5px 10px;
	margin: 3px 0;
	border: 1px solid #FF9999;
	background: #FFCCCC;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
}
</style>

<div
	style="border: 1px solid #ccc; background: #FBFBFB; padding: 10px; text-align: left; margin: 10px 0;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="20%" valign="top" style="padding: 10px;"><a
			href="index2.php?option=com_kunena"><img
			src="components/com_kunena/images/kunena.logo.png" alt="Kunena"
			border="0"></a>
			<br />
			<a href="http://www.joomlaclube.com.br/" target="_blank"><img src="components/com_kunena/images/jcb.logo.png" alt="Joomla Clube - brazil open source" /></a>
		</td>

		<td width="80%" valign="top" style="padding: 10px;">
		<div style="clear: both; text-align: left; padding: 0 20px;">
		<ul class="fbscs">
		<?php

			//
			// We might want to make the file copy below part of the install as well
			//
			if (is_writable($mainframe->getCfg("absolute_path")."/images" ))
			{
				//ok now it is installed, just copy the fbfiles directory, and apply 0777
				dircopy($mainframe->getCfg("absolute_path") . "/components/com_kunena/kunena.files.distribution", $mainframe->getCfg("absolute_path") . "/images/fbfiles", false);
			}
			else {
			?>

			<li class="fbscslisterror">
			<div
				style="border: 1px solid #FF6666; background: #FFCC99; padding: 10px; text-align: left; margin: 10px 0;">
			<img src='images/publish_x.png' align='absmiddle'>
			Criação/configuração de permissão dos seguintes diretórios falhou: <br>
			<pre> <?php echo $mainframe->getCfg("absolute_path"); ?>/images/fbfiles/
			<?php echo $mainframe->getCfg("absolute_path");?>/images/fbfiles/avatars
			<?php echo $mainframe->getCfg("absolute_path");?>/images/fbfiles/avatars/gallery (você tem que colocar avatares aqui dentro se quiser usá-los)
			<?php echo $mainframe->getCfg("absolute_path");?>/images/fbfiles/category_images
			<?php echo $mainframe->getCfg("absolute_path");?>/images/fbfiles/files
			<?php echo $mainframe->getCfg("absolute_path");?>/images/fbfiles/images
</pre> a) Você pode copiar o conteúdo de '_kunena.files.distribution' em 'componentes/com_kunena' para a raiz do seu Joomla, sob a pasta 'images/'.
			<br />
			b) Se você já tem o conteúdo lá, mas a instalação do Kunena não foi capaz de torná-los graváveis e, então por favor, faça-o manualmente.</div>

			</li>

			<?php
			}
		?>
		</ul>
		</div>

		<div
			style="border: 1px solid #FFCC99; background: #FFFFCC; padding: 20px; margin: 20px; clear: both;">
		<strong>I N S T A L A Ç Ã O : <font color="green">Sucesso</font> </strong>
		<br />
		<br />
		<strong>versão do php: <font color="green"><? echo phpversion(); ?> Requerida >= <? echo KUNENA_MIN_PHP; ?> </font> </strong>
		<br />
		<strong>versão do mysql: <font color="green"><? echo $mysqlversion; ?> Requerida >= <? echo KUNENA_MIN_MYSQL; ?> </font> </strong>
		</div>

		<?php
	}
	else
	{
		// Minimum version requirements not satisfied
		?>
<style>
.fbscs {
	margin: 0;
	padding: 0;
	list-style: none;
}

.fbscslist {
	list-style: none;
	padding: 5px 10px;
	margin: 3px 0;
	border: 1px solid #66CC66;
	background: #D6FEB8;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
}

.fbscslisterror {
	list-style: none;
	padding: 5px 10px;
	margin: 3px 0;
	border: 1px solid #FF9999;
	background: #FFCCCC;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
}
</style>

<div
	style="border: 1px solid #ccc; background: #FBFBFB; padding: 10px; text-align: left; margin: 10px 0;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="20%" valign="top" style="padding: 10px;"><a
			href="index2.php?option=com_kunena"><img
			src="components/com_kunena/images/kunena.logo.png" alt="Kunena"
			border="0"></a>
			<br />
			<a href="http://www.joomlaclube.com.br/" target="_blank"><img src="components/com_kunena/images/jcb.logo.png" alt="Joomla Clube - brazil open source" /></a>
		</td>

		<td width="80%" valign="top" style="padding: 10px;">

		<div
			style="border: 1px solid #FFCC99; background: #FFFFCC; padding: 20px; margin: 20px; clear: both;">
		<strong>I N S T A L A Ç Ã O : <font color="red">F A L H O U - Requisitos Mínimos da Versão não satisfeitos</font> </strong>
		<br />
		<br />
		<strong>versão do php: <font color="red"><? echo phpversion(); ?> Requerida >= <? echo KUNENA_MIN_PHP; ?> </font> </strong>
		<br />
		<strong>versão do mysql: <font color="red"><? echo $mysqlversion; ?> Requerida >= <? echo KUNENA_MIN_MYSQL; ?> </font> </strong>
		</div>

		<?php
	}

	// Rest of footer
	?>
		<div
			style="border: 1px solid #99CCFF; background: #D9D9FF; padding: 20px; margin: 20px; clear: both;">
		<strong>Obrigado por usar Kunena!</strong> <br />

		Kunena Forum Component <em>para Joomla! </em> &copy; by <a
			href="http://www.Kunena.com" target="_blank">www.Kunena.com</a>.
		Todos os direitos reservados.</div>

		<div style="border: 1px solid #ccc; background: #eee; padding: 20px; margin: 20px; clear: both;">
		<a href="http://www.joomlaclube.com.br/" target="_blank"><span style="color:#00adbc;">joomla</span><span style="color:#636363">clube</span></a> <span style="color:#aaa">brazil open source</span>
		</div>
		</td>
	</tr>
</table>
</div>
	<?php

}

function dircopy($srcdir, $dstdir, $verbose = true) {
	$num = 0;

	if (!is_dir($dstdir)) {
		mkdir ($dstdir);
	}

	if ($curdir = opendir($srcdir)) {
		while ($file = readdir($curdir)) {
			if ($file != '.' && $file != '..') {
				$srcfile = $srcdir . '/' . $file;
				$dstfile = $dstdir . '/' . $file;

				if (is_file($srcfile)) {
					if (is_file($dstfile)) {
						$ow = filemtime($srcfile) - filemtime($dstfile);
					}
					else {
						$ow = 1;
					}

					if ($ow > 0) {
						if ($verbose) {
							$tmpstr = _KUNENA_COPY_FILE;
							$tmpstr = str_replace('%src%', $srcfile, $tmpstr);
							$tmpstr = str_replace('%dst%', $dstfile, $tmpstr);
							echo "<li class=\"fbscslist\">".$tmpstr;
						}

						if (copy($srcfile, $dstfile)) {
							touch($dstfile, filemtime($srcfile));
							$num++;

							if ($verbose) {
								echo _KUNENA_COPY_OK." </li>";
							}
						}
						else {
							echo "<li class=\"fbscslisterror\">"._KUNENA_DIRCOPERR . " '$srcfile' " . _KUNENA_DIRCOPERR1."</li>";
						}
					}
				}
				else if (is_dir($srcfile)) {
					$num += dircopy($srcfile, $dstfile, $verbose);
				}
			}
		}

		closedir ($curdir);
	}

	return $num;
}
?>
