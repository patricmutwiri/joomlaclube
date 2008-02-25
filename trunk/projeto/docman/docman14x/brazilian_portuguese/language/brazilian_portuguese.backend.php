<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.backend.php 559 2008-01-17 08:59:15Z mjaz $
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

// -- Toolbar
define('_DML_TOOLBAR_SAVE', "Salvar");
define('_DML_TOOLBAR_CANCEL', "Cancelar");
define('_DML_TOOLBAR_NEW', "Novo");
define('_DML_TOOLBAR_NEW_DOC', "Novo documento");
define('_DML_TOOLBAR_HOME', "In�cio");
define('_DML_TOOLBAR_UPLOAD', "Carregar");
define('_DML_TOOLBAR_MOVE', "Mover");
define('_DML_TOOLBAR_COPY', "Copiar");
define('_DML_TOOLBAR_SEND', "Enviar");
define('_DML_TOOLBAR_BACK', "Voltar");
define('_DML_TOOLBAR_PUBLISH', "Publicar");
define('_DML_TOOLBAR_UNPUBLISH', "Despublicar");
define('_DML_TOOLBAR_DEFAULT', "Padr�o");
define('_DML_TOOLBAR_DELETE', "Deletar");
define('_DML_TOOLBAR_CLEAR', "Limpar");
define('_DML_TOOLBAR_EDIT', "Editar");
define('_DML_TOOLBAR_EDIT_CSS', "Editar CSS");
define('_DML_TOOLBAR_APPLY', "Aplicar");


// -- Files
define('_DML_ORPHANS', "�rf�os");
define('_DML_ORPHANS_LINKED', "Arquivo(s) n�o deletado(s). N�o � poss�vel deletar arquivo(s) ainda associados a documentos.");
define('_DML_ORPHANS_PROBLEM', "Arquivo(s) n�o deletado(s). H� um problema com as permiss�es do(s) arquivo(s).");
define('_DML_ORPHANS_DELETED', "Arquivo(s) deletado(s).");
define('_DML_LINKS', "Links");
define('_DML_NEXT', "Seguinte");
define('_DML_SUCCESS', "Sucesso!");
define('_DML_UPLOADMORE', "Carregar mais");
define('_DML_UPLOADWIZARD', "Assistente de envio");
define('_DML_UPLOADMETHOD', "Escolha a forma de envio");
define('_DML_ISUPLOADING', "DOCman est� recebendo o arquivo");
define('_DML_PLEASEWAIT', "Por favor espere");
define('_DML_UPLOADDISK', "Assistente para envio - Envie um arquivo do seu computador");
define('_DML_FILETOUPLOAD', "Escolha o arquivo a enviar");
define('_DML_BATCHMODE', "Modo em Bloco");
define('_DML_BATCHMODETT', "O modo em bloco envia um arquivo compactado contendo v�rios arquivos. O arquivo ser� descompactado ap�s o seu envio. N�o devem ser inclu�dos diret�rios e/ou subdiret�rios no compactado. Tenha em mente que o processo pode substituir documentos DOCman existentes no diret�rio que tenham o mesmo nome; n�o h� um sistema de prote��o ao usar arquivos compactados. Est� em fase experimental e deve ser usado com cuidado.");
define('_DML_DOCMANISTRANSF', "O DOCman est� transferindo<br />o arquivo");
define('_DML_TRANSFERFROMWEB', _DML_UPLOADWIZARD ." - "."transferindo um arquivo de um servidor web");
define('_DML_REMOTEURL', "URL remoto");
define('_DML_LINKURLTT', "Introduza o URL remoto. O URL deve incluir (http:// ou ftp://) e qualquer outra informa��o de acesso necess�ria. Por exemplo: http://joomlacode.org/gf/download/frsrelease/292/1001/docman_1.3RC2.zip.");
define('_DML_REMOTEURLTT', _DML_LINKURLTT . "<br />O arquivo, sempre que pretender, pode ser chamado bastando para isso usar o campo &quot;Nome Local&quot; .");
define('_DML_LOCALNAME', "Nome Local");
define('_DML_LOCALNAMETT', "Introduza o nome do local do arquivo tal como deseja que ele seja salvo."
	 ."Este campo � obrigat�rio j� que o URL n�o forne�e informa��o suficiente sobre o documento.");
define('_DML_DOCUPDATED', "O documento foi atualizado.");
define('_DML_FILEUPLOADED', "O arquivo foi enviado.");
define('_DML_MAKENEWENTRY', "Criar um novo registo utilizando este arquivo.");
define('_DML_DISPLAYFILES', "Mostrar arquivos.");
define('_DML_ALLFILES', "Todos os arquivos");
define('_DML_DOCFILES', "Arquivos de documentos");
define('_DML_CREATEALINK', "Criar link para um documento");
define('_DML_SELECTMETHODFIRST', "Por favor selecione um m�todo para enviar um documento");
define('_DML_ERROR_UPLOADING', "Erro ao efetuar o envio.");
define('_DML_ZLIB_ERROR', "A opera��o n�o pode prosseguir porque a biblioteca zlib n�o foi encontrada no php.");
define('_DML_UNZIP_ERROR', "N�o foi poss�vel descompactar os arquivos.");
define('_DML_SUBMIT', "Enviar");
define('_DML_NEW_FILE', "Novo arquivo");
define('_DML_MAKE_SELECTION', "Por favor, fa�a uma sele��o da lista.");

// -- Documents
define('_DML_MOVECAT', "Mover categoria");
define('_DML_MOVETOCAT', "Mover para a categoria");
define('_DML_DOCSMOVED', "Os documentos ser�o movidos");
define('_DML_COPYCAT', "Copiar categoria");
define('_DML_COPYTOCAT', "Copiar para categoria");
define('_DML_COPY_OF', "C�pia de"); // Copy of [document name]
define('_DML_DOCSCOPIED', "Documentos a serem copiados");
define('_DML_DOCS_NOT_APPROVED', "documentos n�o aprovados");
define('_DML_DOCS_NOT_PUBLISHED', "documentos n�o publicados");
define('_DML_NO_PENDING_DOCS', "N�o h� documentos pendentes.");
define('_DML_FILE_MISSING', "***Arquivo Faltando***");
define('_DML_YOU_MUST_UPLOAD', "Primeiro, deve enviar um documento para esta sec��o.");
define('_DML_THE_MODULE', "O m�dulo");
define('_DML_IS_BEING', "est� sendo editado por outro administrador");
define('_DML_NO_LICENSE', "Sem licen�a");
define('_DML_DM_LINKED', "->DOCUMENTO LINKADO<-");
define('_DML_CURRENT', "Atual");
define('_DML_LICENSE_TYPE', "Tipo de licen�a");
define('_DML_FILETITLE', "T�tulo do Documento");
define('_DML_OWNER_TOOLTIP', "Isto determina quem pode efetuar o download e ver o documento. Escolha: "
     . "*Todos* se deseja que qualquer usu�rio tenha acesso ao documento. "
     . "*Todos os usu�rios registrados* permite que apenas os usu�rios registrados tenham acesso ao documento. "
     . "Voc� pode associar o documento a um �nico Usu�rio Registrado selecionando um nome em " . _DML_USERS . "; "
     . "somente esse usu�rio ter� acesso ao documento. "
     . "Voc� pode associar o documento a um Grupo de Usu�rios Registrados selecionando o nome do Grupo em " . _DML_GROUPS ."; "
     . "somente os membros desse grupo ter�o acesso ao documento.");
define('_MANT_TOOLTIP', "Isto determina quem pode editar ou atualizar o documento. "
     . "Quando um Usu�rio, ou membro de um Grupo, � " . _DML_MAINTAINER . " de um documento isso significa que pode usar as op��es espec�ficas de administra��o de documentos: editar, atualizar, mover, revisar/aprovar e deletar.");
define('_DML_MAKE_SURE', 'Certifique-se de come�a a URL<br />com "http://"');
define('_DML_DOCURL', "URL do documento:");
define('_DML_DOCURL_TOOLTIP', "Quando voc� tem documentos linkados voc� deve entrar com o endere�o do website(URL) para o documento aqui. Sempre inclua o protocolo (http:// ou ftp://) no in�cio.");
define('_DML_HOMEPAGE_TOOLTIP', "Voc� pode opcionalmente entrar com o endere�o de um website(URL) para informa��es relacionadas com este documento. Sempre inclua http:// no in�cio da URL ou n�o ir� funcionar.");
define('_DML_LICENSE_TOOLTIP', "Um documento pode ter um Termo/Licen�a com condi��es que devem ser aceitas para que os usu�rios possam ter acesso ao documento. Aqui voc� pode definir o tipo de licen�a.");
define('_DML_DISPLAY_LICENSE', "Exibir Termo/Licen�a ao visualizadar");
define('_DML_DISPLAY_LIC_TOOLTIP', "Escolha *sim* se voc� deseja que a Licen�a seja exibida ao usu�rio antes de permitir o acesso ao documento.");
define('_DML_APPROVED_TOOLTIP', "Um documento deve ser aprovado para ser vis�vel e estar dispon�vel no reposit�rio. Selecione *sim* aqui e n�o esque�a de o publicar! Ambas as op��es devem ser definidas para que o documento possa ser listado no Front-End");
define('_DML_PLEASE_SEL_CAT', "Por favor, primeiro defina ao menos uma categoria");
define('_DML_MANT_TOOLTIP', "Isto determina quem pode editar, ou administrar, o documento."
     . "Quando um Usu�rio, ou um membro de um Grupo, � " . _DML_MAINTAINER . " de um documento, isso significa que pode utilizar as op��es espec�ficas de administra��o de documento: editar, atualizar, mover, revisar/aprovar e deletar.");
define('_DML_DISPLAY_LIC', "Exibir Licen�a");

define('_DML_TAB_PERMISSIONS', "Permiss�es");
define('_DML_TAB_LICENSE', "Licen�a");
define('_DML_TAB_DETAILS', "Detalhes");
define('_DML_TAB_PARAMS', "Par�metros");

define('_DML_TITLE_DOCINFORMATION', "Informa��es do documento");
define('_DML_TITLE_DOCPERMISSIONS', "Permiss�es do documento");
define('_DML_TITLE_DOCLICENSES', "Licen�as do documento");
define('_DML_TITLE_DOCDETAILS', "Detalhes do documento");
define('_DML_TITLE_DOCPARAMETERS', "Par�metros do documento");

define('_DML_CREATED_BY', "Criado por");
define('_DML_UPDATED_BY', "Atualizado por");
define('_DML_SELECT_ITEM_DEL', "Selecione um item para deletar");
define('_DML_SELECT_ITEM_MOVE', "Selecione um item para mover");
define('_DML_SELECT_ITEM_COPY', "Selecione um item para copiar");
define('_STATUS_YOU', "Este documento est� sendo revisado por voc�");
define('_STATUS_NOT_OUT', "Este documento n�o est� em revis�o.");
define('_DML_NEW_DOCUMENT', "Novo documento");
define('_DML_DOCUMENTS_MOVED_TO', "Documentos movidos para"); // [Number of] Documents moved to [location]
define('_DML_DOCUMENTS_COPIED_TO', "Documentos copiados para"); // [Number of] Documents moved to [location]


// -- Categories
define('_DML_CATDETAILS', "Detalhes da categoria");
define('_DML_CATTITLE', "T�tulo da categoria");
define('_DML_CATNAME', "Nome da categoria");
define('_DML_LONGNAME', "Nome demasiado longo para ser visualizado no cabe�alho");
define('_DML_PARENTITEM', "Item principal");
define('_DML_IMAGE', "Imagem");
define('_DML_PREVIEW', "Pr�-visualizar");
define('_DML_IMAGEPOS', "Posi��o da imagem");
define('_DML_ORDERING', "Ordena��o");
define('_DML_ACCESSLEVEL', "N�vel de acesso");
define('_DML_CREATEMENUITEM', "Isto ir� criar um novo Item de Menu no Menu selecionado");
define('_DML_SELECTMENU', "Selecione um Menu");
define('_DML_SELECTMENUTYPE', "Selecione o Tipo de Menu");
define('_DML_MENUITEMNAME', "Nome do Item de Menu");
define('_DML_SELECTCATTO', "Selecione a Categoria para");
define('_DML_SELECTCATTODELETE', "Selecionar uma categoria para deletar");
define('_DML_REORDER', "Ordem");
define('_DML_ACCESS', "Acesso");
define('_DML_CAT_MUST_SELECT_NAME', "A categoria deve ter um nome");
define('_DML_CATS_CANT_BE_REMOVED', "N�o foi poss�vel remover. Existem documentos ou sub-categorias associadas.");

// -- Groups
define('_DML_TITLE_GROUPS', "Grupos");
define('_DML_CANNOT_DEL_GROUP', "N�o � poss�vel apagar o grupo porque ainda h� documento(s) associados ao grupo.");
define('_DML_USERS_AVAILABLE', "Usu�rios dispon�veis");
define('_DML_MEMBERS_IN_GROUP', "Membros deste Grupo");
define('_DML_ADD_GROUP_TIP', "Duplo clique sobre um nome ou selecione-o e utilize a seta para adicionar/deletar um Usu�rio membro. "
	 . "Para selecionar mais de um membro simult�neamente, " . _DML_MULTIPLE_SELECTS);
define('_DML_ADDING_USERS', "Adicionando membros aos grupos");
define('_DML_FILL_FORM', "Por favor preencha o formul�rio corretamente");
define('_DML_ONLY_ADMIN_EMAIL', "S� um Super Administrador pode enviar um e-mail em massa!");
define('_DML_NO_TARGET_EMAIL', "N�o existem Usu�rios com endere�os de e-mail v�lidos no Grupo");
define('_DML_THIS_IS', "Esta � uma mensagem de e-mail de");
define('_DML_SENT_BY', "enviada pelo DOCman aos membros do Grupo");
define('_DML_EMAIL_SENT_TO', "E-mail enviado para");
define('_DML_MEMBERS', "Membros");
define('_DML_EMAIL', "E-mail");
define('_DML_USER_BLOCKED', "bloqueado");

// -- Licenses
define('_DML_LICENSE_TEXT', "Texto da licen�a");
define('_DML_CANNOT_DEL_LICENSE', "N�o � poss�vel apagar a licen�a porque um documento est� usando-a.");


// -- Config
define('_DML_FRONTEND', "Parte P�blica");
define('_DML_PERMISSIONS', "Permiss�es");
define('_DML_RESETDEFAULT', "Valores padr�o");
define('_DML_ASCENDENT', "Ascendente");
define('_DML_DESCENDENT', "Descendente");

define('_DML_CONFIGURATION', "Configura��o do DOCman");
define('_DML_CONFIG_UPDATED', "Os detalhes da configura��o foram Atualizados.");
define('_DML_CONFIG_WARNING', "AVISO: Configura��o atualizada mas o tamanho m�ximo de arquivo para enviar � maior do que o permitido pelo PHP: ");
define('_DML_CONFIG_ERROR', "Ocorreu um Erro: N�o � poss�vel abrir o arquivo de configura��o para grava��o!");
define('_DML_CONFIG_ERROR_UPLOAD', "ERRO: O valor m�ximo do tamanho do arquivo para enviar n�o pode ser negativo.");

define('_DML_CFG_DOCMANTT', "Dica DOCMan...");
define('_DML_CFG_ALLOWBLANKS', "Permitir espa�os");
define('_DML_CFG_REJECT', "Rejeitar");
define('_DML_CFG_CONVERTUNDER', "Converter para sobtra�o (_)");
define('_DML_CFG_CONVERTDASH', "Converter para travess�o (-)");
define('_DML_CFG_REMOVEBLANKS', "Remover Espa�os");
define('_DML_CFG_PATHFORSTORING', "Caminho para armazenagem dos arquivos");
define('_DML_CFG_PATHTT', "Aqui voc� deve definir o diret�rio local em que todos os arquivos ser�o armazenados. Deve ser um caminho absoluto. Voc� pode aceitar o valor padr�o ou, se preferir um diret�rio de documentos diferente, entre com o caminho completo aqui.<br /><br />"
     . "Por exemplo, num sistema *NIX ser� algo semelhante a /var/usr/www/dmdocuments<br /><br />"
     . "Se voc� est� usando um servidor baseado em windows, pode usar, por exemplo, c:/inetpub/www/dmdocuments");
define('_DML_CFG_SECTIONISDOWN', "Sec��o est� offline?");
define('_DML_CFG_SECTIONTT', "Se deseja que os usu�rios normais parem de ter acesso ao reposit�rio de documentos, sete esta op��o para *Sim*. <br />"
     . "Isto � �til para testes ou quando � necess�rio atualizar os arquivos.<br /><br />"
     . "Administradores e Usu�rios especiais poder�o sempre ter acesso mesmo que esta op��o esteja definida para *N�o*. <br />"
     );
define('_DML_CFG_NUMBEROFDOCS', "N�mero de documentos por p�gina");
define('_DML_CFG_NUMBERTT', "N�mero de documentos a exibir em uma p�gina. Se o n�mero total de documentos for maior do que este n�mero, uma barra de pagina��o ser� apresentada para uma navega��o f�cil.");

define('_DML_CFG_GUEST', "Visitantes:");
define('_DML_CFG_GUEST_NO', "Sem acesso" );
define('_DML_CFG_GUEST_X', "Navegar apenas");
define('_DML_CFG_GUEST_RX', "Navegar, Download e Ver");
define('_DML_CFG_GUEST_TT', "Isto decide que convidados (Usu�rios n�o registados) podem: <br />*"
     . _DML_CFG_GUEST_NO . "* N�o h� documentos vis�veis<br />*"
     . _DML_CFG_GUEST_X . "* Permite-lhes ver que existem documentos mas n�o podem acess�-los. <br />*"
     . _DML_CFG_GUEST_RX . "* Permite-lhes ver e acessar aos documentos."
     . "<br /><br />Esta permiss�o � uma permiss�o de acesso adicional a um documento."
     . "</span>");

define('_DML_CFG_AUTHOR_NONE', "Sem Acesso" );
define('_DML_CFG_AUTHOR_READ', "S� Download" );
define('_DML_CFG_AUTHOR_BOTH', "Download e Editar");

define('_DML_CFG_ICONSIZE', "Tamanho dos �cones");
define('_DML_CFG_DAYSFORNEW', "Dias para novo");
define('_DML_CFG_DAYSFORNEWTT', "N�mero de dias para que um arquivo ainda seja considerado novidade. Ser� exibido o texto *" . _DML_NEW . "* junto ao nome do documento quando for exibida uma listagem de documentos. Se o valor for definido para zero, o texto n�o ser� adicionado.");
define('_DML_CFG_HOT', "Downloads para ser popular");
define('_DML_CFG_HOTTT', "N�mero de acessos para um documento ser considerado popular. Ser� exibido o texto *" . _DML_HOT . "* junto ao nome do documento quando o total de acessos alcan�ar esse valor. Se o valor for definido para zero, o texto n�o ser� adicionado.");
define('_DML_CFG_DISPLAYLICENSES', "Exibir Licen�as?");

define('_DML_CFG_VIEW', "Ver");
define('_DML_CFG_VIEWTT', "Permite definir o usu�rio/grupo padr�o que podem ver e baixar documentos. Pode ser substitu�do a n�vel de documento.");
define('_DML_CFG_MAINTAIN', "Respons�vel");
define('_DML_CFG_MAINTAINTT', "Permite definir o usu�rio/grupo padr�o que ser� respons�vel pelo documento. Pode ser substitu�do a n�vel de documento.");
define('_DML_CFG_CREATORS_PERM', "Autores podem");
define('_DML_CFG_CREATORSPERMTT', "Permite que voc� sete, globalmente, o que os autores de documentos podem fazer.<br /><br />"
     . "Isto � uma adi��o �s permiss�es definidas para os campos de visualizador ou respons�vel de cada documento.");
define('_DML_CFG_WHOCANAREADER', "Download");
define('_DML_CFG_WHOCANAREADERTT', "Permite definir se o autor/respons�vel pode alterar as permiss�es de visualiza��o de um documento.<br /><br />"
	 . "N.B.: Os administradores podem sempre definir permiss�es de visualiza��o.");
define('_DML_CFG_WHOCANAEDITOR', "Editar");
define('_DML_CFG_WHOCANAEDITORTT', "Permite decidir se o autor/respons�vel pode modificar os respons�veis pelo documento.<br /><br />"
	 . "N.B.: Os administradores podem sempre escolher um respons�vel.");

define('_DML_CFG_EMAILGROUP', "E-mail aos Membros do Grupo?");
define('_DML_CFG_EMAILGROUPTT', "Se *sim* e a primeira op��o tamb�m for *sim*, ser� exibido um link em cada documento de propriedade de um Grupo para permitir ao Usu�rio o envio de um e-mail a todos os membros deste Grupo para discuss�o.");

define('_DML_CFG_UPLOAD', "Enviar");
define('_DML_CFG_UPLOADTT', "Permite autorizar um Usu�rio/Grupo para o envio de documentos. Isto controla todas as formas de envio: http, link e transfer�ncia");
define('_DML_CFG_APPROVE', "Aprovar");
define('_DML_CFG_APPROVETT', "Permite autorizar um Usu�rio/Grupo para a aprova��o de documentos.<br />Documentos devem ser aprovados e publicados antes de ficarem dispon�veis.");
define('_DML_CFG_PUBLISH', "Publicar");
define('_DML_CFG_PUBLISHTT', "Permite autorizar um Usu�rio/Grupo para a publica��o de documentos.<br />Documentos devem ser aprovados e publicados antes de ficarem dispon�veis.");
define('_DML_CFG_USER_UPLOAD', "Selecione quem pode enviar");
define('_DML_CFG_USER_APPROVE', "Selecione quem pode aprovar");
define('_DML_CFG_USER_PUBLISH', "Selecione quem pode publicar");

define('_DML_CFG_EXTALLOWED', "Extens�es permitidas");
define('_DML_CFG_EXTALLOWEDTT', "Extens�es de arquivo permitidas, separadas por |. O administrador pode enviar qualquer tipo de arquivo.");
define('_DML_CFG_MAXFILESIZE', "Tamanho m�ximo do arquivo permitido para envio" );
define('_DML_CFG_MAXFILESIZETT', "Tamanho m�ximo do arquivo permitido para envio por usu�rios normais. Podem ser definidas as teclas de atalho K/M/G para o campo.<br />Este limite de envio n�o se aplica ao administrador. <br /><hr />Existe tamb�m um valor de configura��o de PHP para o upload_max_filesize, que est� definido para " );
define('_DML_CFG_USERCANUPLOAD', "O usu�rio pode enviar todos os tipos de arquivos?");
define('_DML_CFG_USERCANUPLOADTT', "Se *sim* e o anterior *envio de um usu�rio* for *sim*, os Usu�rios Registrados podem enviar todos os tipos de arquivos, ignorando as restri��es anteriores.");
define('_DML_CFG_OVERWRITEFILES', "Sobreescrever arquivos?");
define('_DML_CFG_OVERWRITEFILESTT', "Se *sim*, os arquivos ser�o substitu�dos pelos arquivos enviados qundo tiverem o mesmo nome.");
define('_DML_CFG_LOWERCASE', "Nomes em min�sculas?");
define('_DML_CFG_LOWERCASETT', "Se *sim*, o nome dos arquivos enviados ser�o convertidos a letras min�sculas, ex.&nbsp;Seuarquivo.TXT torna-se seu arquivo.txt.<br />Se *n�o*, o nome dos arquivos enviados ser�o salvos com letras min�sculas e mai�sculas.");
define('_DML_CFG_FILENAMEBLANKS', "Nome dos arquivos com espa�os em branco");
define('_DML_CFG_FILENAMEBLANKSTT', "Manipular os nomes de arquivos que cont�m espa�os em branco:<br />"
     . "*Permitir espa�os em branco* ir� salvar com espa�os em branco.<br />"
     . "*Rejeitar* n�o ir� permitir o envio do arquivo.<br /><br />"
     . "Os espa�os em branco podem ser convertidos em sobtra�os (_), travess�o (-) ou podem ser removidos do nome do arquivo.");
define('_DML_CFG_REJECTFILENAMES', "Rejeitar nomes de arquivos");
define('_DML_CFG_REJECTFILENAMESTT', "Introduza uma lista de nomes de arquivos que n�o tem autorizado o seu envio, separados por uma barra vertical (|). S�o nomes que t�m um significado especial para o sistema. \'.htaccess\' � rejeitado por padr�o.<br />Podem ser usadas, igualmente, express�es regulares entre o s�mbolo | para delimitar nomes de arquivos que contenham caracteres especiais.(ex: * $ ?)");
define('_DML_CFG_UPMETHODS', "M�todos de envio:");
define('_DML_CFG_UPMETHODSTT', "Selecionar todos os m�todos que o Usu�rio pode usar. Para diversos m�todos, " ._DML_MULTIPLE_SELECTS );

define('_DML_CFG_ANTILEECH', "Sistema Anti-leech?");
define('_DML_CFG_ANTILEECHTT', "O sistema anti-leech previne links n�o autorizados aos seus documentos. "
     . "Quando definido para *Sim* todos os pedidos s�o verificados para confirmar se no download/visualiza��o "
     . "(a refer�ncia HTTP) tem origem num sistema constante da lista de \'Servidores Autorizados\'. Se n�o, o acesso n�o ser� autorizado. "
     . "Isto � uma prote��o contra outros sistemas que possam usar o seu reposit�rio para seu benef�cio.<br /><br />"
     . "N.B. O DOCman suporta link direto entre sistemas. "
     . "Se usar links, � conveniente confirmar que a origem do link fa�a parte da lista de \'Servidores Autorizados\'."
    );
define('_DML_CFG_ALLOWEDHOSTS', "Servidores autorizados");
define('_DML_CFG_ALLOWEDHOSTSTT', "Uma lista de servidores que podem solicitar arquivos quando o sistema anti-leech est� ativado. Se desejar que m�ltipos servidores possam referir-se a esses arquivos, introduza os nomes separados por uma barra vertical (|).<br />O valor padr�o � geralmente seguro.");

define('_DML_CFG_LOG', "Registrar acessos?");
define('_DML_CFG_LOGTT', "Ser� registrado o IP remoto, data e hora e nome de arquivo do documento visualizado. "
     . "Demasiada informa��o poder� ser armazenada na base de dados se esta op��o estiver activa.<hr />"
     . "Existem plugins dispon�veis com capacidades adicionais de registros.");

define('_DML_CFG_UPDATESERVER', "Atualizar servidor");
define('_DML_CFG_UPDATESERVERTT', "DOCman pode atualizar-se via internet e ainda instalar novos m�dulos e plugins relacionados. Mesmo que haja altera��es nas bases de dados estas ser�o atualizadas! Insira aqui o URL (endere�o) do servidor de atualiza��es do DOCMan. Se o servidor n�o tiver mudado (esperamos que n�o!) deixe com o valor padr�o.");
define('_DML_CFG_DEFAULTLISTING', "Ordem padr�o da listagem");
define('_DML_CFG_TRIMWHITESPACE', "Limpar espa�os em branco");
define('_DML_CFG_TRIMWHITESPACETT', "Limpar espa�os em branco e linhas vazias do tema torna o c�digo mais limpo e poupa largura de banda");

define('_DML_CFG_ERR_DOCPATH', 'Tab [' . _DML_GENERAL . '] \'' . _DML_CFG_PATHFORSTORING . '\' deve ser fornecido.');
define('_DML_CFG_ERR_PERPAGE', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_NUMBEROFDOCS . '\' deve ser um valor num�rico e maior do que zero');
define('_DML_CFG_ERR_NEW', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_DAYSFORNEW . '\' deve ser um valor num�rico igual a zero ou maior' );
define('_DML_CFG_ERR_HOT', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_HOT . '\' deve ser um valor num�rico igual a zero ou maior' );
define('_DML_CFG_ERR_UPLOAD', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_UPLOAD . '\': Selecione quem pode enviar documentos.');
define('_DML_CFG_ERR_APPROVE', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_APPROVE . '\': Selecione quem pode aprovar documentos.');
define('_DML_CFG_ERR_DOWNLOAD', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_VIEW . '\': Selecione um Usu�rio/Grupo padr�o.');
define('_DML_CFG_ERR_EDIT', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_MAINTAIN . '\': Selecione um usu�rio/grupo como respons�vel pelos documentos');
define('_DML_CFG_EXTENSIONSVIEWING', "Extens�es para visualizar");
define('_DML_CFG_EXTENSIONSVIEWINGTT', "Tipo de extens�es que podem ser visualizadas. Use espa�o em branco para nenhuma extens�o, * para todas. Use um | entre tipos (txt|pdf).");

define('_DML_CFG_GENERALSET', "Configura��o Geral");
define('_DML_CFG_THEMES', "Temas");
define('_DML_CFG_EXTRADOCINFO', "Informa��o Extra do Documento");
define('_DML_CFG_GUESTPERM', "Permiss�es de Visitantes");
define('_DML_CFG_FRONTPERM', "Permiss�es do Front-end");
define('_DML_CFG_DOCPERM', "Permiss�es do documento");
define('_DML_CFG_OVERRIDEVIEW', "Alterar acesso");
define('_DML_CFG_OVERRIDEMANT', "Alterar respons�vel");
define('_DML_CFG_CREATORPERM', "Permiss�es de criador");
define('_DML_CFG_FILEXTENSIONS', "Extens�es de arquivos");
define('_DML_CFG_FILENAMES', "Nomes de arquivos");

define('_DML_CFG_PROCESS_BOTS', "Processar plugins de conte�do?");
define('_DML_CFG_PROCESS_BOTSTT', "Aplicar plugins de conte�do na descri��o dos documentos ou das categorias. Isto permite utilizar {tags} nas suas descri��es. *Alerta* nem todos os plugins funcionar�o com esta op��o.");
define('_DML_CFG_INDIVIDUAL_PERM', "Permitir permiss�es individuais a usu�rios");
define('_DML_CFG_INDIVIDUAL_PERMTT', "Quando voc� desativa, continua a poder atribuir permiss�es a um grupo, mas n�o para um uu�rio indiv�dual. As permiss�es de documentos atuais ser�o preservadas, mas ao editar um documento que esteja atribu�do a um usu�rio individual ter� de selecionar um grupo de usu�rios em substitui��o. Desligue esta o��o para melhorar a performance e a utiliza��o de mem�ria em grandes bases de usu�rios. ");
define('_DML_CFG_HIDE_REMOTE', "Ocultar links remotos");
define('_DML_CFG_HIDE_REMOTETT', "Esta op��o oculta os endere�os para arquivos remotos na visualiza��o dos detalhes do documento. Usu�rios com permiss�es de edi��o continuar�o a visualizar o link. *NOTA* Isto n�o constitui uma prote��o completa para links remotos. Os usu�rios continuar�o capazes de conseguir idintificar o endere�o remoto do arquivo.");

// -- Statistics
define('_DML_STATS', "Estat�sticas");
define('_DML_DOCSTATS', "Estat�sticas DOCman - Os 50 + baixados");
define('_DML_RANK', "N�vel");

// -- Logs
define('_DML_DOWNLOAD_LOGS', "Hist�rico de Download ");
define('_DML_IP', "IP");
define('_DML_BROWSER', "Navegador");
define('_DML_OS', "Sistema Operacional");
define('_DML_ANONYMOUS', "An�nimo");

// -- Updates
define('_DML_UPGRADE', "Atualizar");
define('_DML_YOU_HAVE_VERSION', "Voc� tem a vers�o");
define('_DML_UPTODATE', "Sua vers�o est� atualizada.");
define('_DML_NO_UP_AVAIL', "N�o h� atualiza��es dispon�veis atualmente.");
define('_DML_COULD_NOT_COPY', "N�o foi poss�vel copiar todos os arquivos para os seus diret�rios. Verifique as permiss�es. O processo parou no arquivo");
define('_DML_UPDATING_DB', "Atualizando base de dados...");
define('_DML_DELETING_OLD', "Deletando arquivos antigos...");
define('_DML_ERROR_DELETING_OLD', "Erro ao deletar os arquivos antigos. N�o � um erro cr�tico.");
define('_DML_PACKAGE', "Pacote");
define('_DML_INST_CLICK', "instalado. Clique");
define('_DML_HERE', "aqui");
define('_DML_TO_CONT', "para continuar");
define('_DML_ERROR_READING', "erro lendo");
define('_DML_XML_ERROR', "arquivo XML inv�lido");
define('_DML_CHECKING_UP', "Checando por atualiza��es");
define('_DML_RELEASED_ON', "Realisado em");

// -- Themes
define('_DML_THEMES', "Temas");
define('_DML_EDIT_DEFAULT_THEME', "Editar Tema Atual");
define('_DML_THEME_INSTALLED', "Tema Instalado");
define('_DML_ADJUST_CONFIG', "Ajustar Configura��o.");
define('_DML_NEED_ZLIB', "O instalador n�o pode continuar at� que o zlib seja instalado");
define('_DML_INSTALLER_ERROR', "Instalador - Erro");
define('_DML_SUCCESFULLY_INSTALLED', "Instalado com Sucesso");
define('_DML_ENABLE_FILE_UPLOADS', "Para continuar, o envio de arquivos deve ser ativado");
define('_DML_UPLOAD_ERROR', "Erro no Envio");
define('_DML_EXTRACT_FAILED', "Falha ao Extrair");
define('_DML_INSTALL_FAILED', "Falha na Instala��o");
define('_DML_UNINSTALL_FAILED', "Falha na Desinstala��o");
define('_DML_INSTALL_FROM_DIRECTORY', "Instalar de Diret�rio");
define('_DML_INSTALL_DIRECTORY', "Diret�rio de Instala��o");
define('_DML_PACKAGE_FILE', "Pacote de Arquivos");
define('_DML_UPLOAD_PACKAGE_FILE', "Carregar Pacote de Arquivos");
define('_DML_UPLOAD_AND_INSTALL', "Carregar Arquivo e Instalar");
define('_DML_INSTALL_THEME', "Instalar Tema");
define('_DML_SELECT_DIRECTORY', "Por favor, selecione um diret�rio");
define('_DML_SELECT_PACKAGE', "Por favor, selecione um pacote");
define('_DML_STYLESHEET_EDITOR', "Editor de Folha de Estilos do Tema");
define('_DML_OPFAILED_NO_TEMPLATE', _DML_OPERATION_FAILED.": Nenhum tema especificado");
define('_DML_OPFAILED_CONTENT_EMPTY', _DML_OPERATION_FAILED.": Conte�do vazio");
define('_DML_OPFAILED_UNWRITABLE', _DML_OPERATION_FAILED.": Arquivo n�o grav�vel");
define('_DML_OPFAILED_CANT_OPEN_FILE', _DML_OPERATION_FAILED.": Falha ao abrir arquivo para escrita");
define('_DML_OPFAILED_COULDNT_OPEN', _DML_OPERATION_FAILED.": N�o foi poss�vel abrir ");
define('_DML_AUTHOR_URL', "Site do Autor" );
define('_DML_AUTHOR', "Autor" );
define('_DML_INSTALLED_THEMES', "Temas Instalados");
define('_DML_THEME_DETAILS', "Detalhes do Tema");
define('_DML_EDIT_THEME', "Editar Tema");


// -- E-mail
define('_DML_EMAIL_GROUP', "Enviar e-mail ao grupo");
define('_DML_SUBJECT', "Assunto");
define('_DML_EMAIL_LEADIN', "Texto introdut�rio");
define('_DML_MESSAGE', "Texto principal");
define('_DML_SEND_EMAIL', "Enviar");

// -- Credits
define('_DML_CREDITS', "Cr�ditos" );
define('_DML_APPLICATION', "Aplica��o");
define('_DML_ICONS', "�cones");
define('_DML_ICONS_PERMISSION', "�cones utilizados com permiss�o de" );
define('_DML_CHANGELOG', "Altera��es");

// -- Clear Data
define('_DML_CLEARDATA', "Limpar Dados" );
define('_DML_CLEARDATA_CLEARED', "Dados Limpos " );
define('_DML_CLEARDATA_FAILED', "Falha limpando: " );
define('_DML_CLEARDATA_ITEM', "Item" );
define('_DML_CLEARDATA_CLEAR', "Limpar" );
define('_DML_CLEARDATA_CATS_CONTAIN_DOCS', "Limpe os documentos antes de limpar Categorias");
define('_DML_CLEARDATA_DELETE_DOCS_FIRST', "Limpe os documentos antes de limpar Arquivos");

// -- Sample data
define('_DML_SAMPLE_CATEGORY', "Categoria de exemplo" );
define('_DML_SAMPLE_CATEGORY_DESC', "Voc� pode deletar esta categoria de exemplo." );
define('_DML_SAMPLE_DOC', "Documento de Exemplo" );
define('_DML_SAMPLE_DOC_DESC', "Voc� pode deletar este documento de exemplo e o arquivo ao qual est� ligado." );
define('_DML_SAMPLE_FILENAME', "sample_file.png" );
define('_DML_SAMPLE_COMPLETED', "Os dados de exemplo foram adicionados." );
define('_DML_SAMPLE_GROUP', "Grupo de Exemplo" );
define('_DML_SAMPLE_GROUP_DESC', "Voc� pode utilizar grupos para atribuir permiss�es a um grupo de Usu�rios." );
define('_DML_SAMPLE_LICENSE', "Exemplo de Licen�a" );
define('_DML_SAMPLE_LICENSE_DESC', "Voc� pode opcionalmente atribuir licen�as a documentos." );

// -- Added v1.4.0 RC1
define('_DML_CFG_COMPAT', "Compatibilidade" );
define('_DML_CFG_SPECIALCOMPATMODE', "Modo de compatibilidade &quot;Especial&quot;" );
define('_DML_CFG_SPECIALCOMPATMODETT', "No modo de compatibilidade DOCman 1.3, os Usu�rios &quot;Especiais&quot; s�o Gerentes, Administradores e Super Administradores. No modo Joomla!, s�o inclu�dos ainda os Autores, Publicaores e Editores");
define('_DML_CFG_SPECIALCOMPAT_DM13', "DOCman 1.3" );
define('_DML_CFG_SPECIALCOMPAT_J10', "Joomla!" );

?>