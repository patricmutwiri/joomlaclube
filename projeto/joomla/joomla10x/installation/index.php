<?php
/**
* @version $Id: index.php 7424 2007-05-17 15:56:10Z robs $
* @package Joomla / Tradu��o JoomlaClube 2008 - www.joomlaclube.com.br
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Set flag that this is a parent file
define( '_VALID_MOS', 1 );

if (file_exists( '../configuration.php' ) && filesize( '../configuration.php' ) > 10) {
	header( "Location: ../index.php" );
	exit();
}
require( '../globals.php' );
require_once( '../includes/version.php' );

/** Include common.php */
include_once( 'common.php' );
view();

/*
 * Added 1.0.11
 */
function view() {	
	$sp 		= ini_get( 'session.save_path' );
	
	$_VERSION 		= new joomlaVersion();				 	
	$versioninfo 	= $_VERSION->RELEASE .'.'. $_VERSION->DEV_LEVEL .' '. $_VERSION->DEV_STATUS;
	$version 		= $_VERSION->PRODUCT .' '. $_VERSION->RELEASE .'.'. $_VERSION->DEV_LEVEL .' '. $_VERSION->DEV_STATUS.' [ '.$_VERSION->CODENAME .' ] '. $_VERSION->RELDATE .' '. $_VERSION->RELTIME .' '. $_VERSION->RELTZ;
	
	echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
	?>
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
          <div id="joomla"><img src="header_install.png" alt="Instala��o do Joomla" /></div>
        </div>
      </div>
	</div>
	
	<div id="ctr" align="center">
		<div class="install">
			<div id="stepbar">
				<div class="step-on">Checagem de <br /> pr�-instala��o</div>
				<div class="step-off">Licen�a</div>
				<div class="step-off">1� passo</div>
				<div class="step-off">2� passo</div>
				<div class="step-off">3� passo</div>
				<div class="step-off">4� passo</div>
			</div>
	
			<div id="right">
				<div id="step">Checagem de pr�-instala��o</div>
	
				<div class="far-right">
					<input name="Button2" type="submit" class="button" value="Pr�ximo >>" onclick="window.location='install.php';" />
					<br/>
					<br/>
					<input type="button" class="button" value="Checar Novamente" onclick="window.location=window.location" />
				</div>
				<div class="clr"></div>				
					
				<h1>Checagem de pr�-instala��o para:<br/><?php echo $version; ?></h1>
	
				<h1>
					Configura��es requeridas:
				</h1>
				
<div class="install-text"> Se algum destes itens estiver destacado em vermelho
  ent�o por favor providencie a corre��o do mesmo. A persist�ncia da falha pode
  levar a sua instala��o do Joomla a n�o funcionar corretamente.
  <div class="ctr"></div>
			  </div>
	
				<div class="install-form">
					<div class="form-block">
						<table class="content">
						<tr>
							<td class="item">
								Vers�o do PHP >  4.1.0							</td>
							<td align="left">
								<?php echo phpversion() < '4.1' ? '<b><font color="red">N�o</font></b>' : '<b><font color="green">Sim</font></b>';?>							</td>
						</tr>
						<tr>
							<td>
								&nbsp; - Suporte � compress�o zlib							</td>
							<td align="left">
								<?php echo extension_loaded('zlib') ? '<b><font color="green">Dispon�vel</font></b>' : '<b><font color="red">N�o Dispon�vel</font></b>';?>							</td>
						</tr>
						<tr>
							<td>
								&nbsp; - Suporte � XML							</td>
							<td align="left">
								<?php echo extension_loaded('xml') ? '<b><font color="green">Dispon�vel</font></b>' : '<b><font color="red">N�o Dispon�vel</font></b>';?>							</td>
						</tr>
						<tr>
							<td>
								&nbsp; - Suporte � MySQL							</td>
							<td align="left">
								<?php echo function_exists( 'mysql_connect' ) ? '<b><font color="green">Dispon�vel</font></b>' : '<b><font color="red">N�o Dispon�vel</font></b>';?>							</td>
						</tr>
						<tr>
							<td valign="top" class="item">
								configuration.php							</td>
							<td align="left">
								<?php
								if (@file_exists('../configuration.php') &&  @is_writable( '../configuration.php' )){
									echo '<b><font color="green">Permiss�o para escrita</font></b>';
								} else if (is_writable( '..' )) {
									echo '<b><font color="green">Permiss�o para escrita</font></b>';
								} else {
									echo '<b><font color="red">Sem permiss�o para escrita</font></b><br /><span class="small">You can still continue the install as the configuration will be displayed at the end, just copy & paste this and upload.</span>';
								} 
								?>							</td>
						</tr>
						<tr>
							<td class="item">
								Caminho das sess�es							</td>
							<td align="left" valign="top">
								<?php echo is_writable( $sp ) ? '<b><font color="green">Permiss�o para escrita</font></b>' : '<b><font color="red">Sem permiss�o para escrita</font></b>';?>							</td>
						</tr>
						<tr>
							<td class="item" colspan="2">
								<b>
									<?php echo $sp ? $sp : 'N�o definido'; ?>								</b>							</td>
						</tr>
						</table>
					</div>
				</div>
				<div class="clr"></div>
		
				<?php
				$wrongSettingsTexts = array();
				
				if ( ini_get('magic_quotes_gpc') != '1' ) {
					$wrongSettingsTexts[] = 'Configura��o PHP - Cita��es M�gicas (magic_quotes_gpc) est� `Desligado` em vez de `Ligado`';
				}
				if ( ini_get('register_globals') == '1' ) {
					$wrongSettingsTexts[] = 'Configura��o PHP - Registo de Globais (register_globals) est� `Ligado` em vez de `Desligado`';
				}

				if ( count($wrongSettingsTexts) ) {
					?>
<h1>
						Checar Seguran�a:
			  </h1>
					
					<div class="install-text">
						<p>
							As seguintes configura��es de seguran�a do servidor PHP n�o est�o otimizadas para SEGURAN�A � recomendado que elas sejam alteradas						</p>
						<p>
							Por favor, consulte o <a href="http://forum.joomla.org/index.php/topic,81058.0.html" target="_blank">artigo oficial Joomla! sobre Seguran�a de Servidores</a> para mais informa��es.						</p>
						<div class="ctr"></div>
					</div>
							
					<div class="install-form">
						<div class="form-block" style=" border: 1px solid #cc0000; background: #ffffcc;">
							<table class="content">
							<tr>
								<td class="item">
									<ul style="margin: 0px; padding: 0px; padding-left: 5px; text-align: left; padding-bottom: 0px; list-style: none;">
										<?php
										foreach ($wrongSettingsTexts as $txt) {
											?>	
											<li style="min-height: 25px; padding-bottom: 5px; padding-left: 25px; color: red; font-weight: bold; background-image: url(../includes/js/ThemeOffice/warning.png); background-repeat: no-repeat; background-position: 0px 2px;" >
												<?php
												echo $txt;
												?>
											</li>
											<?php
										}
										?>
									</ul>								</td>
							</tr>
							</table>
						</div>
					</div>
					<div class="clr"></div>
					<?php
				}
				?>
												
				<h1>
					Configura��es recomendadas:
			  </h1>
				
				<div class="install-text">
					<p>
						Estas configura��es s�o recomendadas para o PHP de modo a assegurar total compatibilidade com o Joomla. 
Contudo, o Joomla ainda poder� funcionar caso suas configura��es n�o estejam totalmente de acordo com o recomendado (como � o caso do Registar Globais)					</p>
					<div class="ctr"></div>
				</div>
		
				<div class="install-form">
					<div class="form-block">
		
						<table class="content">
						<tr>
							<td class="toggle" width="500px">
								Diretiva							</td>
							<td class="toggle">
								Recomendado							</td>
							<td class="toggle">
								Atual							</td>
						</tr>
						<?php
						$php_recommended_settings = array(array ('Modo Seguro','safe_mode','DESLIGADO'),
							array ('Exibir erros','display_errors','LIGADO'),
							array ('Enviar arquivos','file_uploads','LIGADO'),
							array ('Cita��es m�gicas GPC','magic_quotes_gpc','LIGADO'),
							array ('Cita��es m�gicas runtime','magic_quotes_runtime','DESLIGADO'),
							array ('Registro globais','register_globals','DESLIGADO'),
							array ('Mem�ria de sa�da','output_buffering','DESLIGADO'),
							array ('In�cio aut. de sess�o','session.auto_start','DESLIGADO'),
						);
						
						foreach ($php_recommended_settings as $phprec) {
							?>
							<tr>
								<td class="item">
									<?php echo $phprec[0]; ?>:								</td>
								<td class="toggle">
									<?php echo $phprec[2]; ?>:								</td>
								<td>
									<b>
										<?php
										if ( get_php_setting($phprec[1]) == $phprec[2] ) {
											?>
											<font color="green">
											<?php
										} else {
											?>
											<font color="red">
											<?php
										}
										echo get_php_setting($phprec[1]);
										?>
										</font>									</b>
							<td>							</tr>
							<?php
						}
						?>
						</table>
					</div>
				</div>
				<div class="clr"></div>
		
				<h1>
					Permiss�es de Arquivos e Diret�rios:
				</h1>
				
				<div class="install-text">
					Para que o Joomla funcione corretamente � necess�rio que ele tenha permiss�o de acesso ou grava��o a alguns arquivos e diret�rios. Caso esteja vis�vel a indica��o de "Sem permiss�o " dever� alterar as permiss�es nos arquivos ou diret�rios para permitir acesso de escrita ao Joomla (por FTP fazer CHOMOD 755 ou 777 aos arquivos).
					<div class="clr">&nbsp;&nbsp;</div>
					<div class="ctr"></div>
				</div>
		
				<div class="install-form">
					<div class="form-block">	
						<table class="content">
						<?php
						writableCell( 'administrator/backups' );
						writableCell( 'administrator/components' );
						writableCell( 'administrator/modules' );
						writableCell( 'administrator/templates' );
						writableCell( 'cache' );
						writableCell( 'components' );
						writableCell( 'images' );
						writableCell( 'images/banners' );
						writableCell( 'images/stories' );
						writableCell( 'language' );
						writableCell( 'mambots' );
						writableCell( 'mambots/content' );
						writableCell( 'mambots/editors' );
						writableCell( 'mambots/editors-xtd' );
						writableCell( 'mambots/search' );
						writableCell( 'mambots/system' );
						writableCell( 'media' );
						writableCell( 'modules' );
						writableCell( 'templates' );
						?>
						</table>
					</div>
					<div class="clr"></div>
				</div>
	
				
				<div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	
	<div class="ctr">
        <a href="http://www.joomla.org" target="_blank">JoomlaClube</a> Comunidade do Joomla no Brasil.<br />
		<a href="http://www.joomla.org" target="_blank">Joomla!</a> � um Software Livre liberado sob a licen�a GNU/GPL.
	</div>
	
	</body>
	</html>
	<?php
}

function get_php_setting($val) {
	$r =  (ini_get($val) == '1' ? 1 : 0);
	return $r ? 'LIGADO' : 'DESLIGADO';
}

function writableCell( $folder, $relative=1, $text='' ) {
	$writeable 		= '<b><font color="green">Permiss�o para escrita</font></b>';
	$unwriteable 	= '<b><font color="red">Sem permiss�o para escrita</font></b>';
	
	echo '<tr>';
	echo '<td class="item">' . $folder . '/</td>';
	echo '<td align="right">';
	if ( $relative ) {
		echo is_writable( "../$folder" ) 	? $writeable : $unwriteable;
	} else {
		echo is_writable( "$folder" ) 		? $writeable : $unwriteable;
	}
	echo '</tr>';
}
?>