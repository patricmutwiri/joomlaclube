<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.php 2009-02-16 $
 * @package DOCman_1.4
 * @copyright (C) 2003-2009 Joomlatools
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.eu/ Official website
 **/
defined("_VALID_MOS") or die("Não é permitido o acesso direto.");

/**
 * TRANSLATORS:
 * PLEASE ADD THE INFO BELOW
 */

/**
 * Language:  Brazilian Portuguese pt-BR
 * Creator:   Fernando Soares
 * Website:   www.fernandosoares.com.br
 * E-mail:    fsoares@fsoares.com.br
 * Revision:  1.2  (DOCman 1.4.0.stable)
 * Date:      16/02/2009
 */

define('_DML_TPL_DATEFORMAT_LONG', '%d/%m/%Y %H:%M');
define('_DML_TPL_DATEFORMAT_SHORT', '%d/%m/%Y');

// General
define('_DML_TPL_FILES', "Arquivos");
define('_DML_TPL_CATS', "Categorias");
define('_DML_TPL_DOCS', "Documentos");
define('_DML_TPL_CAT_VIEW', "Entrada Downloads");
define('_DML_TPL_MUST_LOGIN', "Você deve autenticar-se para enviar novos documentos");
define('_DML_TPL_SUBMIT', "Enviar Arquivo");
define('_DML_TPL_SEARCH_DOC', "Pesquisar Documentos");
define('_DML_TPL_LICENSE_DOC', "Licença do Documento");

// Titles
define('_DML_TPL_TITLE_BROWSE', "Downloads");
define('_DML_TPL_TITLE_EDIT', "Editar o Documento");
define('_DML_TPL_TITLE_SEARCH', "Pesquisar um Documento");
define('_DML_TPL_TITLE_DETAILS', "Detalhes do Documento");
define('_DML_TPL_TITLE_MOVE', "Mover Documento");
define('_DML_TPL_TITLE_UPDATE', "Atualizar Documento");
define('_DML_TPL_TITLE_UPLOAD', "Carregar um Documento");

// Documents
define('_DML_TPL_HITS', "Acessos");
define('_DML_TPL_DATEADDED', "Adicionado em");
define('_DML_TPL_HOMEPAGE', "Site");
define('_DML_TPL_NO_DOCS', "Não existem documentos nesta categoria");

//Document search
define('_DML_TPL_ORDER_BY', "Ordenar por");
define('_DML_TPL_ORDER_NAME', "Nome");
define('_DML_TPL_ORDER_DATE', "Data");
define('_DML_TPL_ORDER_HITS', "Acessos");
define('_DML_TPL_ORDER_ASCENT', "Ascendente");
define('_DML_TPL_ORDER_DESCENT', "Descendente");
define('_DML_TPL_NO_ITEMS_FOUND', "Não existem documentos");

//Document edit

//Document move
define('_DML_TPL_MOVE_DOC', "Mover documento para outra categoria");

//Document update
define('_DML_TPL_UPDATE_DOC', "Atualizar o documento");
define('_DML_TPL_UPDATE_OVERWRITE', "Assim, caso o nome seja o mesmo, irá SEMPRE sobreescrever o arquivo.");

//Document upload
define('_DML_TPL_UPLOAD_STEP', "Passo");
define('_DML_TPL_UPLOAD_OF', "de");
define('_DML_TPL_UPLOAD_NEXT', "Seguinte");
define('_DML_TPL_UPLOAD_DOC', "Assistente de Envio");
define('_DML_TPL_TRANSFER', "Transferir um arquivo de outro servidor");
define('_DML_TPL_LINK', "Ligar a um arquivo de outro servidor");
define('_DML_TPL_UPLOAD', "Carregar um arquivo do seu computador");

//Document tasks
//DEPRECATED in v1.4.0RC1, use _DML_BUTTON instead (frontend lang file)
define('_DML_TPL_DOC_DOWNLOAD', "Download");
define('_DML_TPL_DOC_VIEW', "Visualizar");
define('_DML_TPL_DOC_DETAILS', "Detalhes");
define('_DML_TPL_DOC_EDIT', "Editar");
define('_DML_TPL_DOC_MOVE', "Mover");
define('_DML_TPL_DOC_DELETE', "Deletar");
define('_DML_TPL_DOC_UPDATE', "Atualizar");
define('_DML_TPL_DOC_CHECKOUT', "Revisar");
define('_DML_TPL_DOC_CHECKIN', "Aprovar");
define('_DML_TPL_DOC_UNPUBLISH', "Despublicar");
define('_DML_TPL_DOC_PUBLISH', "Publicar");
define('_DML_TPL_DOC_RESET', "Reiniciar");
define('_DML_TPL_DOC_APPROVE', "Aprovar");
// -- END DEPRECATED

define('_DML_TPL_BACK', "Voltar");

//Document details
define('_DML_TPL_DETAILSFOR', "Detalhes de");
define('_DML_TPL_NAME', "Nome");
define('_DML_TPL_DESC', "Descrição");
define('_DML_TPL_FNAME', "Nome do arquivo");
define('_DML_TPL_FSIZE', "Tamanho");
define('_DML_TPL_FTYPE', "Tipo");
define('_DML_TPL_SUBBY', "Autor");
define('_DML_TPL_SUBDT', "Criado em:");
define('_DML_TPL_OWNER', "Visitas");
define('_DML_TPL_MAINT', "Responsável");
define('_DML_TPL_DOWNLOADS', "Downloads");
define('_DML_TPL_LASTUP', "Atualizado em");
define('_DML_TPL_LASTBY', "Atualizado por");
define('_DML_TPL_HOME', "Site" );
define('_DML_TPL_MIME', "Tipo de Mime");
define('_DML_TPL_CHECKED_OUT', "Revisado");
define('_DML_TPL_CHECKED_BY', "Revisado por");
define('_DML_TPL_MD5_CHECKSUM', "MD5 Checksum");
define('_DML_TPL_CRC_CHECKSUM', "CRC Checksum");

?>