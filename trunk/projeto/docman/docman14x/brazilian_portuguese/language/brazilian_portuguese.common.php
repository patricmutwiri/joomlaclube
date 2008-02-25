<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.common.php 559 2008-01-17 08:59:15Z mjaz $
 * @package DOCman_1.4
 * @copyright (C) 2003-2007 The DOCman Development Team
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.org/ Official web site
 **/
defined('_VALID_MOS') or die('N�o � permitido o acesso direto.');

/**
 * Brazilian Portuguese pt-BR language file
 *
 * Creator:  Fernando Soares
 * Email:    fsoares@fsoares.com.br
 * website:  www.fernandosoares.com.br
 * Revision: 1.1
 * Date:     November 2007
**/

define ('_DM_DATEFORMAT_LONG','%d-%m-%Y %H:%M'); // use PHP strftime Format, more info at http://php.net
define ('_DM_DATEFORMAT_SHORT','%d-%m-%Y');		 // use PHP strftime Format, more info at http://php.net
define ('_DM_ISO','iso-8859-1');
define ('_DM_LANG','pt-br');

// -- General
define('_DML_NAME', "Nome");
define('_DML_DATE', "Data");
define('_DML_DATE_MODIFIED', "Modificado em");
define('_DML_HITS', "Acessos");
define('_DML_SIZE', "Tamanho");
define('_DML_EXT', "Extens�o");
define('_DML_MIME', "Tipo Mime");
define('_DML_THUMBNAIL', "Miniatura");
define('_DML_DESCRIPTION', "Descri��o:");
define('_DML_VERSION', "Vers�o");
define('_DML_DEFAULT', "Padr�o");
define('_DML_FOLDER', "Pasta");
define('_DML_FOLDERS', "Pastas");
define('_DML_FILE', "Arquivo");
define('_DML_FILES', "Arquivos");
define('_DML_URL', "URL");
define('_DML_PARAMS', "Par�metro");
define('_DML_PARAMETERS', "Par�metros");
define('_DML_TOP', "In�cio");
define('_DML_PROPERTY', "Propriedade");
define('_DML_VALUE', "Valor");
define('_DML_PATH', "Caminho");

define('_DML_DOC', "Documento");
define('_DML_DOCS', "Documentos");
define('_DML_DOCUMENT', "Documento");
define('_DML_CAT', "Categoria");
define('_DML_CATS', "Categorias");
define('_DML_CATEGORY', "Categoria");

define('_DML_UPLOAD', "Enviar");
define('_DML_SECURITY', "Seguran�a");
define('_DML_CPANEL', "In�cio");
define('_DML_CONFIG', "Configura��o");
define('_DML_LICENSE', "Licen�a");
define('_DML_LICENSES', "Licen�as");
define('_DML_UPDATES', "Atualiza��es");
define('_DML_DOWNLOADS', "Downloads");

define('_DML_HOMEPAGE', "Website");

define('_DML_NO', "N�o");
define('_DML_YES', "Sim");
define('_DML_OK', "OK");
define('_DML_CANCEL', "Cancelar");
define('_DML_ADD', "Adicionar");
define('_DML_EDIT', "Editar");
define('_DML_CONTINUE', "Continuar");
define('_DML_SAVE', "Salvar");

define('_DML_APPROVED', "Aprovado");
define('_DML_DELETED', "Deletado");

define('_DML_INSTALL', "Instalar");
define('_DML_PUBLISHED', "Publicado");
define('_DML_UNPUBLISH', "N�o Publicado");
define('_DML_CHECKED_OUT', "Por Revisar");

define('_DML_TOOLTIP', "Dica DOCman");
define('_DML_FILTER_NAME', "Filtrar por nome");

define('_DML_TITLE', "T�tulo");
define('_DML_MULTIPLE_SELECTS', "ao selecionar, pressione a tecla <b>Ctrl</b> (para Windows/Unix/Linux) ou a tecla<b>Command</b> (para Mac).");

define('_DML_USER', "Usu�rio");
define('_DML_OWNER',  "Acessos");
define('_DML_CREATOR', "Autor");
define('_DML_EDITOR', "Respons�vel");
define('_DML_MAINTAINER', "Respons�vel");
define('_DML_UNKNOWN', "Desconhecido");

define('_DML_FILEICON_ALT', "�cone do arquivo");

define('_DML_NOT_AUTHORIZED', "N�o autorizado");
define('_DML_ERROR', "Erro");
define('_DML_OPERATION_FAILED', "Falha na opera��o");

define('_DML_EDIT_THIS_MODULE', "Editar este m�dulo");
define('_DML_UNPUBLISH_THIS_MODULE', "Despublicar este m�dulo");
define('_DML_ORDER_THIS_MODULE', "Ordenar este m�dulo");

define('_DML_WRITABLE', "Grav�vel");
define('_DML_UNWRITABLE', "N�o grav�vel");

define('_DML_SAVED_CHANGES', "Altera��es salvas");
define('_DML_ARE_YOU_SURE', "Voc� tem certeza?");


// -- HTML Class
define('_DML_SELECT_CAT', "Selecionar categoria");
define('_DML_SELECT_DOC', "Selecionar documento");
define('_DML_SELECT_FILE', "Selecionar arquivo");
define('_DML_ALL_CATS', "- Todas as categorias");
define('_DML_SELECT_USER', "Selecionar us�rio");
define('_DML_GENERAL', "Geral");
define('_DML_GROUPS', "Grupos");
define('_DML_DOCMAN_GROUPS', "Grupos DOCman<-");
define('_DML_MAMBO_GROUPS', "Grupos Joomla<-");
define('_DML_JOOMLA_GROUPS', "Grupos Joomla<-"); // alias
define('_DML_USERS', "Usu�rios");
define('_DML_EVERYBODY', "Todos");
define('_DML_ALL_REGISTERED', "Todos os Registrados");
define('_DML_NO_USER_ACCESS', "Sem Acesso para Usu�rio");
define('_DML_AUTO_APPROVE', "Aprova��o Autom�tica");
define('_DML_AUTO_PUBLISH', "Publica��o Autom�tica");
define('_DML_GROUP', "Grupo");
define('_DML_GROUP_PUBLISHER', "Publicador");
define('_DML_GROUP_EDITOR', "Editor");
define('_DML_GROUP_AUTHOR', "Autor");

// -- File Class
define('_DML_OPTION_HTTP', "Carregar um arquivo do seu computador");
define('_DML_OPTION_XFER', "Transferir um arquivo de outro servidor");
define('_DML_OPTION_LINK', "Linkar a um arquivo de outro servidor");
define('_DML_SIZEEXCEEDS', "O tamanho excede o m�ximo permitido.");
define('_DML_ONLYPARTIAL', "Apenas uma parte do arquivo foi recebida. Tente novamente.");
define('_DML_NOUPLOADED', "Nenhum documento enviado.");
define('_DML_TRANSFERERROR', "Ocorreu um erro na transfer�ncia");
define('_DML_DIRPROBLEM', "Problema no diret�rio - n�o foi poss�vel mover o arquivo.");
define('_DML_DIRPROBLEM2', "Problema no diret�rio");
define('_DML_COULDNOTCONNECT', "N�o foi poss�vel conectar ao servidor");
define('_DML_COULDNOTOPEN', "N�o foi poss�vel abrir o diret�rio de destino. Verifique as permiss�es.");
define('_DML_FILETYPE', "Tipo de arquivo");
define('_DML_NOTPERMITED', "N�o permitido");
define('_DML_EMPTY', "Vazio");

define('_DML_ALREADYEXISTS', "J� existe.");
define('_DML_PROTOCOL', "Protocolo");
define('_DML_NOTSUPPORTED', "N�o suportado.");
define('_DML_NOFILENAME', "Nenhum nome de arquivo especificado.");
define('_DML_FILENAME', "Nome do arquivo");
define('_DML_CONTAINBLANKS', "cont�m espa�os.");
define('_DML_ISNOTVALID', "n�o � um nome de arquivo v�lido");
define('_DML_SELECTIMAGE', "Selecionar imagem");
define('_DML_FAILEDTOCREATEDIR', "Falha ao criar o diret�rio");
define('_DML_DIRNOTEXISTS', "O diret�rio n�o existe; n�o � poss�vel remover os arquivos");
define('_DML_TEMPLATEEMPTY', "O id do tema est� vazio; n�o � poss�vel remover os arquivos");
define('_DML_INTERRORMAMBOT', "Erro interno: nenhum plugin definido");
define('_DML_INTERRORMABOT', _DML_INTERRORMAMBOT); // alias
define('_DML_NOTARGGIVEN', "n�o foram fornecidos argumentos suficientes");
define('_DML_ARG', "argumento");
define('_DML_ISNOTARRAY', "n�o � uma matriz");

define('_DML_NEW', "novo!");
define('_DML_HOT', "popular!");

define('_DML_BYTES', "Bytes");
define('_DML_KB', "KB");
define('_DML_MB', "MB");
define('_DML_GB', "GB");
define('_DML_TB', "TB");


// -- Form Validation
define('_DML_ENTRY_ERRORS', "Sistema de Mensagens do DOCman : Por favor corrija os seguintes erros:");
define('_DML_ENTRY_TITLE', "A entrada deve ter um t�tulo.");
define('_DML_ENTRY_NAME', "A entrada deve ter um nome.");
define('_DML_ENTRY_DATE', "A entrada deve ter uma data.");
define('_DML_ENTRY_OWNER', "A entrada deve ter um propriet�rio.");
define('_DML_ENTRY_CAT', "A entrada deve ter uma categoria.");
define('_DML_ENTRY_DOC', "A entrada deve ter um documento definido.");
define('_DML_ENTRY_MAINT', "A entrada deve ter um editor definido.");

define('_DML_ENTRY_DOCLINK_LINK', "O documento deve ter um LINK selecionado. (Documento linkado na aba de detalhes.)");
define('_DML_ENTRY_DOCLINK', "O documento tem um nome de arquivo e um link para documento na aba de detalhes." );
define('_DML_ENTRY_DOCLINK_PROTOCOL', "Protocolo desconhecido para o link de documento na aba de detalhes");
define('_DML_ENTRY_DOCLINK_NAME', "Necess�rio link de documento completo na aba de detalhes");
define('_DML_ENTRY_DOCLINK_HOST', "� necess�ria uma URL completa");
define('_DML_ENTRY_DOCLINK_INVALID', "Arquivo n�o encontrado");
define('_DML_FILENAME_REQUIRED', "� necess�rio um nome de arquivo");

// Missing  constants from J!1.0.x
define('_DML_FILTER', "Filtro");
define('_DML_UPDATE', "Atualizar");
define('_DML_SEARCH_ANYWORDS', "Qualquer Termo");
define('_DML_SEARCH_ALLWORDS', "Todos os Termos");
define('_DML_SEARCH_PHRASE', "Termos exatos");
define('_DML_SEARCH_NEWEST', "Recentes primeiro");
define('_DML_SEARCH_OLDEST', "Antigos primeiro");
define('_DML_SEARCH_POPULAR', "Popularidade");
define('_DML_SEARCH_ALPHABETICAL', "Alfabeticamente");
define('_DML_SEARCH_CATEGORY', "Categoria");
define('_DML_SEARCH_MESSAGE', "Os termos de pesquisa devem ter um m�nimo de 3 caracteres e um m�ximo de 20 caracteres");
define('_DML_SEARCH_TITLE', "Pesquisar");
define('_DML_PROMPT_KEYWORD', "Pesquisar palavra-chave");
define('_DML_SEARCH_MATCHES', "obtidos %d resultados");
define('_DML_NOKEYWORD', "N�o foram encontrados resultados");
define('_DML_IGNOREKEYWORD', "Um ou mais termos comuns foram ignorados na pesquisa");
define('_DML_CMN_ORDERING', "Ordena��o");

?>