<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.frontend.php 559 2008-01-17 08:59:15Z mjaz $
 * @package DOCman_1.4
 * @copyright (C) 2003-2007 The DOCman Development Team
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.joomlatools.org/ Official web site
 **/
defined('_VALID_MOS') or die('Não é permitido o acesso direto.');

/**
 * Brazilian Portuguese pt-BR language file
 *
 * Creator:  Fernando Soares
 * Email:    fsoares@fsoares.com.br
 * website:  www.fernandosoares.com.br
 * Revision: 1.1
 * Date:     November 2007
**/

// -- General
define('_DML_NOLOG', "É necessário autenticar-se para acessar à secção de documentos.");
define('_DML_NOLOG_UPLOAD', "É necessário autenticar-se e estar autorizado para enviar documentos.");
define('_DML_NOLOG_DOWNLOAD', "É necessário autenticar-se e estar autorizado para acessar este documento.");
define('_DML_NOAPPROVED_DOWNLOAD', "Este documento tem de ser aprovado para possibilitar os downloads.");
define('_DML_NOPUBLISHED_DOWNLOAD', "Este documento tem de ser publicado para possibilitar os downloads.");
define('_DML_ISDOWN', "Desculpe, mas esta secção está temporariamente fechada para manutenção. Tente novamente mais tarde.");
define('_DML_SECTION_TITLE', "Downloads");

// -- Files
define('_DML_DOCLINKTO', "Documento ligado a " );
define('_DML_DOCLINKON', "Link criado em "    );
define('_DML_ERROR_LINKING', "Erro ao efetuar a conexão ao servidor.");
define('_DML_LINKTO', "Linkar a ");
define('_DML_DONE', "Pronto." );
define('_DML_FILE_UNAVAILABLE', "O arquivo não está disponível no servidor");

// -- Documents
define('_DML_TAB_BASIC', "Básico");
define('_DML_TAB_PERMISSIONS', "Permissões");
define('_DML_TAB_LICENSE', "Licença");
define('_DML_TAB_DETAILS', "Detalhes");
define('_DML_TAB_PARAMS', "Parâmetros");
define('_DML_OP_CANCELED', "Operação cancelada");
define('_DML_CREATED_BY', "Criado por");
define('_DML_UPDATED_BY', "Atualizado por");
define('_DML_DOCMOVED', "O documento foi movido");
define('_DML_MOVETO', "Mover para");
define('_DML_MOVETHEFILES', "Mover os arquivos");
define('_DML_SELECTFILE', "Escolher um arquivo:");
define('_DML_THANKSDOCMAN', "Obrigado pelo seu envio.");
define('_DML_NO_LICENSE', "Sem licença");
define('_DML_DISPLAY_LIC', "Exibir termos e condições");
define('_DML_LICENSE_TYPE', "Tipo de licença");
define('_DML_MANT_TOOLTIP', "Determina quem pode editar ou alterar o documento. "
     . "Quando um usuário, ou membro de um grupo, é " . _DML_MAINTAINER . " de um documento isso significa que eles podem usar as funções de gestão de documentos: editar, atualizar, mover, revisar/aprovar e apagar.");
define('_DML_ON', "no");
define('_DML_CURRENT', "Atual");
define('_DML_YOU_MUST_UPLOAD', "Você deve enviar um documento para esta secção primeiro.");
define('_DML_THE_MODULE', "O módulo");
define('_DML_IS_BEING', "está a sendo editado atualmente por outro administrador");
define('_DML_LINKED', "->DOCUMENTO LINKADO<-");
define('_DML_FILETITLE', "Título do arquivo");
define('_DML_OWNER_TOOLTIP', "Determina quem pode efetuar o download e ver o documento. Escolher: "
     . "*Todos* se deseja que qualquer usuário acesse o documento. "
     . "*Todos os usuários registrados* permite apenas que os usuários registrados possam ver o documento. "
     . "Pode ser associado ao documento um único usuário registrado atravez da seleção de um nome em " . _DML_USERS . "; "
     . "só esse usuário terá acesso ao documento. "
     . "Pode ser associado ao documento um grupo de usuários registrados atravez da seleção de um nome de grupo em " . _DML_GROUPS . "; "
     . "só os membros desse grupo terão acesso ao documento.");
define('_DML_MAKE_SURE', 'Verifique se o url começa<br />com "http://"');
define('_DML_DOCURL', "URL do documento:" );
define('_DML_DOCDELETED', "Documento deletado.");
define('_DML_DOCURL_TOOLTIP', "Quando se tem documentos linkados ser informado aqui o endereço (URL) para o documento. Sempre deve ser colocado o protocolo (http:// ou ftp://) no início.");
define('_DML_HOMEPAGE_TOOLTIP', "Pode ser colocado como opção um endereço (URL) que esteja relacionado com este documento. Deve ser sempre colocado no início o url ou o endereço não irá funcionar.");
define('_DML_LICENSE_TOOLTIP', "Um documento pode ter um Termo/Licença com condições que precisa ser aceita pelo usuário para que se possa ter acesso ao documento. Aqui pode ser definido o tipo de licença.");
define('_DML_DISPLAY_LICENSE', "Mostrar Termo/Licença ao visualizar");
define('_DML_DISPLAY_LIC_TOOLTIP', "Escolher *sim* se deseja que a licença seja exibida ao usuário antes de permitir o acesso ao documento.");
define('_DML_APPROVED_TOOLTIP', "O documento tem de ser aprovado para ser visível e estar disponível no repositório. Marque *sim* aqui e não esqueça de publicá-lo também! Ambas as opções devem ser definidas para que o documento possa ser listado");
define('_DML_RESET_COUNTER', "Reiniciar contador");
define('_DML_PROBLEM_SAVING_DOCUMENT', "Problema ao salvar o documento");

// -- Download
define('_DML_PROCEED', "Clique aqui para continuar");
define('_DML_YOU_MUST', "Você tem de aceitar o Termo/Licença para visualizar o documento.");
define('_DML_NOTDOWN', "Este documento está sendo editado/atualizado por outro usuário e está indisponível no momento.");
define('_DML_ANTILEECH_ACTIVE', "Você está tentando acessar apartir de um domínio não autorizado.");
define('_DML_DONT_AGREE', "Discordo.");
define('_DML_AGREE', "Concordo.");

// -- Upload
define('_DML_UPLOADED', "Enviado.");
define('_DML_SUBMIT', "Enviar");
define('_DML_NEXT', "Seguinte >>");
define('_DML_BACK', "<< Voltar");
define('_DML_LINK', "Link");
define('_DML_EDITDOC', "Editar este documento");
define('_DML_UPLOADWIZARD', "Assistente de envio");
define('_DML_UPLOADMETHOD', "Escolha a forma de envio");
define('_DML_ISUPLOADING', "Por favor aguarde enquanto o DOCman está enviando");
define('_DML_PLEASEWAIT', "Por favor aguarde");
define('_DML_DOCMANISLINKING', "O DOCman está verificando <br />o link");
define('_DML_DOCMANISTRANSF', "O DOCman está transferindo <br />o arquivo");
define('_DML_TRANSFER', "Transferir" );
define('_DML_REMOTEURL', "URL remoto");
define('_DML_LINKURLTT', "Introduza o URL remoto que pretende acessar. O URL deve incluir (http:// ou ftp://) e qualquer outra informação de acesso necessária. Por exemplo: http://joomlacode.org/gf/download/frsrelease/292/1001/docman_1.3RC2.zip.");
define('_DML_REMOTEURLTT'   , _DML_LINKURLTT . "<br />O arquivo pode ser chamado, sempre que se pretender, usando o campo &quot;Nome Local&quot; .");
define('_DML_LOCALNAME', "Nome local");
define('_DML_LOCALNAMETT', "Digite o nome local do arquivo tal como deseja que ele seja salvo."
     . "Este é um campo obrigatório já que o URL não fornece informação suficiente para o documento.");
define('_DML_ERROR_UPLOADING', "Erro de envio.");

// -- Search
define('_DML_SELECCAT', "Selecionar categoria");
define('_DML_ALLCATS', "Todas as categorias");
define('_DML_SEARCH_WHERE', "Pesquisar aqui");
define('_DML_SEARCH_MODE', "Pesquisar por");
define('_DML_SEARCH', "Pesquisar");
define('_DML_SEARCH_REVRS', "Inverter");
define('_DML_SEARCH_REGEX', "Expressão regular");
define('_DML_NOT', " Não"); // Used for Inversion

// -- E-mail
define('_DML_EMAIL_GROUP', "Enviar e-mail ao grupo");
define('_DML_SUBJECT', "Assunto");
define('_DML_EMAIL_LEADIN', "Texto introdutório");
define('_DML_MESSAGE', "Texto principal");
define('_DML_SEND_EMAIL', "Enviar");

//Document tasks
define('_DML_BUTTON_DOWNLOAD', "Download");
define('_DML_BUTTON_VIEW', "Visualizar");
define('_DML_BUTTON_DETAILS', "Detalhes");
define('_DML_BUTTON_EDIT', "Editar");
define('_DML_BUTTON_MOVE', "Mover");
define('_DML_BUTTON_DELETE', "Deletar");
define('_DML_BUTTON_UPDATE', "Atualizar");
define('_DML_BUTTON_CHECKOUT', "Revisar");
define('_DML_BUTTON_CHECKIN', "Aprovar");
define('_DML_BUTTON_UNPUBLISH', "Despublicar");
define('_DML_BUTTON_PUBLISH', "Publicar");
define('_DML_BUTTON_RESET', "Reiniciar");
define('_DML_BUTTON_APPROVE', "Aprovar");

// -- Added v1.4.0 RC1
define('_DML_CHECKED_IN', "Aprovado");

?>