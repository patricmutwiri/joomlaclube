<?php
/**
* @version $Id: uploadimage.php 10002 2008-02-08 10:56:57Z willebil $
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
define( "_VALID_MOS", 1 );

/** security check */
require( '../includes/auth.php' );
include_once ( $mosConfig_absolute_path . '/language/' . $mosConfig_lang . '.php' );

/*
* Stops file upload below /images/stories directory
* Added 1.0.11
*/
function limitDirectory( &$directory ) {
	if ( strpos($directory, '../') !== false ) {
		$directory = str_replace('../', '', $directory);
	}

	if ( strpos($directory, '..\\') !== false ) {
		$directory = str_replace('..\\', '', $directory);
	}

	if ( strpos($directory, ':') !== false ) {
		$directory = str_replace(':', '', $directory);
	}

	return $directory;
}

// limit access to functionality
$option = strval( mosGetParam( $_SESSION, 'option', '' ) );
$task 	= strval( mosGetParam( $_SESSION, 'task', '' ) );

switch ($option) {
	case 'com_banners':
		break;

	case 'com_categories':
	case 'com_content':
	case 'com_sections':
	case 'com_typedcontent':
		if ( $task != 'edit' && $task != 'editA' && $task != 'new' ) {
			echo _NOT_AUTH;
			return;
		}
		break;

	default:
		echo _NOT_AUTH;
		return;
		break;
}

// mainframe is an API workhorse, lots of 'core' interaction routines
$mainframe = new mosMainFrame( $database, $option, $mosConfig_absolute_path, true );

$directory	= mosGetParam( $_REQUEST, 'directory', '');
$css 		= mosGetParam( $_REQUEST, 't','');

$media_path	= $mosConfig_absolute_path.'/media/';

$userfile2		= (isset($_FILES['userfile']['tmp_name']) ? $_FILES['userfile']['tmp_name'] : "");
$userfile_name	= (isset($_FILES['userfile']['name']) ? $_FILES['userfile']['name'] : "");

limitDirectory( $directory );

// check to see if directory exists
if ( $directory != 'banners' && $directory != '' && !is_dir($mosConfig_absolute_path .'/images/stories/'. $directory)) {
	$directory 	= '';
}

$action = "window.location.href = 'uploadimage.php?directory=$directory&amp;t=$css'";

if (isset($_FILES['userfile'])) {
	if ($directory == 'banners') {
		$base_Dir = "../../images/banners/";
	} else if ( $directory != '' ) {
		$base_Dir = '../../images/stories/'. $directory;

		if (!is_dir($mosConfig_absolute_path .'/images/stories/'. $directory)) {
			$base_Dir 	= '../../images/stories/';
			$directory 	= '';
		}
	} else {
		$base_Dir = '../../images/stories/';
	}

	if (empty($userfile_name)) {
		mosErrorAlert("Por favor, selecione uma imagem para enviar", $action);
	}

	$filename = split("\.", $userfile_name);

	if (eregi("[^0-9a-zA-Z_]", $filename[0])) {
		mosErrorAlert('Arquivo tem que conter somente caracteres alfanum�ricos. N�o utilize espa�os.', $action );
	}

	if (file_exists($base_Dir.$userfile_name)) {
		mosErrorAlert('A imagem '.$userfile_name.' j� existe.', $action );
	}

	if ((strcasecmp(substr($userfile_name,-4),'.gif')) && (strcasecmp(substr($userfile_name,-4),'.jpg')) && (strcasecmp(substr($userfile_name,-4),'.png')) && (strcasecmp(substr($userfile_name,-4),'.bmp')) &&(strcasecmp(substr($userfile_name,-4),'.doc')) && (strcasecmp(substr($userfile_name,-4),'.xls')) && (strcasecmp(substr($userfile_name,-4),'.ppt')) && (strcasecmp(substr($userfile_name,-4),'.swf')) && (strcasecmp(substr($userfile_name,-4),'.pdf'))) {
		mosErrorAlert('O arquivo deve ser do tipo gif, png, jpg, bmp, swf, doc, xls ou ppt', $action);
	}


	if (eregi('.pdf', $userfile_name) || eregi('.doc', $userfile_name) || eregi('.xls', $userfile_name) || eregi('.ppt', $userfile_name)) {
		if (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$media_path.$_FILES['userfile']['name']) || !mosChmod($media_path.$_FILES['userfile']['name'])) {
			mosErrorAlert('O envio do arquivo '.$userfile_name.' falhou', $action);
		} else {
			mosErrorAlert('O envio do arquivo '.$userfile_name.' para o diret�rio '.$base_Dir.' foi realizado com sucesso', "window.close()");
		}
	} elseif (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$base_Dir.$_FILES['userfile']['name']) || !mosChmod($base_Dir.$_FILES['userfile']['name'])) {
		mosErrorAlert('O envio do arquivo '.$userfile_name.' falhou', $action);
	} else {
		mosErrorAlert('O envio do arquivo '.$userfile_name.' para '.$base_Dir.' foi realizado com sucesso', "window.close()");
	}
		echo $base_Dir.$_FILES['userfile']['name'];
}

// css file handling
// check to see if template exists
if ( $css != '' && !is_dir($mosConfig_absolute_path .'/administrator/templates/'. $css .'/css/template_css.css' )) {
	$css 	= 'joomla_admin';
} else if ( $css == '' ) {
	$css 	= 'joomla_admin';
}

$iso = split( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Enviar um arquivo</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
</head>
<body>

<link rel="stylesheet" href="../templates/<?php echo $css; ?>/css/template_css.css" type="text/css" />
<form method="post" action="uploadimage.php" enctype="multipart/form-data" name="filename">

<table class="adminform">
<tr>
	<th class="title">
		Enviar Arquivo : <?php echo $directory; ?>
	</th>
</tr>
<tr>
	<td align="center">
		<input class="inputbox" name="userfile" type="file" />
	</td>
</tr>
<tr>
	<td>
		<input class="button" type="submit" value="Enviar" name="fileupload" />
		Tamanho M�ximo = <?php echo ini_get( 'post_max_size' );?>
	</td>
</tr>
</table>

<input type="hidden" name="directory" value="<?php echo $directory;?>" />
<input type="hidden" name="<?php echo josSpoofValue(); ?>" value="1" />
		</form>

</body>
</html>
