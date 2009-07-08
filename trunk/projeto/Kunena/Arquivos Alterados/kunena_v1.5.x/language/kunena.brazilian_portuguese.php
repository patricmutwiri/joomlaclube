<?php
/**
* @version $Id: kunena.brazilian_portuguese.php 875 2009-07-07 18:15:16Z elvisvinicius $
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2009 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
*
* Tradução original de 7P-Darkman - http://hubpantanal.no-ip.info
* JoomlaClube - brazil open source -  http://www.joomlaclube.com.br
* Complementação por Thiago Rafael
* Complementação, revisão e correção por Elvis Vinicius - http://elvisvinicius.pevermelho.com
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die('Acesso Restrito');

// 1.0.11 and 1.5.3
DEFINE('_KUNENA_VERSION_SVN', 'Revisão SVN');
DEFINE('_KUNENA_VERSION_DEV', 'Development Snapshot');
DEFINE('_KUNENA_VERSION_ALPHA', 'Versão Alpha');
DEFINE('_KUNENA_VERSION_BETA', 'Versão Beta');
DEFINE('_KUNENA_VERSION_RC', 'Versão RC');
DEFINE('_KUNENA_VERSION_INSTALLED', 'Você tem o Kunena %s (%s) instalado.');
DEFINE('_KUNENA_VERSION_SVN_WARNING', 'Nunca utilize uma revisão SVN para mais nada para além do desenvolvimento do software!');
DEFINE('_KUNENA_VERSION_DEV_WARNING', 'Esta versão interna deve ser usada apenas por desenvolvedores e testadores!');
DEFINE('_KUNENA_VERSION_ALPHA_WARNING', 'Esta versão não deve ser utilizada em sites de produção.');
DEFINE('_KUNENA_VERSION_BETA_WARNING', 'Esta versão não é recomendada para uso em sites de produção.');	
DEFINE('_KUNENA_VERSION_RC_WARNING', 'Esta versão pode conter bugs, que serão fixados na versão final.');	
DEFINE('_KUNENA_ERROR_UPGRADE', 'Atualização do Kunena para a versão %s falhou!');
DEFINE('_KUNENA_ERROR_UPGRADE_WARN', 'Seu fórum pode ter algumas correções importantes faltando e algumas funcionalidades podem estar quebradas.');
DEFINE('_KUNENA_ERROR_UPGRADE_AGAIN', 'Por favor, tente atualizar novamente. Se você não puder atualizar o Kunena %s, você pode facilmente voltar para a versão anterior.');
DEFINE('_KUNENA_PAGE', 'Página');
DEFINE('_KUNENA_RANK_NO_ASSIGNED', 'Rank não atribuído');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_GENERAL', 'Problemas detectados na integração com o Community Builder:');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_INSTALL', 'A integração com o Community Builder somente funciona se você tiver o Community Builder versão %s ou maior instalado.');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_PUBLISH', 'A integração com o Perfil do Community Builder funciona somente se o Perfil de Usurio do Community Builder estiver publicado.');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_UPDATE', 'A integração com o Perfil do Community Builder funciona somente se você estiver usando o Community Builder versão %s ou maior.');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_XHTML', 'A integração com o Perfil do Community Builder funciona somente se o Community Builder estiver em modo W3C XHTML 1.0 Trans. compliance.');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_INTEGRATION', 'A integração com o Perfil do Community Builder funciona somente se o plugin de integração com o fórum estiver publicado no Community Builder.');
DEFINE('_KUNENA_INTEGRATION_CB_WARN_HIDE', 'Salvando a configuração do Kunena irá desativar a integração e esconder esta advertência.');
			
// 1.0.10
DEFINE('_KUNENA_BACK', 'Voltar');
DEFINE('_KUNENA_SYNC', 'Sync');
DEFINE('_KUNENA_NEW_SMILIE', 'Novo Smilie');
DEFINE('_KUNENA_PRUNE', 'Punir');
// Editor
DEFINE('_KUNENA_EDITOR_HELPLINE_BOLD', 'Negrito Text: [b]text[/b]');
DEFINE('_KUNENA_EDITOR_HELPLINE_ITALIC', 'Italic text: [i]text[/i]');
DEFINE('_KUNENA_EDITOR_HELPLINE_UNDERL', 'Underline text: [u]text[/u]');
DEFINE('_KUNENA_EDITOR_HELPLINE_STRIKE', 'Strikethrough Text: [strike]Text[/strike]');
DEFINE('_KUNENA_EDITOR_HELPLINE_SUB', 'Subscript Text: [sub]Text[/sub]');
DEFINE('_KUNENA_EDITOR_HELPLINE_SUP', 'Superscript Text: [sup]Text[/sup]');
DEFINE('_KUNENA_EDITOR_HELPLINE_QUOTE', 'Quote text: [quote]text[/quote]');
DEFINE('_KUNENA_EDITOR_HELPLINE_CODE', 'Code display: [code]code[/code]');
DEFINE('_KUNENA_EDITOR_HELPLINE_UL', 'Unordered List: [ul] [li]text[/li] [/ul] - Tip: a list must contain List Items');
DEFINE('_KUNENA_EDITOR_HELPLINE_OL', 'Ordered List: [ol] [li]text[/li] [/ol] - Tip: a list must contain List Items');
DEFINE('_KUNENA_EDITOR_HELPLINE_LI', 'List Item: [li] list item [/li]');
DEFINE('_KUNENA_EDITOR_HELPLINE_ALIGN_LEFT', 'Align left: [left]Text[/left]');
DEFINE('_KUNENA_EDITOR_HELPLINE_ALIGN_CENTER', 'Align center: [center]Text[/center]');
DEFINE('_KUNENA_EDITOR_HELPLINE_ALIGN_RIGHT', 'Align right: [right]Text[/right]');
DEFINE('_KUNENA_EDITOR_HELPLINE_IMAGELINK', 'Image link: [img size=400]http://www.google.com/images/web_logo_left.gif[/img]');
DEFINE('_KUNENA_EDITOR_HELPLINE_IMAGELINKSIZE', 'Image link: Size');
DEFINE('_KUNENA_EDITOR_HELPLINE_IMAGELINKURL', 'Image link: URL of the image link');
DEFINE('_KUNENA_EDITOR_HELPLINE_IMAGELINKAPPLY', 'Image link: Apply image link');
DEFINE('_KUNENA_EDITOR_HELPLINE_LINK', 'Link: [url=http://www.zzz.com/]This is a link[/url]');
DEFINE('_KUNENA_EDITOR_HELPLINE_LINKURL', 'Link: URL of the link');
DEFINE('_KUNENA_EDITOR_HELPLINE_LINKTEXT', 'Link: Text / Description of the link');
DEFINE('_KUNENA_EDITOR_HELPLINE_LINKAPPLY', 'Link: Apply link');
DEFINE('_KUNENA_EDITOR_HELPLINE_HIDE','Hidden text: [hide]any hidden text[/hide] - hide part of message from Guests');
DEFINE('_KUNENA_EDITOR_HELPLINE_SPOILER', 'Spoiler: Text is only shown after you click the spoiler');
DEFINE('_KUNENA_EDITOR_HELPLINE_COLOR', 'Color: [color=#FF6600]text[/color]');
DEFINE('_KUNENA_EDITOR_HELPLINE_FONTSIZE', 'Fontsize: [size=1]text size[/size] - Tip: sizes range from 1 to 5');
DEFINE('_KUNENA_EDITOR_HELPLINE_FONTSIZESELECTION', 'Fontsize: Select Fontsize, mark text and press the button left from here');
DEFINE('_KUNENA_EDITOR_HELPLINE_EBAY', 'eBay: [ebay]ItemId[/ebay]');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEO', 'Video: Select Provider or URL - modus');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOSIZE', 'Video: Size of the video');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOWIDTH', 'Video: Width of the video');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOHEIGHT', 'Video: Height of the video');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOPROVIDER', 'Video: Select video provider');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOID', 'Video: ID of the video - you can see it in the video URL');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY1', 'Video: [video size=100 width=480 height=360 provider=clipfish]3423432[/video]');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOURL', 'Video: URL of the video');
DEFINE('_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY2', 'Video: [video size=100 width=480 height=360]http://myvideodomain.com/myvideo[/video]');
DEFINE('_KUNENA_EDITOR_HELPLINE_IMGPH', 'Insert [img] placeholder in the post for attached image');
DEFINE('_KUNENA_EDITOR_HELPLINE_FILEPH', 'Insert [file] placeholder in the post for attached file');
DEFINE('_KUNENA_EDITOR_HELPLINE_SUBMIT', 'Click here to submit your message');
DEFINE('_KUNENA_EDITOR_HELPLINE_PREVIEW', 'Click here to see what your message will look like when submitted');
DEFINE('_KUNENA_EDITOR_HELPLINE_CANCEL', 'Click here to cancel your message');
DEFINE('_KUNENA_EDITOR_HELPLINE_HINT', 'bbCode Help - Tip: bbCode can be used on selected text!');
DEFINE('_KUNENA_EDITOR_LINK_URL', ' URL: ');
DEFINE('_KUNENA_EDITOR_LINK_TEXT', ' Text: ');
DEFINE('_KUNENA_EDITOR_LINK_INSERT', 'Insert');
DEFINE('_KUNENA_EDITOR_IMAGE_SIZE', ' Size: ');
DEFINE('_KUNENA_EDITOR_IMAGE_URL', ' URL: ');
DEFINE('_KUNENA_EDITOR_IMAGE_INSERT', 'Insert');
DEFINE('_KUNENA_EDITOR_VIDEO_SIZE', 'Size: ');
DEFINE('_KUNENA_EDITOR_VIDEO_WIDTH', 'Width: ');
DEFINE('_KUNENA_EDITOR_VIDEO_HEIGHT', 'Height:');
DEFINE('_KUNENA_EDITOR_VIDEO_URL', 'URL: ');
DEFINE('_KUNENA_EDITOR_VIDEO_ID', 'ID: ');
DEFINE('_KUNENA_EDITOR_VIDEO_PROVIDER', 'Provider: ');
DEFINE('_KUNENA_BBCODE_HIDDENTEXT', '<span class="fb_quote">Something is hidden for guests. Please log in or register to see it.</span>');

DEFINE('_KUNENA_PROFILE_BIRTHDAY', 'Birthday');
DEFINE('_KUNENA_DT_MONTHDAY_FMT','%m/%d');
DEFINE('_KUNENA_CFC_FILENAME','CSS file to be modified');
DEFINE('_KUNENA_CFC_SAVED','CSS file saved.');
DEFINE('_KUNENA_CFC_NOTSAVED','CSS file not saved.');
DEFINE('_KUNENA_JS_WARN_NAME_MISSING','Your name is missing');
DEFINE('_KUNENA_JS_WARN_UNAME_MISSING','Your username is missing');
DEFINE('_KUNENA_JS_WARN_VALID_AZ09','Field contains forbidden letters');
DEFINE('_KUNENA_JS_WARN_MAIL_MISSING','E-mail address is missing');
DEFINE('_KUNENA_JS_WARN_PASSWORD2','Please enter valid password');
DEFINE('_KUNENA_JS_PROMPT_UNAME','Please retype your new username');
DEFINE('_KUNENA_JS_PROMPT_PASS','Please retype your new password');
DEFINE('_KUNENA_DT_LMON_DEC', 'December');
DEFINE('_KUNENA_DT_MON_DEC', 'Dec');
DEFINE('_KUNENA_NOGENDER', 'Unknown');
DEFINE('_KUNENA_ERROR_INCOMPLETE_ERROR', 'Your Kunena installation is incomplete!');
DEFINE('_KUNENA_ERROR_INCOMPLETE_OFFLINE', 'Because of the above errors your Forum is now Offline and Forum Administration has been disabled.');
DEFINE('_KUNENA_ERROR_INCOMPLETE_REASONS', 'Possible reasons for this error:');
DEFINE('_KUNENA_ERROR_INCOMPLETE_1', '1) Kunena installation process has failed or timed out (try to install it again)');
DEFINE('_KUNENA_ERROR_INCOMPLETE_2', '2) You have removed some of the Kunena tables from your database');
DEFINE('_KUNENA_ERROR_INCOMPLETE_3', '3) Your database has been corrupted');
DEFINE('_KUNENA_ERROR_INCOMPLETE_SUPPORT', 'Our support forum can be found from:');

// 1.0.9
DEFINE('_KUNENA_INSTALLED_VERSION', 'Versão instalada');
DEFINE('_KUNENA_COPYRIGHT', 'Direitos autorais');
DEFINE('_KUNENA_LICENSE', 'Licença');
DEFINE('_KUNENA_PROFILE_NO_USER', 'O usuário não existe.');
DEFINE('_KUNENA_PROFILE_NOT_FOUND', 'Usuário ainda não visitou o fórum e não tem perfil.');

// Search
DEFINE('_KUNENA_SEARCH_RESULTS', 'Resultados da pesquisa');
DEFINE('_KUNENA_SEARCH_ADVSEARCH', 'Pesquisa Avançada');
DEFINE('_KUNENA_SEARCH_SEARCHBY_KEYWORD', 'Busca por palavra-chave');
DEFINE('_KUNENA_SEARCH_KEYWORDS', 'Palavras-chave');
DEFINE('_KUNENA_SEARCH_SEARCH_POSTS', 'Pesquisar em todas as mensagens');
DEFINE('_KUNENA_SEARCH_SEARCH_TITLES', 'Pesquisar somente títulos');
DEFINE('_KUNENA_SEARCH_SEARCHBY_USER', 'Pesquisar por nome de usuário');
DEFINE('_KUNENA_SEARCH_UNAME', 'Nome de usuário');
DEFINE('_KUNENA_SEARCH_EXACT', 'Nome exato');
DEFINE('_KUNENA_SEARCH_USER_POSTED', 'Mensagens enviadas por');
DEFINE('_KUNENA_SEARCH_USER_STARTED', 'Tópicos iniciados por');
DEFINE('_KUNENA_SEARCH_USER_ACTIVE', 'Atividade em tópicos');
DEFINE('_KUNENA_SEARCH_OPTIONS', 'Opções de Pesquisa');
DEFINE('_KUNENA_SEARCH_FIND_WITH', 'Encontrar tópicos com');
DEFINE('_KUNENA_SEARCH_LEAST', 'No mínimo');
DEFINE('_KUNENA_SEARCH_MOST', 'No máximo');
DEFINE('_KUNENA_SEARCH_ANSWERS', 'Respostas');
DEFINE('_KUNENA_SEARCH_FIND_POSTS', 'Localizar mensagens de');
DEFINE('_KUNENA_SEARCH_DATE_ANY', 'Qualquer data');
DEFINE('_KUNENA_SEARCH_DATE_LASTVISIT', 'Última visita');
DEFINE('_KUNENA_SEARCH_DATE_YESTERDAY', 'Ontem');
DEFINE('_KUNENA_SEARCH_DATE_WEEK', 'Uma semana atrás');
DEFINE('_KUNENA_SEARCH_DATE_2WEEKS', '2 semanas atrás');
DEFINE('_KUNENA_SEARCH_DATE_MONTH', 'Um mês atrás');
DEFINE('_KUNENA_SEARCH_DATE_3MONTHS', '3 meses atrás');
DEFINE('_KUNENA_SEARCH_DATE_6MONTHS', '6 meses atrás');
DEFINE('_KUNENA_SEARCH_DATE_YEAR', 'Um ano atrás');
DEFINE('_KUNENA_SEARCH_DATE_NEWER', 'E mais recente');
DEFINE('_KUNENA_SEARCH_DATE_OLDER', 'E mais antigos');
DEFINE('_KUNENA_SEARCH_SORTBY', 'Classificar resultados por');
DEFINE('_KUNENA_SEARCH_SORTBY_TITLE', 'Título');
DEFINE('_KUNENA_SEARCH_SORTBY_POSTS', 'Número de mensagens');
DEFINE('_KUNENA_SEARCH_SORTBY_VIEWS', 'Número de visualizações');
DEFINE('_KUNENA_SEARCH_SORTBY_START', 'Data de início de tópico');
DEFINE('_KUNENA_SEARCH_SORTBY_POST', 'Data da mensagem');
DEFINE('_KUNENA_SEARCH_SORTBY_USER', 'Nome de usuário');
DEFINE('_KUNENA_SEARCH_SORTBY_FORUM', 'Fórum');
DEFINE('_KUNENA_SEARCH_SORTBY_INC', 'Ordem crescente');
DEFINE('_KUNENA_SEARCH_SORTBY_DEC', 'Ordem decrescente');
DEFINE('_KUNENA_SEARCH_START', 'Ir para o número de resultados');
DEFINE('_KUNENA_SEARCH_LIMIT5', 'Mostrar 5 Resultados da pesquisa');
DEFINE('_KUNENA_SEARCH_LIMIT10', 'Mostrar 10 Resultados da pesquisa');
DEFINE('_KUNENA_SEARCH_LIMIT15', 'Mostrar 15 Resultados da pesquisa');
DEFINE('_KUNENA_SEARCH_LIMIT20', 'Mostrar 20 Resultados da pesquisa');
DEFINE('_KUNENA_SEARCH_SEARCHIN', 'Pesquisar nas Categorias');
DEFINE('_KUNENA_SEARCH_SEARCHIN_ALLCATS', 'Todas as Categorias');
DEFINE('_KUNENA_SEARCH_SEARCHIN_CHILDREN', 'Buscar também em fóruns internos');
DEFINE('_KUNENA_SEARCH_SEND', 'Enviar');
DEFINE('_KUNENA_SEARCH_CANCEL', 'Cancelar');
DEFINE('_KUNENA_SEARCH_ERR_NOPOSTS', 'Nenhuma mensagem encontrada com seus termos de pesquisa.');
DEFINE('_KUNENA_SEARCH_ERR_SHORTKEYWORD', 'Pelo menos uma palavra-chave com mais de 3 caracteres!');

// 1.0.8
DEFINE('_KUNENA_CATID', 'ID');
DEFINE('_POST_NOT_MODERATOR', 'Você não tem permissões de moderador!');
DEFINE('_POST_NO_FAVORITED_TOPIC', 'Este tópico <b>NÃO</b> foi adicionado aos seus favoritos');
DEFINE('_COM_C_SYNCEUSERSDESC', 'Sincronize a tabela de usuários do Kunena com a tabela de usuários do Joomla');
DEFINE('_POST_FORGOT_EMAIL', 'Você esqueceu de incluir seu endereço de e-mail. Clique no botão Voltar do navegador para voltar e tente novamente.');

DEFINE('_KUNENA_POST_DEL_ERR_FILE', 'Deletar todos os arquivos onde não esta anexado!');
// New strings for initial forum setup. Replacement for legacy sample data
DEFINE('_KUNENA_SAMPLE_FORUM_MENU_TITLE', 'Fórum');
DEFINE('_KUNENA_SAMPLE_MAIN_CATEGORY_TITLE', 'Fórum principal');
DEFINE('_KUNENA_SAMPLE_MAIN_CATEGORY_DESC', 'Esta é a categoria principal do fórum. Como um nível, uma categoria serve como um recipiente para categorias individuais ou fóruns. É também referida como uma categoria de nível 1 e deve ter uma configuração para qualquer Fórum Kunena.');
DEFINE('_KUNENA_SAMPLE_MAIN_CATEGORY_HEADER', 'A fim de fornecer informações adicionais para seus visitantes e membros, o cabecalho do fórum pode ser aproveitado para exibir texto na parte superior de uma determinada categoria.');


DEFINE('_KUNENA_SAMPLE_FORUM1_TITLE', 'Bem-vindo(a)');
DEFINE('_KUNENA_SAMPLE_FORUM1_DESC', 'Incentivamos os novos membros a enviar uma curta introdução de si neste fórum. Conheçam uns aos outros e compartilhem interesses em comuns.');


DEFINE('_KUNENA_SAMPLE_FORUM1_HEADER', '[b]Bem-vindo(a) ao fórum Kunena![/b]

Conte-nos sobre você, o que gosta e por que se tornou um membro deste site.
Damos as boas-vindas a todos os novos membros e esperamos vê-lo em atividade em nosso fórum!


');
DEFINE('_KUNENA_SAMPLE_FORUM2_TITLE', 'Caixa de Sugestões');
DEFINE('_KUNENA_SAMPLE_FORUM2_DESC', 'Tem algum comentário ou informação para compartilhar?
Não seja tímido e envie-nos uma nota. Queremos ouví-lo e nos esforçaremos para tornar nosso site melhor e mais amigável aos nossos visitantes e membros.');

DEFINE('_KUNENA_SAMPLE_FORUM2_HEADER', 'Este é o cabeçalho opcional do Fórum para a Caixa de Sugestões.');

DEFINE('_KUNENA_SAMPLE_POST1_SUBJECT', 'Bem-vindo(a) ao Kunena!');
DEFINE('_KUNENA_SAMPLE_POST1_TEXT', '[size=4][b]Bem-vindo(a) ao Kunena![/b][/size]

Obrigado por escolher o Kunena para as necessidades de fórum de sua comunidade em Joomla.


Kunena, traduzido do swahili significa "para falar", é desenvolvido por uma equipe de profissionais de código aberto com o objetivo de fornecer uma solução de fórum para o Joomla, bem unificada e de alta qualidade. Kunena suporta componentes de redes sociais como Comunidade Builder e JomSocial.



[size=4][b]Recursos adicionais do Kunena[/b][/size]

[b]Kunena - Documentação:[/b] [url]http://docs.kunena.com)[/url]

[b]Kunena - Fórum de Suporte[/b]: [url]http://www.kunena.com/forum[/url]

[b]Kunena - Downloads:[/b] [url]www.kunena.com/downloads[/url]

[b]Kunena - Blog:[/b] [url]http://www.kunena.com/blog[/url]

[b]Envie suas idéias:[/b] [url]http://www.kunena.com/uservoice[/url]

[b]Siga o Kunena no Twitter:[/b] [url]http://www.kunena.com/twitter[/url]
');


// 1.0.6
DEFINE('_KUNENA_JOMSOCIAL', 'JomSocial');

// 1.0.5
DEFINE('_COM_A_HIGHLIGHTCODE_DESC', 'Ativa o javascript de realçamento da tag código (sintaxe colorida) do Kunena. Se os seus usuários publicarem código "php" ou fragmentos semelhantes dentro das tags código, ativar isto irá colorir o código. Se o seu fórum não faz uso destas publicações de linguagem de programação, pode querer desativá-lo para evitar que as tags código sejam mal formadas.');
DEFINE('_COM_A_HIGHLIGHTCODE', 'Ativar Realçamento de Código');


DEFINE('_COM_A_RSS_TYPE', 'Tipo Padrão de RSS');
DEFINE('_COM_A_RSS_TYPE_DESC', 'Escolha entre os Feeds RSS por tópico ou publicação. Por tópico significa que apenas uma entrada por tópico será listada no Feed RSS, independentemente de quantas publicações foram feitas dentro desse segmento. Por tópico cria um Feed RSS mais curto e compacto, mas não irá listar todas as respostas feitas.');

DEFINE('_COM_A_RSS_BY_THREAD', 'Por Tópico');
DEFINE('_COM_A_RSS_BY_POST', 'Por Mensagem');
DEFINE('_COM_A_RSS_HISTORY', 'Histórico RSS');
DEFINE('_COM_A_RSS_HISTORY_DESC', 'Selecione quanto do histórico deverá ser incluído no Feed RSS. O padrão é de 1 mês, mas pode querer limitá-lo a 1 semana em sites com alto volume.');

DEFINE('_COM_A_RSS_HISTORY_WEEK', '1 Semana');
DEFINE('_COM_A_RSS_HISTORY_MONTH', '1 Mês');
DEFINE('_COM_A_RSS_HISTORY_YEAR', '1 Ano');
DEFINE('_COM_A_FBDEFAULT_PAGE', 'Página padrão do Kunena');
DEFINE('_COM_A_FBDEFAULT_PAGE_DESC', 'Selecione a página padrão do Kunena que será exibida quando um link for clicado ou o fórum for acessado inicialmente. O padrão é em Discussões Recentes. Deve ser definida para Categorias para temas diferentes do default_ex. Se Minhas Discussões for Selecionado, visitantes serão padronizados para Discussões Recentes.');

DEFINE('_COM_A_FBDEFAULT_PAGE_RECENT', 'Discussões Recentes');
DEFINE('_COM_A_FBDEFAULT_PAGE_MY', 'Minhas Discussões');
DEFINE('_COM_A_FBDEFAULT_PAGE_CATEGORIES', 'Categorias');
DEFINE('_KUNENA_BBCODE_HIDE', 'O seguinte está oculto dos usuários não registados:');
DEFINE('_KUNENA_BBCODE_SPOILER', 'Alerta: Spoiler!');
DEFINE('_KUNENA_FORUM_SAME_ERR', 'Fórum Pai não deve ser o mesmo.');
DEFINE('_KUNENA_FORUM_OWNCHILD_ERR', 'Fórum Pai é um de seus próprios filhos.');
DEFINE('_KUNENA_FORUM_UNKNOWN_ERR', 'ID do Fórum não existe.');
DEFINE('_KUNENA_RECURSION', 'Recursividade detectada.');
DEFINE('_POST_FORGOT_NAME_ALERT', 'Esqueceu-se de introduzir o nome.');
DEFINE('_POST_FORGOT_EMAIL_ALERT', 'Esqueceu-se de introduzir o seu e-mail.');
DEFINE('_POST_FORGOT_SUBJECT_ALERT', 'Esqueceu-se de introduzir um assunto.');
DEFINE('_KUNENA_EDIT_TITLE', 'Editar os seus Detalhes');
DEFINE('_KUNENA_YOUR_NAME', 'O Seu Nome:');
DEFINE('_KUNENA_EMAIL', 'e-mail:');
DEFINE('_KUNENA_UNAME', 'Usuário:');
DEFINE('_KUNENA_PASS', 'Senha:');
DEFINE('_KUNENA_VPASS', 'Verificar senha:');
DEFINE('_KUNENA_USER_DETAILS_SAVE', 'Detalhes do usuário foram gravados.');
DEFINE('_KUNENA_TEAM_CREDITS', 'Créditos');
DEFINE('_COM_A_BBCODE', 'BBCode');
DEFINE('_COM_A_BBCODE_SETTINGS', 'Configurações BBCode');
DEFINE('_COM_A_SHOWSPOILERTAG', 'Exibir tag spoiler na barra do editor');
DEFINE('_COM_A_SHOWSPOILERTAG_DESC', 'Configure para <strong>"Sim"</strong> se quiser que a tag [spoiler] seja exibida na barra do editor de publicação.');
DEFINE('_COM_A_SHOWVIDEOTAG', 'Exibir tag video na barra do editor');
DEFINE('_COM_A_SHOWVIDEOTAG_DESC', 'Configure para <strong>"Sim"</strong> se quiser que a tag [video] seja listada na barra do editor de publicação.');
DEFINE('_COM_A_SHOWEBAYTAG', 'Exibir tag eBay na barra do editor');
DEFINE('_COM_A_SHOWEBAYTAG_DESC', 'Configure para <strong>"Sim"</strong> se você quer que a tag [ebay] seja listada na barra do editor de publicação.');

DEFINE('_COM_A_TRIMLONGURLS', 'Aparar URLs longas');
DEFINE('_COM_A_TRIMLONGURLS_DESC', 'Configure para <strong>"Sim"</strong> se quiser que URLs longas sejam aparadas. Veja configurações de aparo de URL no inicio e no fim.');

DEFINE('_COM_A_TRIMLONGURLSFRONT', 'Parte inicial de URLs aparadas');
DEFINE('_COM_A_TRIMLONGURLSFRONT_DESC', 'Número de caracteres para porção inicial de URLs aparadas. Aparar URLs longas deve ser setado para <strong>"Sim"</strong>.');

DEFINE('_COM_A_TRIMLONGURLSBACK', 'Parte final de URLs aparadas');
DEFINE('_COM_A_TRIMLONGURLSBACK_DESC', 'Número de caracteres para porção final de URLs aparadas. Aparar URLs longas deve ser setado para <strong>"Sim"</strong>.');

DEFINE('_COM_A_AUTOEMBEDYOUTUBE', 'Auto incorporar vídeos do YouTube');
DEFINE('_COM_A_AUTOEMBEDYOUTUBE_DESC', 'Configure para <strong>"Sim"</strong> se você quer que URLs de vídeos do youtube sejam automaticamente incorporadas.');

DEFINE('_COM_A_AUTOEMBEDEBAY', 'Auto incorporar itens do eBay');
DEFINE('_COM_A_AUTOEMBEDEBAY_DESC', 'Configure para <strong>"Sim"</strong> se você quer que pesquisas e itens do eBay sejam automaticamente incorporados.');

DEFINE('_COM_A_EBAYLANGUAGECODE', 'Código de idioma do widget do eBay');
DEFINE('_COM_A_EBAYLANGUAGECODE_DESC', 'É importante configurar o código de idioma apropriado porque o widget do eBay deriva a linguagem e moeda dele. O padrão é en-us para ebay.com. Exemplos: ebay.de: de-de, ebay.at: de-at, ebay.co.uk: en-gb');
DEFINE('_COM_A_KUNENA_SESSION_TIMEOUT', 'Duração da Sessão');
DEFINE('_COM_A_KUNENA_SESSION_TIMEOUT_DESC', 'O padrão é 1800 [segundos]. A duração da sessão (timeout) em segundos é similar à duração da sessão do Joomla. A duração da sessão é importante para recálculo de direitos de accesso, exibição de quem está online e indicador de NOVA mensagem. Uma vez que uma sessão expire após este tempo, os direitos de acesso e o indicador de NOVA Mensagem são reiniciados.');


// Advanced administrator merge-split functions
DEFINE('_GEN_MERGE', 'Mesclar');
DEFINE('_VIEW_MERGE', 'Ver mescla');
DEFINE('_POST_MERGE_TOPIC', 'Fundir este tópico com');
DEFINE('_POST_MERGE_GHOST', 'Deixar cópia fantasma do tópico');
DEFINE('_POST_SUCCESS_MERGE', 'Tópico fundido com sucesso.');
DEFINE('_POST_TOPIC_NOT_MERGED', 'Mesclar falhou.');
DEFINE('_GEN_SPLIT', 'Dividir');
DEFINE('_GEN_DOSPLIT', 'Vá');
DEFINE('_VIEW_SPLIT', 'Ver divisão');
DEFINE('_POST_SUCCESS_SPLIT', 'Tópico dividido com sucesso.');
DEFINE('_POST_SUCCESS_SPLIT_TOPIC_CHANGED', 'Tópico modificado com sucesso.');
DEFINE('_POST_SPLIT_TOPIC_NOT_CHANGED', 'Modificação do tópico falhou.');
DEFINE('_POST_TOPIC_NOT_SPLIT', 'Divisão falhou.');
DEFINE('_POST_DUPLICATE_IGNORED', 'Duplicar, mensagem idêntica foi ignorada.');
DEFINE('_POST_SPLIT_HINT', '<br />Dica: Você pode promover uma mensagem à posição de tópico se a selecionar na segunda coluna e marcar nada para dividir.<br />');

DEFINE('_POST_LINK_ORPHANS_TOPIC', 'linkar órfãos ao tópico');
DEFINE('_POST_LINK_ORPHANS_TOPIC_TITLE', 'Linkar órfãos à nova mensagem do tópico.');
DEFINE('_POST_LINK_ORPHANS_PREVPOST', 'linkar órfãos à mensagem anterior');
DEFINE('_POST_LINK_ORPHANS_PREVPOST_TITLE', 'Linkar órfãos à mensagem anterior.');
DEFINE('_POST_MERGE', 'fundir');
DEFINE('_POST_MERGE_TITLE', 'Anexe este tópico à primeiro mensagem.');
DEFINE('_POST_INVERSE_MERGE', 'mescla inversa');
DEFINE('_POST_INVERSE_MERGE_TITLE', 'Anexe a primeira mensagem a este tópico.');

// Additional
DEFINE('_POST_UNFAVORITED_TOPIC', 'Este tópico foi removido dos seus favoritos.');
DEFINE('_POST_NO_UNFAVORITED_TOPIC', 'Este tópico <b>NÃO</b> foi removido dos seus favoritos.');
DEFINE('_POST_SUCCESS_UNFAVORITE', 'O seu pedido de remoção dos favoritos foi processado.');
DEFINE('_POST_UNSUBSCRIBED_TOPIC', 'Este tópico foi removido das suas inscrições.');
DEFINE('_POST_NO_UNSUBSCRIBED_TOPIC', 'Este tópico <b>NÃO</b> foi removido das suas inscrições.');
DEFINE('_POST_SUCCESS_UNSUBSCRIBE', 'O seu pedido de remoção das inscrições foi processado.');
DEFINE('_POST_NO_DEST_CATEGORY', 'Nenhuma categoria de destino foi Selecionada. Nada foi movido.');
// Default_EX template
DEFINE('_KUNENA_ALL_DISCUSSIONS', 'Todas as Discussões');
DEFINE('_KUNENA_MY_DISCUSSIONS', 'As Minhas Discussões');
DEFINE('_KUNENA_MY_DISCUSSIONS_DETAIL', 'Discussões que iniciei ou respondi');
DEFINE('_KUNENA_CATEGORY', 'Categoria:');
DEFINE('_KUNENA_CATEGORIES', 'Categorias');
DEFINE('_KUNENA_POSTED_AT', 'Publicada há');
DEFINE('_KUNENA_AGO', 'atrás');
DEFINE('_KUNENA_DISCUSSIONS', 'Discussões');
DEFINE('_KUNENA_TOTAL_THREADS', 'Total de Tópicos:');
DEFINE('_SHOW_DEFAULT', 'Padrão');
DEFINE('_SHOW_MONTH', 'Mês');
DEFINE('_SHOW_YEAR', 'Ano');

// 1.0.4
DEFINE('_KUNENA_COPY_FILE', 'Copiando "%src%" para "%dst%"...');
DEFINE('_KUNENA_COPY_OK', 'OK');
DEFINE('_KUNENA_CSS_SAVE', 'Salvando arquivo CSS deve ser aqui: arquivo="%file%"');
DEFINE('_KUNENA_UP_ATT_10', 'A tabela de anexos foi atualizada com sucesso com as últimas estrututas das séries 1.0.x!');
DEFINE('_KUNENA_UP_ATT_10_MSG', 'Os anexos na tabela de mensagens foram atualizados com sucesso para a estrutura da última série 1.0.x!');


DEFINE('_KUNENA_TOPIC_MOVED', '---');
DEFINE('_KUNENA_TOPIC_MOVED_LONG', '------------');
DEFINE('_KUNENA_POST_DEL_ERR_CHILD', 'Não se pode promover iniciantes na hierarquia das mensagens. Nada Excluído.');
DEFINE('_KUNENA_POST_DEL_ERR_MSG', 'Impossível excluir a(s) mensagens(s) - nada mais excluído.');
DEFINE('_KUNENA_POST_DEL_ERR_TXT', 'Impossível excluir os textos da(s) mensagens(s). Atualize manualmente a base de dados (mesid=%id%).');
DEFINE('_KUNENA_POST_DEL_ERR_USR', 'Tudo excluído, mas falhou ao atualizar as estatísticas de mensagens do usuário!');
DEFINE('_KUNENA_POST_MOV_ERR_DB', "Erro severo na base de dados. Atualize a sua base de dados manualmente, assim as respostas ao tópico serão combinadas com o fórum novo também");


DEFINE('_KUNENA_UNIST_SUCCESS', "O componente Kunena Forum foi desinstalado com sucesso!");
DEFINE('_KUNENA_PDF_VERSION', 'Versão do Componente de Fórum Kunena: %version%');
DEFINE('_KUNENA_PDF_DATE', 'Gerado: %date%');
DEFINE('_KUNENA_SEARCH_NOFORUM', 'Nenhum fórum para ser pesquisado.');

DEFINE('_KUNENA_ERRORADDUSERS', 'Erro ao adicionar usuários:');
DEFINE('_KUNENA_USERSSYNCDELETED', 'Usuários sincronizados. Excluídos:');
DEFINE('_KUNENA_USERSSYNCADD', ', adicionado:');
DEFINE('_KUNENA_SYNCUSERPROFILES', 'perfis de usuários.');
DEFINE('_KUNENA_NOPROFILESFORSYNC', 'Nenhum perfil elegível encontrado para sincronização.');
DEFINE('_KUNENA_SYNC_USERS', 'Sincronizar Usuários');
DEFINE('_KUNENA_SYNC_USERS_DESC', 'Sincronizar tabela de usuários do Kunena com a tabela de usuários do Joomla!');
DEFINE('_KUNENA_A_MAIL_ADMIN', 'Administradores de e-mail');
DEFINE('_KUNENA_A_MAIL_ADMIN_DESC',
    'Setar para <strong>"Sim"</strong> se quiser que as notificações por e-mail para cada nova resposta publicada sejam enviados para o(s) administrador(es) do sistema habilitado(s).');

DEFINE('_KUNENA_RANKS_EDIT', 'Editar Rank');
DEFINE('_KUNENA_USER_HIDEEMAIL', 'Ocultar e-mail');
DEFINE('_KUNENA_DT_DATE_FMT','%d/%m/%Y');
DEFINE('_KUNENA_DT_TIME_FMT','%H:%M');
DEFINE('_KUNENA_DT_DATETIME_FMT','%d/%m/%Y %H:%M');
DEFINE('_KUNENA_DT_LDAY_SUN', 'Domingo');
DEFINE('_KUNENA_DT_LDAY_MON', 'Segunda-feira');
DEFINE('_KUNENA_DT_LDAY_TUE', 'Terça-feira');
DEFINE('_KUNENA_DT_LDAY_WED', 'Quarta-feira');
DEFINE('_KUNENA_DT_LDAY_THU', 'Quinta-feira');
DEFINE('_KUNENA_DT_LDAY_FRI', 'Sexta-feira');
DEFINE('_KUNENA_DT_LDAY_SAT', 'Sábado');
DEFINE('_KUNENA_DT_DAY_SUN', 'Dom');
DEFINE('_KUNENA_DT_DAY_MON', 'Seg');
DEFINE('_KUNENA_DT_DAY_TUE', 'Ter');
DEFINE('_KUNENA_DT_DAY_WED', 'Qua');
DEFINE('_KUNENA_DT_DAY_THU', 'Qui');
DEFINE('_KUNENA_DT_DAY_FRI', 'Sex');
DEFINE('_KUNENA_DT_DAY_SAT', 'Sáb');
DEFINE('_KUNENA_DT_LMON_JAN', 'Janeiro');
DEFINE('_KUNENA_DT_LMON_FEB', 'Fevereiro');
DEFINE('_KUNENA_DT_LMON_MAR', 'Março');
DEFINE('_KUNENA_DT_LMON_APR', 'Abril');
DEFINE('_KUNENA_DT_LMON_MAY', 'Maio');
DEFINE('_KUNENA_DT_LMON_JUN', 'Junho');
DEFINE('_KUNENA_DT_LMON_JUL', 'Julho');
DEFINE('_KUNENA_DT_LMON_AUG', 'Agosto');
DEFINE('_KUNENA_DT_LMON_SEP', 'Setembro');
DEFINE('_KUNENA_DT_LMON_OCT', 'Outubro');
DEFINE('_KUNENA_DT_LMON_NOV', 'Novembro');
DEFINE('_KUNENA_DT_LMON_DEV', 'Dezembro');
DEFINE('_KUNENA_DT_MON_JAN', 'Jan');
DEFINE('_KUNENA_DT_MON_FEB', 'Fev');
DEFINE('_KUNENA_DT_MON_MAR', 'Mar');
DEFINE('_KUNENA_DT_MON_APR', 'Abr');
DEFINE('_KUNENA_DT_MON_MAY', 'Mai');
DEFINE('_KUNENA_DT_MON_JUN', 'Jun');
DEFINE('_KUNENA_DT_MON_JUL', 'Jul');
DEFINE('_KUNENA_DT_MON_AUG', 'Ago');
DEFINE('_KUNENA_DT_MON_SEP', 'Set');
DEFINE('_KUNENA_DT_MON_OCT', 'Out');
DEFINE('_KUNENA_DT_MON_NOV', 'Nov');
DEFINE('_KUNENA_DT_MON_DEV', 'Dez');
DEFINE('_KUNENA_CHILD_BOARD', 'Iniciante');
DEFINE('_WHO_ONLINE_GUEST', 'Convidado');
DEFINE('_WHO_ONLINE_MEMBER', 'Usuário');
DEFINE('_KUNENA_IMAGE_PROCESSOR_NONE', 'nenhum');
DEFINE('_KUNENA_IMAGE_PROCESSOR', 'Processador de Imagem:');
DEFINE('_KUNENA_INSTALL_CLICK_TO_CONTINUE', 'Clique aqui para continuar...');
DEFINE('_KUNENA_INSTALL_APPLY', 'Aplicar!');
DEFINE('_KUNENA_NO_ACCESS', 'Você não tem acesso a este fórum!');
DEFINE('_KUNENA_TIME_SINCE', '%time% atrás');
DEFINE('_KUNENA_DATE_YEARS', 'Anos');
DEFINE('_KUNENA_DATE_MONTHS', 'Meses');
DEFINE('_KUNENA_DATE_WEEKS','Semanas');
DEFINE('_KUNENA_DATE_DAYS', 'Dias');
DEFINE('_KUNENA_DATE_HOURS', 'Horas');
DEFINE('_KUNENA_DATE_MINUTES', 'Minutos');
// 1.0.3
DEFINE('_KUNENA_CONFIRM_REMOVESAMPLEDATA', 'Tem a certeza que quer remover os dados de exemplo? Esta ação é irreversível.');
// 1.0.2
DEFINE('_KUNENA_HEADERADD', 'Título do Fórum:');
DEFINE('_KUNENA_ADVANCEDDISPINFO', "Mostrar Fórum");
DEFINE('_KUNENA_CLASS_SFX', "Sufixo da Classe CSS do Fórum");
DEFINE('_KUNENA_CLASS_SFXDESC', "Sufixo de CSS aplicado ao índice, mostrar categoria, visão e permite diferentes aparências por fórum.");

DEFINE('_COM_A_USER_EDIT_TIME', 'Editar tempo do usuário');
DEFINE('_COM_A_USER_EDIT_TIME_DESC', 'Insira 0 para tempo ilimitado, ou então o espaço de tempo em segundos da mensagem ou da última modificação para permitir edição.');


DEFINE('_COM_A_USER_EDIT_TIMEGRACE', 'Tempo de Graça da Edição do usuário');
DEFINE('_COM_A_USER_EDIT_TIMEGRACE_DESC', 'Padrão 600 [segundos], permite salvar a modificação até 600 segundos depois que o link de edição desaparece.');


DEFINE('_KUNENA_HELPPAGE','Ativar página de Ajuda');
DEFINE('_KUNENA_HELPPAGE_DESC','Se ajustado para <strong>"Sim"</strong> um link para a página de Ajuda será mostrado do menu do cabeçalho.');

DEFINE('_KUNENA_HELPPAGE_IN_FB','Mostra a ajuda no Kunena');
DEFINE('_KUNENA_HELPPAGE_IN_KUNENA_DESC','Se ajustado para <strong>"Sim"</strong> o texto do conteúdo de ajuda será incluído no Kunena e a ajuda externa não vai funcionar. <b>Nota:</b> Você pode adicionar um "ID de Conteúdo de Ajuda" .');

DEFINE('_KUNENA_HELPPAGE_CID','ID do Conteúdo de Ajuda');
DEFINE('_KUNENA_HELPPAGE_CID_DESC','Você deve ajustar a configuração "Mostra ajuda no Kunena" para <b>"SIM"</b>.');

DEFINE('_KUNENA_HELPPAGE_LINK',' Ajuda em link de Página Externa');
DEFINE('_KUNENA_HELPPAGE_LINK_DESC','Se você mostrar o link externo, por favor ajuste a configuração "Mostra ajuda no Kunena" para <b>"Não"</b>.');

DEFINE('_KUNENA_RULESPAGE','Permitir Páginas de Regras');
DEFINE('_KUNENA_RULESPAGE_DESC','Se ajustar para <strong>"Sim"</strong> um link será mostrado no cabeçalho do fórum.');
DEFINE('_KUNENA_RULESPAGE_IN_FB','Mostrar Regras no Kunena');
DEFINE('_KUNENA_RULESPAGE_IN_KUNENA_DESC','Se ajustado para <strong>"Sim"</strong> o texto do conteúdo das regras será o do Kunena e o link externo não funcionará. <b>Nota:</b> Você pode adicionar um "ID de Conteúdo de Regras" .');

DEFINE('_KUNENA_RULESPAGE_CID','ID de Conteúdo de Regras');
DEFINE('_KUNENA_RULESPAGE_CID_DESC','Você deve ajustar para a configuração <b>"SIM"</b> "Mostrar regras no Kunena".');
DEFINE('_KUNENA_RULESPAGE_LINK',' Link da página externa de Regras');
DEFINE('_KUNENA_RULESPAGE_LINK_DESC','Se você mostrar o link externo de regras, por favor ajuste a configuração "Mostrar Regras no Kunena" para <b>"NÃO"</b>.');

DEFINE('_KUNENA_AVATAR_GDIMAGE_NOT','Biblioteca GD não encontrada.');
DEFINE('_KUNENA_AVATAR_GD2IMAGE_NOT','Biblioteca GD2 não encontrada.');
DEFINE('_KUNENA_GD_INSTALLED',' Versão da biblioteca GD disponível: ');
DEFINE('_KUNENA_GD_NO_VERSION','Não foi possível detectar a versão da GD.');
DEFINE('_KUNENA_GD_NOT_INSTALLED','GD não está instalada, você pode obter mais informações.');
DEFINE('_KUNENA_AVATAR_SMALL_HEIGHT','Altura da Imagem Pequena');
DEFINE('_KUNENA_AVATAR_SMALL_WIDTH','Largura da Imagem Pequena');
DEFINE('_KUNENA_AVATAR_MEDIUM_HEIGHT','Altura da Imagem Média');
DEFINE('_KUNENA_AVATAR_MEDIUM_WIDTH','Largura da Imagem Média');
DEFINE('_KUNENA_AVATAR_LARGE_HEIGHT','Altura da Imagem Grande');
DEFINE('_KUNENA_AVATAR_LARGE_WIDTH','Largura da Imagem Grande');
DEFINE('_KUNENA_AVATAR_QUALITY','Qualidade do Avatar');
DEFINE('_KUNENA_WELCOME','Bem-Vindo ao Kunena');
DEFINE('_KUNENA_WELCOME_DESC','Obrigado por escolher o Kunena como a sua solução de Fórum. Esta tela apresenta uma avaliação rápida de todas as estatísticas de sua plataforma. Os links do lado esquerdo desta tela permitem-lhe controlar todo o aspecto do seu Fórum. Cada página tem instruções sobre como usar as ferramentas.');

DEFINE('_KUNENA_STATISTIC','Estatísticas');
DEFINE('_KUNENA_VALUE','Valor');
DEFINE('_GEN_CATEGORY','Categoria');
DEFINE('_GEN_STARTEDBY','Iniciado por: ');
DEFINE('_GEN_STATS','Estatísticas');
DEFINE('_STATS_TITLE',' fórum - estatísticas');
DEFINE('_STATS_GEN_STATS','Estatísticas Gerais');
DEFINE('_STATS_TOTAL_MEMBERS','Usuários:');
DEFINE('_STATS_TOTAL_REPLIES','Respostas:');
DEFINE('_STATS_TOTAL_TOPICS','Tópicos:');
DEFINE('_STATS_TODAY_TOPICS','Tópicos de Hoje:');
DEFINE('_STATS_TODAY_REPLIES','Respostas de Hoje:');
DEFINE('_STATS_TOTAL_CATEGORIES','Categorias:');
DEFINE('_STATS_TOTAL_SECTIONS','Seções:');
DEFINE('_STATS_LATEST_MEMBER','Último Usuário:');
DEFINE('_STATS_YESTERDAY_TOPICS','Tópicos de ontem:');
DEFINE('_STATS_YESTERDAY_REPLIES','Respostas de ontem:');
DEFINE('_STATS_POPULAR_PROFILE','10 Usuários + Populares (Visualizações do Perfil)');
DEFINE('_STATS_TOP_POSTERS','Usuários que mais publicam');
DEFINE('_STATS_POPULAR_TOPICS','Tópicos mais populares');
DEFINE('_COM_A_STATSPAGE','Ativar Página de Estatísticas');
DEFINE('_COM_A_STATSPAGE_DESC','Se ajustado para <strong>"Sim"</strong>, um link público será mostrado no cabeçalho do fórum para a página de estatísticas. Esta página mostrará várias estatísticas sobre o seu fórum. <em>A página de estatísticas esterá sempre disponível para os administradores, apesar desta configuração!</em>');

DEFINE('_COM_C_JBSTATS','Estatísticas do Fórum');
DEFINE('_COM_C_JBSTATS_DESC','Estatísticas do Fórum');
DEFINE('_GEN_GENERAL','Geral');
DEFINE('_PERM_NO_READ','Você não tem permissão para acessar a este fórum.');

DEFINE('_KUNENA_SMILEY_SAVED','Smiley gravado');
DEFINE('_KUNENA_SMILEY_DELETED','Smiley apagado');
DEFINE('_KUNENA_CODE_ALLREADY_EXITS','Código já existe');
DEFINE('_KUNENA_MISSING_PARAMETER','Falta de Parâmetros.');
DEFINE('_KUNENA_RANK_ALLREADY_EXITS','Rank já existe');
DEFINE('_KUNENA_RANK_DELETED','Rank Apagado');
DEFINE('_KUNENA_RANK_SAVED','Rank Gravado');
DEFINE('_KUNENA_DELETE_SELECTED','Apagar seleção');
DEFINE('_KUNENA_MOVE_SELECTED','Mover seleção');
DEFINE('_KUNENA_REPORT_LOGGED','Ligado');
DEFINE('_KUNENA_GO','Ir');
DEFINE('_KUNENA_MAILFULL','Incluir a mensagem completa no e-mail enviado aos inscritos');
DEFINE('_KUNENA_MAILFULL_DESC','Se <strong>"Não"</strong>, inscritos receberão somente títulos das novas mensagens.');

DEFINE('_KUNENA_HIDETEXT','Por favor, faça login para ver este conteúdo!');
DEFINE('_BBCODE_HIDE','Texto escondido: [hide]algum texto a ser escondido[/hide] - Esconde o texto para visitantes'); // Depreciado na versão 1.0.10

DEFINE('_KUNENA_FILEATTACH','Arquivo Anexado: ');
DEFINE('_KUNENA_FILENAME','Nome do Arquivo: ');
DEFINE('_KUNENA_FILESIZE','Tamanho do Arquivo: ');
DEFINE('_KUNENA_MSG_CODE','Código: ');
DEFINE('_KUNENA_CAPTCHA_ON','Sistema de Proteção contra Spam');
DEFINE('_KUNENA_CAPTCHA_DESC','Sistema Antispam & antibot CAPTCHA On/Off.');
DEFINE('_KUNENA_CAPDESC','Entre com o Código aqui');
DEFINE('_KUNENA_CAPERR','Código incorreto!');
DEFINE('_KUNENA_COM_A_REPORT', 'Notificar Mensagem');
DEFINE('_KUNENA_COM_A_REPORT_DESC', 'Se você quer que os usuários reportem alguma mensagem altere para sim.');

DEFINE('_KUNENA_REPORT_MSG', 'Mensagem Notificada');
DEFINE('_KUNENA_REPORT_REASON', 'Razão');
DEFINE('_KUNENA_REPORT_MESSAGE', 'Sua Mensagem');
DEFINE('_KUNENA_REPORT_SEND', 'Enviar Notificação');
DEFINE('_KUNENA_REPORT', 'Notificar ao Moderador');
DEFINE('_KUNENA_REPORT_RSENDER', 'Notificação Enviada por: ');
DEFINE('_KUNENA_REPORT_RREASON', 'Razão da Notificação: ');
DEFINE('_KUNENA_REPORT_RMESSAGE', 'Mensagem da Notificação: ');
DEFINE('_KUNENA_REPORT_POST_POSTER', 'Mensagem Postada por: ');
DEFINE('_KUNENA_REPORT_POST_SUBJECT', 'Assunto da Mensagem: ');
DEFINE('_KUNENA_REPORT_POST_MESSAGE', 'Mensagem: ');
DEFINE('_KUNENA_REPORT_POST_LINK', 'Link da Mensagem: ');
DEFINE('_KUNENA_REPORT_INTRO', 'foi-lhe enviada uma mensagem porque');
DEFINE('_KUNENA_REPORT_SUCCESS', 'Notificação Enviada com sucesso!');
DEFINE('_KUNENA_EMOTICONS', 'Emoticons');
DEFINE('_KUNENA_EMOTICONS_SMILEY', 'Smiley');
DEFINE('_KUNENA_EMOTICONS_CODE', 'Código');
DEFINE('_KUNENA_EMOTICONS_URL', 'URL');
DEFINE('_KUNENA_EMOTICONS_EDIT_SMILEY', 'Editar Smiley');
DEFINE('_KUNENA_EMOTICONS_EDIT_SMILIES', 'Editar Smilies');
DEFINE('_KUNENA_EMOTICONS_EMOTICONBAR', 'EmoticonBar');
DEFINE('_KUNENA_EMOTICONS_NEW_SMILEY', 'Novo Smiley');
DEFINE('_KUNENA_EMOTICONS_MORE_SMILIES', 'Mais Smilies');
DEFINE('_KUNENA_EMOTICONS_CLOSE_WINDOW', 'Fechar Janela');
DEFINE('_KUNENA_EMOTICONS_ADDITIONAL_EMOTICONS', 'Adicionar Emoticons');
DEFINE('_KUNENA_EMOTICONS_PICK_A_SMILEY', 'Escolha um smiley');
DEFINE('_KUNENA_MAMBOT_SUPPORT', 'Suporte a plugins do Joomla');
DEFINE('_KUNENA_MAMBOT_SUPPORT_DESC', 'Permitir plugins (Mambot) do Joomla');
DEFINE('_KUNENA_MYPROFILE_PLUGIN_SETTINGS', 'Configurações do Plugin Meu Perfil');
DEFINE('_KUNENA_USERNAMECANCHANGE', 'Permitir Alterar o Nome de Usuário');
DEFINE('_KUNENA_USERNAMECANCHANGE_DESC', 'Permite a alteração do Nome de Usuário no Plugin Meu Perfil.');
DEFINE('_KUNENA_RECOUNTFORUMS','Recontar Estatísticas de Categorias');
DEFINE('_KUNENA_RECOUNTFORUMS_DONE','Todas as estatísticas de categorias foram recontadas.');
DEFINE('_KUNENA_EDITING_REASON','Razão para editar');
DEFINE('_KUNENA_EDITING_LASTEDIT','Última Edição');
DEFINE('_KUNENA_BY','Por');
DEFINE('_KUNENA_REASON','Razão');
DEFINE('_GEN_GOTOBOTTOM', 'Ir para baixo');
DEFINE('_GEN_GOTOTOP', 'Ir para cima');
DEFINE('_STAT_USER_INFO', 'Informações do usuário');
DEFINE('_USER_SHOWEMAIL', 'Mostrar e-mail');
DEFINE('_USER_SHOWONLINE', 'Mostrar Online');
DEFINE('_KUNENA_HIDDEN_USERS', 'Usuários Ocultos');
DEFINE('_KUNENA_SAVE', 'Gravar');
DEFINE('_KUNENA_RESET', 'Reset');
DEFINE('_KUNENA_DEFAULT_GALLERY', 'Galeria Padrão');
DEFINE('_KUNENA_MYPROFILE_PERSONAL_INFO', 'Informações Pessoais');
DEFINE('_KUNENA_MYPROFILE_SUMMARY', 'Índice');
DEFINE('_KUNENA_MYPROFILE_MYAVATAR', 'O meu Avatar');
DEFINE('_KUNENA_MYPROFILE_FORUM_SETTINGS', 'Ajuste do Fórum');
DEFINE('_KUNENA_MYPROFILE_LOOK_AND_LAYOUT', 'Aparência e Layout');
DEFINE('_KUNENA_MYPROFILE_MY_PROFILE_INFO', 'Editar o meu Perfil');
DEFINE('_KUNENA_MYPROFILE_MY_POSTS', 'Minhas Mensagens');
DEFINE('_KUNENA_MYPROFILE_MY_SUBSCRIBES', 'As minhas Inscrições');
DEFINE('_KUNENA_MYPROFILE_MY_FAVORITES', 'Os meus Favoritos');
DEFINE('_KUNENA_MYPROFILE_PRIVATE_MESSAGING', 'Mensagens Privadas');
DEFINE('_KUNENA_MYPROFILE_INBOX', 'Caixa de Entrada');
DEFINE('_KUNENA_MYPROFILE_NEW_MESSAGE', 'Nova Mensagem');
DEFINE('_KUNENA_MYPROFILE_OUTBOX', 'Ítems Enviados');
DEFINE('_KUNENA_MYPROFILE_TRASH', 'Lixeira');
DEFINE('_KUNENA_MYPROFILE_SETTINGS', 'Ajustes');
DEFINE('_KUNENA_MYPROFILE_CONTACTS', 'Contatos');
DEFINE('_KUNENA_MYPROFILE_BLOCKEDLIST', 'Lista dos Bloqueados');
DEFINE('_KUNENA_MYPROFILE_ADDITIONAL_INFO', 'Informações adicionais');
DEFINE('_KUNENA_MYPROFILE_NAME', 'Nome');
DEFINE('_KUNENA_MYPROFILE_USERNAME', 'Nome do usuário');
DEFINE('_KUNENA_MYPROFILE_EMAIL', 'e-mail');
DEFINE('_KUNENA_MYPROFILE_USERTYPE', 'Tipo de usuário');
DEFINE('_KUNENA_MYPROFILE_REGISTERDATE', 'Data de Registo');
DEFINE('_KUNENA_MYPROFILE_LASTVISITDATE', 'Data da Última Visita');
DEFINE('_KUNENA_MYPROFILE_POSTS', 'Mensagens');
DEFINE('_KUNENA_MYPROFILE_PROFILEVIEW', 'Visualizar Perfil');
DEFINE('_KUNENA_MYPROFILE_PERSONALTEXT', 'Texto Pessoal');
DEFINE('_KUNENA_MYPROFILE_GENDER', 'Sexo');
DEFINE('_KUNENA_MYPROFILE_BIRTHDATE', 'Data de Nascimento');
DEFINE('_KUNENA_MYPROFILE_BIRTHDATE_DESC', 'ANO (YYYY) - Mês (MM) - Dia (DD)');
DEFINE('_KUNENA_MYPROFILE_LOCATION', 'Localização');
DEFINE('_KUNENA_MYPROFILE_ICQ', 'ICQ');
DEFINE('_KUNENA_MYPROFILE_ICQ_DESC', 'Este é o seu número do ICQ.');
DEFINE('_KUNENA_MYPROFILE_AIM', 'AIM');
DEFINE('_KUNENA_MYPROFILE_AIM_DESC', 'Este é o seu número do AOL (nickname).');
DEFINE('_KUNENA_MYPROFILE_YIM', 'YIM');
DEFINE('_KUNENA_MYPROFILE_YIM_DESC', 'Este é seu Yahoo! Instant Messenger ( nickname).');
DEFINE('_KUNENA_MYPROFILE_SKYPE', 'SKYPE');
DEFINE('_KUNENA_MYPROFILE_SKYPE_DESC', 'Este é o seu Skype.');
DEFINE('_KUNENA_MYPROFILE_GTALK', 'GTALK');
DEFINE('_KUNENA_MYPROFILE_GTALK_DESC', 'Este é o seu Gtalk (nickname).');
DEFINE('_KUNENA_MYPROFILE_WEBSITE', 'Website');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_NAME', 'Nome do Website');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_NAME_DESC', 'Exemplo: Best of Joomla!');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_URL', 'Website URL');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_URL_DESC', 'Exemplo: www.bestofjoomla.com');
DEFINE('_KUNENA_MYPROFILE_MSN', 'MSN');
DEFINE('_KUNENA_MYPROFILE_MSN_DESC', 'Seu endereço de e-mail do MSN.');
DEFINE('_KUNENA_MYPROFILE_SIGNATURE', 'Assinatura');
DEFINE('_KUNENA_MYPROFILE_MALE', 'Masculino');
DEFINE('_KUNENA_MYPROFILE_FEMALE', 'Feminino');
DEFINE('_KUNENA_BULKMSG_DELETED', 'Mensagem excluída com Sucesso!');
DEFINE('_KUNENA_DATE_YEAR', 'Ano');
DEFINE('_KUNENA_DATE_MONTH', 'Mês');
DEFINE('_KUNENA_DATE_WEEK','Semana');
DEFINE('_KUNENA_DATE_DAY', 'Dia');
DEFINE('_KUNENA_DATE_HOUR', 'Hora');
DEFINE('_KUNENA_DATE_MINUTE', 'Minuto');
DEFINE('_KUNENA_IN_FORUM', ' no Fórum: ');
DEFINE('_KUNENA_FORUM_AT', ' Fórum: ');
DEFINE('_KUNENA_QMESSAGE_NOTE', 'Nota: Apesar dos botões do BBCode e Smiley não estarem visíveis, ainda podem ser usados');


// 1.0.1
DEFINE('_KUNENA_FORUMTOOLS','Ferramentas do Fórum');

//userlist
DEFINE('_KUNENA_USRL_USERLIST','Lista de usuários');
DEFINE('_KUNENA_USRL_REGISTERED_USERS','%s tem <b>%d</b> usuários registados');
DEFINE('_KUNENA_USRL_SEARCH_ALERT','Por favor introduza algum dado para procurar!');
DEFINE('_KUNENA_USRL_SEARCH','Procurar usuário');
DEFINE('_KUNENA_USRL_SEARCH_BUTTON','Procurar');
DEFINE('_KUNENA_USRL_LIST_ALL','Listar todos');
DEFINE('_KUNENA_USRL_NAME','Nome');
DEFINE('_KUNENA_USRL_USERNAME','Nome do usuário');
DEFINE('_KUNENA_USRL_GROUP','Grupo');
DEFINE('_KUNENA_USRL_POSTS','Mensagens');
DEFINE('_KUNENA_USRL_KARMA','Popularidade');
DEFINE('_KUNENA_USRL_HITS','Acessos');
DEFINE('_KUNENA_USRL_EMAIL','e-mail');
DEFINE('_KUNENA_USRL_USERTYPE','Tipo de usuário');
DEFINE('_KUNENA_USRL_JOIN_DATE','Registrado em');
DEFINE('_KUNENA_USRL_LAST_LOGIN','Último Login');
DEFINE('_KUNENA_USRL_NEVER','Nunca');
DEFINE('_KUNENA_USRL_ONLINE','Status');
DEFINE('_KUNENA_USRL_AVATAR','Foto');
DEFINE('_KUNENA_USRL_ASC','Crescente');
DEFINE('_KUNENA_USRL_DESC','Decrescente');
DEFINE('_KUNENA_USRL_DISPLAY_NR','Mostrar');
DEFINE('_KUNENA_USRL_DATE_FORMAT','%d.%m.%Y');

DEFINE('_KUNENA_ADMIN_CONFIG_PLUGINS','Plugins');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST','Lista de usuários');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_ROWS_DESC','Número de Linhas da Lista de usuários.');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_ROWS','Número de linhas na Lista de Usuários');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERONLINE','Status Online');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERONLINE_DESC','Mostrar status de usuários online.');

DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_AVATAR','Mostrar Avatar');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERLIST_AVATAR_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_NAME','Mostrar Nome Real');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_name_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERNAME','Mostrar Nome de Usuário');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERNAME_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_GROUP','Mostrar Grupo do Usuário');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_GROUP_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_POSTS','Mostrar Número de Mensagens');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_POSTS_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_KARMA','Mostrar a Popularidade');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_KARMA_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_EMAIL','Mostrar o e-mail');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_EMAIL_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERTYPE','Mostrar o tipo de usuário');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERTYPE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_JOINDATE','Mostrar data de Registro');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_JOINDATE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_LASTVISITDATE','Mostrar última Visita');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_LASTVISITDATE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_HITS','Mostrar o número de visualizações do Perfil');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_HITS_DESC','');
DEFINE('_KUNENA_DBWIZ', 'Assistente do Banco de Dados');
DEFINE('_KUNENA_DBMETHOD', 'Por favor, escolha um método de instalação:');

DEFINE('_KUNENA_DBCLEAN', 'Limpar a Instalação');
DEFINE('_KUNENA_DBUPGRADE', 'atualizar do Joomlaboard');
DEFINE('_KUNENA_TOPLEVEL', 'Nível Superior da Categoria');
DEFINE('_KUNENA_REGISTERED', 'Registrado');
DEFINE('_KUNENA_PUBLICBACKEND', 'Backend Público');
DEFINE('_KUNENA_SELECTANITEMTO', 'Selecione um ítem para');
DEFINE('_KUNENA_ERRORSUBS', 'Ocorreu um erro ao excluir as mensagens e subscrições ');

DEFINE('_KUNENA_WARNING', 'Aviso...');
DEFINE('_KUNENA_CHMOD1', 'Você precisa aplicar CHMOD 766 para que o aquivo possa ser atualizado.');
DEFINE('_KUNENA_YOURCONFIGFILEIS', 'A sua pasta de configuração é');
DEFINE('_KUNENA_KUNENA', 'Kunena');
DEFINE('_KUNENA_CLEXUS', 'Clexus PM');
DEFINE('_KUNENA_CB', 'Community Builder');
DEFINE('_KUNENA_MYPMS', 'myPMS II Open Source');
DEFINE('_KUNENA_UDDEIM', 'Uddeim');
DEFINE('_KUNENA_JIM', 'JIM');
DEFINE('_KUNENA_MISSUS', 'Missus');
DEFINE('_KUNENA_SELECTTEMPLATE', 'Selecione o Template');
DEFINE('_KUNENA_CONFIGSAVED', 'A configuração foi gravada.');
DEFINE('_KUNENA_CONFIGNOTSAVED', 'ERRO FATAL: A configuração não pôde ser gravada.');
DEFINE('_KUNENA_TFINW', 'a pasta não pode ser escrita.');
DEFINE('_KUNENA_FBCFS', 'Arquivo CSS do Kunena CSS salvo.');
DEFINE('_KUNENA_SELECTMODTO', 'Selecione um moderador para');
DEFINE('_KUNENA_CHOOSEFORUMTOPRUNE', 'Você tem que escolher um fórum para limpar!');
DEFINE('_KUNENA_DELMSGERROR', 'Falha ao excluir mensagens:');
DEFINE('_KUNENA_DELMSGERROR1', 'Falha ao excluir o texto das mensagens:');
DEFINE('_KUNENA_CLEARSUBSFAIL', 'Falha ao limpar as Subscrições:');
DEFINE('_KUNENA_FORUMPRUNEDFOR', 'Fórum limpo por');
DEFINE('_KUNENA_PRUNEDAYS', 'dias');
DEFINE('_KUNENA_PRUNEDELETED', 'Excluído:');
DEFINE('_KUNENA_PRUNETHREADS', 'Tópicos');
DEFINE('_KUNENA_ERRORPRUNEUSERS', 'Erro ao limpar usuários:');
DEFINE('_KUNENA_USERSPRUNEDDELETED', 'Usuários limpos; Excluídos:');
DEFINE('_KUNENA_PRUNEUSERPROFILES', 'Perfis dos usuários');
DEFINE('_KUNENA_NOPROFILESFORPRUNNING', 'Nenhum perfil achado necessário para limpar.');
DEFINE('_KUNENA_TABLESUPGRADED', 'Tabelas do Kunena estão atualizado para a versão.');
DEFINE('_KUNENA_FORUMCATEGORY', 'Categoria do Fórum');
DEFINE('_KUNENA_IMGDELETED', 'Imagem excluída');
DEFINE('_KUNENA_FILEDELETED', 'Arquivo excluído');
DEFINE('_KUNENA_NOPARENT', 'Não existe');
DEFINE('_KUNENA_DIRCOPERR', 'Erro: pasta');
DEFINE('_KUNENA_DIRCOPERR1', 'não pôde ser copiado!\n');
DEFINE('_KUNENA_INSTALL1', 'Componente <strong>Kunena Forum</strong> <em>para Joomla! </em> <br />&copy; 2008 - 2009 by www.Kunena.com<br />Todos os direitos reservados.');
DEFINE('_KUNENA_INSTALL2', 'Transferência/Instalação:</code></strong><br /><br /><font color="red"><b>com Sucesso!');
DEFINE('_KUNENA_FORUMPRF_TITLE', 'Ajuste de Perfil');
DEFINE('_KUNENA_FORUMPRF', 'Perfil');
DEFINE('_KUNENA_FORUMPRRDESC', 'Se você tem o Community Builder ou JomSocial instalado, pode configurar o Kunena para usar a página de Perfil do usuário.');
DEFINE('_KUNENA_USERPROFILE_PROFILE', 'Perfil');
DEFINE('_KUNENA_USERPROFILE_PROFILEHITS', '<b>Visualizações do Perfil</b>');
DEFINE('_KUNENA_USERPROFILE_MESSAGES', 'Todas as Mensagens do Fórum');
DEFINE('_KUNENA_USERPROFILE_TOPICS', 'Tópicos');
DEFINE('_KUNENA_USERPROFILE_STARTBY', 'Iniciado por');
DEFINE('_KUNENA_USERPROFILE_CATEGORIES', 'Categoria');
DEFINE('_KUNENA_USERPROFILE_DATE', 'Data');
DEFINE('_KUNENA_USERPROFILE_HITS', 'Acessos');
DEFINE('_KUNENA_USERPROFILE_NOFORUMPOSTS', 'Nenhuma mensagem Mensagem neste Fórum');
DEFINE('_KUNENA_TOTALFAVORITE', 'Favorito por:  ');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_COLON', 'Número de colunas de Sub-Fóruns');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_COLONDESC', 'Número de colunas dos sub-fóruns abaixo da categoria principal.');
DEFINE('_KUNENA_SUBSCRIPTIONSCHECKED', 'Inscrição no tópico marcada por padrão?');
DEFINE('_KUNENA_SUBSCRIPTIONSCHECKED_DESC', 'Ajuste para <strong>"Sim"</strong> se você quer que a caixa de inscrição esteja sempre marcada.');

// Errors (Re-integration from Joomlaboard 1.2)
DEFINE('_KUNENA_ERROR1', 'Category / Forum must have a name');
// Forum Configuration (New in Kunena)
DEFINE('_KUNENA_SHOWSTATS', 'Mostrar Estatísticas');
DEFINE('_KUNENA_SHOWSTATSDESC', 'Se quer mostrar as Estatísticas, selecione <strong>"Sim"</strong>');

DEFINE('_KUNENA_SHOWWHOIS', 'Mostrar Quem está Online');
DEFINE('_KUNENA_SHOWWHOISDESC', 'Se quer mostrar quem está Online, selecione <strong>"Sim"</strong>');
DEFINE('_KUNENA_STATSGENERAL', 'Mostrar Estatísticas Gerais');
DEFINE('_KUNENA_STATSGENERALDESC', 'Se quer mostrar as Estatísticas Gerais, Selecione <strong>"Sim"</strong>');

DEFINE('_KUNENA_USERSTATS', 'Mostrar Usuários Populares');
DEFINE('_KUNENA_USERSTATSDESC', 'Se quer mostrar as estatísticas de popularidade, Selecione <strong>"Sim"</strong>');

DEFINE('_KUNENA_USERNUM', 'Número de Usuários Populares');
DEFINE('_KUNENA_USERPOPULAR', 'Mostrar Estatísticas de Tópicos Populares.');
DEFINE('_KUNENA_USERPOPULARDESC', 'Se quer mostrar os tópicos populares, selecione <strong>"Sim"</strong>.');

DEFINE('_KUNENA_NUMPOP', 'Número de Tópicos Populares');
DEFINE('_KUNENA_INFORMATION',
	'The Kunena team is proud to announce the release of Kunena 1.0.8. It is a powerful and stylish forum component for a well deserved content management system, Joomla!. It is initially based on the hard work of Joomlaboard and Fireboard and most of our praises goes to their team. Some of the main features of Kunena can be listed as below (in addition to JB&#39;s current features):<br /><br /><ul><li>A much more designer friendly forum system. It is close to SMF templating system having a simpler structue. With very few steps you can modify the total look of the forum. Thanks goes to the great designers in our team.</li><li>Unlimited subcategory system with better administration backend.</li><li>Faster system and better coding experience for 3rd parties.</li><li>The same<br /></li><li>Profilebox at the top of the forum</li><li>Support for popular PM systems, such as ClexusPM and Uddeim</li><li>Basic plugin system (practical rather than perfec)</li><li>Language-defined icon system.<br /></li><li>Sharing image system of other templates. So, choice between templates and image series is possible</li><li>You can add Joomla modules inside the forum template itself. Wanted to have banner inside your forum?</li><li>Favourite threads selection and management</li><li>Forum spotlights and highlights</li><li>Forum announcements and its panel</li><li>Latest messages (Tabbed)</li><li>Statistics at bottom</li><li>Who&#39;s online, on what page?</li><li>Category specific image system</li><li>Enhanced pathway</li><li>RSS, PDF output</li><li>Advanced search (under developement)</li><li>Community Builder and JomSocial profile options</li><li>Avatar management : Community Builder and JomSocial options<br /></li></ul><br />This is a collaborative work of several developers and designers that have kindly participated and made this release come true. Here we thank all of them and wish that you enjoy this release!<br /><br />Kunena! team<br /></td></tr></table>');
DEFINE('_KUNENA_INSTRUCTIONS', 'Instruções');
DEFINE('_KUNENA_FINFO', 'Informação do Fórum Kunena');
DEFINE('_KUNENA_CSSEDITOR', 'Editor do CSS do Template do Kunena');
DEFINE('_KUNENA_PATH', 'Caminho (Path):');
DEFINE('_KUNENA_CSSERROR', 'Por favor note: que o arquivo do CSS do Template deve ter permissão de escrita para gravar as mudanças.');

// User Management
DEFINE('_KUNENA_FUM', 'Gerenciar Perfil de Usuário no Kunena');
DEFINE('_KUNENA_SORTID', 'Organizar pelo ID do usuário');
DEFINE('_KUNENA_SORTMOD', 'Organizar pelos Moderadores');
DEFINE('_KUNENA_SORTNAME', 'Organizar pelos Nomes');
DEFINE('_KUNENA_VIEW', 'Ver');
DEFINE('_KUNENA_NOUSERSFOUND', 'Nenhum perfil de usuário encontrado.');
DEFINE('_KUNENA_ADDMOD', 'Adicionar Moderador para');
DEFINE('_KUNENA_NOMODSAV', 'Não existem moderadores. Leia a \'nota\' abaixo.');
DEFINE('_KUNENA_NOTEUS',
    'NOTA: Somente os usuários que têm o nível de moderação em seu perfil no Kunena serão aqui mostrados. Para ser capaz de adicionar um moderador dê a um usuário o nível de moderador, vá a <a href="index2.php?option=com_kunena&task=profiles">Administração de usuários</a> e busque pelo usuário que você quer tornar um moderador. Depois Selecione seu perfil e atualize-o. O nível de moderador só pode ser atribuído por um administrador do site. ');

DEFINE('_KUNENA_PROFFOR', 'Perfil para');
DEFINE('_KUNENA_GENPROF', 'Opções Gerais do Perfil');
//DEFINE('_KUNENA_PREFVIEW', 'Tipo de visualização preferida:');
DEFINE('_KUNENA_PREFOR', 'Ordem Preferida da Mensagem:');
DEFINE('_KUNENA_ISMOD', 'É Moderator:');
DEFINE('_KUNENA_ISADM', '<strong>Sim</strong> (não alterável, este usuário é um (super)administrador)');
DEFINE('_KUNENA_COLOR', 'Cor');
DEFINE('_KUNENA_UAVATAR', 'Avatar do usuário:');
DEFINE('_KUNENA_NS', 'Nenhum Selecionado');
DEFINE('_KUNENA_DELSIG', ' Marque esta caixa para exclur esta assinatura');
DEFINE('_KUNENA_DELAV', ' Marque esta caixa para excluir este avatar');
DEFINE('_KUNENA_SUBFOR', 'Subscrições para');
DEFINE('_KUNENA_NOSUBS', 'Não foram encontradas subscrições para este usuário');

// Forum Administration (Re-integration from Joomlaboard 1.2)
DEFINE('_KUNENA_BASICS', 'Básico');
DEFINE('_KUNENA_BASICSFORUM', 'Informações Básicas do fórum');
DEFINE('_KUNENA_PARENT', 'Área:');
DEFINE('_KUNENA_PARENTDESC',
    'Atenção: Para criar uma categoria precisa determinar a área em que deseja adicioná-la. Uma categoria serve para conter os fóruns.<br />Um Fórum <strong>somente</strong> pode ser criado numa categoria previamente criada. <br />Mensagens <strong>NÃO</strong> podem ser publicadas em categorias; somente em Fóruns.');

DEFINE('_KUNENA_BASICSFORUMINFO', 'Nome do Fórum e Descrição');
DEFINE('_KUNENA_NAMEADD', 'Nome:');
DEFINE('_KUNENA_DESCRIPTIONADD', 'Descrição:');
DEFINE('_KUNENA_ADVANCEDDESC', 'Configurações Avançadas do Fórum');
DEFINE('_KUNENA_ADVANCEDDESCINFO', 'Segurança e Acesso do Fórum');
DEFINE('_KUNENA_LOCKEDDESC', 'Configurar para <strong>"Sim"</strong> se quiser bloquear este fórum. Ninguém, exceto Moderadores e Administradores, podem criar novos tópicos e/ou responder um fórum bloqueado (ou mover mensagens).');

DEFINE('_KUNENA_LOCKED1', 'Bloqueado:');
DEFINE('_KUNENA_PUBACC', 'Nível de Acesso Público:');
DEFINE('_KUNENA_PUBACCDESC',
    'Para criar um fórum privado deve especificar o nível mínimo de acesso que pode visualizar/entrar no fórum aqui. Por padrão o nível de acesso minimo é "Todos".<br /><br /><b>NOTA</b>:Se restringir o acesso numa categoria inteira para um ou mais grupos, ele esconderá todos os fóruns que ela contém a qualquer pessoa que não tennha os privilégios apropriados na categoria, <b>mesmo</b> se um ou mais destes fóruns têm um nível de acesso mais baixo configurado! Isto também se aplica a moderadores; você terá que acrescentar um moderador à lista de moderadores da categoria se ele(s) não tiver o nível de grupo apropriado para ver a categoria.<br /> Isto é independente do facto de que categorias não podem ser moderadas; ainda assim moderadores podem ser acrescentados à lista de moderadores.');

DEFINE('_KUNENA_CGROUPS', 'Incluir Sub-Grupos:');
DEFINE('_KUNENA_CGROUPSDESC', 'Os Sub-Grupos tembém devem ter permissão de acesso? Se configurar para "Não" o acesso a este fórum será restrito <b>somente</b> ao grupo selecionado');

DEFINE('_KUNENA_ADMINLEVEL', 'Nível de Acesso da Administração:');
DEFINE('_KUNENA_ADMINLEVELDESC',
    'Se você criar um fórum com restrições ao Acesso Público, pode especificar aqui um Nível de Acesso de Administração adicional.<br /> Se você restringir o acesso ao fórum para um grupo especial de usuários do Frontend e não especificar um Grupo de Backend Público aqui, os administradores não serão capazes de entrar e ver o Fórum.');

DEFINE('_KUNENA_ADVANCED', 'Avançado');
DEFINE('_KUNENA_CGROUPS1', 'Incluir Sub-Grupos:');
DEFINE('_KUNENA_CGROUPS1DESC', 'Os Sub-Grupos também devem ter permissão de acesso? Se configurar para "Não", o acesso a este fórum será restrito <b>somente</b> ao grupo selecionado');

DEFINE('_KUNENA_REV', 'Revisar mensagens:');
DEFINE('_KUNENA_REVDESC',
    'Selecione <strong>"Sim"</strong> se você quer que as mensagens sejam revisadas pelos moderadores antes de serem publicadas neste fórum. Isto só é útil num fórum Moderado!!<br />Se configurar isto sem qualquer moderador especificado, o Admin do Site é o único responsável por aprovar/excluir as mensagens inseridas que serão mantidos em \'espera\'!');

DEFINE('_KUNENA_MOD_NEW', 'Moderação');
DEFINE('_KUNENA_MODNEWDESC', 'Moderação e Moderadores do fórum');
DEFINE('_KUNENA_MOD', 'Moderado:');
DEFINE('_KUNENA_MODDESC',
    'Selecione <strong>"Sim"</strong> se quiser poder nomear Moderadores para este fórum.<br /><strong>Nota:</strong> Isto não significa que novas mensagens devem ser revisadas antes da publicação no fórum!
Você precisará selecionar a opção de "Revisão" para isso no menu Avançado.<br /><br /> <strong>NOTA:</strong> Depois de ajustar moderação para <strong>"Sim"</strong> tem que gravar a configuração do fórum em primeiro lugar antes de poder adicionar moderadores.');

DEFINE('_KUNENA_MODHEADER', 'Configurações da Moderação para este fórum');
DEFINE('_KUNENA_MODSASSIGNED', 'Moderadores atribuídos a este fórum:');
DEFINE('_KUNENA_NOMODS', 'Não existem Moderadores para este fórum');
// Some General Strings (Improvement in Kunena)
DEFINE('_KUNENA_EDIT', 'Editar');
DEFINE('_KUNENA_ADD', 'Adicionar');
// Reorder (Re-integration from Joomlaboard 1.2)
DEFINE('_KUNENA_MOVEUP', 'Mover para cima');
DEFINE('_KUNENA_MOVEDOWN', 'Mover Baixo');
// Groups - Integration in Kunena
DEFINE('_KUNENA_ALLREGISTERED', 'Todos Registrados');
DEFINE('_KUNENA_EVERYBODY', 'Todos');
// Removal of hardcoded strings in admin panel (Re-integration from Joomlaboard 1.2)
DEFINE('_KUNENA_REORDER', 'Reordenar');
DEFINE('_KUNENA_CHECKEDOUT', 'Retirados');
DEFINE('_KUNENA_ADMINACCESS', 'Acesso Admin');
DEFINE('_KUNENA_PUBLICACCESS', 'Acesso Público');
DEFINE('_KUNENA_PUBLISHED', 'Publicado');
DEFINE('_KUNENA_REVIEW', 'Revisado');
DEFINE('_KUNENA_MODERATED', 'Moderado');
DEFINE('_KUNENA_LOCKED', 'Bloqueado');
DEFINE('_KUNENA_CATFOR', 'Categoria / Fórum');
DEFINE('_KUNENA_ADMIN', 'Administração Kunena');
DEFINE('_KUNENA_CP', 'Painel de Controle do Kunena');
// Configuration page - Headings (Re-integrated from Joomlaboard 1.2)
DEFINE('_COM_A_AVATAR_INTEGRATION', 'Integração de Avatar');
DEFINE('_COM_A_RANKS_SETTINGS', 'Ranks');
DEFINE('_COM_A_RANKING_SETTINGS', 'Configurações de Ranking');
DEFINE('_COM_A_AVATAR_SETTINGS', 'Configurações do Avatar');
DEFINE('_COM_A_SECURITY_SETTINGS', 'Configurações de Segurança');
DEFINE('_COM_A_BASIC_SETTINGS', 'Configurações Básicas');
// Kunena 1.0.0
//
DEFINE('_COM_A_FAVORITES', 'Permitir Favoritos');
DEFINE('_COM_A_FAVORITES_DESC', 'Selecione <strong>"Sim"</strong> se quiser que os usuários registados adicionem tópicos aos favoritos.');

DEFINE('_USER_UNFAVORITE_ALL', 'Marque esta caixa para <b><u>Remover Favoritos</u></b> de todos os tópicos (incluindo os invisíveis).');
DEFINE('_VIEW_FAVORITETXT', 'Adicionar este tópico como favorito ');
DEFINE('_USER_UNFAVORITE_YES', 'Você removeu este tópico dos favoritos.');
DEFINE('_POST_FAVORITED_TOPIC', 'O tópico foi adicionado a seus favoritos.');
DEFINE('_VIEW_UNFAVORITETXT', 'Retirar favorito');
DEFINE('_VIEW_UNSUBSCRIBETXT', 'Retirar subscrição a este tópico');
DEFINE('_USER_NOFAVORITES', 'Nenhum Favorito');
DEFINE('_POST_SUCCESS_FAVORITE', 'Seu favorito foi processado.');
DEFINE('_COM_A_MESSAGES_SEARCH', 'Resultados da pesquisa');
DEFINE('_COM_A_MESSAGES_DESC_SEARCH', 'Mensagens por páginas nos resultados da pesquisa.');
DEFINE('_KUNENA_USE_JOOMLA_STYLE', 'Usar estilos do Joomla?');
DEFINE('_KUNENA_USE_JOOMLA_STYLE_DESC', 'Se quiser usar o estilo do Joomla selecione <strong>"Sim"</strong>. (classes: sectionheader, sectionentry1, etc);');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_ON_LIST', 'Mostrar Imagem de Sub-Categorias');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_ON_LIST_DESC', 'Se quiser mostrar um pequeno ícone da sub-categoria na sua lista do fórum, selecione <strong>"Sim"</strong>. ');

DEFINE('_KUNENA_SHOW_ANNOUNCEMENT', 'Mostrar Anúncio');
DEFINE('_KUNENA_SHOW_ANNOUNCEMENT_DESC', 'Selecione <strong>"Sim"</strong>, se quiser mostrar a caixa de anúncio na página do fórum.');

DEFINE('_KUNENA_SHOW_AVATAR_ON_CAT', 'Mostrar Avatar na lista Categorias?');
DEFINE('_KUNENA_SHOW_AVATAR_ON_CAT_DESC', 'Selecione <strong>"Sim"</strong>, se quiser mostrar o avatar na lista de categoria de fórum.');
DEFINE('_KUNENA_RECENT_POSTS', 'Configurações de Mensagens Recentes');
DEFINE('_KUNENA_SHOW_LATEST_MESSAGES', 'Mostrar Mensagens Recentes');
DEFINE('_KUNENA_SHOW_LATEST_MESSAGES_DESC', 'Selecione <strong>"Sim"</strong> se quiser mostrar o plugin de mensagens recentes em seu fórum.');
DEFINE('_KUNENA_NUMBER_OF_LATEST_MESSAGES', 'Número de Mensagens Recentes');
DEFINE('_KUNENA_NUMBER_OF_LATEST_MESSAGES_DESC', 'Número de Mensagens Recentes.');
DEFINE('_KUNENA_COUNT_PER_PAGE_LATEST_MESSAGES', 'Número de Mensagens por Tab ');
DEFINE('_KUNENA_COUNT_PER_PAGE_LATEST_MESSAGES_DESC', 'Número de Mensagens por cada Aba.');
DEFINE('_KUNENA_LATEST_CATEGORY', 'Mostrar Categoria');
DEFINE('_KUNENA_LATEST_CATEGORY_DESC', 'Categoria específica que você pode mostrar nas mensagens recentes. Por exemplo: 2, 3, 7 ');
DEFINE('_KUNENA_SHOW_LATEST_SINGLE_SUBJECT', 'Mostrar Assunto do Tópico');
DEFINE('_KUNENA_SHOW_LATEST_SINGLE_SUBJECT_DESC', 'Mostrar Assunto do Tópico.');
DEFINE('_KUNENA_SHOW_LATEST_REPLY_SUBJECT', 'Mostrar Assunto da Resposta');
DEFINE('_KUNENA_SHOW_LATEST_REPLY_SUBJECT_DESC', 'Mostrar Assunto da Resposta (Re:).');
DEFINE('_KUNENA_LATEST_SUBJECT_LENGTH', 'Tamanho do Título');
DEFINE('_KUNENA_LATEST_SUBJECT_LENGTH_DESC', 'Tamanho do Título.');
DEFINE('_KUNENA_SHOW_LATEST_DATE', 'Mostrar Data');
DEFINE('_KUNENA_SHOW_LATEST_DATE_DESC', 'Mostrar Data.');
DEFINE('_KUNENA_SHOW_LATEST_HITS', 'Mostrar Acessos');
DEFINE('_KUNENA_SHOW_LATEST_HITS_DESC', 'Mostrar Acessos.');
DEFINE('_KUNENA_SHOW_AUTHOR', 'Mostrar Autor');
DEFINE('_KUNENA_SHOW_AUTHOR_DESC', '1=Nome de Usuário, 2=Nome Real, 0=Nenhum');
DEFINE('_KUNENA_STATS', 'Configurações do Plugin de Estatística');
DEFINE('_KUNENA_CATIMAGEPATH', 'Caminho das Imagens da Categoria');
DEFINE('_KUNENA_CATIMAGEPATH_DESC', 'Caminho das Imagens das Categorias. Se selecionar o caminho "category_images/" o caminho será o seguinte "components/com_kunena/category_images/".');
DEFINE('_KUNENA_ANN_MODID', 'IDs do Moderadores de Anúncio');
DEFINE('_KUNENA_ANN_MODID_DESC', 'Adiciona os IDs dos moderadores de anúncio. Exemplo: (ex: 62, 63, 73) . Os moderadores de anúncio podem adicionar, editar e exluir os anúncios.');

//
DEFINE('_KUNENA_FORUM_TOP', 'Fórum');
DEFINE('_KUNENA_CHILD_BOARDS', 'Sub-Fórum ');
DEFINE('_KUNENA_QUICKMSG', 'Resp.Rápida ');
DEFINE('_KUNENA_THREADS_IN_FORUM', 'Tópicos do Fórum ');
DEFINE('_KUNENA_FORUM', 'Fórum ');
DEFINE('_KUNENA_SPOTS', 'Tópico Fixo');
DEFINE('_KUNENA_CANCEL', 'Cancelar');
DEFINE('_KUNENA_TOPIC', 'TÓPICO: ');
DEFINE('_KUNENA_POWEREDBY', 'Powered by ');
// Time Format
DEFINE('_TIME_TODAY', '<b>Hoje</b> ');
DEFINE('_TIME_YESTERDAY', '<b>Ontem</b> ');
//  STARTS HERE!
DEFINE('_KUNENA_WHO_LATEST_POSTS', 'Últimas Mensagens');
DEFINE('_KUNENA_WHO_WHOISONLINE', 'Quem Está Online');
DEFINE('_KUNENA_WHO_MAINPAGE', 'Fórum Principal');
DEFINE('_KUNENA_GUEST', 'Visitante');
DEFINE('_KUNENA_PATHWAY_VIEWING', 'visualizando');
DEFINE('_KUNENA_ATTACH', 'Anexo');
// Favorite
DEFINE('_KUNENA_FAVORITE', 'Favoritos');
DEFINE('_USER_FAVORITES', 'Seus Favoritos');
DEFINE('_THREAD_UNFAVORITE', 'Remover dos Favoritos');
// profilebox
DEFINE('_PROFILEBOX_WELCOME','Seja bem-vindo');
DEFINE('_PROFILEBOX_SHOW_LATEST_POSTS','Verificar Últimas Mensagens');
DEFINE('_PROFILEBOX_SET_MYAVATAR','atualizar Avatar');
DEFINE('_PROFILEBOX_MYPROFILE','atualizar o meu Perfil');
DEFINE('_PROFILEBOX_SHOW_MYPOSTS','Mostrar as Minhas Mensagens');
DEFINE('_PROFILEBOX_GUEST','Visitante');
DEFINE('_PROFILEBOX_LOGIN','Entrar');
DEFINE('_PROFILEBOX_REGISTER','Registrar');
DEFINE('_PROFILEBOX_LOGOUT','Sair');
DEFINE('_PROFILEBOX_LOST_PASSWORD','Esqueceu a senha?');
DEFINE('_PROFILEBOX_PLEASE','Por Favor');
DEFINE('_PROFILEBOX_OR','ou');
// recentposts
DEFINE('_RECENT_RECENT_POSTS','Útimas Mensagens');
DEFINE('_RECENT_TOPICS','Tópico');
DEFINE('_RECENT_AUTHOR','Autor');
DEFINE('_RECENT_CATEGORIES','Categorias');
DEFINE('_RECENT_DATE','Data');
DEFINE('_RECENT_HITS','Acessos');
// announcement

DEFINE('_ANN_ANNOUNCEMENTS', 'Anúncios');
DEFINE('_ANN_ID','ID');
DEFINE('_ANN_DATE','Data');
DEFINE('_ANN_TITLE','Título');
DEFINE('_ANN_SORTTEXT','Ordenar Texto');
DEFINE('_ANN_LONGTEXT','Texto Longo');
DEFINE('_ANN_ORDER','Ordem');
DEFINE('_ANN_PUBLISH','Publicar');
DEFINE('_ANN_PUBLISHED','Publicado');
DEFINE('_ANN_UNPUBLISHED','Não-publicado');
DEFINE('_ANN_EDIT','Editar');
DEFINE('_ANN_DELETE','Excluir');
DEFINE('_ANN_SUCCESS','Sucesso');
DEFINE('_ANN_SAVE','Gravar');
DEFINE('_ANN_YES','Sim');
DEFINE('_ANN_NO','Não');
DEFINE('_ANN_ADD','Adicionar Novo');
DEFINE('_ANN_SUCCESS_EDIT','Edição executada com Sucesso');
DEFINE('_ANN_SUCCESS_ADD','Adicionado com Sucesso');
DEFINE('_ANN_DELETED','Excluído com Sucesso');
DEFINE('_ANN_ERROR','ERRO');
DEFINE('_ANN_READMORE','Ler mais...');
DEFINE('_ANN_CPANEL','Painel de Controle de Anúncio');
DEFINE('_ANN_SHOWDATE','Mostrar Data');
// Stats
DEFINE('_STAT_FORUMSTATS',' - Estatísticas do Fórum');
DEFINE('_STAT_GENERAL_STATS','Estatísticas Gerais');
DEFINE('_STAT_TOTAL_USERS','Total de usuários');
DEFINE('_STAT_LATEST_MEMBERS','Usuário Mais Recente');
DEFINE('_STAT_PROFILE_INFO','Veja a Info do Perfil');
DEFINE('_STAT_TOTAL_MESSAGES','Total de Posts');
DEFINE('_STAT_TOTAL_SUBJECTS','Total de Tópicos');
DEFINE('_STAT_TOTAL_CATEGORIES','Total de Categorias');
DEFINE('_STAT_TOTAL_SECTIONS','Total de Seções');
DEFINE('_STAT_TODAY_OPEN_THREAD','Nr. Tópicos Hoje');
DEFINE('_STAT_YESTERDAY_OPEN_THREAD','Nr. Tópicos Ontem');
DEFINE('_STAT_TODAY_TOTAL_ANSWER','Nr. de mensagens hoje');
DEFINE('_STAT_YESTERDAY_TOTAL_ANSWER','Nr. de mensagens Ontem');
DEFINE('_STAT_VIEW_RECENT_POSTS_ON_FORUM','Verificar Últimas Mensagens');
DEFINE('_STAT_MORE_ABOUT_STATS','Estatísticas Detalhadas');
DEFINE('_STAT_USERLIST','Lista de usuários');
DEFINE('_STAT_TEAMLIST','Time do Fórum');
DEFINE('_STATS_FORUM_STATS','Estatísticas do Fórum');
DEFINE('_STAT_POPULAR','Popular');
DEFINE('_STAT_POPULAR_USER_TMSG','Usuários (Total de Mensagens)');
DEFINE('_STAT_POPULAR_USER_KGSG','Tópicos');
DEFINE('_STAT_POPULAR_USER_GSG','Usuários ( Total de visualizações de perfis)');
//Team List
DEFINE('_MODLIST_ONLINE','Usuários Online agora');
DEFINE('_MODLIST_OFFLINE', 'User Offline');
// Whoisonline
DEFINE('_WHO_WHOIS_ONLINE','Quem está online');
DEFINE('_WHO_ONLINE_NOW','Usuários Online: ');
DEFINE('_WHO_ONLINE_MEMBERS','Usuário(s)');
DEFINE('_WHO_AND','e');
DEFINE('_WHO_ONLINE_GUESTS','Visitante(s)');
DEFINE('_WHO_ONLINE_USER','Usuário');
DEFINE('_WHO_ONLINE_TIME','Tempo');
DEFINE('_WHO_ONLINE_FUNC','Ação');
// Userlist
DEFINE('_USRL_USERLIST','Lista de usuários');
DEFINE('_USRL_REGISTERED_USERS','%s tem <b>%d</b> usuários registados');
DEFINE('_USRL_SEARCH_ALERT','Por favor introduzir um valor para procurar!');
DEFINE('_USRL_SEARCH','Encontrar um usuário');
DEFINE('_USRL_SEARCH_BUTTON','Procurar');
DEFINE('_USRL_LIST_ALL','Listar todos');
DEFINE('_USRL_NAME','Nome');
DEFINE('_USRL_USERNAME','Nome do usuário');
DEFINE('_USRL_EMAIL','e-mail');
DEFINE('_USRL_USERTYPE','Tipo de usuário');
DEFINE('_USRL_JOIN_DATE','Registrado em');
DEFINE('_USRL_LAST_LOGIN','Último login');
DEFINE('_USRL_NEVER','Nunca');
DEFINE('_USRL_BLOCK','Status');
DEFINE('_USRL_MYPMS2','MyPMS');
DEFINE('_USRL_ASC','Ascendente');
DEFINE('_USRL_DESC','Descendente');
DEFINE('_USRL_DATE_FORMAT', '%m/%d/%Y');
DEFINE('_USRL_TIME_FORMAT', '%H:%M');
DEFINE('_USRL_USEREXTENDED','Detalhes');
DEFINE('_USRL_COMPROFILER','Perfil');
DEFINE('_USRL_THUMBNAIL','Foto');
DEFINE('_USRL_READON','mostrar');
DEFINE('_USRL_MYPMSPRO','Clexus PM');
DEFINE('_USRL_MYPMSPRO_SENDPM','Enviar PM');
DEFINE('_USRL_JIM','PM');
DEFINE('_USRL_UDDEIM','PM');
DEFINE('_USRL_SEARCHRESULT','Resultados de procura para');
DEFINE('_USRL_STATUS','Status');
DEFINE('_USRL_LISTSETTINGS','Configurações da lista de usuários');
DEFINE('_USRL_ERROR','Erro');

//changed in 1.1.4 stable
DEFINE('_COM_A_PMS_TITLE','Componente de mensagens privadas');
DEFINE('_COM_A_COMBUILDER_TITLE','Community Builder');
DEFINE('_FORUM_SEARCH','Pesquisado por: %s');
DEFINE('_MODERATION_DELETE_MESSAGE','Você tem a certeza que deseja excluir esta mensagem? \n\n NOTA: Não há nenhuma maneira de recuperar mensagens excluídas!');

DEFINE('_MODERATION_DELETE_SUCCESS','As Mensagens foram excluídas');
DEFINE('_COM_A_RANKING','Classificação');
DEFINE('_COM_A_BOT_REFERENCE','Mostrar o bot do Gráfico de referência');
DEFINE('_COM_A_MOSBOT','Ativar o bot de discussão');
DEFINE('_PREVIEW','Visualizar');
DEFINE('_COM_A_MOSBOT_TITLE','Bot de discussão');
DEFINE('_COM_A_MOSBOT_DESC',
 'O bot de discussão habilita usuários a discutir os artigos nos fóruns. O título do artigo é usado como assunto do tópico.'
.'<br />Se um tópico ainda não existe, será criado. Se um tópico já existe, o usuário é levado ao tópico e ele poderá responder.'
.'<br /><strong>Você precisará baixar e instalar o Bot separadamente.</strong>'

.'<br />Acesse o site <a href="http://www.kunena.com">Kunena Web Site</a> para mais informações.'
.'<br />Quando instaladp, precisará adicionar as seguintes linhas ao seu artigo:'
.'<br />{mos_fb_discuss:<em>catid</em>}'
.'<br />O <em>catid</em> é a categoria em que o artigo será discutido. Para encontrar o devido catid, apenas olhe dentro dos fóruns '
.'e veja o id da categoria de suas URLs na sua barra de status do browser.'
.'<br />Exemplo: se quiser que um artigo seja discutido na categoria de id 26, o bot deve se parecer com: {mos_fb_discuss:26}'
.'<br />Pode parecer difícil, mas permite que cada artigo seja discutido em seu devido fórum.' );

//new in 1.1.4 stable
// search.class.php
DEFINE('_FORUM_SEARCHTITLE','Procurar');
DEFINE('_FORUM_SEARCHRESULTS','Mostrar os %s de %s resultados.');
// Help, FAQ
DEFINE('_COM_FORUM_HELP','Perguntas Frequentes');
// rules.php
DEFINE('_COM_FORUM_RULES','Regras');
DEFINE('_COM_FORUM_RULES_DESC', '<ul><li>Edite este arquivo para inserir suas regras joomlaroot/administrator/components/com_kunena/language/kunena.brazilian_portuguese.php</li><li>Regra 2</li><li>Regra 3</li><li>Regra 4</li><li>...</li></ul>');
//smile.class.php
DEFINE('_COM_BOARDCODE','Código do Fórum');
// moderate_messages.php
DEFINE('_MODERATION_APPROVE_SUCCESS','As mensagem(s) foram aprovadas');
DEFINE('_MODERATION_DELETE_ERROR','ERRO: A(s) mensagem(ns) não pôde(puderam) ser excluída(s)');
DEFINE('_MODERATION_APPROVE_ERROR','ERRO: A(s) mensagem(ns) não pôde(puderam) ser aprovada(s)');
// listcat.php
DEFINE('_GEN_NOFORUMS','Não há nenhum fórum nesta categoria!');
//new in 1.1.3 stable
DEFINE('_POST_GHOST_FAILED','Falha ao criar um tópico fantasma no fórum antigo!');
DEFINE('_POST_MOVE_GHOST','Deixar uma cópia da mensagem neste fórum');
//new in 1.1 Stable
DEFINE('_GEN_FORUM_JUMP','Ir para o Fórum');
DEFINE('_COM_A_FORUM_JUMP','Ativar "Ir para o Fórum"');
DEFINE('_COM_A_FORUM_JUMP_DESC','Se configurar para <strong>"Sim"</strong> um seletor será mostrado nas páginas do fórum permitindo a troca rápida entre um fórum ou outra categoria.');

//new in 1.1 RC1
DEFINE('_GEN_RULES','Regras');
DEFINE('_COM_A_RULESPAGE','Ativar Página de Regras');
DEFINE('_COM_A_RULESPAGE_DESC',
'Se configurar para <strong>"Sim"</strong>, um link no cabeçalho do Menu irá aparecer para a página de Regras. Esta página pode ser usada para coisas como Regras de utilização do fórum etc. Você pode alterar os conteúdos desta pasta como você quiser. Para isto basta abrir e editar a pasta rules.php em /joomla_root/components/com_kunena. <em>Certifique-se de ter sempre um backup desta pasta, pois ela será sobreescrita ao atualizar o fórum!</em>');

DEFINE('_MOVED_TOPIC','MOVIDO:');
DEFINE('_COM_A_PDF','Ativar Criação de PDF');
DEFINE('_COM_A_PDF_DESC',
'Configurar para  <strong>"Sim"</strong> se você quiser ativar usuários para baixar um simples documento de PDF dos conteúdos de um tópico.<br />É um <u>simples</u> Documento PDF; sem formatação, sem enfeites e tal mas contém todo o texto do tópico.');
DEFINE('_GEN_PDFA','Clique neste botão para criar um documento de PDF para este tópico (abre uma nova janela).');


DEFINE('_GEN_PDF', 'PDF');
//new in 1.0.4 stable
DEFINE('_VIEW_PROFILE','Clique aqui para ver o perfil deste usuário');
DEFINE('_VIEW_ADDBUDDY','Clique aqui para adicionar este usuário à sua lista de amigos');

DEFINE('_POST_SUCCESS_POSTED', 'Sua mensagem foi enviada com sucesso');
DEFINE('_POST_SUCCESS_VIEW','[ Voltar à mensagem ]');
DEFINE('_POST_SUCCESS_FORUM','[ Voltar ao fórum ]');
DEFINE('_RANK_ADMINISTRATOR','Admin');
DEFINE('_RANK_MODERATOR','Moderador');
DEFINE('_SHOW_LASTVISIT',' Mensagens desde última visita');
DEFINE('_COM_A_BADWORDS_TITLE','Filtrar palavrões');
DEFINE('_COM_A_BADWORDS','Usar filtro de palavrões');
DEFINE('_COM_A_BADWORDS_DESC','Configurar <strong>"Sim"</strong> se quiser filtrar das mensagens os palavrões que serão definidos nas configurações do Componente Badword. Para poder usar isto, terá que ter o Componente Badword instalado!');
DEFINE('_COM_A_BADWORDS_NOTICE','* Esta Mensagem foi censurada devido ao fato de conter uma ou mais palavras censuradas pelo fórum *');


DEFINE('_COM_A_AVATAR_SRC', 'Usar imagem do avatar');
DEFINE('_COM_A_AVATAR_SRC_DESC',
	'Se você tiver os componente JomSocial, Clexus PM ou Community Builder instalados, pode configurar o Kunena para utilizar a imagem de avatar do perfil de usuário do JomSocial, Clexus PM ou Community Builder. NOTA: Para o Community Builder você precisa ter a opção thumbnail habilitada porque o fórum utiliza as imagens miniatura dos usuários ao invés das originais.');

DEFINE('_COM_A_KARMA','Mostrar indicador de Popularidade');
DEFINE('_COM_A_KARMA_DESC','Configurar para <strong>"Sim"</strong> para mostrar a Popularidade do usuário e botões relacionados a (aumentar / diminuir) se as estatísticas estiverem ativadas.');

DEFINE('_COM_A_DISEMOTICONS','Desativar emoticons');
DEFINE('_COM_A_DISEMOTICONS_DESC','Configurar para <strong>"Sim"</strong> para desativar totalmente os gráficos de  emoticons (smileys).');
DEFINE('_COM_C_FBCONFIG','Configuração do<br/>Kunena');
DEFINE('_COM_C_FBCONFIGDESC','Configurar toda a funcionalidade do Kunena');
DEFINE('_COM_C_FORUM','Administração do Fórum');
DEFINE('_COM_C_FORUMDESC','Adicionar categorias/fóruns e configurá-los');
DEFINE('_COM_C_USER','Administração de Usuários');
DEFINE('_COM_C_USERDESC','Configurações Básicas de usuários e administração de perfis de usuários');

DEFINE('_COM_C_FILES','Arquivos Enviados');
DEFINE('_COM_C_FILESDESC','Visualizar e administrar arquivos enviados');
DEFINE('_COM_C_IMAGES','Imagens Enviadas');
DEFINE('_COM_C_IMAGESDESC','Visualizar e administrar imagens enviadas');
DEFINE('_COM_C_CSS','Editar arquivo CSS');
DEFINE('_COM_C_CSSDESC','Modificar estilo e visual do Kunena');
DEFINE('_COM_C_SUPPORT','WebSite de Suporte');
DEFINE('_COM_C_SUPPORTDESC','Visitar o site Best of Joomla (em nova janela)');
DEFINE('_COM_C_PRUNETAB','Limpar Fóruns');
DEFINE('_COM_C_PRUNETABDESC','Remover tópicos antigos (configurável)');
DEFINE('_COM_C_PRUNEUSERS','Limpar usuários');
DEFINE('_COM_C_PRUNEUSERSDESC','Sincronizar tabela de usuários do Kunena com a tabela de usuários do Joomla!'); // <=FB 1.0.3
DEFINE('_COM_C_LOADMODPOS', 'Carregar Posição de Módulos');
DEFINE('_COM_C_LOADMODPOSDESC', 'Load Module Positions for Kunena Template');
DEFINE('_COM_C_UPGRADEDESC','Atualizar sua base de dados para a última versão após um upgrade');
DEFINE('_COM_C_BACK','Voltar ao Painel de Controle do Kunena');

DEFINE('_POST_SUCCESS_REQUEST2','Seu pedido foi processado');
DEFINE('_POST_NO_PUBACCESS3','Clique aqui para registrar.');
//==================================================================================================
//Changed in 1.0.4
//please update your local language file with these changes as well
DEFINE('_POST_SUCCESS_DELETE','Esta mensagem foi excluída com sucesso.');
DEFINE('_POST_SUCCESS_EDIT','Esta mensagem foi editada com sucesso.');
DEFINE('_POST_SUCCESS_MOVE','Esta mensagem foi movida com sucesso.');
DEFINE('_POST_SUCCESS_POST','Sua mensagem foi publicada com sucesso.');
DEFINE('_POST_SUCCESS_SUBSCRIBE','A sua inscrição foi feita com sucesso.');
//==================================================================================================
//new in 1.0.3 stable
//Karma
DEFINE('_KARMA','Popularidade');
DEFINE('_KARMA_SMITE','Diminuir');
DEFINE('_KARMA_APPLAUD','Aumentar');
DEFINE('_KARMA_BACK','Voltar para o tópico,');
DEFINE('_KARMA_WAIT', 'You can modify only one person\'s karma every 6 hours. <br/>Please wait until this timeout period has passed before modifying any person\'s karma again.');
DEFINE('_KARMA_SELF_DECREASE','Por favor não tentar reduzir sua própria popularidade!');
DEFINE('_KARMA_SELF_INCREASE','A sua popularidade foi reduzida por tentar aumentá-la!');
DEFINE('_KARMA_DECREASED','Popularidade do usuário diminuída. Se você não for levado de volta para o tópico em alguns momentos,');
DEFINE('_KARMA_INCREASED','Popularidade do usuário aumentada. Se você não for levado de volta para o tópico em alguns momentos,');


DEFINE('_COM_A_TEMPLATE','Template');
DEFINE('_COM_A_TEMPLATE_DESC','Escolha o template a ser usado.');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH','Configurações de imagens');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH_DESC','Escolha as configurações de imagens de templates para usar.');
DEFINE('_PREVIEW_CLOSE','Fechar esta janela');
//==========================================
//new in 1.0 Stable
DEFINE('_COM_A_POSTSTATSBAR','Usar Barra de Estatísticas de mensagem');
DEFINE('_COM_A_POSTSTATSBAR_DESC','Configure para <strong>"Sim"</strong> se quiser que o n. de Mensagens de um usuário seja colocado numa barra de estatísticas.');

DEFINE('_COM_A_POSTSTATSCOLOR','Número da cor para a Barra de Estatísticas');
DEFINE('_COM_A_POSTSTATSCOLOR_DESC','Dê o número da cor que quer usar para a barra de Estatísticas de mensagem.');

DEFINE('_LATEST_REDIRECT',
	'o Kunena precisa (re)estabelecer seus privilégios de acesso antes que possa criar uma lista das últimas mensagens.\nNão se preocupe, é normal depois de 30 minutos de inatividade ou depois de você se logar novamente.\nPor favor enviar a sua procura de novo.');

DEFINE('_SMILE_COLOUR','Cores');
DEFINE('_SMILE_SIZE','Tamanho');
DEFINE('_COLOUR_DEFAULT','Padrão');
DEFINE('_COLOUR_RED','Vermelho');
DEFINE('_COLOUR_PURPLE','Púrpura');
DEFINE('_COLOUR_BLUE','Azul');
DEFINE('_COLOUR_GREEN','Verde');
DEFINE('_COLOUR_YELLOW','Amarelo');
DEFINE('_COLOUR_ORANGE','Laranja');
DEFINE('_COLOUR_DARKBLUE','Azul-escuro');
DEFINE('_COLOUR_BROWN','Castanho');
DEFINE('_COLOUR_GOLD','Dourado');
DEFINE('_COLOUR_SILVER','Prata');
DEFINE('_SIZE_NORMAL','Normal');
DEFINE('_SIZE_SMALL','Pequeno');
DEFINE('_SIZE_VSMALL','Muito Pequeno');
DEFINE('_SIZE_BIG','Grande');
DEFINE('_SIZE_VBIG','Muito Grande');
DEFINE('_IMAGE_SELECT_FILE','Selecione um arquivo de imagem para anexar');
DEFINE('_FILE_SELECT_FILE','Selecione uma arquivo para anexar');
DEFINE('_FILE_NOT_UPLOADED','Seu arquivo não foi enviado. Por favor tente publicar novamente ou editar a mensagem');
DEFINE('_IMAGE_NOT_UPLOADED','Sua imagem não foi enviada. Por favor tente publicar novamente ou editar a mensagem');


DEFINE('_BBCODE_IMGPH','Inserir [img] na mensagem para a imagem em anexo'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_FILEPH','Inserir [file] na mensagem para o arquivo em anexo'); // Depreciado na versão 1.0.10
DEFINE('_POST_ATTACH_IMAGE','[img]');
DEFINE('_POST_ATTACH_FILE','[file]');
DEFINE('_USER_UNSUBSCRIBE_ALL','Marque esta caixa para <b><u>remover inscreção</u></b> para todos os tópicos (inclusive os invisíveis para fins de procura de erros)');

DEFINE('_LINK_JS_REMOVED','<em>O link ativo contendo JavaScript foi removido automaticamente</em>');
//==========================================
//new in 1.0 RC4
DEFINE('_COM_A_LOOKS','Estilo e aparência');
DEFINE('_COM_A_USERS','Relacionado a usuário');
DEFINE('_COM_A_LENGTHS','Várias configurações de comprimento');
DEFINE('_COM_A_SUBJECTLENGTH','Tamanho máx. do Assunto');
DEFINE('_COM_A_SUBJECTLENGTH_DESC',
	'Tamanho máximo da linha do assunto. O número máximo suportado pela base de dados é 255 caracteres. Se o seu site está configurado para usar caracteres multi-byte como Unicode, UTF-8 ou non-ISO-8599-x deixe o máximo menor usando esta fórumla:<br/><tt>round_down(255/(maximum character set byte size per character))</tt>.<br />Exemplo para UTF-8, para o qual o tamanho máx. de bite de caracter por caracter é 4 bytes: 255/4=63.');
DEFINE('_LATEST_THREADFORUM','Tópico/Fórum');
DEFINE('_LATEST_NUMBER','Novas Mensagens');
DEFINE('_COM_A_SHOWNEW','Mostrar novas mensagens');
DEFINE('_COM_A_SHOWNEW_DESC','Se configurar para <strong>"Sim"</strong>, Kunena mostrará ao usuário um indicador dos fóruns que contém novas mensagens e quais as mensagens que são novas desde a sua última visita.');

DEFINE('_COM_A_NEWCHAR','"Indicador" de novas');
DEFINE('_COM_A_NEWCHAR_DESC','Defina aqui o que deve ser usado para indicar novas mensagens (como um "!" ou "Novo!")');

DEFINE('_LATEST_AUTHOR','Últimas mensagens do Autor');
DEFINE('_GEN_FORUM_NEWPOST','Novas Mensagens');
DEFINE('_GEN_FORUM_NOTNEW','Sem Novas Mensagens');
DEFINE('_GEN_UNREAD','Tópico não Lido');
DEFINE('_GEN_NOUNREAD','Tópico Lido');
DEFINE('_GEN_MARK_ALL_FORUMS_READ','Marcar todos os fóruns como lidos');
DEFINE('_GEN_MARK_THIS_FORUM_READ','Marcar como lido');
DEFINE('_GEN_FORUM_MARKED','Todas as Mensagens neste fórum foram marcadas como lidas');
DEFINE('_GEN_ALL_MARKED','Todas as Mensagens foram marcadas como lidas');
DEFINE('_IMAGE_UPLOAD','Enviar imagem');
DEFINE('_IMAGE_DIMENSIONS','Seu arquivo de imagem pode ter no máximo (largura x altura - tamanho)');
DEFINE('_IMAGE_ERROR_TYPE','Por favor utilize somente imagens jpeg, gif ou png.');
DEFINE('_IMAGE_ERROR_EMPTY','Por favor selecionar um arquivo antes de enviar.');
DEFINE('_IMAGE_ERROR_SIZE','A imagem excede o tamanho máximo permitido pela Administração.');
DEFINE('_IMAGE_ERROR_WIDTH','A imagem excede a largura máxima permitida pela Administração.');
DEFINE('_IMAGE_ERROR_HEIGHT','A imagem excede a altura máxima permitida pela Administração.');






DEFINE('_IMAGE_UPLOADED','A sua imagem foi enviada.');
DEFINE('_COM_A_IMAGE','Imagens');
DEFINE('_COM_A_IMGHEIGHT','Altura máxima da imagem');
DEFINE('_COM_A_IMGWIDTH','Largura máxima da imagem');
DEFINE('_COM_A_IMGSIZE','Tamanho máximo do arquivo de imagem <em>em Kilobytes</em>');
DEFINE('_COM_A_IMAGEUPLOAD','Permitir o envio público de imagens');
DEFINE('_COM_A_IMAGEUPLOAD_DESC','Configure para <strong>"Sim"</strong> se quiser que todo mundo (público) seja capaz de enviar uma imagem.');

DEFINE('_COM_A_IMAGEREGUPLOAD','Permitir envio registrado de imagens.');
DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','Configure para <strong>"Sim"</strong> se quiser que usuários registrados e logados possam enviar uma imagem.<br/> Nota: (Super)administradores e moderadores serão sempre capazas de enviar imagens.');

//New since preRC4-II:
DEFINE('_COM_A_UPLOADS', 'Uploads');
DEFINE('_FILE_TYPES','Seu arquivo pode ser do tipo - tamanho máx.');

DEFINE('_FILE_ERROR_TYPE','Você só pode enviar arquivos do tipo de:\n');
DEFINE('_FILE_ERROR_EMPTY','Por favor selecionar um arquivo antes de enviar.');
DEFINE('_FILE_ERROR_SIZE','O tamanho do arquivo excede o máx. configurado pelo Administrador.');


DEFINE('_COM_A_FILE','Arquivos');
DEFINE('_COM_A_FILEALLOWEDTYPES','Tipos de arquivos permitidos');
DEFINE('_COM_A_FILEALLOWEDTYPES_DESC','Especifique aqui quais os tipos de arquivos são permitidos enviar. Use vírgula para separar as extensões e letras <strong>minúsculas</strong>, sem espaços.<br />Exemplo: zip,txt,exe,htm,html');
DEFINE('_COM_A_FILESIZE','Tamanho máx. do Arquivo <em>em Kilobytes</em>');
DEFINE('_COM_A_FILEUPLOAD','Permitir o envio de arquivos para usuários não registrados.');
DEFINE('_COM_A_FILEUPLOAD_DESC','Configure para <strong>"Sim"</strong> se quiser que todo mundo (público) seja capaz de enviar um arquivo.');
DEFINE('_COM_A_FILEREGUPLOAD','Permitir envio de arquivos para usuários registrados.');
DEFINE('_COM_A_FILEREGUPLOAD_DESC','Configure para <strong>"Sim"</strong> se quiser que usuários registrados e logados sejam capazes de enviar uma pasta.<br/> Nota: (Super)administradores e moderadores serão sempre capazes de enviar aruivos.');




DEFINE('_SUBMIT_CANCEL','O envio da sua mensagem foi cancelado');
DEFINE('_HELP_SUBMIT','Clique aqui para enviar a sua mensagem'); // Depreciado na versão 1.0.10
DEFINE('_HELP_PREVIEW','Clique aqui para ver como a sua mensagem será visualizada ao enviá-la.'); // Depreciado na versão 1.0.10
DEFINE('_HELP_CANCEL','Clique aqui para cancelar a sua mensagem.'); // Depreciado na versão 1.0.10
DEFINE('_POST_DELETE_ATT','Se esta caixa de mensagem estiver checada, todas as imagens e arquivos anexos à mensagem também serão excluídos (recomendado).');



//new since preRC4-III
DEFINE('_COM_A_USER_MARKUP','Mostrar marca de edição');
DEFINE('_COM_A_USER_MARKUP_DESC','Configure para <strong>"Sim"</strong> se quiser que uma mensagem editada seja marcada com um texto mostrando que a mensagem foi editada por um usuário e quando ela foi editada.');

DEFINE('_EDIT_BY','Mensagem editada por:');
DEFINE('_EDIT_AT','em:');
DEFINE('_UPLOAD_ERROR_GENERAL','Um erro ocorreu ao enviar o seu avatar. Por favor tente novamente ou notifique o administrador do fórum.');

DEFINE('_COM_A_IMGB_IMG_BROWSE','Gerenciador de imagens enviadas ');
DEFINE('_COM_A_IMGB_FILE_BROWSE','Gerenciador de arquivos enviados');
DEFINE('_COM_A_IMGB_TOTAL_IMG','N. de imagens enviadas');
DEFINE('_COM_A_IMGB_TOTAL_FILES','N. de arquivos enviados');
DEFINE('_COM_A_IMGB_ENLARGE','Clique na imagem para vê-la no tamanho máximo');
DEFINE('_COM_A_IMGB_DOWNLOAD','Clique na imagem do arquivo para baixá-lo.');
DEFINE('_COM_A_IMGB_DUMMY_DESC',
	'Esta opção "Substituir por fictícia" irá substituir a imagem selecionada por uma imagem fictícia.<br /> Isto permitirá remover o arquivo atual sem quebrar a mensagem.<br /><small><em>Por favor note que será preciso atualizar a página do seu navegador para ver a imagem fictícia.</em></small>');

DEFINE('_COM_A_IMGB_DUMMY','Imagem fictícia atual');
DEFINE('_COM_A_IMGB_REPLACE','Substituir com a imagem fictícia');
DEFINE('_COM_A_IMGB_REMOVE','Remover inteiramente');
DEFINE('_COM_A_IMGB_NAME','Nome');
DEFINE('_COM_A_IMGB_SIZE','Tamanho');
DEFINE('_COM_A_IMGB_DIMS','Dimensões');
DEFINE('_COM_A_IMGB_CONFIRM','Tem certeza que deseja excluir este arquivo?\n Excluir um arquivo trará problemas de visualização à mensagem que faz referência a ele...');

DEFINE('_COM_A_IMGB_VIEW','Abrir Mensagem (para editar)');
DEFINE('_COM_A_IMGB_NO_POST','Nenhuma Mensagem referente!');
DEFINE('_USER_CHANGE_VIEW','As mudanças nestas configurações serão ativadas na próxima vez que visitar o fórum.');

DEFINE('_MOSBOT_DISCUSS_A','Discuta este artigo no fórum. (');
DEFINE('_MOSBOT_DISCUSS_B',' Mensagens)');
DEFINE('_POST_DISCUSS','Este tópico discute o conteúdo do artigo');
DEFINE('_COM_A_RSS','Ativar Feed RSS');
DEFINE('_COM_A_RSS_DESC','O Feed RSS permite aos usuários baixar as últimas mensagens no programa Leitor de RSS em seu desktop (veja <a href="http://www.rssreader.com" target="_blank">rssreader.com</a> para exemplo.');
DEFINE('_LISTCAT_RSS','ver as últimas mensagens diretamente no seu desktop');
DEFINE('_SEARCH_REDIRECT','O Kunena precisa de (re)estabelecer os seus privilégios antes de realizar uma busca.\nNão se preocupe, isto é normal depois de 30 minutos de inatividade.\nPor favor envie o seu pedido de busca novamente.');

//====================
//admin.forum.html.php
DEFINE('_COM_A_CONFIG','Configuração');
DEFINE('_COM_A_DISPLAY','Visualizar #');
DEFINE('_COM_A_CURRENT_SETTINGS','Configurações atuais');
DEFINE('_COM_A_EXPLANATION','Descrição');
DEFINE('_COM_A_BOARD_TITLE','Título do Fórum');
DEFINE('_COM_A_BOARD_TITLE_DESC','Nome do seu Fórum.');
//Removed Threaded View Option - No longer support in Kunena - It has been broken for years
//DEFINE('_COM_A_VIEW_TYPE','Tipo de visualização padrão');
//DEFINE('_COM_A_VIEW_TYPE_DESC','Escolha entre visão por tópicos ou visão corrida como padrão');
DEFINE('_COM_A_THREADS','Tópicos por página');
DEFINE('_COM_A_THREADS_DESC','N. de tópicos por página a exibir.');
DEFINE('_COM_A_REGISTERED_ONLY','Somente usuários registrados');
DEFINE('_COM_A_REG_ONLY_DESC','Configure para <strong>"Sim"</strong> para permitir que somente os usuários registrados possam utilizar o fórum (ver & publicar), Configure para "Não" para que qualquer usuário possa utilizar o fórum.');

DEFINE('_COM_A_PUBWRITE','Ler/Gravar Público');
DEFINE('_COM_A_PUBWRITE_DESC','Configure para <strong>"Sim"</strong> para permitir privilégios de gravação públicos. Configure para "Não" para que qualquer usuário possa ver o fórum, mas somente usuários registrados possam publicar Mensagens.');

DEFINE('_COM_A_USER_EDIT','Edições de usuários.');
DEFINE('_COM_A_USER_EDIT_DESC','Configurar para <strong>"Sim"</strong> para permitir a usuários registrados editarem as suas próprias Mensagens.');
DEFINE('_COM_A_MESSAGE','Para gravar as valvar as mudanças, pressione o botão "Salvar" no topo.');


DEFINE('_COM_A_HISTORY','Mostrar Histórico');
DEFINE('_COM_A_HISTORY_DESC','Configurar para "sim" se quiser que um histórico do tópico seja exibido quando uma resposta/citação for feita');

DEFINE('_COM_A_SUBSCRIPTIONS','Permitir Inscrições');
DEFINE('_COM_A_SUBSCRIPTIONS_DESC','Configurar para <strong>"Sim"</strong> se quiser que usuários registrados possam inscrever-se nos tópicos para receber uma notificação quando uma resposta for feita.');

DEFINE('_COM_A_HISTLIM','Limite do Histórico');
DEFINE('_COM_A_HISTLIM_DESC','N. de Mensagens a exibir no histórico.');
DEFINE('_COM_A_FLOOD','Proteção de Flood');
DEFINE('_COM_A_FLOOD_DESC','Tempo em segundos que um usuário tem que esperar para publicar duas mensagens consecutivas. Configure para 0(zero) para desligar protecção de Flood. NOTA: Proteção de Flood<em>pode</em> causar problemas de performance...');

DEFINE('_COM_A_MODERATION','e-mail de moderadores');
DEFINE('_COM_A_MODERATION_DESC',
	'Configurar para <strong>"Sim"</strong> se quiser que notificações de e-mail de novas mensagens sejam enviadas para o(s) moderador(es) do fórum. Nota: embora o (super)administrador tenha todos os privilégios de Moderador designe-o explicitamente como moderador para que ele também receba os e-mails!');


DEFINE('_COM_A_SHOWMAIL','Mostrar e-mail');
DEFINE('_COM_A_SHOWMAIL_DESC','Configurar para "Não" se quiser que nunca seja visualizado o e-mail de usuários; nem mesmo dos registrados.');

DEFINE('_COM_A_AVATAR','Permitir avatares');
DEFINE('_COM_A_AVATAR_DESC','Configurar para <strong>"Sim"</strong> se quiser que usuários registrados tenham um avatar (administrado através de seu perfil).');

DEFINE('_COM_A_AVHEIGHT','Altura máx. do avatar');
DEFINE('_COM_A_AVWIDTH','Largura máx. do avatar');
DEFINE('_COM_A_AVSIZE','Tamanho máx. do avatar <br/><em>em Kilobytes</em>');
DEFINE('_COM_A_USERSTATS','Mostrar estatísticas do usuário');
DEFINE('_COM_A_USERSTATS_DESC','Configurar para <strong>"Sim"</strong> se quiser mostrar estatísticas de usuários como n. de mensagens feitas por usuário, tipo de usuário (Admin, Moderador, usuário, etc.).');

DEFINE('_COM_A_AVATARUPLOAD','Permitir envio de Avatar');
DEFINE('_COM_A_AVATARUPLOAD_DESC','Configurar para <strong>"Sim"</strong> se quiser que usuários registrados sejam capazes de enviar seus avatares.');

DEFINE('_COM_A_AVATARGALLERY','Usar galeria de Avatares');
DEFINE('_COM_A_AVATARGALLERY_DESC','Configurar para <strong>"Sim"</strong> se quiser que os usuários registrados sejam capazes de usar um avatar de uma galeria que você fornecer (components/com_kunena/avatars/gallery).');
DEFINE('_COM_A_RANKING_DESC','Configure para <strong>"Sim"</strong> se quiser mostrar o ranking dos usuários registrados baseados no n. de mensagens que ele enviou. <br/><strong>Note que você deve ativar Estatísticas de Usuários na aba Avançada.</strong>');

DEFINE('_COM_A_RANKINGIMAGES','Usar imagens de Rank');
DEFINE('_COM_A_RANKINGIMAGES_DESC',
	'Configure para <strong>"Sim"</strong> se quiser mostrar o ranking dos usuários registrados com uma imagem (de components/com_kunena/ranks). Desligando esta opção irá mostrar o texto para aquele rank. Confira a documentação em www.bestofjoomla.com para mais informações sobre imagens de ranking.');


//e-mail and stuff
$_COM_A_NOTIFICATION="Nova notificação de mensagem de ";
$_COM_A_NOTIFICATION1="Uma nova mensagem foi enviada no tópico em que se inscreveu no ";
$_COM_A_NOTIFICATION2="Você pode administrar suas inscrições no link 'Meu Perfil' na página do fórum depois de fazer o login no site. A partir do seu perfil, você também pode anular a sua inscrição no tópico.";
$_COM_A_NOTIFICATION3="Não responda a esta notificação de e-mail porque é um e-mail gerado automticamente.";
$_COM_A_NOT_MOD1="Uma nova mensagem foi enviada no fórum em que foi designado como moderador em ";
$_COM_A_NOT_MOD2="Por favor observe depois de fazer o login no site.";





DEFINE('_COM_A_NO','Não');
DEFINE('_COM_A_YES','Sim');
DEFINE('_COM_A_FLAT','Corrido');
DEFINE('_COM_A_THREADED','Por tópicos');
DEFINE('_COM_A_MESSAGES','Mensagens por página');
DEFINE('_COM_A_MESSAGES_DESC','N. de mensagens por página a exibir.');
//admin; changes from 0.9 to 0.9.1
DEFINE('_COM_A_USERNAME','Nome de Usuário');
DEFINE('_COM_A_USERNAME_DESC','Configurar para <strong>"Sim"</strong> se quiser que o nome de usuário (como no login) seja usado em vez do nome real do usuário');

DEFINE('_COM_A_CHANGENAME','Permitir mudança de nome');
DEFINE('_COM_A_CHANGENAME_DESC','Configurar para <strong>"Sim"</strong> se quiser que usuários registrados sejam capazes de mudar o nome ao publicar. Se configurado para "Não" então os usuários registrados não serão capazes de editar os seus nomes. '); // Depreciado na versão 1.0.10

//admin; changes 0.9.1 to 0.9.2
DEFINE('_COM_A_BOARD_OFFLINE','Fórum Offline');
DEFINE('_COM_A_BOARD_OFFLINE_DESC','Configurar para <strong>"Sim"</strong> se quiser colocar a seção do Fórum offline. O fórum permanecerá navegável para super administradores.');

DEFINE('_COM_A_BOARD_OFFLINE_MES','Mensagem do Fórum Offline');
DEFINE('_COM_A_PRUNE','Limpar Mensagens do fórum');
DEFINE('_COM_A_PRUNE_NAME','Fórum para limpar:');
DEFINE('_COM_A_PRUNE_DESC',
	'As funções de Limpeza de Fórum permitem limpar tópicos que não tenham nenhuma mensagem após determinado período de dias. Isto não remove tópicos que estejam colocados como fixos ou que estejam fechados; estes tópicos devem ser removidos manualmente. Tópicos em fóruns fechados não podem ser excluídos.');

DEFINE('_COM_A_PRUNE_NOPOSTS','Limpar tópicos sem mensagens nos últimos ');
DEFINE('_COM_A_PRUNE_DAYS','dias');
DEFINE('_COM_A_PRUNE_USERS','Limpar usuários'); // <=FB 1.0.3
DEFINE('_COM_A_PRUNE_USERS_DESC',
	'Esta função permite que você limpe sua lista de usuários do Kunena contra a lista de usuários do Joomla! Isto irá remover todos os perfis de usuários do Kunena que foram recluídos do Framework do Joomla. <br/>Quando tiver certeza que deseja continuar, clique "Iniciar Limpeza" na barra de menu acima.');

//general
DEFINE('_GEN_atiON','Ação');
DEFINE('_GEN_AUTHOR','Autor');
DEFINE('_GEN_BY','por');
DEFINE('_GEN_CANCEL','Cancelar');
DEFINE('_GEN_CONTINUE','Enviar');
DEFINE('_GEN_DATE','Data');
DEFINE('_GEN_DELETE','Excluir');
DEFINE('_GEN_EDIT','Editar');
DEFINE('_GEN_EMAIL','e-mail');
DEFINE('_GEN_EMOTICONS','Emoticons');
DEFINE('_GEN_FLAT','Corrido');
DEFINE('_GEN_FLAT_VIEW','Visualização Corrida');
DEFINE('_GEN_FORUMLIST','Lista de Fórum');
DEFINE('_GEN_FORUM','Fórum');
DEFINE('_GEN_HELP','Ajuda');
DEFINE('_GEN_HITS','Visualizações');
DEFINE('_GEN_LAST_POST','Última Mensagem');
DEFINE('_GEN_LATEST_POSTS','Verificar últimas mensagens');
DEFINE('_GEN_LOCK','Fechar');
DEFINE('_GEN_UNLOCK','Abrir');
DEFINE('_GEN_LOCKED_FORUM','O Fórum está fechado');
DEFINE('_GEN_LOCKED_TOPIC','O Tópico está fechado');
DEFINE('_GEN_MESSAGE','Mensagem');
DEFINE('_GEN_MODERATED','Este fórum é moderado; É necessário revisar antes da publicação.');

DEFINE('_GEN_MODERATORS','Moderadores');
DEFINE('_GEN_MOVE','Mover');
DEFINE('_GEN_NAME','Nome');
DEFINE('_GEN_POST_NEW_TOPIC','Publicar novo Tópico');
DEFINE('_GEN_POST_REPLY','Responder a este tópico');
DEFINE('_GEN_MYPROFILE','Meu Perfil');
DEFINE('_GEN_QUOTE','Citar');
DEFINE('_GEN_REPLY','Responder');
DEFINE('_GEN_REPLIES','Respostas');
DEFINE('_GEN_THREADED','Por tópicos');
DEFINE('_GEN_THREADED_VIEW','Visão por tópico');
DEFINE('_GEN_SIGNATURE','Assinatura');
DEFINE('_GEN_ISSTICKY','Tópico está fixado.');
DEFINE('_GEN_STICKY','Fixado');
DEFINE('_GEN_UNSTICKY','Desfixado');
DEFINE('_GEN_SUBJECT','Assunto');
DEFINE('_GEN_SUBMIT','Enviar');
DEFINE('_GEN_TOPIC','Tópico');
DEFINE('_GEN_TOPICS','Tópicos');
DEFINE('_GEN_TOPIC_ICON','Ícone do tópico');
DEFINE('_GEN_SEARCH_BOX','Procurar no Fórum');
$_GEN_THREADED_VIEW="Visão Por tópico";
$_GEN_FLAT_VIEW="Visualização Corrida";
//avatar_upload.php
DEFINE('_UPLOAD_UPLOAD','Enviar');
DEFINE('_UPLOAD_DIMENSIONS','Seu arquivo de imagem pode ter no máximo (largura x altura - tamanho)');

DEFINE('_UPLOAD_SUBMIT','Enviar um novo Avatar');
DEFINE('_UPLOAD_SELECT_FILE','Selecionar arquivo');
DEFINE('_UPLOAD_ERROR_TYPE','Por favor use somente imagens jpeg, gif ou png.');
DEFINE('_UPLOAD_ERROR_EMPTY','Por favor selecione um arquivo antes de enviar.');
DEFINE('_UPLOAD_ERROR_NAME','esta pasta de imagem deve conter somente caracteres alfa numéricos e nenhum espaço.');
DEFINE('_UPLOAD_ERROR_SIZE','A imagem excede o tamanho máximo permitido pela Administração.');
DEFINE('_UPLOAD_ERROR_WIDTH','A imagem excede a largura máxima permitida pela Administração.');
DEFINE('_UPLOAD_ERROR_HEIGHT','A imagem excede a altura máxima permitida pela Administração.');




DEFINE('_UPLOAD_ERROR_CHOOSE',"Você não escolheu um avatar da galeria...");
DEFINE('_UPLOAD_UPLOADED','O seu avatar foi enviado.');
DEFINE('_UPLOAD_GALLERY','Escolha um avatar da galeria de Avatares:');
DEFINE('_UPLOAD_CHOOSE','Confirmar escolha.');
// listcat.php
DEFINE('_LISTCAT_ADMIN','Um administrador deve criá-las primeiro do ');

DEFINE('_LISTCAT_DO','Eles saberão o que fazer ');
DEFINE('_LISTCAT_INFORM','Informe-os e diga-lhes para se apressarem!');
DEFINE('_LISTCAT_NO_CATS','Ainda não há categorias definidas no fórum.');
DEFINE('_LISTCAT_PANEL','Painel de administração do Joomla!');
DEFINE('_LISTCAT_PENDING','mensagem(ns) pendente(s)');
// moderation.php
DEFINE('_MODERATION_MESSAGES','Não há nenhuma mensagem pendente neste fórum.');
// post.php
DEFINE('_POST_ABOUT_TO_DELETE','Você está prestes a excluir uma mensagem.');
DEFINE('_POST_ABOUT_DELETE','<strong>NOTAS:</strong><br/>
-se excluir um Tópico do Fórum (a primeira mensagem no tópico) todas as mensagens a seguir serão excluir!
.. Considere apagar o conteúdo da mensagem e o nome de quem publicou, somente se o conteúdo deve ser removido...


<br />
- Todas as mensagens "filhas" de uma mensagem normal apagada serão movidas até 1 grau na hierarquia da discussão.');

DEFINE('_POST_CLICK','clique aqui');
DEFINE('_POST_ERROR','Não pôde encontrar o nome de usuário/e-mail. Erro grave na base de dados não listado');
DEFINE('_POST_ERROR_MESSAGE','Ocorreu um erro desconhecido no SQL e a sua mensagem não foi enviada. Se o problema persistir, por favor contacte o administrador.');
DEFINE('_POST_ERROR_MESSAGE_OCCURED','Ocorreu um erro e a sua mensagem não foi atualizada. Por favor tente de novo. Se este erro persistir, por favor contacte o administrador.');
DEFINE('_POST_ERROR_TOPIC','Ocorreu um erro durante as remoções. Por favor verifique o erro em baixo:');
DEFINE('_POST_FORGOT_NAME','Esqueceu-se de incluir o seu nome. Clique no botão voltar do seu navegador e novamente.');
DEFINE('_POST_FORGOT_SUBJECT','Esqueceu-se de incluir um assunto. Clique no botão voltar do seu navegador e tente novamente.');
DEFINE('_POST_FORGOT_MESSAGE','Esqueceu-se de incluir uma mensagem. Clique no botão voltar do seu navegador e tente novamente.');







DEFINE('_POST_INVALID','Um ID inválido de mensagem foi pedido.');
DEFINE('_POST_LOCK_SET','O tópico foi fechado.');
DEFINE('_POST_LOCK_NOT_SET','O tópico não pôde ser fechado.');
DEFINE('_POST_LOCK_UNSET','O tópico foi aberto.');
DEFINE('_POST_LOCK_NOT_UNSET','O tópico não pôde ser aberto.');
DEFINE('_POST_MESSAGE','Publicar uma nova mensagem em ');
DEFINE('_POST_MOVE_TOPIC','Mover este tópico para o fórum ');
DEFINE('_POST_NEW','Publicar uma nova mensagem em: ');

DEFINE('_POST_NO_SUBSCRIBED_TOPIC','A sua inscrição no tópico não pôde ser processada.');
DEFINE('_POST_NOTIFIED','Marque esta caixa para que seja notificado(a) sobre respostas neste tópico.');

DEFINE('_POST_STICKY_SET','Este fórum foi fixado.');
DEFINE('_POST_STICKY_NOT_SET','Este tópico não pôde ser fixado.');
DEFINE('_POST_STICKY_UNSET','Este tópico foi desfixado.');
DEFINE('_POST_STICKY_NOT_UNSET','Este tópico não pôde ser desfixado.');
DEFINE('_POST_SUBSCRIBE','Inscrever-se');
DEFINE('_POST_SUBSCRIBED_TOPIC','Você inscreveu-se neste tópico.');
DEFINE('_POST_SUCCESS','Sua mensagem foi enviada com sucesso');
DEFINE('_POST_SUCCES_REVIEW','Sua mensagem foi enviada com sucesso e será revisada por um moderador antes de ser publicada no fórum.');
DEFINE('_POST_SUCCESS_REQUEST','Seu pedido foi processado. Se não for levado de volta ao tópico dentro de alguns momentos,');


DEFINE('_POST_TOPIC_HISTORY','Histórico do Tópico de');
DEFINE('_POST_TOPIC_HISTORY_MAX','Max. mostrando o último');
DEFINE('_POST_TOPIC_HISTORY_LAST','Mensagens  -  <i>(Última Mensagem primeiro)</i>');
DEFINE('_POST_TOPIC_FLOOD1','O administrador deste fórum ativou a proteção contra flood. Aguarde ');


DEFINE('_POST_TOPIC_FLOOD2',' segundos antes de poder enviar outra mensagem.');
DEFINE('_POST_TOPIC_FLOOD3','Por favor clique no botão voltar do seu navegador para voltar para o fórum.');

DEFINE('_POST_EMAIL_NEVER','Seu endereço de e-mail nunca será visualizado no site.');
DEFINE('_POST_EMAIL_REGISTERED','Seu endereço de e-mail estará disponível somente para usuários registrados.');
DEFINE('_POST_LOCKED','Fechado pelo Administrador.');
DEFINE('_POST_NO_NEW','Novas respostas não são permitidas.');
DEFINE('_POST_NO_PUBACCESS1','O administrador desativou o acesso público a mensagens.');
DEFINE('_POST_NO_PUBACCESS2','Somente usuários registrados<br /> podem contribuir para o fórum.');
// showcat.php
DEFINE('_SHOWCAT_NO_TOPICS','>> Ainda não há nenhum tópico neste fórum <<');
DEFINE('_SHOWCAT_PENDING','mensagem(ns) pendente(s)');
// userprofile.php
DEFINE('_USER_DELETE', '&#32;check this box to delete your signature');
DEFINE('_USER_ERROR_A', 'You came to this page in error. Please inform the administrator on which links&#32;');
DEFINE('_USER_ERROR_B', 'you clicked that got you here. They can then file a bug report.');
DEFINE('_USER_ERROR_C', 'Thank you!');
DEFINE('_USER_ERROR_D', 'Error number to include in your report:&#32;');
DEFINE('_USER_GENERAL','Opções Gerais de Perfis');
DEFINE('_USER_MODERATOR','Você foi designado como um Moderador do Fórum');
DEFINE('_USER_MODERATOR_NONE','Nenhum fórum foi designado para você moderar');
DEFINE('_USER_MODERATOR_ADMIN','Admins são moderadores de todos os fóruns.');
DEFINE('_USER_NOSUBSCRIPTIONS','Nenhuma inscrição em mensagens foi encontrada');
//DEFINE('_USER_PREFERED','Tipo de visualização de tópicos preferido');
DEFINE('_USER_PROFILE','Perfil para ');
DEFINE('_USER_PROFILE_NOT_A','Seu perfil não ');
DEFINE('_USER_PROFILE_NOT_B','pôde');
DEFINE('_USER_PROFILE_NOT_C',' ser atualizado.');
DEFINE('_USER_PROFILE_UPDATED','Seu perfil foi atualizado.');
DEFINE('_USER_RETURN_A','Se não for levado de volta para seu o perfil dentro de alguns instantes ');

DEFINE('_USER_RETURN_B','clique aqui');
DEFINE('_USER_SUBSCRIPTIONS','Suas Inscrições');
DEFINE('_USER_UNSUBSCRIBE','Remover Inscrição');
DEFINE('_USER_UNSUBSCRIBE_A','Você não ');
DEFINE('_USER_UNSUBSCRIBE_B','pôde');
DEFINE('_USER_UNSUBSCRIBE_C',' ser retirado deste tópico.');
DEFINE('_USER_UNSUBSCRIBE_YES','Você foi retirado deste tópico.');
DEFINE('_USER_DELETEAV',' marque esta caixa para excluir seu Avatar');
//New 0.9 to 1.0
DEFINE('_USER_ORDER','Ordem preferida das Mensagens');
DEFINE('_USER_ORDER_DESC','Última Mensagem primeiro');
DEFINE('_USER_ORDER_ASC','Primeira Mensagem primeiro');
// view.php
DEFINE('_VIEW_DISABLED','O administrador desabilitou o acesso público a escrita.');

DEFINE('_VIEW_POSTED','Publicado por');
DEFINE('_VIEW_SUBSCRIBE',':: Subscrever este tópico ::');
DEFINE('_MODERATION_INVALID_ID','Um ID de mensagem inválido foi pedido.');
DEFINE('_VIEW_NO_POSTS','Não há Mensagens neste fórum.');
DEFINE('_VIEW_VISITOR','Visitante');
DEFINE('_VIEW_ADMIN','Admin');
DEFINE('_VIEW_USER','Usuário');
DEFINE('_VIEW_MODERATOR','Moderador');
DEFINE('_VIEW_REPLY','Responder a esta mensagem');
DEFINE('_VIEW_EDIT','Editar esta mensagem');
DEFINE('_VIEW_QUOTE','Citar esta mensagem numa nova mensagem');
DEFINE('_VIEW_DELETE','Excluir esta mensagem');
DEFINE('_VIEW_STICKY','Colocar este tópico como fixo');
DEFINE('_VIEW_UNSTICKY','Desfixar este tópico');
DEFINE('_VIEW_LOCK','Trancar este tópico');
DEFINE('_VIEW_UNLOCK','Reabrir este tópico');
DEFINE('_VIEW_MOVE','Mover este tópico para um novo Fórum');
DEFINE('_VIEW_SUBSCRIBETXT','Inscrever-se neste tópico e ser notificado por e-mail de novas Mensagens.');

//NEW-STRINGS-FOR-TRANSLATING-READY-FOR-SIMPLEBOARD 9.2
DEFINE('_HOME','Fórum');
DEFINE('_POSTS','Mensagens:');
DEFINE('_TOPIC_NOT_ALLOWED','Publicar');
DEFINE('_FORUM_NOT_ALLOWED','Fórum');
DEFINE('_FORUM_IS_OFFLINE','O Fórum está OFFLINE!');
DEFINE('_PAGE','Página ');
DEFINE('_NO_POSTS','Nenhuma Mensagem');
DEFINE('_CHARS','caracteres máx.');
DEFINE('_HTML_YES','HTML está desativado');
DEFINE('_YOUR_AVATAR','<b>O seu Avatar</b>');
DEFINE('_NON_SELECTED','Não selecionado ainda  <br />');
DEFINE('_SET_NEW_AVATAR','Selecionar um novo Avatar');
DEFINE('_THREAD_UNSUBSCRIBE','remover subscrição');
DEFINE('_SHOW_LAST_POSTS','Tópicos ativos nas últimas');
DEFINE('_SHOW_HOURS','horas');
DEFINE('_SHOW_POSTS','Total: ');
DEFINE('_DESCRIPTION_POSTS','Novas mensagens para os tópicos ativos são mostradas em');

DEFINE('_SHOW_4_HOURS','4 Horas');
DEFINE('_SHOW_8_HOURS','8 Horas');
DEFINE('_SHOW_12_HOURS','12 Horas');
DEFINE('_SHOW_24_HOURS','24 Horas');
DEFINE('_SHOW_48_HOURS','48 Horas');
DEFINE('_SHOW_WEEK','Mensagens desta Semana');
DEFINE('_POSTED_AT','Postado em');
DEFINE('_DATETIME','Y/m/d H:i');
DEFINE('_NO_TIMEFRAME_POSTS','Não há novas mensagens no período de tempo que selecionou.');
DEFINE('_MESSAGE','Mensagem');
DEFINE('_NO_SMILIE','não');
DEFINE('_FORUM_UNAUTHORIZIED','Este fórum está aberto somente a usuários registrados e logados.');

DEFINE('_FORUM_UNAUTHORIZIED2','Se você já se registrou, por favor faça o login no site.');
DEFINE('_MESSAGE_ADMINISTRATION','Moderação');
DEFINE('_MOD_APPROVE','Aprovar');
DEFINE('_MOD_DELETE','Excluir');
//NEW in RC1
DEFINE('_SHOW_LAST','Mostrar a mensagem mais recente');
DEFINE('_POST_WROTE','escreveu');
DEFINE('_COM_A_EMAIL','Endereço de e-mail do Fórum');
DEFINE('_COM_A_EMAIL_DESC','Este é o endereço de e-mail do Fórum. Use um endereço válido de e-mail.');
DEFINE('_COM_A_WRAP','Quebrar linhas maiores que');
DEFINE('_COM_A_WRAP_DESC',
	'Coloque o n. máximo de caracteres que uma simples palavra deve ter. Este recurso permite delimitar a largura das mensagens do KUnena para serem ajustadas ao seu template.<br />70 caracteres é o máximo de caracteres para templates de largura fixa mas você precisa realizar algumas experiências.<br/>URLs, não interessa o quanto, não são afectados pela "quebra de palavras"');

DEFINE('_COM_A_SIGNATURE','Tamanho máximo da assinatura');
DEFINE('_COM_A_SIGNATURE_DESC','N. máximo de caracteres permitidos numa assinatura de usuário.');

DEFINE('_SHOWCAT_NOPENDING','Nenhuma mensagem(ns) pendente(s)');
DEFINE('_COM_A_BOARD_OFSET','Horário de compensação do Fórum');
DEFINE('_COM_A_BOARD_OFSET_DESC','Alguns fóruns estão localizados em servidores com fusos-horários diferentes dos usuários. Configure o tempo de compensação que o Kunena deve usar em horas. Números negativos e positivos podem ser usados.');

//New in RC2
DEFINE('_COM_A_BASICS','Básicos');
DEFINE('_COM_A_FRONTEND','Frontend');
DEFINE('_COM_A_SECURITY','Segurança');
DEFINE('_COM_A_AVATARS','Avatares');
DEFINE('_COM_A_INTEGRATION','Integração');
DEFINE('_COM_A_PMS','Ativar mensagens privadas');
DEFINE('_COM_A_PMS_DESC','Selecione um sistema de componente apropriado de mensagens privadas se instalou qualquer um. Selecionando Clexus PM ativará também as opções de perfil do usuário do ClexusPM user (como ICQ, AIM, Yahoo, MSN e seus link de perfil se suportados pelo template usado no Kunena');


DEFINE('_VIEW_PMS',
	'Clique aqui para enviar uma Mensagem Privada a este usuário');
//new in RC3
DEFINE('_POST_RE','Re:');
DEFINE('_BBCODE_BOLD','Texto em Negrito: [b]texto[/b]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_ITALIC','Texto em Itálico: [i]texto[/i]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_UNDERL','Texto sublinhado: [u]texto[/u]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_QUOTE','Texto Citado: [quote]texto[/quote]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_CODE','Visualização de código: [code]código[/code]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_ULIST','Lista não ordenada: [ul] [li]texto[/li] [/ul] - Sugestão: uma lista deve conter Lista de itens'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_OLIST','Lista ordenada: [ul] [li]texto[/li] [/ul] - Dica: uma lista deve conter Lista de itens'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_IMAGE','Imagem: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_LINK','Link: [url=http://www.zzz.com/]Isto é um link[/url]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_CLOSA','Fechar todas as tags'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_CLOSE','Fechar todas as tags do código bbCode'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_COLOR','Cor: [color=#FF6600]texto[/color]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_SIZE','Tamanho: [size=1]tamanho do texto[/size] - Sugestão: o tamanho varia de 1 a 5'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_LITEM','Listar Ítem: [li] listar ítem [/li]'); // Depreciado na versão 1.0.10
DEFINE('_BBCODE_HINT','Ajuda bbCode - Sugestão: O bbCode pode ser usado no texto selecionado!'); // Depreciado na versão 1.0.10
DEFINE('_COM_A_TAWIDTH','Largura do campo de Texto');
DEFINE('_COM_A_TAWIDTH_DESC','Ajustar a largura da entrada da resposta/mensagem para combinar com o seu template.<br/>A barra de Emoticon será quebrada em 2 linhas se a largura for <= 420 pixels.');

DEFINE('_COM_A_TAHEIGHT','Altura do campo de texto');
DEFINE('_COM_A_TAHEIGHT_DESC','Ajustar a altura do campo de texto da resposta/mensagem para combinar com o seu template.');

DEFINE('_COM_A_ASK_EMAIL','Requerer e-mail');
DEFINE('_COM_A_ASK_EMAIL_DESC','Pedir um endereço de e-mail quando usuários ou visitantes fizerem uma mensagem. Configure para "Não" se quiser que este recurso não seja implementado no frontend. A quem publicar não será perguntado pelo seu endereço de e-mail.');

//Rank Administration - Dan Syme/IGD
DEFINE('_KUNENA_RANKS_MANAGE', 'Gerenciamento de Ranks');
DEFINE('_KUNENA_SORTRANKS', 'Organizar por Ranks');

DEFINE('_KUNENA_RANKSIMAGE', 'Imagem do Rank');
DEFINE('_KUNENA_RANKS', 'Título do Rank');
DEFINE('_KUNENA_RANKS_SPECIAL', 'Especial');
DEFINE('_KUNENA_RANKSMIN', 'Mínimo de mensagens');
DEFINE('_KUNENA_RANKS_atiON', 'Ações');
DEFINE('_KUNENA_NEW_RANK', 'Novo Rank');

?>
