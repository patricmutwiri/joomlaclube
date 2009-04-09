<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.common.php 2009-02-16 $
 * @package DOCman_1.4
 * @copyright (C) 2003-2009 Joomlatools
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.eu/ Official website
 **/
defined('_VALID_MOS') or die('Não é permitido o acesso direto.');

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

define ('_DM_DATEFORMAT_LONG','%d-%m-%Y %H:%M'); // use PHP strftime Format, more info at http://php.net
define ('_DM_DATEFORMAT_SHORT','%d-%m-%Y');		 // use PHP strftime Format, more info at http://php.net
define ('_DM_ISO','utf-8');
define ('_DM_LANG','pt-br');

// -- General
define('_DML_NAME', "Nome");
define('_DML_DATE', "Data");
define('_DML_DATE_MODIFIED', "Modificado em");
define('_DML_HITS', "Acessos");
define('_DML_SIZE', "Tamanho");
define('_DML_EXT', "Extensão");
define('_DML_MIME', "Tipo Mime");
define('_DML_THUMBNAIL', "Miniatura");
define('_DML_DESCRIPTION', "Descrição:");
define('_DML_VERSION', "Versão");
define('_DML_DEFAULT', "Padrão");
define('_DML_FOLDER', "Pasta");
define('_DML_FOLDERS', "Pastas");
define('_DML_FILE', "Arquivo");
define('_DML_FILES', "Arquivos");
define('_DML_URL', "URL");
define('_DML_PARAMS', "Parâmetro");
define('_DML_PARAMETERS', "Parâmetros");
define('_DML_TOP', "Início");
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
define('_DML_SECURITY', "Segurança");
define('_DML_CPANEL', "Início");
define('_DML_CONFIG', "Configuração");
define('_DML_LICENSE', "Licença");
define('_DML_LICENSES', "Licenças");
define('_DML_UPDATES', "Atualizações");
define('_DML_DOWNLOADS', "Downloads");

define('_DML_HOMEPAGE', "Website");

define('_DML_NO', "Não");
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
define('_DML_UNPUBLISH', "Não Publicado");
define('_DML_CHECKED_OUT', "Por Revisar");

define('_DML_TOOLTIP', "Dica DOCman");
define('_DML_FILTER_NAME', "Filtrar por nome");

define('_DML_TITLE', "Título");
define('_DML_MULTIPLE_SELECTS', "ao selecionar, pressione a tecla <b>Ctrl</b> (para Windows/Unix/Linux) ou a tecla<b>Command</b> (para Mac).");

define('_DML_USER', "Usuário");
define('_DML_OWNER',  "Acessos");
define('_DML_CREATOR', "Autor");
define('_DML_EDITOR', "Responsável");
define('_DML_MAINTAINER', "Responsável");
define('_DML_UNKNOWN', "Desconhecido");

define('_DML_FILEICON_ALT', "Ícone do arquivo");

define('_DML_NOT_AUTHORIZED', "Não autorizado");
define('_DML_ERROR', "Erro");
define('_DML_OPERATION_FAILED', "Falha na operação");

define('_DML_EDIT_THIS_MODULE', "Editar este módulo");
define('_DML_UNPUBLISH_THIS_MODULE', "Despublicar este módulo");
define('_DML_ORDER_THIS_MODULE', "Ordenar este módulo");

define('_DML_WRITABLE', "Gravável");
define('_DML_UNWRITABLE', "Não gravável");

define('_DML_SAVED_CHANGES', "Alterações salvas");
define('_DML_ARE_YOU_SURE', "Você tem certeza?");


// -- HTML Class
define('_DML_SELECT_CAT', "Selecionar categoria");
define('_DML_SELECT_DOC', "Selecionar documento");
define('_DML_SELECT_FILE', "Selecionar arquivo");
define('_DML_ALL_CATS', "- Todas as categorias");
define('_DML_SELECT_USER', "Selecionar usário");
define('_DML_GENERAL', "Geral");
define('_DML_GROUPS', "Grupos");
define('_DML_DOCMAN_GROUPS', "Grupos DOCman<-");
define('_DML_MAMBO_GROUPS', "Grupos Joomla<-");
define('_DML_JOOMLA_GROUPS', "Grupos Joomla<-"); // alias
define('_DML_USERS', "Usuários");
define('_DML_EVERYBODY', "Todos");
define('_DML_ALL_REGISTERED', "Todos os Registrados");
define('_DML_NO_USER_ACCESS', "Sem Acesso para Usuário");
define('_DML_AUTO_APPROVE', "Aprovação Automática");
define('_DML_AUTO_PUBLISH', "Publicação Automática");
define('_DML_GROUP', "Grupo");
define('_DML_GROUP_PUBLISHER', "Publicador");
define('_DML_GROUP_EDITOR', "Editor");
define('_DML_GROUP_AUTHOR', "Autor");

// -- File Class
define('_DML_OPTION_HTTP', "Carregar um arquivo do seu computador");
define('_DML_OPTION_XFER', "Transferir um arquivo de outro servidor");
define('_DML_OPTION_LINK', "Linkar a um arquivo de outro servidor");
define('_DML_SIZEEXCEEDS', "O tamanho excede o máximo permitido.");
define('_DML_ONLYPARTIAL', "Apenas uma parte do arquivo foi recebida. Tente novamente.");
define('_DML_NOUPLOADED', "Nenhum documento enviado.");
define('_DML_TRANSFERERROR', "Ocorreu um erro na transferência");
define('_DML_DIRPROBLEM', "Problema no diretório - não foi possível mover o arquivo.");
define('_DML_DIRPROBLEM2', "Problema no diretório");
define('_DML_COULDNOTCONNECT', "Não foi possível conectar ao servidor");
define('_DML_COULDNOTOPEN', "Não foi possível abrir o diretório de destino. Verifique as permissões.");
define('_DML_FILETYPE', "Tipo de arquivo");
define('_DML_NOTPERMITED', "Não permitido");
define('_DML_EMPTY', "Vazio");

define('_DML_ALREADYEXISTS', "Já existe.");
define('_DML_PROTOCOL', "Protocolo");
define('_DML_NOTSUPPORTED', "Não suportado.");
define('_DML_NOFILENAME', "Nenhum nome de arquivo especificado.");
define('_DML_FILENAME', "Nome do arquivo");
define('_DML_CONTAINBLANKS', "contém espaços.");
define('_DML_ISNOTVALID', "não é um nome de arquivo válido");
define('_DML_SELECTIMAGE', "Selecionar imagem");
define('_DML_FAILEDTOCREATEDIR', "Falha ao criar o diretório");
define('_DML_DIRNOTEXISTS', "O diretório não existe; não é possível remover os arquivos");
define('_DML_TEMPLATEEMPTY', "O id do tema está vazio; não é possível remover os arquivos");
define('_DML_INTERRORMAMBOT', "Erro interno: nenhum plugin definido");
define('_DML_INTERRORMABOT', _DML_INTERRORMAMBOT); // alias
define('_DML_NOTARGGIVEN', "não foram fornecidos argumentos suficientes");
define('_DML_ARG', "argumento");
define('_DML_ISNOTARRAY', "não é uma matriz");

define('_DML_NEW', "novo!");
define('_DML_HOT', "popular!");

define('_DML_BYTES', "Bytes");
define('_DML_KB', "KB");
define('_DML_MB', "MB");
define('_DML_GB', "GB");
define('_DML_TB', "TB");


// -- Form Validation
define('_DML_ENTRY_ERRORS', "Sistema de Mensagens do DOCman : Por favor corrija os seguintes erros:");
define('_DML_ENTRY_TITLE', "A entrada deve ter um título.");
define('_DML_ENTRY_NAME', "A entrada deve ter um nome.");
define('_DML_ENTRY_DATE', "A entrada deve ter uma data.");
define('_DML_ENTRY_OWNER', "A entrada deve ter um proprietário.");
define('_DML_ENTRY_CAT', "A entrada deve ter uma categoria.");
define('_DML_ENTRY_DOC', "A entrada deve ter um documento definido.");
define('_DML_ENTRY_MAINT', "A entrada deve ter um editor definido.");

define('_DML_ENTRY_DOCLINK_LINK', "O documento deve ter um LINK selecionado. (Documento linkado na aba de detalhes.)");
define('_DML_ENTRY_DOCLINK', "O documento tem um nome de arquivo e um link para documento na aba de detalhes." );
define('_DML_ENTRY_DOCLINK_PROTOCOL', "Protocolo desconhecido para o link de documento na aba de detalhes");
define('_DML_ENTRY_DOCLINK_NAME', "Necessário link de documento completo na aba de detalhes");
define('_DML_ENTRY_DOCLINK_HOST', "É necessária uma URL completa");
define('_DML_ENTRY_DOCLINK_INVALID', "Arquivo não encontrado");
define('_DML_FILENAME_REQUIRED', "É necessário um nome de arquivo");

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
define('_DML_SEARCH_MESSAGE', "Os termos de pesquisa devem ter um mínimo de 3 caracteres e um máximo de 20 caracteres");
define('_DML_SEARCH_TITLE', "Pesquisar");
define('_DML_PROMPT_KEYWORD', "Pesquisar palavra-chave");
define('_DML_SEARCH_MATCHES', "obtidos %d resultados");
define('_DML_NOKEYWORD', "Não foram encontrados resultados");
define('_DML_IGNOREKEYWORD', "Um ou mais termos comuns foram ignorados na pesquisa");
define('_DML_CMN_ORDERING', "Ordenação");

// Added DOCman 1.4 RC3
define('_DML_HELP', "Ajuda");

// Added DOCman 1.4.0.stable
define('_DML_DONATE', "Doe");

?>
