<?php
//
// Copyright (C) 2006 Thomas Papin
// http://www.gnu.org/copyleft/gpl.html GNU/GPL

// This file is part of the AdsManager Component,
// a Joomla! Classifieds Component by Thomas Papin
// Email: thomas.papin@free.fr
//
// Dont allow direct linking
//
// Tradução original Português do Brasil: Aurelio Lima Barreto (aurelio@aureliobarreto.com)
//

# Complementação, Revisão e Tradução a partir da versão 2.3.0
# Elvis Vinicius <elvisvinicius@pevermelho.com> 2009-10-01
# JoomlaClube - open source brazil http://www.joomlaclube.com.br

defined( '_JEXEC' ) or die( 'Acesso direto a essa Área não é permitido.' );

//General
DEFINE( "ADSMANAGER_ROOT_TITLE", "Classificados");
DEFINE( "ADSMANAGER_PAGE_TITLE", "Classificados - ");
DEFINE( "ADSMANAGER_BACK_TEXT", "Voltar");

//Front
DEFINE( "ADSMANAGER_FRONT_TITLE","Classificados");
DEFINE( "ADSMANAGER_LAST_ADS", "Anúncios Mais Recentes");

//Rules
DEFINE( "ADSMANAGER_RULES", "Regras");
DEFINE( "ADSMANAGER_RULESREAD", "<b>Por favor, leia nossas regras antes de anunciar!</b>");
DEFINE( "ADSMANAGER_RULES_TEXT", "Regras dos classificados<br><br>");

// List Categories

//   Title of Columns
DEFINE( "ADSMANAGER_AD", "Anúncio");
DEFINE( "ADSMANAGER_PRICE", "Preço");
DEFINE( "ADSMANAGER_KINDOF", "Tipo");
DEFINE( "ADSMANAGER_DATE", "Data");
DEFINE( "ADSMANAGER_STATE", "Condição");
DEFINE( "ADSMANAGER_CITY", "Cidade");
DEFINE( "ADSMANAGER_DEVICE", "R&#36;&nbsp;%s");

//Field Type
DEFINE( "ADSMANAGER_KINDOFALL", "Delivery / Carry ");
DEFINE( "ADSMANAGER_KINDOF1", "Carry");
DEFINE( "ADSMANAGER_KINDOF2", "Delivery");
DEFINE( "ADSMANAGER_KINDOF1_LONG", "Carry");
DEFINE( "ADSMANAGER_KINDOF2_LONG", "Delivery");


//Define use in ads list
DEFINE( "ADSMANAGER_FROM", "de ");
DEFINE ("ADSMANAGER_CONTACT_NOT_LOGGED", ">>> É necessário estar logado para ver os detalhes do contato. Cadastre-se, é gratuito. <<<");
DEFINE( "ADSMANAGER_CONTACT", "Contato");
DEFINE( "ADSMANAGER_CLICKONIMAGE", "Clique na imagem para ampliar");

//Search
DEFINE( "ADSMANAGER_SEARCH_TEXT", "Procurar...");
DEFINE( "ADSMANAGER_ORDER_BY_TEXT", "Ordenar por");

//List Options
DEFINE( "ADSMANAGER_MODE_TEXT", "Modo ");
DEFINE( "ADSMANAGER_EXPAND_TEXT", "Expandido");
DEFINE( "ADSMANAGER_SHORT_TEXT", "Resumido");

//List Type
DEFINE( "ADSMANAGER_LIST_TEXT", "Todos os Anúncios");
DEFINE( "ADSMANAGER_LIST_USER_TEXT", "Anúncios de");

//Form Verification
DEFINE( "ADSMANAGER_REGWARN_EMAIL", "Entre um e-mail válido");
DEFINE( "ADSMANAGER_REGWARN_AD_HEADLINE", "Entre com o título");
DEFINE( "ADSMANAGER_REGWARN_AD_TEXT", "Entre com a descrição");
DEFINE( "ADSMANAGER_REGWARN_AD_PRICE", "Preço incorreto. Use apenas números");
DEFINE( "ADSMANAGER_IMAGETOOBIG", "Foto muito grande");

//Profile
DEFINE( "ADSMANAGER_PROFILE_NAME", "Nome completo");
DEFINE( "ADSMANAGER_PROFILE_PASSWORD", "<br/><h4>Mude sua senha</h4> <i>Deixe em branco se não desejar mudá-la.</i>");
DEFINE( "ADSMANAGER_PROFILE_CONTACT", "<br/><h4>Contato</h4> <i>Esta informação será usada como valor padrão para preencher seus novos anúncios.</i>");
DEFINE( "ADSMANAGER_UPDATE_PROFILE_SUCCESSFULL", "Seu dados foram atualizados.");

//Warning
DEFINE( "ADSMANAGER_ADD_NOTALLOWED", "Infelizmente, você precisa estar logado para acessar essa página.");
DEFINE( "ADSMANAGER_DELETE_NOTALLOWED", "Desculpe, mas você tem que estar logado para excluir um anúncio.");
DEFINE( "ADSMANAGER_CAUTION", "ATENÇÃO: ");
DEFINE( "ADSMANAGER_CAUTION_DELETE1", "Você está tentando excluir um anúncio ");
DEFINE( "ADSMANAGER_CAUTION_DELETE2", " !!!");
DEFINE( "ADSMANAGER_YES_DELETE", "Sim, excluir");
DEFINE( "ADSMANAGER_NO_DELETE", "Não, manter");
DEFINE( "ADSMANAGER_DELETE_OK", "Anúncio foi excluí­do permanentemente");

//Form
DEFINE( "ADSMANAGER_AD_EDIT", "Atualizar");
DEFINE( "ADSMANAGER_AD_WRITE", "Adicionar");
DEFINE( "ADSMANAGER_AD_DELETE", "Excluir");
DEFINE( "ADSMANAGER_AD_DELETE_IMAGE", "excluir");

DEFINE( "ADSMANAGER_FORM_NAME", "Nome completo");
DEFINE( "ADSMANAGER_FORM_ZIP", "CEP");
DEFINE( "ADSMANAGER_FORM_CITY", "Cidade");
DEFINE( "ADSMANAGER_FORM_PHONE1", "Telefone");
DEFINE( "ADSMANAGER_FORM_EMAIL", "E-mail");
DEFINE( "ADSMANAGER_FORM_EMAIL_TEXT", "");
DEFINE( "ADSMANAGER_FORM_AD_HEADLINE", "Título do anúncio");
DEFINE( "ADSMANAGER_FORM_AD_TEXT", "Descrição do anúncio");
DEFINE( "ADSMANAGER_FORM_KINDOF", "Tipo de envio");
DEFINE( "ADSMANAGER_FORM_AD_PRICE", "Preço");
DEFINE( "ADSMANAGER_FORM_AD_PRICE_TEXT", "R$ (opcional)");

DEFINE( "ADSMANAGER_FORM_SUBMIT_TEXT", "Gravar");
DEFINE( "ADSMANAGER_FORM_CANCEL_TEXT", "Cancelar");

DEFINE( "ADSMANAGER_FORM_AD_IMAGE_TEXT", "Você pode enviar 1 ou 2 fotos em formato JPEG/PNG/GIf de no máximo 200 Kilobytes.<br/> O sistema de anúncio automaticamente criará um imagem reduzida da foto que enviar.");

//State
DEFINE( "ADSMANAGER_FORM_STATE", "Condição do item");
DEFINE( "ADSMANAGER_STATE_4", "Produto Novo");
DEFINE( "ADSMANAGER_STATE_3", "Excelente estado");
DEFINE( "ADSMANAGER_STATE_2", "Bom estado");
DEFINE( "ADSMANAGER_STATE_1", "Aceitável");
DEFINE( "ADSMANAGER_STATE_0", "Produto Usado");

DEFINE( "ADSMANAGER_INSERT_SUCCESSFULL_PUBLISH","Parabéns, você foi adicionado.");
DEFINE( "ADSMANAGER_INSERT_SUCCESSFULL_CONFIRM","Obrigado, um administrador verificará seu anúncio antes de publicar.");

DEFINE( "ADSMANAGER_HEADER1", "= obrigatório");
DEFINE( "ADSMANAGER_HEADER2", "= opcional");

DEFINE( "ADSMANAGER_SHOW_OTHERS", "Ver todos os anúncio de  ");

DEFINE( "ADSMANAGER_MENU_HOME","Início");
DEFINE( "ADSMANAGER_MENU_WRITE","Inserir anúncio");
DEFINE( "ADSMANAGER_MENU_PROFILE","Meus dados");
DEFINE( "ADSMANAGER_MENU_USER_ADS","Meus Anúncios");
DEFINE( "ADSMANAGER_MENU_RULES","Regras");
DEFINE( "ADSMANAGER_MENU_ALL_ADS","Todos os Anúncios");
DEFINE( "ADSMANAGER_NOENTRIES", "Nenhum anúncio cadastrado nessa seção");

DEFINE( "ADSMANAGER_FORM_CATEGORY", "Categoria");
DEFINE( "ADSMANAGER_FORM_AD_HEADLINE_TEXT","");

DEFINE("ADSMANAGER_CONFIGURATION_SAVED","Configurações gravadas");
DEFINE("ADSMANAGER_CATEGORIES_REORDER","Categorias reordenadas");
DEFINE("ADSMANAGER_ERROR_IN_URL","Erro no endereço da página");
DEFINE("ADSMANAGER_CATEGORY_SAVED","Categoria gravada");
DEFINE("ADSMANAGER_CATEGORIES_DELETED","Categoria(s) excluí­das");
DEFINE("ADSMANAGER_AD_SAVED","Anúncio gravado");
DEFINE("ADSMANAGER_ADS_DELETED","Anúncio(s) excluí­dos");
DEFINE("ADSMANAGER_MAIN_PAGE","Página principal");
DEFINE("ADSMANAGER_CONFIGURATION","Configuração");
DEFINE("ADSMANAGER_LIST_CATEGORIES","Categorias");
DEFINE("ADSMANAGER_LIST_ADS","Anúncios");
DEFINE("ADSMANAGER_CONFIGURATION_PANEL","Painel de Configuração");
DEFINE("ADSMANAGER_ADS_PER_PAGE","Anúncios por página");
DEFINE("ADSMANAGER_ADS_PER_PAGE_LONG","Anúncios por página");
DEFINE("ADSMANAGER_MAX_IMAGE_SIZE","Tamanho máx imagem");
DEFINE("ADSMANAGER_MAX_IMAGE_SIZE_LONG","Tamanho máximo da imagem");
DEFINE("ADSMANAGER_MAX_IMAGE_WIDTH","Largura max imagem");
DEFINE("ADSMANAGER_MAX_IMAGE_WIDTH_LONG","Largura máxima da imagem");
DEFINE("ADSMANAGER_MAX_IMAGE_HEIGHT","Altura máx imagem");
DEFINE("ADSMANAGER_MAX_IMAGE_HEIGHT_LONG","Altura máxima da imagem");
DEFINE("ADSMANAGER_MAX_THUMBNAIL_WIDTH","Largura Max Thumbnail");
DEFINE("ADSMANAGER_MAX_THUMBNAIL_WIDTH_LONG","Largura Max do Thumbnail");
DEFINE("ADSMANAGER_MAX_THUMBNAIL_HEIGHT","Altura Max Thumbnail");
DEFINE("ADSMANAGER_MAX_THUMBNAIL_HEIGHT_LONG","Altura Máxima do Thumbnail");
DEFINE("ADSMANAGER_AUTO_PUBLISH","Publicação Automática");
DEFINE("ADSMANAGER_AUTO_PUBLISH_LONG","Administrador tem que validar o anúncio");
DEFINE("ADSMANAGER_IMAGE_TAG","Tag");
DEFINE("ADSMANAGER_IMAGE_TAG_LONG","Adicione um tag de texto na imagem");
DEFINE("ADSMANAGER_FRONTPAGE","Texto de frente");
DEFINE("ADSMANAGER_FRONTPAGE_LONG","Texto a ser apresentado na tela de frente");
DEFINE("ADSMANAGER_CATEGORY_ITEMS","Anúncios da categoria: ");

DEFINE("ADSMANAGER_TH_TITLE","Título");
DEFINE("ADSMANAGER_TH_PUBLISH","Publicação");
DEFINE("ADSMANAGER_TH_USER","Usuário");
DEFINE("ADSMANAGER_TH_CATEGORY","Categoria");
DEFINE("ADSMANAGER_TH_DATE","Data");
DEFINE("ADSMANAGER_TH_IMAGE","Foto");
DEFINE("ADSMANAGER_TH_ADS","Anúncios");
DEFINE("ADSMANAGER_AD_EDITION","Editar anúncio");
DEFINE("ADSMANAGER_PUBLISH","Publicado");
DEFINE("ADSMANAGER_NO_PUBLISH","Não Publicado");
DEFINE("ADSMANAGER_CATEGORY_EDITION","Editar categoria");
DEFINE("ADSMANAGER_TH_PARENT","Pai");
DEFINE("ADSMANAGER_ROOT","Raiz");
DEFINE("ADSMANAGER_TH_DESCRIPTION","Descrição");

DEFINE("ADSMANAGER_EMAIL_ON_NEW","Notificar novos anúncios");
DEFINE("ADSMANAGER_EMAIL_ON_NEW_LONG","Enviar e-mail para admin em novos Anúncios");
DEFINE("ADSMANAGER_EMAIL_ON_UPDATE","Notificar atualizações");
DEFINE("ADSMANAGER_EMAIL_ON_UPDATE_LONG","Enviar email para admin em atualizações");

DEFINE("ADSMANAGER_SEF_ADS","Anúncios");
DEFINE("ADSMANAGER_SEF_ALL_ADS","todos Anúncios");
DEFINE("ADSMANAGER_SEF_DELETE","excluir");
DEFINE("ADSMANAGER_SEF_DELETE_AD","excluir anúncio");
DEFINE("ADSMANAGER_SEF_SAVE_AD","gravar anúncio");
DEFINE("ADSMANAGER_SEF_UPDATE","alterar");
DEFINE("ADSMANAGER_SEF_WRITE_AD","gravar anúncio");
DEFINE("ADSMANAGER_SEF_MY_ADS","meus Anúncios");
DEFINE("ADSMANAGER_SEF_USER","usuário");
DEFINE("ADSMANAGER_SEF_PROFILE","dados");
DEFINE("ADSMANAGER_SEF_EDIT","editar");
DEFINE("ADSMANAGER_SEF_SAVE","gravar");
DEFINE("ADSMANAGER_SEF_MAIN","Anúncios");
DEFINE("ADSMANAGER_SEF_CONTACT","contato");

//v1.0.2
DEFINE("ADSMANAGER_NB_IMAGES","Imagens Nb");
DEFINE("ADSMANAGER_NB_IMAGES_LONG","Número máximo de imagens em um anúncio");
DEFINE( "ADSMANAGER_FORM_AD_PICTURE", "Foto");

DEFINE( "ADSMANAGER_TOOLS", "Ferramentas");
DEFINE( "ADSMANAGER_TOOLS_MAIN_PAGE", "Ferramentas");
DEFINE( "ADSMANAGER_CONVERT_MARKETPLACE","Importar de Marketplace (Versão beta, não hesite em reportar bugs)");
DEFINE("ADSMANAGER_TOOLS_MARKETPLACE_CATEGORIES","Categorias do Marketplace");
DEFINE("ADSMANAGER_TOOLS_MARKETPLACE_ADS","Anúncios do Marketplace");
DEFINE("ADSMANAGER_IMPORT_MARKETPLACE","Importar Categorias e Anúncios do Marketplace");
DEFINE("ADSMANAGER_IMPORT_SUCCESS","Importação com sucesso");

DEFINE("ADSMANAGER_SHOW_CONTACT","Mostrar contato");
DEFINE("ADSMANAGER_SHOW_CONTACT_LONG","Mostrar informações do contato");
DEFINE("ADSMANAGER_SHOW_CONTACT_LOGGED_ONLY","Apenas para usuário logados");
DEFINE("ADSMANAGER_SHOW_CONTACT_ALL","Para todos");

DEFINE("ADSMANAGER_ROOT_SUBMIT","Enviar a nivel raiz");
DEFINE("ADSMANAGER_ROOT_SUBMIT_LONG","Se o usuário não pode enviar para categorias no nível 'raiz' (categorias que contêm sub-categorias)");
DEFINE("ADSMANAGER_ROOT_SUBMIT_ALLOWED","Permitido");
DEFINE("ADSMANAGER_ROOT_SUBMIT_NOT_ALLOWED","Não Permitido");

//v1.2.0
DEFINE('ADSMANAGER_COMMUNITY_BUILDER','Community Builder');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_LONG','Completo: CB para Perfil e Classificados de Usuários, Perfil: Usar apenas o perfil do CB');
/*
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_PHONE','CB Phone');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_PHONE_LONG','Which CB field to use for Phone field');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_ZIP','CB Zip');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_ZIP_LONG','Which CB field to use for Zip field');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_CITY','CB City');
DEFINE('ADSMANAGER_COMMUNITY_BUILDER_CITY_LONG','Which CB field to use for City field');
*/
//v1.2.1
DEFINE('ADSMANAGER_SEND_EMAIL_BUTTON','Enviar');
DEFINE('ADSMANAGER_EMAIL_FORM','Enviar um e-mail');
DEFINE('ADSMANAGER_FORM_TITLE','Título do e-mail');
DEFINE('ADSMANAGER_FORM_EMAIL_BODY','Conteúdo');
DEFINE('ADSMANAGER_EMAIL_TITLE',"Pergunta : ");
DEFINE('ADSMANAGER_EMAIL_BODY','Anúncio : ');
DEFINE('ADSMANAGER_WRITE_EMAIL','Formulário de E-mail');
DEFINE('ADSMANAGER_EMAIL_DISPLAY','Apresentação do E-mail');
DEFINE('ADSMANAGER_EMAIL_DISPLAY_LONG','Escolher como mostrar E-mail para visitante');
DEFINE('ADSMANAGER_EMAIL_DISPLAY_FORM','Formulário');
DEFINE('ADSMANAGER_EMAIL_DISPLAY_IMAGE','Imagem');
DEFINE('ADSMANAGER_EMAIL_DISPLAY_LINK','Link');
DEFINE('ADSMANAGER_EMAIL_SENT','E-mail enviado');

//v2
DEFINE('ADSMANAGER_FIELDS','Campos');
DEFINE('ADSMANAGER_COLUMNS','Colunas');
DEFINE('ADSMANAGER_COLUMN_EDITION','Edição de Coluna');
DEFINE('ADSMANAGER_ORDER','Ordem');
DEFINE('ADSMANAGER_AD_DISPLAY','Apresentação do Anúncio');
DEFINE('ADSMANAGER_FIELDS_LIST','Lista de Campos');
DEFINE('ADSMANAGER_EDIT_FIELD','Editar Campo');
DEFINE('ADSMANAGER_REGWARN_NUMBER','Apenas números neste campo');
DEFINE('ADSMANAGER_REGWARN_ERROR','Preencha esse campo');
DEFINE("ADSMANAGER_EMAIL_UPDATE","[Anúncio] Atualização: ");
DEFINE("ADSMANAGER_EMAIL_NEW","[Anúncio] Novo: ");
DEFINE("ADSMANAGER_UPDATE_SUCCESSFULL","Atualização com sucesso");
DEFINE("ADSMANAGER_SELECT_ITEM_TO_BE_DELETED","Selecione um item para excluir");
DEFINE("ADSMANAGER_ERROR_SYSTEM_FIELD","Você não pode excluir um campo do sistema");

DEFINE("ADSMANAGER_FIELD_TYPE","Tipo: ");
DEFINE("ADSMANAGER_FIELD_NAME","Nome: ");
DEFINE("ADSMANAGER_FIELD_TITLE","Título: ");
DEFINE("ADSMANAGER_FIELD_REQUIRED","Obrigatório?: ");
DEFINE("ADSMANAGER_FIELD_COLUMN","Coluna?:");
DEFINE("ADSMANAGER_FIELD_COLUMN_ORDER","Ordem da Coluna: ");
DEFINE("ADSMANAGER_FIELD_POSITION_DISPLAY","Mostrar posição?:");
DEFINE("ADSMANAGER_FIELD_POSITION_ORDER","Ordem da Posição:");
DEFINE("ADSMANAGER_FIELD_PROFILE","Usar como campo de Perfil?:");
DEFINE("ADSMANAGER_FIELD_CB","Community Builder?:");
DEFINE("ADSMANAGER_FIELD_SORT_OPTION","Ordenável?:");
DEFINE("ADSMANAGER_FIELD_SORT_DIRECTION","Direção da ordenação?:");
DEFINE("ADSMANAGER_FIELD_SIZE","Tamanho:");
DEFINE("ADSMANAGER_FIELD_PUBLISHED","Publicado?");
DEFINE("ADSMANAGER_FIELD_MAX_LENGTH","Tamanho máx:");
DEFINE("ADSMANAGER_FIELD_COLS","Colunas:");
DEFINE("ADSMANAGER_FIELD_ROWS","Linhas:");
DEFINE("ADSMANAGER_FIELD_VALUES_EXPLANATION","Use a tabela abaixo para adicionar novos valores.<br />");
DEFINE("ADSMANAGER_FIELD_VALUE_NAME","NOME");
DEFINE("ADSMANAGER_FIELD_VALUE_VALUE","VALOR");
DEFINE("ADSMANAGER_LIST_COLUMNS","Listar colunas");
DEFINE("ADSMANAGER_POSITIONS","Apresentação");

DEFINE("ADSMANAGER_TH_NAME","Nome");
DEFINE("ADSMANAGER_TH_TYPE","Tipo");
DEFINE("ADSMANAGER_TH_REORDER","Tipo");
DEFINE("ADSMANAGER_TH_REQUIRED","Obrigatório?");

DEFINE("ADSMANAGER_NO_DISPLAY","Não visível");
DEFINE("ADSMANAGER_NOT_USED","Não usado");

DEFINE("ADSMANAGER_POSITION_TOP","");
DEFINE("ADSMANAGER_POSITION_SUBTITLE","");
DEFINE("ADSMANAGER_POSITION_DESCRIPTION","");
DEFINE("ADSMANAGER_POSITION_DESCRIPTION2","Preço: ");
DEFINE("ADSMANAGER_POSITION_CONTACT","Contato:<br/>");

//add nopic.gif
DEFINE("ADSMANAGER_NOPIC","nopic.gif");

//AdsManager v2.0.3
DEFINE("ADSMANAGER_EXPAND_MODE","Modo Expandido");
DEFINE("ADSMANAGER_LAST_BOTTOM","Visualizar no Fim da Página");
DEFINE("ADSMANAGER_LAST_TOP","Visualizar no Início da Página");
DEFINE("ADSMANAGER_LAST_NONE","Sem visualização");

//AdsManager v2.1.0
DEFINE("ADSMANAGER_EXPIRATION_MAIL","Expiração do anúncio");
DEFINE("ADSMANAGER_EXPIRATION_MAIL_BODY","Seu anúncio : %s será excluído em %s dias.<br/> Para cancelar e re-publicar clique no link abaixo.<br/><a href=\"%s\">%s</a>");
DEFINE("ADSMANAGER_EXPIRATION","Expiração do anúncio");
DEFINE("ADSMANAGER_AD_DURATION","Duração do Anúncios (dias)");
DEFINE("ADSMANAGER_RECALL","Re-envio email antes da expiração");
DEFINE("ADSMANAGER_RECALL_TIME","Número de dias entre aviso e expiração");
DEFINE("ADSMANAGER_RECALL_TEXT","Texto de aviso de republicação	 adicionado no início do e-mail");
DEFINE("ADSMANAGER_AD_RESUBMIT","Seu anúncio foi re-publicado");
DEFINE("ADSMANAGER_VIEWS","Visita(s) = %s");
DEFINE("ADSMANAGER_ORDER_HITS","Oferta(s)");
DEFINE("ADSMANAGER_FIELD_EDITABLE","Editável?");
DEFINE("ADSMANAGER_FIELD_SEARCHABLE","Opção de pesquisa?");
DEFINE("ADSMANAGER_LOGIN","Login");
DEFINE("ADSMANAGER_LOGIN_DESCRIPTION","Para acessar essa área, é necessário estar logado");
DEFINE("ADSMANAGER_ADVANCED_SEARCH","Pesquisa Avançada");
DEFINE("ADSMANAGER_SUBMIT_BUTTON","Enviar");
DEFINE("ADSMANAGER_SEF_SHOW_SEARCH","pesqusiar");
DEFINE("ADSMANAGER_SEF_SHOW_RESULT","resultado");

//AdsManager v2.1.2
DEFINE("ADSMANAGER_WAIT","Por favor, aguarde ...");
DEFINE("ADSMANAGER_FIELD_DESCRIPTION","Descrição");

//AdsManager v2.1.4
DEFINE("ADSMANAGER_FIELD_DISPLAY_TITLE","Título da Visualização");
DEFINE("ADSMANAGER_DISPLAY_DETAILS","Visualização em Modo Anúncio");
DEFINE("ADSMANAGER_DISPLAY_LIST","Visualização em Modo Lista");
DEFINE("ADSMANAGER_DISPLAY_LIST_AND_DETAILS","Visualização em Modo Anúncio e Lista");
DEFINE("ADSMANAGER_YES","Sim");
DEFINE("ADSMANAGER_NO","Não");

//AdsManager v2.1.5
DEFINE("ADSMANAGER_INSTALL_SUCCESSFULL","Instalação realizada com sucesso");
DEFINE("ADSMANAGER_ERROR_INSTALL","Erro durante a Instalação");
DEFINE("ADSMANAGER_ALREADY_INSTALL","Instalação pronta");
DEFINE("ADSMANAGER_INSTALL_SEF","Instale a extensão para ArtioSEF");
DEFINE("ADSMANAGER_INSTALL_JOOMFISH","Instale extensão para Joomfish");
DEFINE("ADSMANAGER_REORDER","Reordenar");

DEFINE("ADSMANAGER_IMAGE_DISPLAY","Mostrar Imagem");
DEFINE("ADSMANAGER_IMAGE_DISPLAY_DEFAULT","Abrir imagem em uma nova janela");
DEFINE("ADSMANAGER_IMAGE_DISPLAY_LIGHTBOX","Abrir imagem com Lightbox (Efeito bacana)");
DEFINE("ADSMANAGER_IMAGE_DISPLAY_LYTEBOX","Abrir imagem com Lightbox (Efeito bacana)");
DEFINE("ADSMANAGER_IMAGE_DISPLAY_HIGHSLIDE","Abrir imagem com Highslide (Efeito bacana)"); 
DEFINE("ADSMANAGER_IMAGE_DISPLAY_POPUP","Abrir imagem em um popup");

DEFINE("ADSMANAGER_MAX_CATIMAGE_WIDTH","Largura máxima da Imagem da Categoria");
DEFINE("ADSMANAGER_MAX_CATIMAGE_WIDTH_LONG","Largura máxima da Imagem da Categoria");
DEFINE("ADSMANAGER_MAX_CATIMAGE_HEIGHT","Altura máxima da Imagem da Categoria");
DEFINE("ADSMANAGER_MAX_CATIMAGE_HEIGHT_LONG","Altura máxima da Imagem da Categoria");
DEFINE("ADSMANAGER_MAX_CATTHUMBNAIL_WIDTH","Largura máxima da Imagem reduzida da Categoria");
DEFINE("ADSMANAGER_MAX_CATTHUMBNAIL_WIDTH_LONG","Largura máxima da Imagem reduzida da Categoria");
DEFINE("ADSMANAGER_MAX_CATTHUMBNAIL_HEIGHT","Altura máxima da Imagem reduzida da Categoria");
DEFINE("ADSMANAGER_MAX_CATTHUMBNAIL_HEIGHT_LONG","Altura máxima da Imagem reduzida da Categoria");

DEFINE("ADSMANAGER_TAB_GENERAL","Principal");
DEFINE("ADSMANAGER_TAB_IMAGE","Imagem");
DEFINE("ADSMANAGER_TAB_TEXT","Texto");
DEFINE("ADSMANAGER_TAB_EXPIRATION","Expiração");
DEFINE("ADSMANAGER_AD_DISPLAY_EXPLANATION","Para mudar a exposição de um anúncio, você tem que editar os campos e escolhê-los para cada campo onde você quer indicar esta informação.");
DEFINE("ADSMANAGER_DONATION","Click sobre o botão PayPal para fazer uma doação. Agradecemos sua contribuição :)");
DEFINE("ADSMANAGER_ADSENSE","Google AdSense é uma maneira rápida e fácil para os administradores do site de todos os tamanhos indicar anúncios relevantes de Google em páginas do seu site e ganhar dinheiro. Porque os anúncios são relacionados ao que seus visitantes estão procurando em seu site, local ou combinado às características e aos interesses dos visitantes seu índice atrai o que você finalmente terá uma maneira ao de realçe suas páginas principais.");

//AdsManager v2.1.6
DEFINE("ADSMANAGER_SUBMISSION_TYPE","Tipo de inscrição");
DEFINE("ADSMANAGER_SUBMISION_WITH_ACCOUNT_CREATION","Criar uma conta de usuário (se necessário) ao criar um anúncio");
DEFINE("ADSMANAGER_SUBMISSION_ALLOWED_ONLY_FOR_REGISTERS","Usuários precisam ser habilitados para postar um anúncio");
DEFINE("ADSMANAGER_SUBMISSION_ALLOWED_FOR_VISITORS","Visitantes podem submeter anúncios sem precisar cirar uma conta");
DEFINE("ADSMANAGER_WARNING_NEW_AD_NO_ACCOUNT","<b> Informação: Você precisa estar logado!</b><br/> Você pode postar um anúncio, mas não poderá modifica-lo/deleta-lo, para isso você precisa efetuar o login ou criar um nova conta<br/>");
DEFINE("ADSMANAGER_SELECT_CATEGORY","-- Selecione uma categoria --");
DEFINE("ADSMANAGER_AUTOMATIC_ACCOUNT","Entre com seu login e senha ou,<br />Informe usuário/senha para criar uma nova conta"); 
DEFINE("ADSMANAGER_BAD_PASSWORD","<b>Erro:</b> Usuário já exite ou você informou a senha errada para este usuário");
DEFINE("ADSMANAGER_EMAIL_ALREADY_USED","<b>Erro:</b> Email já esta cadastrado para outra conta. Você deve escolher outro email ou usar a conta deste email.");
DEFINE("ADSMANAGER_NB_ADS_BY_USER","Número de Anúncios por usuário");
DEFINE("ADSMANAGER_NB_ADS_BY_USER_LONG","Número de Anúncios por usuário ( -1  = Ilimitado ) ");
DEFINE("ADSMANAGER_MAX_NUM_ADS_REACHED","Você não pode postar mais um anúncio. O número máximo de anúncios por usuário é: %s");
DEFINE("ADSMANAGER_ATTACH_FILE","Arquivo");

DEFINE("ADSMANAGER_DISPLAY_MODE","Modo de exibição");
DEFINE("ADSMANAGER_SHORT_MODE","Modo Resumido");
DEFINE("ADSMANAGER_SHORT_AND_EXPAND_MODE","Modo Resumido e Expandido");
DEFINE("ADSMANAGER_DISPLAY_MODE_LONG","<b>Modo Resumido:</b>Descrição resumida é mostrada primeiro, você clica em cada anúncio para ver todos os detalhes<br /><b>Modo Expandido:</b> Neste modo, a descrição completa é mostrada diretamente<br /><b>Modo Resumido e Expandidoe:</b> O usuário pode escolher o modo");

DEFINE("ADSMANAGER_TAB_CONTACT","Contato");
DEFINE("ADSMANAGER_MESSAGE_SENT","Mensagem enviada");
DEFINE("ADSMANAGER_CONTACT_BY_PMS","Contato por PMS");
DEFINE("ADSMANAGER_CONTACT_BY_PMS_LONG","Adicionar um link para contactar o dono do anúncio por PMS, você precisa instalar um componente PMS como JIM, Missus e assossia-lo ao mambot do Adsmanager");
DEFINE("ADSMANAGER_ALLOW_ATTACHMENT","Aceitar Anexo");
DEFINE("ADSMANAGER_ALLOW_ATTACHMENT_LONG","Aceitar Anexo no Email");
DEFINE("ADSMANAGER_PMS_FORM","Contato %s por PMS");

DEFINE('ADSMANAGER_FORM_MESSAGE_TITLE','Título');
DEFINE('ADSMANAGER_FORM_MESSAGE_BODY','Mensagem');
DEFINE('ADSMANAGER_FORM_MESSAGE_WRITE','Escrever formulário');

//AdsManager 2.1.7
DEFINE('ADSMANAGER_PROFILE','Meus dados');
DEFINE('ADSMANAGER_FULL','Completo');
DEFINE('ADSMANAGER_DATE_FORMAT_LC',"%d/%m/%Y");

//AdsManager 2.1.9
DEFINE('ADSMANAGER_FNAME','Primeiro Nome');   
DEFINE('ADSMANAGER_MNAME','Nome do Meio');
DEFINE('ADSMANAGER_DISPLAY_FULLNAME','Mostrar Nome Completo?');
DEFINE('ADSMANAGER_DISPLAY_FULLNAME_LONG','Usar usuário de Primeiro/Último Nome');
DEFINE("ADSMANAGER_POSITION_DESCRIPTION3","");
DEFINE("ADSMANAGER_SHOW_RSS","Mostrar Link RSS");
DEFINE("ADSMANAGER_SHOW_RSS_LONG","");
DEFINE("ADSMANAGER_DOWNLOAD_FILE","Arquivo de Download");
DEFINE("ADSMANAGER_FILE_TOO_BIG",'Arquivo é muito grande');

DEFINE("ADSMANAGER_USERNAME",'Usuário');
DEFINE("ADSMANAGER_PASSWORD",'Senha');
DEFINE("ADSMANAGER_REMEMBER_ME",'Memoriza');
DEFINE("ADSMANAGER_LOST_PASSWORD",'Esqueceu a senha?');
DEFINE("ADSMANAGER_NO_ACCOUNT",'Ainda sem conta?');
DEFINE("ADSMANAGER_CREATE_ACCOUNT",'Registrar');
DEFINE("ADSMANAGER_BUTTON_LOGIN",'Ok');

DEFINE("ADSMANAGER_FIELDS_REORDER","Campos Reordenados");
DEFINE("ADSMANAGER_CMN_SORT_DESC","Ordem Descendente");
DEFINE("ADSMANAGER_CMN_SORT_ASC","Ordem Crescente");
DEFINE('ADSMANAGER_REGISTER_PASS','Senha:');
DEFINE('ADSMANAGER_REGISTER_VPASS','Verificar Senha:');
DEFINE('ADSMANAGER_EMAIL','Email');
DEFINE('ADSMANAGER_UNAME','Usuário:');
DEFINE('ADSMANAGER_PASS','Senha:');
DEFINE('ADSMANAGER_VPASS','Verificar Senha:');
DEFINE('ADSMANAGER_NAME','Nome:');
DEFINE('ADSMANAGER_PROMPT_UNAME','Usuário:');
DEFINE('ADSMANAGER_PROMPT_EMAIL','Endereço de E-mail:');
DEFINE('ADSMANAGER_VALID_AZ09',"Por favor, entre um %s válido.  Sem espaços, mais que %d caracteres e contendo 0-9,a-z,A-Z");
DEFINE('ADSMANAGER_REGWARN_NAME','Por favor, entre com seu nome.');
DEFINE('ADSMANAGER_REGWARN_UNAME','Por favor, entre com seu usuário.');
DEFINE('ADSMANAGER_REGWARN_MAIL','Por favor, entre com um email válido.');
DEFINE('ADSMANAGER_REGWARN_PASS','Por favor, entre com uma senha válida.  Sem espaços, mais que 6 caracteres e contendo 0-9,a-z,A-Z');
DEFINE('ADSMANAGER_REGWARN_VPASS1','Por favor, verifique sua senha.');
DEFINE('ADSMANAGER_REGWARN_VPASS2','Senha e verificação não combinam, tente novamente.');
DEFINE('ADSMANAGER_FIELD_SIZE_LONG','Tamanhdo do Texto ou do Arquivo (se tipo do campo = "file")');
DEFINE('ADSMANAGER_DELETE_CATEGORY_SELECT_CHIDLS','Pelo menos uma categoria tem subitens não selecionados. Por favor, selecione todos os subtitens se deseja excluir a categoria');
DEFINE('ADSMANAGER_EDIT_PROFILE','Editar Perfil');
//AdsManager 2.2.0
DEFINE("ADSMANAGER_IMAGE_DISPLAY_LONG","Para usar highslide, leia antes <a href='http://vikjavev.no/highslide/#licence'>isto</a> para termos de uso");

//AdsManager 2.3.0
DEFINE("ADSMANAGER_NBCATS","Número de Categorias");
DEFINE("ADSMANAGER_NBCATS_LONG","Digite o número de categorias em que um mesmo anúncio pode ser publicado");
DEFINE("ADSMANAGER_NBCATS_LIMIT","Você atingiu o limite de categorias");
DEFINE("ADSMANAGER_ADD","Adicionar");
DEFINE("ADSMANAGER_DELETE","Remover");
DEFINE('ADSMANAGER_NBCATS_LEGEND','Você pode selecionar um máximo de %s categoria(s)');
DEFINE('ADSMANAGER_CBFIELDVALUES','Usar valores dos campos do CB');
DEFINE('ADSMANAGER_CBFIELDVALUES_LONG','Se você quiser usar os valores dos campos do CB ao invéz dos valores abaixo');
DEFINE('ADSMANAGER_LIST_FIELDIMAGES','Imagens');
DEFINE('ADSMANAGER_FIELDIMAGES','Imagens');
DEFINE('ADSMANAGER_LIST_PLUGINS','Plugins');
DEFINE('ADSMANAGER_IMAGE_FIELD_VALUES_EXPLANATION','');
DEFINE('ADSMANAGER_FIELD_VALUE_IMAGE','Imagem');
DEFINE('ADSMANAGER_PLUGINS','Plugins');
DEFINE('ADSMANAGER_SHOW_NEW','Exibit Indicador Novo');
DEFINE('ADSMANAGER_SHOW_NEW_LONG','Mostrar uma nova imagem em modo de lista para os novos anúncios');
DEFINE('ADSMANAGER_SHOW_HOT','Exibir Indicator HOT');
DEFINE('ADSMANAGER_SHOW_HOT_LONG','Exibir Indicador HOT em modo lista se um anúncio é popular');
DEFINE('ADSMANAGER_NBDAYS_NEW','Número de dias para NOVO');
DEFINE('ADSMANAGER_NBDAYS_NEW_LONG','Número de dias para apresentar o ícone NOVO para os novos anúncios');
DEFINE('ADSMANAGER_NBHITS','Número de Hits para HOT');
DEFINE('ADSMANAGER_NBHITS_LONG','Mostrar a imagem HOT em modo lista aos anúncios mais populares');
DEFINE('ADSMANAGER_SEARCH_SELECT','Selecionar %s');
DEFINE('ADSMANAGER_SEARCH_TITLE','Pesquisa');

DEFINE('ADSMANAGER_RENEW_AD_QUESTION','Seu anúncio está "%s" está prestes a expirar em %s');
DEFINE('ADSMANAGER_RENEW_AD','Renovar');
?>