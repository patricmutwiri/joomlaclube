<?php
/**
* @version $Id: kunena.special.upgrade.1.0.5.php 602 2009-04-03 20:13:16Z fxstein $
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
* Kunena Upgrade file for 1.0.5
* component: com_kunena
**/

defined( '_JEXEC' ) or die('Restricted access');

global $mainframe;

// Add custom upgrade code here
// Most or all sql statements should be covered within comupgrade.xml

// now lets do some checks and upgrades to 1.0.2 version of attachment table
$database->setQuery("select from #__fb_attachments where filelocation like '%" . JPATH_ROOT . "%'");

// if >0 then it means we are on fb version below 1.0.2
$is_101_version = $database->loadResult();

if ($is_101_version) {
    // now do the upgrade
    $database->setQuery("update #__fb_attachments set filelocation = replace(filelocation,'" . JPATH_ROOT . "/components/com_kunena/uploaded','/images/fbfiles');");
    if ($database->query()) print '<li class="fbscslist">Tabela de anexos atualizada com sucesso para o esquema da versão 1.0.2+!</li>';
    else
    {
    	print '<li class="fbscslisterror">Tabela de anexos não foi atualizada com sucesso para o esquema da versão 1.0.2+!</li>';
    	trigger_dbwarning("Não foi possível atualizar tabela de anexos.");
    }

    $database->setQuery("update #__fb_messages_text set message = replace(message,'/components/com_fireboard/uploaded','/images/fbfiles');");
    if ($database->query()) print '<li class="fbscslist">Anexos na tabela de mensagens foram atualizados com êxito para o esquema da versão 1.0.2+!</li>';
    else
    {
    	print '<li class="fbscslist">Anexos na tabela de mensagens não foram atualizados com êxito para o esquema da versão 1.0.2+!</li>';
    	trigger_dbwarning("Não foi possível atualizar anexos na tabela de mensagens.");
    }

    //backward compatibility . all the cats are by default moderated
    $database->setQuery("UPDATE `#__fb_categories` SET `moderated` = '1';");
    $database->query() or trigger_dbwarning("Não foi possível atualizar categorias.");;
}

?>
