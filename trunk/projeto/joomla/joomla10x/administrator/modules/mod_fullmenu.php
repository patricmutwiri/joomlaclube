<?php
/**
* @version $Id: mod_fullmenu.php 9998 2008-02-07 11:36:41Z eddieajau $
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

if (!defined( '_JOS_FULLMENU_MODULE' )) {
	/** ensure that functions are declared only once */
	define( '_JOS_FULLMENU_MODULE', 1 );

	/**
	* Full DHTML Admnistrator Menus
	* @package Joomla
	*/
	class mosFullAdminMenu {
		/**
		* Show the menu
		* @param string The current user type
		*/
		function show( $usertype='' ) {
			global $acl, $database;
			global $mosConfig_live_site, $mosConfig_enable_stats, $mosConfig_caching;

			// cache some acl checks
			$canConfig 			= $acl->acl_check( 'administration', 'config', 'users', $usertype );

			$manageTemplates 	= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_templates' );
			$manageTrash 		= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_trash' );
			$manageMenuMan 		= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_menumanager' );
			$manageLanguages 	= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_languages' );
			$installModules 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'modules', 'all' );
			$editAllModules 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'modules', 'all' );
			$installMambots 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'mambots', 'all' );
			$editAllMambots 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'mambots', 'all' );
			$installComponents 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'components', 'all' );
			$editAllComponents 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', 'all' );
			$canMassMail 		= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_massmail' );
			$canManageUsers 	= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_users' );

			$query = "SELECT a.id, a.title, a.name"
			. "\n FROM #__sections AS a"
			. "\n WHERE a.scope = 'content'"
			. "\n GROUP BY a.id"
			. "\n ORDER BY a.ordering"
			;
			$database->setQuery( $query );
			$sections = $database->loadObjectList();

			$menuTypes = mosAdminMenus::menutypes();
			?>
			<div id="myMenuID"></div>
			<script language="JavaScript" type="text/javascript">
			var myMenu =
			[
			<?php
		// Home Sub-Menu
	?>			[null,'In�cio','index2.php',null,'Painel de Controle'],
				_cmSplit,
				<?php
		// Site Sub-Menu
	?>			[null,'Site',null,null,'Administra��o do site',
	<?php
				if ($canConfig) {
	?>				['<img src="../includes/js/ThemeOffice/config.png" />','Configura��o Global','index2.php?option=com_config&hidemainmenu=1',null,'Configura��es globais do Joomla'],
	<?php
				}
				if ($manageLanguages) {
	?>				['<img src="../includes/js/ThemeOffice/language.png" />','Idiomas',null,null,'Administrar idiomas',
  						['<img src="../includes/js/ThemeOffice/language.png" />','Idiomas do Site','index2.php?option=com_languages',null,'Administra��o de idiomas'],
	   				],
	<?php
				}
	?>				['<img src="../includes/js/ThemeOffice/media.png" />','Administrar M�dia','index2.php?option=com_media',null,'Administrar os arquivos de m�dia'],
						['<img src="../includes/js/ThemeOffice/preview.png" />','Pr�-visualizar', null, null, 'Pr�-visualizar o site',
						['<img src="../includes/js/ThemeOffice/preview.png" />','Nova Janela','<?php echo $mosConfig_live_site; ?>/index.php','_blank','<?php echo $mosConfig_live_site; ?>'],
						['<img src="../includes/js/ThemeOffice/preview.png" />','Mesma Janela','index2.php?option=com_admin&task=preview',null,'<?php echo $mosConfig_live_site; ?>'],
						['<img src="../includes/js/ThemeOffice/preview.png" />','Mostrar Posi��es','index2.php?option=com_admin&task=preview2',null,'<?php echo $mosConfig_live_site; ?>'],
					],
					['<img src="../includes/js/ThemeOffice/globe1.png" />', 'Estat�sticas', null, null, 'Estat�sticas do Site',
	<?php
				if ($mosConfig_enable_stats == 1) {
	?>					['<img src="../includes/js/ThemeOffice/globe4.png" />', 'Navegador, SO, Dom�nio', 'index2.php?option=com_statistics', null, 'Navegador, Sistema Operacional, Dom�nios'],
	<?php
				}
	?>					['<img src="../includes/js/ThemeOffice/search_text.png" />', 'Pesquisar Texto', 'index2.php?option=com_statistics&task=searches', null, 'Pesquisas textuais']
					],
	<?php
				if ($manageTemplates) {
	?>				['<img src="../includes/js/ThemeOffice/template.png" />','Administrar Temas',null,null,'Mude o modelo do site',
  						['<img src="../includes/js/ThemeOffice/template.png" />','Temas do Site','index2.php?option=com_templates',null,'Alterar o tema do site'],
	  					_cmSplit,
	  					['<img src="../includes/js/ThemeOffice/template.png" />','Temas da Administra��o','index2.php?option=com_templates&client=admin',null,'Alterar o tema da �rea de administra��o'],
	  					_cmSplit,
	  					['<img src="../includes/js/ThemeOffice/template.png" />','Posi��o dos M�dulos','index2.php?option=com_templates&task=positions',null,'Posi��es do tema para m�dulos']
	  				],
	<?php
				}
				if ($manageTrash) {
	?>				['<img src="../includes/js/ThemeOffice/trash.png" />','Administrar Lixeira','index2.php?option=com_trash',null,'Administrar itens apagados'],
	<?php
				}
				if ($canManageUsers || $canMassMail) {
	?>				['<img src="../includes/js/ThemeOffice/users.png" />','Administrar Usu�rios','index2.php?option=com_users&task=view',null,'Administrar usu�rios'],
	<?php
					}
	?>			],
	<?php
		// Menu Sub-Menu
	?>			_cmSplit,
				[null,'Menus',null,null,'Administrar Menus',
	<?php
				if ($manageMenuMan) {
	?>				['<img src="../includes/js/ThemeOffice/menus.png" />','Administrar Menus','index2.php?option=com_menumanager',null,'Administrar Menus'],
					_cmSplit,
	<?php
				}
				foreach ( $menuTypes as $menuType ) {
	?>				['<img src="../includes/js/ThemeOffice/menus.png" />','<?php echo $menuType;?>','index2.php?option=com_menus&menutype=<?php echo $menuType;?>',null,''],
	<?php
				}
	?>			],
				_cmSplit,
	<?php
		// Content Sub-Menu
	?>			[null,'Conte�do',null,null,'Administrar conte�do',
	<?php
				if (count($sections) > 0) {
	?>				['<img src="../includes/js/ThemeOffice/edit.png" />','Conte�do por se��o',null,null,'Administrar e colocar conte�dos por Se��es',
	<?php
					foreach ($sections as $section) {
						$txt = addslashes( $section->title ? $section->title : $section->name );
	?>					['<img src="../includes/js/ThemeOffice/document.png" />','<?php echo $txt;?>', null, null,'<?php echo $txt;?>',
							['<img src="../includes/js/ThemeOffice/edit.png" />', '<?php echo $txt;?> - Conte�do', 'index2.php?option=com_content&sectionid=<?php echo $section->id;?>',null,'Administrador de conte�do da se��o'],
							['<img src="../includes/js/ThemeOffice/backup.png" />', '<?php echo $txt;?> - Arquivos','index2.php?option=com_content&task=showarchive&sectionid=<?php echo $section->id;?>',null,'Administrador de arquivo da se��o'],
							['<img src="../includes/js/ThemeOffice/add_section.png" />', '<?php echo $txt;?> - Categorias', 'index2.php?option=com_categories&section=<?php echo $section->id;?>',null, 'Administrador de categorias da se��o'],
						],
	<?php
					} // foreach
	?>				],
					_cmSplit,
	<?php
				}
	?>
					['<img src="../includes/js/ThemeOffice/edit.png" />','Todos os itens de conte�do','index2.php?option=com_content&sectionid=0',null,'Todos os itens de conte�do'],
	  				['<img src="../includes/js/ThemeOffice/edit.png" />','Administrar Conte�do Est�tico','index2.php?option=com_typedcontent',null,'Administrar Conte�do Est�tico'],
	  				_cmSplit,
	  				['<img src="../includes/js/ThemeOffice/add_section.png" />','Administrar Se��es','index2.php?option=com_sections&scope=content',null,'Administrar Se��es'],
					['<img src="../includes/js/ThemeOffice/add_section.png" />','Administrar Categoria','index2.php?option=com_categories&section=content',null,'Administrar Categoria'],
					_cmSplit,
	  				['<img src="../includes/js/ThemeOffice/home.png" />','Administrar P�gina Inicial','index2.php?option=com_frontpage',null,'Administrar P�gina Inicial'],
	  				['<img src="../includes/js/ThemeOffice/edit.png" />','Administrar Arquivo','index2.php?option=com_content&task=showarchive&sectionid=0',null,'Administrar Arquivo'],
	  				['<img src="../includes/js/ThemeOffice/globe3.png" />', 'Visualiza��es', 'index2.php?option=com_statistics&task=pageimp', null, 'Estat�sticas de visualiza��o de p�ginas'],
				],
	<?php
		// Components Sub-Menu
		if ($installComponents) {
	?>			_cmSplit,
				[null,'Componentes',null,null,'Administrar Componentes',
	<?php
			$query = "SELECT *"
			. "\n FROM #__components"
			. "\n WHERE name != 'frontpage'"
			. "\n AND name != 'media manager'"
			. "\n ORDER BY ordering, name"
			;
			$database->setQuery( $query );
			$comps = $database->loadObjectList();	// component list
			$subs = array();	// sub menus
			// first pass to collect sub-menu items
			foreach ($comps as $row) {
				if ($row->parent) {
					if (!array_key_exists( $row->parent, $subs )) {
						$subs[$row->parent] = array();
					}
					$subs[$row->parent][] = $row;
				}
			}
			$topLevelLimit = 19; //You can get 19 top levels on a 800x600 Resolution
			$topLevelCount = 0;
			foreach ($comps as $row) {
				if ($editAllComponents | $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', $row->option )) {
					if ($row->parent == 0 && (trim( $row->admin_menu_link ) || array_key_exists( $row->id, $subs ))) {
						$topLevelCount++;
						if ($topLevelCount > $topLevelLimit) {
							continue;
						}
						$name = addslashes( $row->name );
						$alt = addslashes( $row->admin_menu_alt );
						$link = $row->admin_menu_link ? "'index2.php?$row->admin_menu_link'" : "null";
						echo "\t\t\t\t['<img src=\"../includes/$row->admin_menu_img\" />','$name',$link,null,'$alt'";
						if (array_key_exists( $row->id, $subs )) {
							foreach ($subs[$row->id] as $sub) {
								echo ",\n";
								$name = addslashes( $sub->name );
								$alt = addslashes( $sub->admin_menu_alt );
								$link = $sub->admin_menu_link ? "'index2.php?$sub->admin_menu_link'" : "null";
								echo "\t\t\t\t\t['<img src=\"../includes/$sub->admin_menu_img\" />','$name',$link,null,'$alt']";
							}
						}
						echo "\n\t\t\t\t],\n";
					}
				}
			}
			if ($topLevelLimit < $topLevelCount) {
				echo "\t\t\t\t['<img src=\"../includes/js/ThemeOffice/sections.png\" />','Mais Componentes...','index2.php?option=com_admin&task=listcomponents',null,'Mais componentes'],\n";
			}
	?>
				],
	<?php
		// Modules Sub-Menu
			if ($installModules | $editAllModules) {
	?>			_cmSplit,
				[null,'M�dulos',null,null,'Administra��o de M�dulos',
	<?php
				if ($editAllModules) {
	?>				['<img src="../includes/js/ThemeOffice/module.png" />', 'M�dulos do Site', "index2.php?option=com_modules", null, 'Administrar os M�dulos do Site'],
					['<img src="../includes/js/ThemeOffice/module.png" />', 'M�dulos da Administra��o', "index2.php?option=com_modules&client=admin", null, 'Administrar os M�dulos da Administra��o'],
	<?php
				}
	?>			],
	<?php
			} // if ($installModules | $editAllModules)
		} // if $installComponents
		// Mambots Sub-Menu
		if ($installMambots | $editAllMambots) {
	?>			_cmSplit,
				[null,'Plugins',null,null,'Administrar Plugins',
	<?php
			if ($editAllMambots) {
	?>				['<img src="../includes/js/ThemeOffice/module.png" />', 'Plugins do Site ', "index2.php?option=com_mambots", null, 'Administrar Plugins do Site'],
	<?php
			}
	?>			],
	<?php
		}
	?>
	<?php
		// Installer Sub-Menu
		if ($installModules) {
	?>			_cmSplit,
				[null,'Instaladores',null,null,'Instalar recursos',
	<?php
			if ($manageTemplates) {
	?>				['<img src="../includes/js/ThemeOffice/install.png" />','Temas - Site','index2.php?option=com_installer&element=template&client=',null,'Instalar Temas para o Site'],
					['<img src="../includes/js/ThemeOffice/install.png" />','Temas - Administra��o','index2.php?option=com_installer&element=template&client=admin',null,'Instalar Temas para a �rea da Administra��o'],
	<?php
			}
			if ($manageLanguages) {
	?>				['<img src="../includes/js/ThemeOffice/install.png" />','Idiomas','index2.php?option=com_installer&element=language',null,'Instalar idiomas'],
					_cmSplit,
	<?php
			}
?>					['<img src="../includes/js/ThemeOffice/install.png" />', 'Componentes','index2.php?option=com_installer&element=component',null,'Instalar/Desinstalar Componentes'],
					['<img src="../includes/js/ThemeOffice/install.png" />', 'M�dulos', 'index2.php?option=com_installer&element=module', null, 'Instalar/Desinstalar M�dulos'],
					['<img src="../includes/js/ThemeOffice/install.png" />', 'Plugins', 'index2.php?option=com_installer&element=mambot', null, 'Instalar/Desinstalar Plugins'],
				],
	<?php
		} // if ($installModules)
		// Messages Sub-Menu
		if ($canConfig) {
	?>			_cmSplit,
  				[null,'Mensagens',null,null,'Administrador de mensagens',
  					['<img src="../includes/js/ThemeOffice/messaging_inbox.png" />','Caixa de Entrada','index2.php?option=com_messages',null,'Mensagens privadas'],
  					['<img src="../includes/js/ThemeOffice/messaging_config.png" />','Configura��es','index2.php?option=com_messages&task=config&hidemainmenu=1',null,'Configura��o de mensagens']
	  			],
	<?php
		// System Sub-Menu
		/*
	?>			_cmSplit,
  				[null,'Sistema',null,null,'Administrator do sistema',
	  				['<img src="../includes/js/ThemeOffice/joomla_16x16.png" />', 'Verificar Vers�o', 'index2.php?option=com_admin&task=versioncheck', null,'Verificar exist�ncia de nova vers�o Joomla'], 				
  			   		['<img src="../includes/js/ThemeOffice/sysinfo.png" />', 'Informa��es do Sistema', 'index2.php?option=com_admin&task=sysinfo', null,'Informa��o do sistema e dados PHP'],
	<?php
		*/
	?>			_cmSplit,
	  			[null,'Sistema',null,null,'Administra��o do Sistema',
	  				['<img src="../includes/js/ThemeOffice/joomla_16x16.png" />', 'Verificar Vers�o', 'http://www.joomla.org/content/blogcategory/32/66/', '_blank','Verificar exist�ncia de nova vers�o Joomla'], 				
	  				['<img src="../includes/js/ThemeOffice/sysinfo.png" />', 'Info do Sistema', 'index2.php?option=com_admin&task=sysinfo', null,'Informa��o do sistema e dados PHP'],
	<?php
	  		if ($canConfig) {
	?>
					['<img src="../includes/js/ThemeOffice/checkin.png" />', 'Desbloqueio Global', 'index2.php?option=com_checkin', null,'Validar os itens bloqueados ou `checked-out�'],					
	<?php
				if ($mosConfig_caching) {
	?>				['<img src="../includes/js/ThemeOffice/config.png" />','Limpar Caches de Conte�do','index2.php?option=com_admin&task=clean_cache',null,'Limpar as caches de Conte�do'],
					['<img src="../includes/js/ThemeOffice/config.png" />','Limpar Todas as Caches','index2.php?option=com_admin&task=clean_all_cache',null,'Limpar todas as caches'],
	<?php
				}
			}
	?>			],
	<?php
				}
	?>			_cmSplit,
	<?php
		// Help Sub-Menu
	?>			[null,'Ajuda','index2.php?option=com_admin&task=help',null,null]
			];
			cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
			</script>
	<?php
		}


		/**
		* Show an disbaled version of the menu, used in edit pages
		* @param string The current user type
		*/
		function showDisabled( $usertype='' ) {
			global $acl;

			$canConfig 			= $acl->acl_check( 'administration', 'config', 'users', $usertype );
			$installModules 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'modules', 'all' );
			$editAllModules 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'modules', 'all' );
			$installMambots 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'mambots', 'all' );
			$editAllMambots 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'mambots', 'all' );
			$installComponents 	= $acl->acl_check( 'administration', 'install', 'users', $usertype, 'components', 'all' );
			$editAllComponents 	= $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', 'all' );
			$canMassMail 		= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_massmail' );
			$canManageUsers 	= $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_users' );

			$text = 'Menu inativo para esta p�gina';
			?>
			<div id="myMenuID" class="inactive"></div>
			<script language="JavaScript" type="text/javascript">
			var myMenu =
			[
			<?php
		/* Home Sub-Menu */
			?>
				[null,'<?php echo 'In�cio'; ?>',null,null,'<?php echo $text; ?>'],
				_cmSplit,
			<?php
		/* Site Sub-Menu */
			?>
				[null,'<?php echo 'Site'; ?>',null,null,'<?php echo $text; ?>'
				],
			<?php
		/* Menu Sub-Menu */
			?>
				_cmSplit,
				[null,'<?php echo 'Menus'; ?>',null,null,'<?php echo $text; ?>'
				],
				_cmSplit,
			<?php
		/* Content Sub-Menu */
			?>
	 			[null,'<?php echo 'Conte�dos'; ?>',null,null,'<?php echo $text; ?>'
				],
			<?php
		/* Components Sub-Menu */
				if ( $installComponents | $editAllComponents) {
					?>
					_cmSplit,
					[null,'<?php echo 'Componentes'; ?>',null,null,'<?php echo $text; ?>'
					],
					<?php
				} // if $installComponents
				?>
			<?php
		/* Modules Sub-Menu */
				if ( $installModules | $editAllModules) {
					?>
					_cmSplit,
					[null,'<?php echo 'M�dulos'; ?>',null,null,'<?php echo $text; ?>'
					],
					<?php
				} // if ( $installModules | $editAllModules)
				?>
			<?php
		/* Mambots Sub-Menu */
				if ( $installMambots | $editAllMambots) {
					?>
					_cmSplit,
					[null,'<?php echo 'Plugins'; ?>',null,null,'<?php echo $text; ?>'
					],
					<?php
				} // if ( $installMambots | $editAllMambots)
				?>


				<?php
		/* Installer Sub-Menu */
				if ( $installModules) {
					?>
					_cmSplit,
					[null,'<?php echo 'Instaladores'; ?>',null,null,'<?php echo $text; ?>'
						<?php
						?>
					],
					<?php
				} // if ( $installModules)
				?>
				<?php
		/* Messages Sub-Menu */
				if ( $canConfig) {
					?>
					_cmSplit,
		  			[null,'<?php echo 'Mensagens'; ?>',null,null,'<?php echo $text; ?>'
		  			],
					<?php
				}
				?>

				<?php
		/* System Sub-Menu */
				if ( $canConfig) {
					?>
					_cmSplit,
		  			[null,'<?php echo 'Sistema'; ?>',null,null,'<?php echo $text; ?>'
					],
					<?php
				}
				?>
				_cmSplit,
				<?php
		/* Help Sub-Menu */
				?>
				[null,'<?php echo 'Ajuda'; ?>',null,null,'<?php echo $text; ?>']
			];
			cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
			</script>
			<?php
		}
	}
}
$cache =& mosCache::getCache( 'mos_fullmenu' );

$hide = intval( mosGetParam( $_REQUEST, 'hidemainmenu', 0 ) );

if ( $hide ) {
	mosFullAdminMenu::showDisabled( $my->usertype );
} else {
	mosFullAdminMenu::show( $my->usertype );
}
?>