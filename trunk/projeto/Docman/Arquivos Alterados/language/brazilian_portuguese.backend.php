<?php
/**
 * DOCman 1.4.x - Joomla! Document Manager
 * @version $Id: brazilian_portuguese.backend.php 2009-02-16 $
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

// -- Toolbar
define('_DML_TOOLBAR_SAVE', "Salvar");
define('_DML_TOOLBAR_CANCEL', "Cancelar");
define('_DML_TOOLBAR_NEW', "Novo");
define('_DML_TOOLBAR_NEW_DOC', "Novo documento");
define('_DML_TOOLBAR_HOME', "Início");
define('_DML_TOOLBAR_UPLOAD', "Carregar");
define('_DML_TOOLBAR_MOVE', "Mover");
define('_DML_TOOLBAR_COPY', "Copiar");
define('_DML_TOOLBAR_SEND', "Enviar");
define('_DML_TOOLBAR_BACK', "Voltar");
define('_DML_TOOLBAR_PUBLISH', "Publicar");
define('_DML_TOOLBAR_UNPUBLISH', "Despublicar");
define('_DML_TOOLBAR_DEFAULT', "Padrão");
define('_DML_TOOLBAR_DELETE', "Deletar");
define('_DML_TOOLBAR_CLEAR', "Limpar");
define('_DML_TOOLBAR_EDIT', "Editar");
define('_DML_TOOLBAR_EDIT_CSS', "Editar CSS");
define('_DML_TOOLBAR_APPLY', "Aplicar");


// -- Files
define('_DML_ORPHANS', "Órfãos");
define('_DML_ORPHANS_LINKED', "Arquivo(s) não deletado(s). Não é possível deletar arquivo(s) ainda associados a documentos.");
define('_DML_ORPHANS_PROBLEM', "Arquivo(s) não deletado(s). Há um problema com as permissões do(s) arquivo(s).");
define('_DML_ORPHANS_DELETED', "Arquivo(s) deletado(s).");
define('_DML_LINKS', "Links");
define('_DML_NEXT', "Seguinte");
define('_DML_SUCCESS', "Sucesso!");
define('_DML_UPLOADMORE', "Carregar mais");
define('_DML_UPLOADWIZARD', "Assistente de envio");
define('_DML_UPLOADMETHOD', "Escolha a forma de envio");
define('_DML_ISUPLOADING', "DOCman está recebendo o arquivo");
define('_DML_PLEASEWAIT', "Por favor espere");
define('_DML_UPLOADDISK', "Assistente para envio - Envie um arquivo do seu computador");
define('_DML_FILETOUPLOAD', "Escolha o arquivo a enviar");
define('_DML_BATCHMODE', "Modo em Bloco");
define('_DML_BATCHMODETT', "O modo em bloco envia um arquivo compactado contendo vários arquivos. O arquivo será descompactado após o seu envio. Não devem ser incluídos diretórios e/ou subdiretórios no compactado. Tenha em mente que o processo pode substituir documentos DOCman existentes no diretório que tenham o mesmo nome; não há um sistema de proteção ao usar arquivos compactados. Está em fase experimental e deve ser usado com cuidado.");
define('_DML_DOCMANISTRANSF', "O DOCman está transferindo<br />o arquivo");
define('_DML_TRANSFERFROMWEB', _DML_UPLOADWIZARD ." - "."transferindo um arquivo de um servidor web");
define('_DML_REMOTEURL', "URL remoto");
define('_DML_LINKURLTT', "Introduza o URL remoto. O URL deve incluir (http:// ou ftp://) e qualquer outra informação de acesso necessária. Por exemplo: http://joomlacode.org/gf/download/frsrelease/292/1001/docman_1.3RC2.zip.");
define('_DML_REMOTEURLTT', _DML_LINKURLTT . "<br />O arquivo, sempre que pretender, pode ser chamado bastando para isso usar o campo &quot;Nome Local&quot; .");
define('_DML_LOCALNAME', "Nome Local");
define('_DML_LOCALNAMETT', "Introduza o nome do local do arquivo tal como deseja que ele seja salvo."
	 ."Este campo é obrigatório já que o URL não forneçe informação suficiente sobre o documento.");
define('_DML_DOCUPDATED', "O documento foi atualizado.");
define('_DML_FILEUPLOADED', "O arquivo foi enviado.");
define('_DML_MAKENEWENTRY', "Criar um novo registo utilizando este arquivo.");
define('_DML_DISPLAYFILES', "Mostrar arquivos.");
define('_DML_ALLFILES', "Todos os arquivos");
define('_DML_DOCFILES', "Arquivos de documentos");
define('_DML_CREATEALINK', "Criar link para um documento");
define('_DML_SELECTMETHODFIRST', "Por favor selecione um método para enviar um documento");
define('_DML_ERROR_UPLOADING', "Erro ao efetuar o envio.");
define('_DML_ZLIB_ERROR', "A operação não pode prosseguir porque a biblioteca zlib não foi encontrada no php.");
define('_DML_UNZIP_ERROR', "Não foi possível descompactar os arquivos.");
define('_DML_SUBMIT', "Enviar");
define('_DML_NEW_FILE', "Novo arquivo");
define('_DML_MAKE_SELECTION', "Por favor, faça uma seleção da lista.");

// -- Documents
define('_DML_MOVECAT', "Mover categoria");
define('_DML_MOVETOCAT', "Mover para a categoria");
define('_DML_DOCSMOVED', "Os documentos serão movidos");
define('_DML_COPYCAT', "Copiar categoria");
define('_DML_COPYTOCAT', "Copiar para categoria");
define('_DML_COPY_OF', "Cópia de"); // Copy of [document name]
define('_DML_DOCSCOPIED', "Documentos a serem copiados");
define('_DML_DOCS_NOT_APPROVED', "documentos não aprovados");
define('_DML_DOCS_NOT_PUBLISHED', "documentos não publicados");
define('_DML_NO_PENDING_DOCS', "Não há documentos pendentes.");
define('_DML_FILE_MISSING', "***Arquivo Faltando***");
define('_DML_YOU_MUST_UPLOAD', "Primeiro, deve enviar um documento para esta seção.");
define('_DML_THE_MODULE', "O módulo");
define('_DML_IS_BEING', "está sendo editado por outro administrador");
define('_DML_NO_LICENSE', "Sem licença");
define('_DML_DM_LINKED', "->DOCUMENTO LINKADO<-");
define('_DML_CURRENT', "Atual");
define('_DML_LICENSE_TYPE', "Tipo de licença");
define('_DML_FILETITLE', "Título do Documento");
define('_DML_OWNER_TOOLTIP', "Isto determina quem pode efetuar o download e ver o documento. Escolha: "
     . "*Todos* se deseja que qualquer usuário tenha acesso ao documento. "
     . "*Todos os usuários registrados* permite que apenas os usuários registrados tenham acesso ao documento. "
     . "Você pode associar o documento a um único Usuário Registrado selecionando um nome em " . _DML_USERS . "; "
     . "somente esse usuário terá acesso ao documento. "
     . "Você pode associar o documento a um Grupo de Usuários Registrados selecionando o nome do Grupo em " . _DML_GROUPS ."; "
     . "somente os membros desse grupo terão acesso ao documento.");
define('_MANT_TOOLTIP', "Isto determina quem pode editar ou atualizar o documento. "
     . "Quando um Usuário, ou membro de um Grupo, é " . _DML_MAINTAINER . " de um documento isso significa que pode usar as opções específicas de administração de documentos: editar, atualizar, mover, revisar/aprovar e deletar.");
define('_DML_MAKE_SURE', 'Certifique-se de começa a URL<br />com "http://"');
define('_DML_DOCURL', "URL do documento:");
define('_DML_DOCURL_TOOLTIP', "Quando você tem documentos linkados você deve entrar com o endereço do website(URL) para o documento aqui. Sempre inclua o protocolo (http:// ou ftp://) no início.");
define('_DML_HOMEPAGE_TOOLTIP', "Você pode opcionalmente entrar com o endereço de um website(URL) para informações relacionadas com este documento. Sempre inclua http:// no início da URL ou não irá funcionar.");
define('_DML_LICENSE_TOOLTIP', "Um documento pode ter um Termo/Licença com condições que devem ser aceitas para que os usuários possam ter acesso ao documento. Aqui você pode definir o tipo de licença.");
define('_DML_DISPLAY_LICENSE', "Exibir Termo/Licença ao visualizadar");
define('_DML_DISPLAY_LIC_TOOLTIP', "Escolha *sim* se você deseja que a Licença seja exibida ao usuário antes de permitir o acesso ao documento.");
define('_DML_APPROVED_TOOLTIP', "Um documento deve ser aprovado para ser visível e estar disponível no repositório. Selecione *sim* aqui e não esqueça de o publicar! Ambas as opções devem ser definidas para que o documento possa ser listado no Front-End");
define('_DML_PLEASE_SEL_CAT', "Por favor, primeiro defina ao menos uma categoria");
define('_DML_MANT_TOOLTIP', "Isto determina quem pode editar, ou administrar, o documento."
     . "Quando um Usuário, ou um membro de um Grupo, é " . _DML_MAINTAINER . " de um documento, isso significa que pode utilizar as opções específicas de administração de documento: editar, atualizar, mover, revisar/aprovar e deletar.");
define('_DML_DISPLAY_LIC', "Exibir Licença");

define('_DML_TAB_PERMISSIONS', "Permissões");
define('_DML_TAB_LICENSE', "Licença");
define('_DML_TAB_DETAILS', "Detalhes");
define('_DML_TAB_PARAMS', "Parâmetros");

define('_DML_TITLE_DOCINFORMATION', "Informações do documento");
define('_DML_TITLE_DOCPERMISSIONS', "Permissões do documento");
define('_DML_TITLE_DOCLICENSES', "Licenças do documento");
define('_DML_TITLE_DOCDETAILS', "Detalhes do documento");
define('_DML_TITLE_DOCPARAMETERS', "Parâmetros do documento");

define('_DML_CREATED_BY', "Criado por");
define('_DML_UPDATED_BY', "Atualizado por");
define('_DML_SELECT_ITEM_DEL', "Selecione um item para deletar");
define('_DML_SELECT_ITEM_MOVE', "Selecione um item para mover");
define('_DML_SELECT_ITEM_COPY', "Selecione um item para copiar");
define('_STATUS_YOU', "Este documento está sendo revisado por você");
define('_STATUS_NOT_OUT', "Este documento não está em revisão.");
define('_DML_NEW_DOCUMENT', "Novo documento");
define('_DML_DOCUMENTS_MOVED_TO', "Documentos movidos para"); // [Number of] Documents moved to [location]
define('_DML_DOCUMENTS_COPIED_TO', "Documentos copiados para"); // [Number of] Documents moved to [location]


// -- Categories
define('_DML_CATDETAILS', "Detalhes da categoria");
define('_DML_CATTITLE', "Título da categoria");
define('_DML_CATNAME', "Nome da categoria");
define('_DML_LONGNAME', "Nome demasiado longo para ser visualizado no cabeçalho");
define('_DML_PARENTITEM', "Item principal");
define('_DML_IMAGE', "Imagem");
define('_DML_PREVIEW', "Pré-visualizar");
define('_DML_IMAGEPOS', "Posição da imagem");
define('_DML_ORDERING', "Ordenação");
define('_DML_ACCESSLEVEL', "Nível de acesso");
define('_DML_CREATEMENUITEM', "Isto irá criar um novo Item de Menu no Menu selecionado");
define('_DML_SELECTMENU', "Selecione um Menu");
define('_DML_SELECTMENUTYPE', "Selecione o Tipo de Menu");
define('_DML_MENUITEMNAME', "Nome do Item de Menu");
define('_DML_SELECTCATTO', "Selecione a Categoria para");
define('_DML_SELECTCATTODELETE', "Selecionar uma categoria para deletar");
define('_DML_REORDER', "Ordem");
define('_DML_ACCESS', "Acesso");
define('_DML_CAT_MUST_SELECT_NAME', "A categoria deve ter um nome");
define('_DML_CATS_CANT_BE_REMOVED', "Não foi possível remover. Existem documentos ou sub-categorias associadas.");

// -- Groups
define('_DML_TITLE_GROUPS', "Grupos");
define('_DML_CANNOT_DEL_GROUP', "Não é possível apagar o grupo porque ainda há documento(s) associados ao grupo.");
define('_DML_USERS_AVAILABLE', "Usuários disponíveis");
define('_DML_MEMBERS_IN_GROUP', "Membros deste Grupo");
define('_DML_ADD_GROUP_TIP', "Duplo clique sobre um nome ou selecione-o e utilize a seta para adicionar/deletar um Usuário membro. "
	 . "Para selecionar mais de um membro simultâneamente, " . _DML_MULTIPLE_SELECTS);
define('_DML_ADDING_USERS', "Adicionando membros aos grupos");
define('_DML_FILL_FORM', "Por favor preencha o formulário corretamente");
define('_DML_ONLY_ADMIN_EMAIL', "Só um Super Administrador pode enviar um e-mail em massa!");
define('_DML_NO_TARGET_EMAIL', "Não existem Usuários com endereços de e-mail válidos no Grupo");
define('_DML_THIS_IS', "Esta é uma mensagem de e-mail de");
define('_DML_SENT_BY', "enviada pelo DOCman aos membros do Grupo");
define('_DML_EMAIL_SENT_TO', "E-mail enviado para");
define('_DML_MEMBERS', "Membros");
define('_DML_EMAIL', "E-mail");
define('_DML_USER_BLOCKED', "bloqueado");

// -- Licenses
define('_DML_LICENSE_TEXT', "Texto da licença");
define('_DML_CANNOT_DEL_LICENSE', "Não é possível apagar a licença porque um documento está usando-a.");


// -- Config
define('_DML_FRONTEND', "Parte Pública");
define('_DML_PERMISSIONS', "Permissões");
define('_DML_RESETDEFAULT', "Valores padrão");
define('_DML_ASCENDENT', "Ascendente");
define('_DML_DESCENDENT', "Descendente");

define('_DML_CONFIGURATION', "Configuração do DOCman");
define('_DML_CONFIG_UPDATED', "Os detalhes da configuração foram Atualizados.");
define('_DML_CONFIG_WARNING', "AVISO: Configuração atualizada mas o tamanho máximo de arquivo para enviar é maior do que o permitido pelo PHP: ");
define('_DML_CONFIG_ERROR', "Ocorreu um Erro: Não é possível abrir o arquivo de configuração para gravação!");
define('_DML_CONFIG_ERROR_UPLOAD', "ERRO: O valor máximo do tamanho do arquivo para enviar não pode ser negativo.");

define('_DML_CFG_DOCMANTT', "Dica DOCMan...");
define('_DML_CFG_ALLOWBLANKS', "Permitir espaços");
define('_DML_CFG_REJECT', "Rejeitar");
define('_DML_CFG_CONVERTUNDER', "Converter para sobtraço (_)");
define('_DML_CFG_CONVERTDASH', "Converter para travessão (-)");
define('_DML_CFG_REMOVEBLANKS', "Remover Espaços");
define('_DML_CFG_PATHFORSTORING', "Caminho para armazenagem dos arquivos");
define('_DML_CFG_PATHTT', "Aqui você deve definir o diretório local em que todos os arquivos serão armazenados. Deve ser um caminho absoluto. Você pode aceitar o valor padrão ou, se preferir um diretório de documentos diferente, entre com o caminho completo aqui.<br /><br />"
     . "Por exemplo, num sistema *NIX será algo semelhante a /var/usr/www/dmdocuments<br /><br />"
     . "Se você está usando um servidor baseado em windows, pode usar, por exemplo, c:/inetpub/www/dmdocuments");
define('_DML_CFG_SECTIONISDOWN', "Seção está offline?");
define('_DML_CFG_SECTIONTT', "Se deseja que os usuários normais parem de ter acesso ao repositório de documentos, sete esta opção para *Sim*. <br />"
     . "Isto é útil para testes ou quando é necessário atualizar os arquivos.<br /><br />"
     . "Administradores e Usuários especiais poderão sempre ter acesso mesmo que esta opção esteja definida para *Não*. <br />"
     );
define('_DML_CFG_NUMBEROFDOCS', "Número de documentos por página");
define('_DML_CFG_NUMBERTT', "Número de documentos a exibir em uma página. Se o número total de documentos for maior do que este número, uma barra de paginação será apresentada para uma navegação fácil.");

define('_DML_CFG_GUEST', "Visitantes:");
define('_DML_CFG_GUEST_NO', "Sem acesso" );
define('_DML_CFG_GUEST_X', "Navegar apenas");
define('_DML_CFG_GUEST_RX', "Navegar, Download e Ver");
define('_DML_CFG_GUEST_TT', "Isto decide que convidados (Usuários não registados) podem: <br />*"
     . _DML_CFG_GUEST_NO . "* Não há documentos visíveis<br />*"
     . _DML_CFG_GUEST_X . "* Permite-lhes ver que existem documentos mas não podem acessá-los. <br />*"
     . _DML_CFG_GUEST_RX . "* Permite-lhes ver e acessar aos documentos."
     . "<br /><br />Esta permissão é uma permissão de acesso adicional a um documento."
     . "</span>");

define('_DML_CFG_AUTHOR_NONE', "Sem Acesso" );
define('_DML_CFG_AUTHOR_READ', "Só Download" );
define('_DML_CFG_AUTHOR_BOTH', "Download e Editar");

define('_DML_CFG_ICONSIZE', "Tamanho dos ícones");
define('_DML_CFG_DAYSFORNEW', "Dias para novo");
define('_DML_CFG_DAYSFORNEWTT', "Número de dias para que um arquivo ainda seja considerado novidade. Será exibido o texto *" . _DML_NEW . "* junto ao nome do documento quando for exibida uma listagem de documentos. Se o valor for definido para zero, o texto não será adicionado.");
define('_DML_CFG_HOT', "Downloads para ser popular");
define('_DML_CFG_HOTTT', "Número de acessos para um documento ser considerado popular. Será exibido o texto *" . _DML_HOT . "* junto ao nome do documento quando o total de acessos alcançar esse valor. Se o valor for definido para zero, o texto não será adicionado.");
define('_DML_CFG_DISPLAYLICENSES', "Exibir Licenças?");

define('_DML_CFG_VIEW', "Ver");
define('_DML_CFG_VIEWTT', "Permite definir o usuário/grupo padrão que podem ver e baixar documentos. Pode ser substituído a nível de documento.");
define('_DML_CFG_MAINTAIN', "Responsável");
define('_DML_CFG_MAINTAINTT', "Permite definir o usuário/grupo padrão que será responsável pelo documento. Pode ser substituído a nível de documento.");
define('_DML_CFG_CREATORS_PERM', "Autores podem");
define('_DML_CFG_CREATORSPERMTT', "Permite que você sete, globalmente, o que os autores de documentos podem fazer.<br /><br />"
     . "Isto é uma adição às permissões definidas para os campos de visualizador ou responsável de cada documento.");
define('_DML_CFG_WHOCANAREADER', "Download");
define('_DML_CFG_WHOCANAREADERTT', "Permite definir se o autor/responsável pode alterar as permissões de visualização de um documento.<br /><br />"
	 . "N.B.: Os administradores podem sempre definir permissões de visualização.");
define('_DML_CFG_WHOCANAEDITOR', "Editar");
define('_DML_CFG_WHOCANAEDITORTT', "Permite decidir se o autor/responsável pode modificar os responsáveis pelo documento.<br /><br />"
	 . "N.B.: Os administradores podem sempre escolher um responsável.");

define('_DML_CFG_EMAILGROUP', "E-mail aos Membros do Grupo?");
define('_DML_CFG_EMAILGROUPTT', "Se *sim* e a primeira opção também for *sim*, será exibido um link em cada documento de propriedade de um Grupo para permitir ao Usuário o envio de um e-mail a todos os membros deste Grupo para discussão.");

define('_DML_CFG_UPLOAD', "Enviar");
define('_DML_CFG_UPLOADTT', "Permite autorizar um Usuário/Grupo para o envio de documentos. Isto controla todas as formas de envio: http, link e transferência");
define('_DML_CFG_APPROVE', "Aprovar");
define('_DML_CFG_APPROVETT', "Permite autorizar um Usuário/Grupo para a aprovação de documentos.<br />Documentos devem ser aprovados e publicados antes de ficarem disponíveis.");
define('_DML_CFG_PUBLISH', "Publicar");
define('_DML_CFG_PUBLISHTT', "Permite autorizar um Usuário/Grupo para a publicação de documentos.<br />Documentos devem ser aprovados e publicados antes de ficarem disponíveis.");
define('_DML_CFG_USER_UPLOAD', "Selecione quem pode enviar");
define('_DML_CFG_USER_APPROVE', "Selecione quem pode aprovar");
define('_DML_CFG_USER_PUBLISH', "Selecione quem pode publicar");

define('_DML_CFG_EXTALLOWED', "Extensões permitidas");
define('_DML_CFG_EXTALLOWEDTT', "Extensões de arquivo permitidas, separadas por |. O administrador pode enviar qualquer tipo de arquivo.");
define('_DML_CFG_MAXFILESIZE', "Tamanho máximo do arquivo permitido para envio" );
define('_DML_CFG_MAXFILESIZETT', "Tamanho máximo do arquivo permitido para envio por usuários normais. Podem ser definidas as teclas de atalho K/M/G para o campo.<br />Este limite de envio não se aplica ao administrador. <br /><hr />Existe também um valor de configuração de PHP para o upload_max_filesize, que está definido para " );
define('_DML_CFG_USERCANUPLOAD', "O usuário pode enviar todos os tipos de arquivos?");
define('_DML_CFG_USERCANUPLOADTT', "Se *sim* e o anterior *envio de um usuário* for *sim*, os Usuários Registrados podem enviar todos os tipos de arquivos, ignorando as restrições anteriores.");
define('_DML_CFG_OVERWRITEFILES', "Sobreescrever arquivos?");
define('_DML_CFG_OVERWRITEFILESTT', "Se *sim*, os arquivos serão substituídos pelos arquivos enviados qundo tiverem o mesmo nome.");
define('_DML_CFG_LOWERCASE', "Nomes em minúsculas?");
define('_DML_CFG_LOWERCASETT', "Se *sim*, o nome dos arquivos enviados serão convertidos a letras minúsculas, ex.&nbsp;Seuarquivo.TXT torna-se seu arquivo.txt.<br />Se *não*, o nome dos arquivos enviados serão salvos com letras minúsculas e maiúsculas.");
define('_DML_CFG_FILENAMEBLANKS', "Nome dos arquivos com espaços em branco");
define('_DML_CFG_FILENAMEBLANKSTT', "Manipular os nomes de arquivos que contém espaços em branco:<br />"
     . "*Permitir espaços em branco* irá salvar com espaços em branco.<br />"
     . "*Rejeitar* não irá permitir o envio do arquivo.<br /><br />"
     . "Os espaços em branco podem ser convertidos em sobtraços (_), travessão (-) ou podem ser removidos do nome do arquivo.");
define('_DML_CFG_REJECTFILENAMES', "Rejeitar nomes de arquivos");
define('_DML_CFG_REJECTFILENAMESTT', "Introduza uma lista de nomes de arquivos que não tem autorizado o seu envio, separados por uma barra vertical (|). São nomes que têm um significado especial para o sistema. \'.htaccess\' é rejeitado por padrão.<br />Podem ser usadas, igualmente, expressões regulares entre o símbolo | para delimitar nomes de arquivos que contenham caracteres especiais.(ex: * $ ?)");
define('_DML_CFG_UPMETHODS', "Métodos de envio:");
define('_DML_CFG_UPMETHODSTT', "Selecionar todos os métodos que o Usuário pode usar. Para diversos métodos, " ._DML_MULTIPLE_SELECTS );

define('_DML_CFG_ANTILEECH', "Sistema Anti-leech?");
define('_DML_CFG_ANTILEECHTT', "O sistema anti-leech previne links não autorizados aos seus documentos. "
     . "Quando definido para *Sim* todos os pedidos são verificados para confirmar se no download/visualização "
     . "(a referência HTTP) tem origem num sistema constante da lista de \'Servidores Autorizados\'. Se não, o acesso não será autorizado. "
     . "Isto é uma proteção contra outros sistemas que possam usar o seu repositário para seu benefício.<br /><br />"
     . "N.B. O DOCman suporta link direto entre sistemas. "
     . "Se usar links, é conveniente confirmar que a origem do link faça parte da lista de \'Servidores Autorizados\'."
    );
define('_DML_CFG_ALLOWEDHOSTS', "Servidores autorizados");
define('_DML_CFG_ALLOWEDHOSTSTT', "Uma lista de servidores que podem solicitar arquivos quando o sistema anti-leech está ativado. Se desejar que múltipos servidores possam referir-se a esses arquivos, introduza os nomes separados por uma barra vertical (|).<br />O valor padrão é geralmente seguro.");

define('_DML_CFG_LOG', "Registrar acessos?");
define('_DML_CFG_LOGTT', "Será registrado o IP remoto, data e hora e nome de arquivo do documento visualizado. "
     . "Demasiada informação poderá ser armazenada na base de dados se esta opção estiver activa.<hr />"
     . "Existem plugins disponíveis com capacidades adicionais de registros.");

define('_DML_CFG_UPDATESERVER', "Atualizar servidor");
define('_DML_CFG_UPDATESERVERTT', "DOCman pode atualizar-se via internet e ainda instalar novos módulos e plugins relacionados. Mesmo que haja alterações nas bases de dados estas serão atualizadas! Insira aqui o URL (endereço) do servidor de atualizações do DOCMan. Se o servidor não tiver mudado (esperamos que não!) deixe com o valor padrão.");
define('_DML_CFG_DEFAULTLISTING', "Ordem padrão da listagem");
define('_DML_CFG_TRIMWHITESPACE', "Limpar espaços em branco");
define('_DML_CFG_TRIMWHITESPACETT', "Limpar espaços em branco e linhas vazias do tema torna o código mais limpo e poupa largura de banda");

define('_DML_CFG_ERR_DOCPATH', 'Tab [' . _DML_GENERAL . '] \'' . _DML_CFG_PATHFORSTORING . '\' deve ser fornecido.');
define('_DML_CFG_ERR_PERPAGE', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_NUMBEROFDOCS . '\' deve ser um valor numérico e maior do que zero');
define('_DML_CFG_ERR_NEW', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_DAYSFORNEW . '\' deve ser um valor numérico igual a zero ou maior' );
define('_DML_CFG_ERR_HOT', 'Tab [' . _DML_FRONTEND . '] \'' . _DML_CFG_HOT . '\' deve ser um valor numérico igual a zero ou maior' );
define('_DML_CFG_ERR_UPLOAD', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_UPLOAD . '\': Selecione quem pode enviar documentos.');
define('_DML_CFG_ERR_APPROVE', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_APPROVE . '\': Selecione quem pode aprovar documentos.');
define('_DML_CFG_ERR_DOWNLOAD', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_VIEW . '\': Selecione um Usuário/Grupo padrão.');
define('_DML_CFG_ERR_EDIT', 'Tab [' . _DML_PERMISSIONS . '] \'' . _DML_CFG_MAINTAIN . '\': Selecione um usuário/grupo como responsável pelos documentos');
define('_DML_CFG_EXTENSIONSVIEWING', "Extensões para visualizar");
define('_DML_CFG_EXTENSIONSVIEWINGTT', "Tipo de extensões que podem ser visualizadas. Use espaço em branco para nenhuma extensão, * para todas. Use um | entre tipos (txt|pdf).");

define('_DML_CFG_GENERALSET', "Configuração Geral");
define('_DML_CFG_THEMES', "Temas");
define('_DML_CFG_EXTRADOCINFO', "Informação Extra do Documento");
define('_DML_CFG_GUESTPERM', "Permissões de Visitantes");
define('_DML_CFG_FRONTPERM', "Permissões do Front-end");
define('_DML_CFG_DOCPERM', "Permissões do documento");
define('_DML_CFG_OVERRIDEVIEW', "Alterar acesso");
define('_DML_CFG_OVERRIDEMANT', "Alterar responsável");
define('_DML_CFG_CREATORPERM', "Permissões de criador");
define('_DML_CFG_FILEXTENSIONS', "Extensões de arquivos");
define('_DML_CFG_FILENAMES', "Nomes de arquivos");

define('_DML_CFG_PROCESS_BOTS', "Processar plugins de conteúdo?");
define('_DML_CFG_PROCESS_BOTSTT', "Aplicar plugins de conteúdo na descrição dos documentos ou das categorias. Isto permite utilizar {tags} nas suas descrições. *Alerta* nem todos os plugins funcionarão com esta opção.");
define('_DML_CFG_INDIVIDUAL_PERM', "Permitir permissões individuais a usuários");
define('_DML_CFG_INDIVIDUAL_PERMTT', "Quando você desativa, continua a poder atribuir permissões a um grupo, mas não para um uuário indivídual. As permissões de documentos atuais serão preservadas, mas ao editar um documento que esteja atribuído a um usuário individual terá de selecionar um grupo de usuários em substituição. Desligue esta oção para melhorar a performance e a utilização de memória em grandes bases de usuários. ");
define('_DML_CFG_HIDE_REMOTE', "Ocultar links remotos");
define('_DML_CFG_HIDE_REMOTETT', "Esta opção oculta os endereços para arquivos remotos na visualização dos detalhes do documento. Usuários com permissões de edição continuarão a visualizar o link. *NOTA* Isto não constitui uma proteção completa para links remotos. Os usuários continuarão capazes de conseguir idintificar o endereço remoto do arquivo.");

// -- Statistics
define('_DML_STATS', "Estatísticas");
define('_DML_DOCSTATS', "Estatísticas DOCman - Os 50 + baixados");
define('_DML_RANK', "Nível");

// -- Logs
define('_DML_DOWNLOAD_LOGS', "Histórico de Download ");
define('_DML_IP', "IP");
define('_DML_BROWSER', "Navegador");
define('_DML_OS', "Sistema Operacional");
define('_DML_ANONYMOUS', "Anônimo");

// -- Updates
define('_DML_UPGRADE', "Atualizar");
define('_DML_YOU_HAVE_VERSION', "Você tem a versão");
define('_DML_UPTODATE', "Sua versão está atualizada.");
define('_DML_NO_UP_AVAIL', "Não há atualizações disponíveis atualmente.");
define('_DML_COULD_NOT_COPY', "Não foi possível copiar todos os arquivos para os seus diretórios. Verifique as permissões. O processo parou no arquivo");
define('_DML_UPDATING_DB', "Atualizando base de dados...");
define('_DML_DELETING_OLD', "Deletando arquivos antigos...");
define('_DML_ERROR_DELETING_OLD', "Erro ao deletar os arquivos antigos. Não é um erro crítico.");
define('_DML_PACKAGE', "Pacote");
define('_DML_INST_CLICK', "instalado. Clique");
define('_DML_HERE', "aqui");
define('_DML_TO_CONT', "para continuar");
define('_DML_ERROR_READING', "erro lendo");
define('_DML_XML_ERROR', "arquivo XML inválido");
define('_DML_CHECKING_UP', "Checando por atualizações");
define('_DML_RELEASED_ON', "Realisado em");

// -- Themes
define('_DML_THEMES', "Temas");
define('_DML_EDIT_DEFAULT_THEME', "Editar Tema Atual");
define('_DML_THEME_INSTALLED', "Tema Instalado");
define('_DML_ADJUST_CONFIG', "Ajustar Configuração.");
define('_DML_NEED_ZLIB', "O instalador não pode continuar até que o zlib seja instalado");
define('_DML_INSTALLER_ERROR', "Instalador - Erro");
define('_DML_SUCCESFULLY_INSTALLED', "Instalado com Sucesso");
define('_DML_ENABLE_FILE_UPLOADS', "Para continuar, o envio de arquivos deve ser ativado");
define('_DML_UPLOAD_ERROR', "Erro no Envio");
define('_DML_EXTRACT_FAILED', "Falha ao Extrair");
define('_DML_INSTALL_FAILED', "Falha na Instalação");
define('_DML_UNINSTALL_FAILED', "Falha na Desinstalação");
define('_DML_INSTALL_FROM_DIRECTORY', "Instalar de Diretório");
define('_DML_INSTALL_DIRECTORY', "Diretório de Instalação");
define('_DML_PACKAGE_FILE', "Pacote de Arquivos");
define('_DML_UPLOAD_PACKAGE_FILE', "Carregar Pacote de Arquivos");
define('_DML_UPLOAD_AND_INSTALL', "Carregar Arquivo e Instalar");
define('_DML_INSTALL_THEME', "Instalar Tema");
define('_DML_SELECT_DIRECTORY', "Por favor, selecione um diretório");
define('_DML_SELECT_PACKAGE', "Por favor, selecione um pacote");
define('_DML_STYLESHEET_EDITOR', "Editor de Folha de Estilos do Tema");
define('_DML_OPFAILED_NO_TEMPLATE', _DML_OPERATION_FAILED.": Nenhum tema especificado");
define('_DML_OPFAILED_CONTENT_EMPTY', _DML_OPERATION_FAILED.": Conteúdo vazio");
define('_DML_OPFAILED_UNWRITABLE', _DML_OPERATION_FAILED.": Arquivo não gravável");
define('_DML_OPFAILED_CANT_OPEN_FILE', _DML_OPERATION_FAILED.": Falha ao abrir arquivo para escrita");
define('_DML_OPFAILED_COULDNT_OPEN', _DML_OPERATION_FAILED.": Não foi possível abrir ");
define('_DML_AUTHOR_URL', "Site do Autor" );
define('_DML_AUTHOR', "Autor" );
define('_DML_INSTALLED_THEMES', "Temas Instalados");
define('_DML_THEME_DETAILS', "Detalhes do Tema");
define('_DML_EDIT_THEME', "Editar Tema");


// -- E-mail
define('_DML_EMAIL_GROUP', "Enviar e-mail ao grupo");
define('_DML_SUBJECT', "Assunto");
define('_DML_EMAIL_LEADIN', "Texto introdutório");
define('_DML_MESSAGE', "Texto principal");
define('_DML_SEND_EMAIL', "Enviar");

// -- Credits
define('_DML_CREDITS', "Créditos" );
define('_DML_APPLICATION', "Aplicação");
define('_DML_ICONS', "Ícones");
define('_DML_ICONS_PERMISSION', "Ícones utilizados com permissão de" );
define('_DML_CHANGELOG', "Alterações");

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
define('_DML_SAMPLE_CATEGORY_DESC', "Você pode deletar esta categoria de exemplo." );
define('_DML_SAMPLE_DOC', "Documento de Exemplo" );
define('_DML_SAMPLE_DOC_DESC', "Você pode deletar este documento de exemplo e o arquivo ao qual está ligado." );
define('_DML_SAMPLE_FILENAME', "sample_file.png" );
define('_DML_SAMPLE_COMPLETED', "Os dados de exemplo foram adicionados." );
define('_DML_SAMPLE_GROUP', "Grupo de Exemplo" );
define('_DML_SAMPLE_GROUP_DESC', "Você pode utilizar grupos para atribuir permissões a um grupo de Usuários." );
define('_DML_SAMPLE_LICENSE', "Exemplo de Licença" );
define('_DML_SAMPLE_LICENSE_DESC', "Você pode opcionalmente atribuir licenças a documentos." );

// -- Added v1.4.0 RC1
define('_DML_CFG_COMPAT', "Compatibilidade" );
define('_DML_CFG_SPECIALCOMPATMODE', "Modo de compatibilidade &quot;Especial&quot;" );
define('_DML_CFG_SPECIALCOMPATMODETT', "No modo de compatibilidade DOCman 1.3, os Usuários &quot;Especiais&quot; são Gerentes, Administradores e Super Administradores. No modo Joomla!, são incluídos ainda os Autores, Publicaores e Editores");
define('_DML_CFG_SPECIALCOMPAT_DM13', "DOCman 1.3" );
define('_DML_CFG_SPECIALCOMPAT_J10', "Joomla!" );

?>
