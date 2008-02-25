<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.frontend.php 559 2008-01-17 08:59:15Z mjaz $
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

// -- General
define('_DML_NOLOG', "� necess�rio autenticar-se para acessar � sec��o de documentos.");
define('_DML_NOLOG_UPLOAD', "� necess�rio autenticar-se e estar autorizado para enviar documentos.");
define('_DML_NOLOG_DOWNLOAD', "� necess�rio autenticar-se e estar autorizado para acessar este documento.");
define('_DML_NOAPPROVED_DOWNLOAD', "Este documento tem de ser aprovado para possibilitar os downloads.");
define('_DML_NOPUBLISHED_DOWNLOAD', "Este documento tem de ser publicado para possibilitar os downloads.");
define('_DML_ISDOWN', "Desculpe, mas esta sec��o est� temporariamente fechada para manuten��o. Tente novamente mais tarde.");
define('_DML_SECTION_TITLE', "Downloads");

// -- Files
define('_DML_DOCLINKTO', "Documento ligado a " );
define('_DML_DOCLINKON', "Link criado em "    );
define('_DML_ERROR_LINKING', "Erro ao efetuar a conex�o ao servidor.");
define('_DML_LINKTO', "Linkar a ");
define('_DML_DONE', "Pronto." );
define('_DML_FILE_UNAVAILABLE', "O arquivo n�o est� dispon�vel no servidor");

// -- Documents
define('_DML_TAB_BASIC', "B�sico");
define('_DML_TAB_PERMISSIONS', "Permiss�es");
define('_DML_TAB_LICENSE', "Licen�a");
define('_DML_TAB_DETAILS', "Detalhes");
define('_DML_TAB_PARAMS', "Par�metros");
define('_DML_OP_CANCELED', "Opera��o cancelada");
define('_DML_CREATED_BY', "Criado por");
define('_DML_UPDATED_BY', "Atualizado por");
define('_DML_DOCMOVED', "O documento foi movido");
define('_DML_MOVETO', "Mover para");
define('_DML_MOVETHEFILES', "Mover os arquivos");
define('_DML_SELECTFILE', "Escolher um arquivo:");
define('_DML_THANKSDOCMAN', "Obrigado pelo seu envio.");
define('_DML_NO_LICENSE', "Sem licen�a");
define('_DML_DISPLAY_LIC', "Exibir termos e condi��es");
define('_DML_LICENSE_TYPE', "Tipo de licen�a");
define('_DML_MANT_TOOLTIP', "Determina quem pode editar ou alterar o documento. "
     . "Quando um usu�rio, ou membro de um grupo, � " . _DML_MAINTAINER . " de um documento isso significa que eles podem usar as fun��es de gest�o de documentos: editar, atualizar, mover, revisar/aprovar e apagar.");
define('_DML_ON', "no");
define('_DML_CURRENT', "Atual");
define('_DML_YOU_MUST_UPLOAD', "Voc� deve enviar um documento para esta sec��o primeiro.");
define('_DML_THE_MODULE', "O m�dulo");
define('_DML_IS_BEING', "est� a sendo editado atualmente por outro administrador");
define('_DML_LINKED', "->DOCUMENTO LINKADO<-");
define('_DML_FILETITLE', "T�tulo do arquivo");
define('_DML_OWNER_TOOLTIP', "Determina quem pode efetuar o download e ver o documento. Escolher: "
     . "*Todos* se deseja que qualquer usu�rio acesse o documento. "
     . "*Todos os usu�rios registrados* permite apenas que os usu�rios registrados possam ver o documento. "
     . "Pode ser associado ao documento um �nico usu�rio registrado atravez da sele��o de um nome em " . _DML_USERS . "; "
     . "s� esse usu�rio ter� acesso ao documento. "
     . "Pode ser associado ao documento um grupo de usu�rios registrados atravez da sele��o de um nome de grupo em " . _DML_GROUPS . "; "
     . "s� os membros desse grupo ter�o acesso ao documento.");
define('_DML_MAKE_SURE', 'Verifique se o url come�a<br />com "http://"');
define('_DML_DOCURL', "URL do documento:" );
define('_DML_DOCDELETED', "Documento deletado.");
define('_DML_DOCURL_TOOLTIP', "Quando se tem documentos linkados ser informado aqui o endere�o (URL) para o documento. Sempre deve ser colocado o protocolo (http:// ou ftp://) no in�cio.");
define('_DML_HOMEPAGE_TOOLTIP', "Pode ser colocado como op��o um endere�o (URL) que esteja relacionado com este documento. Deve ser sempre colocado no in�cio o url ou o endere�o n�o ir� funcionar.");
define('_DML_LICENSE_TOOLTIP', "Um documento pode ter um Termo/Licen�a com condi��es que precisa ser aceita pelo usu�rio para que se possa ter acesso ao documento. Aqui pode ser definido o tipo de licen�a.");
define('_DML_DISPLAY_LICENSE', "Mostrar Termo/Licen�a ao visualizar");
define('_DML_DISPLAY_LIC_TOOLTIP', "Escolher *sim* se deseja que a licen�a seja exibida ao usu�rio antes de permitir o acesso ao documento.");
define('_DML_APPROVED_TOOLTIP', "O documento tem de ser aprovado para ser vis�vel e estar dispon�vel no reposit�rio. Marque *sim* aqui e n�o esque�a de public�-lo tamb�m! Ambas as op��es devem ser definidas para que o documento possa ser listado");
define('_DML_RESET_COUNTER', "Reiniciar contador");
define('_DML_PROBLEM_SAVING_DOCUMENT', "Problema ao salvar o documento");

// -- Download
define('_DML_PROCEED', "Clique aqui para continuar");
define('_DML_YOU_MUST', "Voc� tem de aceitar o Termo/Licen�a para visualizar o documento.");
define('_DML_NOTDOWN', "Este documento est� sendo editado/atualizado por outro usu�rio e est� indispon�vel no momento.");
define('_DML_ANTILEECH_ACTIVE', "Voc� est� tentando acessar apartir de um dom�nio n�o autorizado.");
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
define('_DML_ISUPLOADING', "Por favor aguarde enquanto o DOCman est� enviando");
define('_DML_PLEASEWAIT', "Por favor aguarde");
define('_DML_DOCMANISLINKING', "O DOCman est� verificando <br />o link");
define('_DML_DOCMANISTRANSF', "O DOCman est� transferindo <br />o arquivo");
define('_DML_TRANSFER', "Transferir" );
define('_DML_REMOTEURL', "URL remoto");
define('_DML_LINKURLTT', "Introduza o URL remoto que pretende acessar. O URL deve incluir (http:// ou ftp://) e qualquer outra informa��o de acesso necess�ria. Por exemplo: http://joomlacode.org/gf/download/frsrelease/292/1001/docman_1.3RC2.zip.");
define('_DML_REMOTEURLTT'   , _DML_LINKURLTT . "<br />O arquivo pode ser chamado, sempre que se pretender, usando o campo &quot;Nome Local&quot; .");
define('_DML_LOCALNAME', "Nome local");
define('_DML_LOCALNAMETT', "Digite o nome local do arquivo tal como deseja que ele seja salvo."
     . "Este � um campo obrigat�rio j� que o URL n�o fornece informa��o suficiente para o documento.");
define('_DML_ERROR_UPLOADING', "Erro de envio.");

// -- Search
define('_DML_SELECCAT', "Selecionar categoria");
define('_DML_ALLCATS', "Todas as categorias");
define('_DML_SEARCH_WHERE', "Pesquisar aqui");
define('_DML_SEARCH_MODE', "Pesquisar por");
define('_DML_SEARCH', "Pesquisar");
define('_DML_SEARCH_REVRS', "Inverter");
define('_DML_SEARCH_REGEX', "Express�o regular");
define('_DML_NOT', " N�o"); // Used for Inversion

// -- E-mail
define('_DML_EMAIL_GROUP', "Enviar e-mail ao grupo");
define('_DML_SUBJECT', "Assunto");
define('_DML_EMAIL_LEADIN', "Texto introdut�rio");
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