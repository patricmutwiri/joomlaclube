<?php
/**
* @version $Id: kunena.special.upgrade.1.0.8.php 840 2009-06-12 21:14:36Z mahagr $
* Kunena Component
* @package Kunena
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Kunena Upgrade file for 1.0.8
* component: com_kunena
**/

defined( '_JEXEC' ) or die('Restricted access');

// Add custom upgrade code here
// Most or all sql statements should be covered within comupgrade.xml

$temporary = 1;

$kunena_db =& JFactory::getDBO();

$kunena_db->setQuery("CREATE TABLE #__fb_favorites_temp SELECT thread, userid FROM #__fb_favorites WHERE userid>0 GROUP BY thread, userid");
if ($kunena_db->query() == FALSE) {
	$temporary=0;
	trigger_dbwarning("Não é possível fixar a tabela fb_favorites. Todos os favoritos serão removidos.");
}
$kunena_db->setQuery("TRUNCATE #__fb_favorites");
$kunena_db->query();
$kunena_db->setQuery("ALTER TABLE `#__fb_favorites` DROP INDEX `thread`");
$kunena_db->query();
$kunena_db->setQuery("ALTER TABLE `#__fb_favorites` ADD UNIQUE `thread`(`thread`,`userid`)");
$kunena_db->query() or trigger_dberror("Não é possível alterar a tabela fb_favorites, por favor entre em contato com a equipe do Kunena em www.kunena.com!");
if ($temporary) {
	$kunena_db->setQuery("INSERT INTO #__fb_favorites (thread,userid) SELECT thread, userid FROM #__fb_favorites_temp");
	$kunena_db->query() or trigger_dbwarning("Não é possível fixar a tabela fb_favorites. Todos os favoritos serão removidos.");
	$kunena_db->setQuery("DROP TABLE #__fb_favorites_temp");
	$kunena_db->query() or trigger_dbwarning("Não foi possível remover a tabela temporária (#__fb_favorites_temp).");
}

$temporary = 1;
$kunena_db->setQuery("CREATE TABLE #__fb_subscriptions_temp SELECT thread, userid, future1 FROM #__fb_subscriptions WHERE userid>0 GROUP BY thread, userid");
if ($kunena_db->query() == FALSE) {
	$temporary=0;
	trigger_dbwarning("Não é possível fixar a tabela fb_subscriptions. Todas as inscrições serão removidas.");
}
$kunena_db->setQuery("TRUNCATE #__fb_subscriptions");
$kunena_db->query();
$kunena_db->setQuery("ALTER TABLE `#__fb_subscriptions` DROP INDEX `thread`");
$kunena_db->query();
$kunena_db->setQuery("ALTER TABLE `#__fb_subscriptions` ADD UNIQUE `thread`(`thread`,`userid`)");
$kunena_db->query() or trigger_dberror("Não é possível alterar a tabela fb_subscriptions, por favor entre em contato com a equipe do  Kunena em www.kunena.com!");
if ($temporary) {
	$kunena_db->setQuery("INSERT INTO #__fb_subscriptions (thread,userid,future1) SELECT thread, userid, future1 FROM #__fb_subscriptions_temp");
	$kunena_db->query() or trigger_dbwarning("Não é possível fixar a tabela fb_subscriptions. Todas as inscrições serão removidas.");
	$kunena_db->setQuery("DROP TABLE #__fb_subscriptions_temp");
	$kunena_db->query() or trigger_dbwarning("Não foi possível remover a tabela temporária (#__fb_subscriptions_temp).");
}

?>
