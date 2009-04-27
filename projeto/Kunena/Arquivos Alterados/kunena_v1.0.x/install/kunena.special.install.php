<?php
/**
* @version $Id: kunena.special.install.php 384 2009-02-13 08:08:20Z fxstein $
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
* Kunena Install file
* component: com_kunena
**/

defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');

//
// This is a place to add custom install code required
// Most of the work should be done by the comupgrade class
// and the install/upgrade xml file. This is truly for one
// off special code that can't be put into the xml file directly.
//

global $mainframe, $database;

// Kill notices (we have many..)
error_reporting (E_ALL ^ E_NOTICE);

include_once ($mainframe->getCfg("absolute_path") . "/components/com_kunena/class.kunena.php");

//DEFINE('_KUNENA_SAMPLE_FORUM_MENU_TITLE', 'Forum');

// Install sample data on initial install (this will not get executed for upgrades)

$posttime = CKunenaTools::fbGetInternalTime();

$query="INSERT INTO `#__fb_categories` VALUES (1, 0, '".addslashes(_KUNENA_SAMPLE_MAIN_CATEGORY_TITLE)."', 0, 0, 0, 1, NULL, 0, 0, 0, 0, 1, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, '".addslashes(_KUNENA_SAMPLE_MAIN_CATEGORY_DESC)."', '".addslashes(_KUNENA_SAMPLE_MAIN_CATEGORY_HEADER)."', '', 0, 0, 0, NULL);";
$database->setQuery($query);
$database->query() or trigger_dbwarning('Não foi possível inserir categoria de início de exemplo');

$query="INSERT INTO `#__fb_categories` VALUES (2, 1, '".addslashes(_KUNENA_SAMPLE_FORUM1_TITLE)."', 0, 0, 0, 1, NULL, 0, 0, 0, 0, 1, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, '".addslashes(_KUNENA_SAMPLE_FORUM1_DESC)."', '".addslashes(_KUNENA_SAMPLE_FORUM1_HEADER)."', '', 0, 0, 0, NULL);";
$database->setQuery($query);
$database->query() or trigger_dbwarning('Não foi possível inserir Fórum 1 de exemplo');

$query="INSERT INTO `#__fb_categories` VALUES (3, 1, '".addslashes(_KUNENA_SAMPLE_FORUM2_TITLE)."', 0, 0, 0, 1, NULL, 0, 0, 0, 0, 2, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, '".addslashes(_KUNENA_SAMPLE_FORUM2_DESC)."', '".addslashes(_KUNENA_SAMPLE_FORUM2_HEADER)."', '', 0, 0, 0, NULL);";
$database->setQuery($query);
$database->query() or trigger_dbwarning('Não foi possível inserir Fórum 2 de exemplo');

$query="INSERT INTO `#__fb_messages` VALUES (1, 0, 1, 2, 'Kunena', 62, 'info@kunena.com', '".addslashes(_KUNENA_SAMPLE_POST1_SUBJECT)."', $posttime, '127.0.0.1', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL);";
$database->setQuery($query);
$database->query() or trigger_dbwarning('Não foi possível inserir mensagem de exemplo');

$query="INSERT INTO `#__fb_messages_text` VALUES (1, '".addslashes(_KUNENA_SAMPLE_POST1_TEXT)."');";
$database->setQuery($query);
$database->query() or trigger_dbwarning('Não foi possível inserir texto da mensagem de exemplo');

CKunenaTools::reCountBoards();

?>
