<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) {
	die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
}
// copydirr.inc.php
/*
http://de3.php.net/manual/de/function.copy.php#55130
26.07.2005
Author: Anton Makarenko
makarenkoa at ukrpost dot net
webmaster at eufimb dot edu dot ua
*/
function copydirr($fromDir,$toDir,$chmod=0757,$verbose=false)
/*
copies everything from directory $fromDir to directory $toDir
and sets up files mode $chmod
*/
{
	//* Check for some errors
	$errors=array();
	$messages=array();
	if (!is_writable($toDir)) {
		$errors[]='target '.$toDir.' não é editável';
	}
	if (!is_dir($toDir)) {
		$errors[]='target '.$toDir.' não é diretório';
	}
	if (!is_dir($fromDir)) {
		$errors[]='source '.$fromDir.' não é diretório';
	}
	if (!empty($errors))
	{
		if ($verbose) {
			foreach($errors as $err) {
				echo '<strong>Erro</strong>: '.$err.'<br />';
			}
		}
		return false;
	}
	//*/
	$exceptions=array('.','..');
	//* Processing
	$handle=opendir($fromDir);
	while (false!==($item=readdir($handle)))
	if (!in_array($item,$exceptions))
	{
		//* cleanup for trailing slashes in directories destinations
		$from=str_replace('//','/',$fromDir.'/'.$item);
		$to=str_replace('//','/',$toDir.'/'.$item);
		//*/
		if (is_file($from))
		{
			if (@copy($from,$to))
			{
				chmod($to,$chmod);
				touch($to,filemtime($from)); // to track last modified time
				$messages[]='Arquivo copiado de '.$from.' para '.$to;
			}
			else
			$errors[]='não pode copiar o arquivo de '.$from.' para '.$to;
		}
		if (is_dir($from))
		{
			if (@mkdir($to))
			{
				chmod($to,$chmod);
				$messages[]='Diretório criado: '.$to;
			}
			else
			$errors[]='não pode criar diretório '.$to;
			copydirr($from,$to,$chmod,$verbose);
		}
	}
	closedir($handle);
	//*/
	//* Output
	if ($verbose)
	{
		foreach($errors as $err)
		echo '<strong>Erro</strong>: '.$err.'<br />';
		foreach($messages as $msg)
		echo $msg.'<br />';
	}
	//*/
	return true;
}
/**
 * Replace file_get_contents()
 *
 * @category	PHP
 * @package	 PHP_Compat
 * @link		http://php.net/function.file_get_contents
 * @author	  Aidan Lister <aidan@php.net>
 * @version	 $Revision: 617 $
 * @internal	resource_context is not supported
 * @since		PHP 5
 * @require	 PHP 4.0.1 (trigger_error)
 */
if (!function_exists('file_get_contents')) {
	function file_get_contents($filename, $incpath = false, $resource_context = null)
	{
		if (false === $fh = fopen($filename, 'rb', $incpath)) {
			trigger_error('file_get_contents() falhou: Nenhum arquivo ou diretório encontrado!', E_USER_WARNING);
			return false;
		}

		clearstatcache();
		if ($fsize = @filesize($filename)) {
			$data = fread($fh, $fsize);
		} else {
			$data = '';
			while (!feof($fh)) {
				$data .= fread($fh, 8192);
			}
		}

		fclose($fh);
		return $data;
	}
}
if (!defined('FILE_USE_INCLUDE_PATH')) {
	define('FILE_USE_INCLUDE_PATH', 1);
}

if (!defined('FILE_APPEND')) {
	define('FILE_APPEND', 8);
}


/**
 * Replace file_put_contents()
 *
 * @category	PHP
 * @package	 PHP_Compat
 * @link		http://php.net/function.file_put_contents
 * @author	  Aidan Lister <aidan@php.net>
 * @version	 $Revision: 617 $
 * @internal	resource_context is not supported
 * @since		PHP 5
 * @require	 PHP 4.0.1 (trigger_error)
 */
if (!function_exists('file_put_contents')) {
	function file_put_contents($filename, $content, $flags = null, $resource_context = null)
	{
		// If $content is an array, convert it to a string
		if (is_array($content)) {
			$content = implode('', $content);
		}

		// If we don't have a string, throw an error
		if (!is_scalar($content)) {
			trigger_error('file_put_contents() O 2nd parâmetro deve ser uma string ou um array', E_USER_WARNING);
			return false;
		}

		// Get the length of date to write
		$length = strlen($content);

		// Check what mode we are using
		$mode = ($flags & FILE_APPEND) ?
		$mode = 'a' :
		$mode = 'w';

		// Check if we're using the include path
		$use_inc_path = ($flags & FILE_USE_INCLUDE_PATH) ?
		true :
		false;

		// Open the file for writing
		if (($fh = @fopen($filename, $mode, $use_inc_path)) === false) {
			trigger_error('file_put_contents() falhou: Permissão negada', E_USER_WARNING);
			return false;
		}

		// Write to the file
		$bytes = 0;
		if (($bytes = @fwrite($fh, $content)) === false) {
			$errormsg = sprintf('file_put_contents() Falhou ao gravar %d bytes para %s',
			$length,
			$filename);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}

		// Close the handle
		@fclose($fh);

		// Check all the data was written
		if ($bytes != $length) {
			$errormsg = sprintf('file_put_contents() Somente %d de %d bytes foram salvos, possivelmente por falta de espaço em disco.',
			$bytes,
			$length);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}

		// Return length
		return $bytes;
	}
}
?>
