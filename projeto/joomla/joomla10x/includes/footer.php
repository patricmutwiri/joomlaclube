<?php
/**
* @version $Id: footer.php 3713 2006-05-29 03:25:07Z stingrey $
* @package Joomla / Tradu��o JoomlaClube 2008 - www.joomlaclube.com.br
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

global $_VERSION;

// NOTE - You may change this file to suit your site needs
?>
<div align="center">
	&copy; <?php echo mosCurrentDate( '%Y' ) . ' ' . $GLOBALS['mosConfig_sitename'];?>
</div>

<div align="center">
	<?php echo $_VERSION->URL; ?>
</div>