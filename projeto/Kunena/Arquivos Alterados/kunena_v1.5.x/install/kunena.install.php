<?php
/**
 * @version $Id: kunena.install.php 877 2009-06-15 21:26:13Z mahagr $
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
defined( '_JEXEC' ) or die('Restricted access');

// Help get past php timeouts if we made it that far
// Joomla 1.5 installer can be very slow and this helps avoid timeouts
@set_time_limit(300);
$kn_maxTime = @ini_get('max_execution_time');

$maxMem = trim(@ini_get('memory_limit'));
if ($maxMem) {
	$unit = strtolower($maxMem{strlen($maxMem) - 1});
	switch($unit) {
		case 'g':
			$maxMem	*=	1024;
		case 'm':
			$maxMem	*=	1024;
		case 'k':
			$maxMem	*=	1024;
	}
	if ($maxMem < 16000000) {
		@ini_set('memory_limit', '16M');
	}
	if ($maxMem < 32000000) {
		@ini_set('memory_limit', '32M');
	}
	if ($maxMem < 48000000) {
		@ini_set('memory_limit', '48M');
	}
}
ignore_user_abort(true);

// Kunena wide defines
require_once (JPATH_ROOT  .DS. 'components' .DS. 'com_kunena' .DS. 'lib' .DS. 'kunena.defines.php');

// get right Language file
if (file_exists(KUNENA_PATH_ADMIN_LANGUAGE .DS. 'kunena.' . KUNENA_LANGUAGE . '.php')) {
    include_once (KUNENA_PATH_ADMIN_LANGUAGE .DS. 'kunena.' . KUNENA_LANGUAGE . '.php');
    }
else {
    include_once (KUNENA_PATH_ADMIN_LANGUAGE .DS. 'kunena.english.php');
    }

include_once(KUNENA_PATH_ADMIN_LIB .DS. 'fx.upgrade.class.php');

function com_install()
{
	$kunena_db = JFactory::getDBO();

	// Determine MySQL version from phpinfo
	$kunena_db->setQuery("SELECT VERSION() as mysql_version");
	$mysqlversion = $kunena_db->loadResult();

	//before we do anything else we want to check for minimum system requirements
	if (version_compare(phpversion(), KUNENA_MIN_PHP, ">=") && version_compare($mysqlversion, KUNENA_MIN_MYSQL, ">"))
	{
		//change fb menu icon
		$kunena_db->setQuery("SELECT id FROM #__components WHERE admin_menu_link = 'option=com_kunena'");
		$id = $kunena_db->loadResult();

		//add new admin menu images
		$kunena_db->setQuery("UPDATE #__components SET admin_menu_img  = 'components/com_kunena/images/kunenafavicon.png'" . ",   admin_menu_link = 'option=com_kunena' " . "WHERE id='".$id."'");
		$kunena_db->query() or trigger_dbwarning("Não foi possível definir imagem do menu do admin.");

		//install & upgrade class
		$fbupgrade = new fx_Upgrade("com_kunena", "kunena.install.upgrade.xml", "fb_", "install", false);

		// Legacy enabler
		// Versions prior to 1.0.5 did not came with a version table inside the database
		// this would make the installer believe this is a fresh install. We need to perform
		// a 'manual' check if this is going to be an upgrade and if so create that table
		// and write a dummy version entry to force an upgrade.

		$kunena_db->setQuery( "SHOW TABLES LIKE '%fb_messages'" );
		$kunena_db->query() or trigger_dbwarning("Não foi possível pesquisar por tabela de mensagens.");

		if($kunena_db->getNumRows()) {
			// fb tables exist, now lets see if we have a version table
			$kunena_db->setQuery( "SHOW TABLES LIKE '%fb_version'" );
			$kunena_db->query() or trigger_dbwarning("Não foi possível pesquisar por tabela de versão.");;
			if(!$kunena_db->getNumRows()) {
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

<div style="border: 1px solid #ccc; background: #FBFBFB; padding: 10px; text-align: left; margin: 10px 0;">
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

			jimport('joomla.filesystem.folder');
		    $ret = JFolder::copy(JPATH_ROOT .DS. "components" .DS. "com_kunena" .DS. "kunena.files.distribution",
		    				JPATH_ROOT .DS. "images" .DS. "fbfiles", '', true);

			if ($ret !== true)
			{
			?>

			<li class="fbscslisterror">
			<div
				style="border: 1px solid #FF6666; background: #FFCC99; padding: 10px; text-align: left; margin: 10px 0;">
			<img src='images/publish_x.png' align='absmiddle'>
			Criação/configuração de permissão dos seguintes diretórios falhou: <br>
			<pre> <?php echo JPATH_ROOT; ?>/images/fbfiles/
			<?php echo JPATH_ROOT;?>/images/fbfiles/avatars
			<?php echo JPATH_ROOT;?>/images/fbfiles/avatars/gallery (você tem que colocar avatares aqui dentro se quiser usá-los)
			<?php echo JPATH_ROOT;?>/images/fbfiles/category_images
			<?php echo JPATH_ROOT;?>/images/fbfiles/files
			<?php echo JPATH_ROOT;?>/images/fbfiles/images
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
		<strong>versão do php: <font color="green"><? echo phpversion(); ?> Requireda >= <? echo KUNENA_MIN_PHP; ?> </font> </strong>
		<br />
		<strong>versão do mysql: <font color="green"><? echo $mysqlversion; ?> Requireda >= <? echo KUNENA_MIN_MYSQL; ?> </font> </strong>
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

<div style="border: 1px solid #ccc; background: #FBFBFB; padding: 10px; text-align: left; margin: 10px 0;">
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
		<strong>versão do php: <font color="red"><? echo phpversion(); ?> Required >= <? echo KUNENA_MIN_PHP; ?> </font> </strong>
		<br />
		<strong>versão do mysql: <font color="red"><? echo $mysqlversion; ?> Required >= <? echo KUNENA_MIN_MYSQL; ?> </font> </strong>
		</div>

		<?php
	}

	// Rest of footer
	?>
		<div style="border: 1px solid #99CCFF; background: #D9D9FF; padding: 20px; margin: 20px; clear: both;">
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
?>
