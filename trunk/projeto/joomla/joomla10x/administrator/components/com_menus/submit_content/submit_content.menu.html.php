<?php
/**
* @version $Id: submit_content.menu.html.php 10002 2008-02-08 10:56:57Z willebil $
* @package Joomla
* @subpackage Menus
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL, see docs/LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* Writes the edit form for new and existing content item
*
* A new record is defined when <var>$row</var> is passed with the <var>id</var>
* property set to 0.
* @package Joomla
* @subpackage Menus
*/
class submit_content_menu_html {

	function edit( &$menu, &$lists, &$params, $option ) {
		global $mosConfig_live_site;
		?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}
			var form = document.adminForm;
			<?php
			if ( !$menu->id ) {
				?>
				if ( getSelectedValue( 'adminForm', 'componentid' ) < 1 ) {
					alert( 'Voc� deve selecionar uma se��o' );
					return;
				}

				form.link.value = "index.php?option=com_content&task=new&sectionid=" + form.componentid.value;
				if ( form.name.value == '' ) {
					form.name.value = form.componentid.options[form.componentid.selectedIndex].text;
				}
				submitform( pressbutton );
				<?php
			} else {
				?>
				if ( form.name.value == '' ) {
					alert( 'Este item de menu deve ter um t�tulo' );
				} else {
					submitform( pressbutton );
				}
				<?php
			}
			?>
		}
		</script>
		<form action="index2.php" method="post" name="adminForm">

		<table class="adminheading">
		<tr>
			<th>
			<?php echo $menu->id ? 'Editar' : 'Adicionar';?> Enviar - Conte�do
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="3">
					Detalhes
					</th>
				</tr>
				<tr>
					<td width="10%" align="right" valign="top">
					Nome:
					</td>
					<td width="200px">
					<input type="text" name="name" size="30" maxlength="100" class="inputbox" value="<?php echo htmlspecialchars( $menu->name, ENT_QUOTES ); ?>"/>
					</td>
					<td>
					<?php
					if ( !$menu->id ) {
						echo mosToolTip( 'Se voc� deixar este em branco o nome da se��o ser� automaticamente usado' );
					}
					?>
					</td>
				</tr>
				<tr>
					<td align="right" valign="top">
					Se��o:
					</td>
					<td colspan="2">
					<?php echo $lists['componentid']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					Url:
					</td>
					<td colspan="2">
                    <?php echo ampReplace($lists['link']); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					N�vel do Item:
					</td>
					<td colspan="2">
					<?php echo $lists['parent'];?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					Ordena��o:
					</td>
					<td colspan="2">
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					N�vel de Acesso:
					</td>
					<td colspan="2">
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					Publicado:
					</td>
					<td colspan="2">
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				</table>
			</td>
			<td width="40%">
				<table class="adminform">
				<tr>
					<th>
					Par�metros
					</th>
				</tr>
				<tr>
					<td>
					<?php echo $params->render();?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menu->menutype; ?>" />
		<input type="hidden" name="type" value="<?php echo $menu->type; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="<?php echo josSpoofValue(); ?>" value="1" />
		</form>
		<script language="Javascript" src="<?php echo $mosConfig_live_site;?>/includes/js/overlib_mini.js"></script>
		<?php
	}
}
?>
