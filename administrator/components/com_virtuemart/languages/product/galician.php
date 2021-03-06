<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Realizar Pedido',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Inventario',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'N�mero',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Peso',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Publicar',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Buscar Producto',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'modificado',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'con prezo modificado',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'sen prezo',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Despois',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Antes',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Ver detalles do producto',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Novo Producto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Informaci�n do Producto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Estado',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Dimensi�ns e Peso do Producto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Imaxes',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Actualizar Artigo',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Informaci�n do Artigo',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Estado do Artigo',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Dimensi�ns e Peso do Artigo',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Imaxe do Artigo',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Para actualizar a imaxe actual, vai ao directorio e suba unha nova imaxe.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Borre a imaxe actual.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Artigos',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Caracter�sticas dos Artigos',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Est� seguro de que quere borrar este producto e os artigos relacionados con �l?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Est� seguro de que quere borrar este artigo?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Fabricante',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'C�digo',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Nome',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Categor�a',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Data de dispo�ibilidade',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'En oferta',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Tipo de Desconto',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Tama�o',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Anchura',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Altura',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Unidade de Medida',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Unidade de Medida',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Imaxe Completa',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'libra',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'pulgadas',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Artigos no Embalaxe',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Vostede pode especificar aqu� o n�mero de artigos por embalaxe. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Artigos en Caixa',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Vostede pode especificar aqu� o n�mero de artigos por caixa. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Resultados de Engadir Produto',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Resultados de Actualizar Produto',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Resultados de Engadir Artigo',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Resultados de Actualizar Artigo',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Informaci�n',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Nome de Categor�a',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Parente de Categor�a',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Descripci�n da Categor�a',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Detalles de Categor�a',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Listar Atributos por',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Nome Atributo',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Listar Pedido',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Formulario Atributos',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Novo Atributo de Producto',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Actualizar Atributos de Producto',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Novo Atributo de Artigo',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Actualizar Atributos de Artigo',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Nome Atributo',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Listar Pedidos',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Prezos para',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Nome do Grupo',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Prezo',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Moeda',
	'PHPSHOP_PRICE_FORM_LBL' => 'Informaci�n',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Novo Prezo de Producto',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Actualizar Prezo do Producto',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Novo Prezo de Producto',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Actualizar Prezo do Producto',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Prezo',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Grupo de Clientes',
	'PHPSHOP_LEAVE_BLANK' => '(deixar em BRANCO se non ten<br />ning�n arquivo php individual para isto)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Item',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Data inicial para o desconto',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Especifica o d�a en que o desconto comeza',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Data final para o desconto',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Especifica o d�a en que o desconto remata',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Publicar?',
	'PHPSHOP_FILES_LIST' => 'FileManager:: Imagem / Lista Arquivo de',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Nome Arquivo',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Titulo do Arquivo',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Tipo de Arquivo',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Imaxe Grande',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Imaxe Pequena',
	'PHPSHOP_FILES_FORM' => 'Subir Ficheiro para',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Arquivo Actual',
	'PHPSHOP_FILES_FORM_FILE' => 'Arquivo',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Imaxe Adicional',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Subiar a ',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'Ruta por Defecto da Imaxe do Producto',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Especifique a direcci�n do Arquivo',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Ruta de Descarga (ex. Para vender Descargas!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Creaci�n autom�tica da Imaxe Pequena?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Arquivo est� publicado?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Titulo do Arquivo (Aquilo que o cliente ve)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'URL Arquivo(opcional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Escriba aqu� calquer texto e seralle amosado � cliente na p�xina individual do producto.<br />ex.: 24h, 48 horas, 3 - 5 dias, Contra reembolso.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'OU escolla unha imaxe para ser mostrada na p�xina individual do producto.<br />A imaxe reside no directorio <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Exemplos para a lista de atributos:</h4>
        <span class="sectionname"><strong>Nome;Extras;</strong>...</span>',
	'PHPSHOP_IMAGE_ACTION' => 'Imaxe Acci�n',
	'PHPSHOP_PARAMETERS_LBL' => 'Par�metros',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Tipo de Producto',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Listar Tipos de Productos',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Engadir Tipo de Productgos',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Tipo Produto',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Nome Tipo Produto',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Descripci�n Tipo de Producto',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Par�metros',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Imformaci�n Tipo de Producto',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Tipo de p�xina para navegar polos productos',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Tipo de p�xina individual para os productos',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Tipo de par�metros do producto',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Informaci�n sobre o atributo',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Tipo de Producto non atopado',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Nome do Par�metro',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Ese nome ser� para a columna da t�boa. Debe ser �nico e sen espazos.<br/>Por exemplo: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Etiqueta do Par�metro',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Enteiro',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Texto',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Texto Curto',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Flotante',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Caracter',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Data E Hora',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Data',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Hora',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Salto de Li�a',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'M�ltiples Valores',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Posibles Valores',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Mostrar Posibles Valores como Seleci�n M�ltiple?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Se a opci�n \'Posibles Valores\' est� marcada, o par�metro s� pode ter eses valores. Exemplo de valores posibles: </strong><br/><span class="sectionname">Aceiro;Madeira;Pl�stico;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Valor por Defecto',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Para o par�metro \'Valor por Defecto\' emprege este formato:<ul><li>Data: AAAA-MM-DD</li><li>Hora: HH:MM:SS</li><li>Data e Hora: AAAA-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Artigo',
	'PHPSHOP_PRODUCT_CLONE' => 'Duplicar Produto',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Ocultar Productos sen Stock',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Productos Destacados e en Oferta',
	'PHPSHOP_FEATURED' => 'Destacados',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Destacados e en Oferta ',
	'PHPSHOP_SHOW_DISCOUNTED' => 'Productos en Oferta',
	'PHPSHOP_FILTER' => 'Filtro',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Prezo en Oferta',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Vostede aqu� pode ignorar o desconto configurado e escribir un desconto especial para o prezo deste producto. <br/>
A tenda crear� un novo rexistro de desconto, o desconto no prezo. ',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Inicio Cantidade',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Fin Cantidade',
	'VM_PRODUCTS_MOVE_LBL' => 'Mover productos dunha categoria para outra',
	'VM_PRODUCTS_MOVE_LIST' => 'Vostede quere mover os produtos %s',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Mover para a seguinte categoria',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Seleccione unha categor�a de producto para reordenar productos na categor�a',
	'VM_REVIEW_FORM_LBL' => 'Engadir Comentario',
	'PHPSHOP_REVIEW_EDIT' => 'Engadir/Editar Comentario',
	'SEL_CATEGORY' => 'Escolla a categoria',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Cantidade M�nima de compra',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Cantidade M�xima de compra',
	'VM_DISPLAY_TABLE_HEADER' => 'Mostar Encabezamento da T�boa',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Enlace a Subcategor�a de Productos dende a Lista',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Incluir un tipo de Producto como subcategor�a',
	'VM_DISPLAY_USE_LIST_BOX' => 'Usar List box para Subcategor�a de Productos',
	'VM_DISPLAY_LIST_STYLE' => 'Estilo Lista',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Usar configuraciones por defecto:',
	'VM_DISPLAY_LIST_TYPE' => 'Lista:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Cantidade:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Valores para a Drop Down Box',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Amosar Descripci�n da Subcategor�a',
	'VM_DISPLAY_DESC_WIDTH' => 'Ancho Descripci�n de Subcategor�a',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Ancho Atributo de Subcategor�a',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Sufixo para a Clase da Subcategor�a',
	'VM_INCLUDED_PRODUCT_ID' => 'ID do Producto a Incluir',
	'VM_EXTRA_PRODUCT_ID' => 'IDs Extra',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Usar Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Amosar Opci�ns',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Sobreescribrir os valores para amosar da Subcategor�a de Productos e usar valores por Defecto ',
	'PHPSHOP_DISPLAY_NORMAL' => 'Caixa con Cantidade Est�ndar',
	'PHPSHOP_DISPLAY_HIDE' => 'Esconder Caixa de Cantidade',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Usar Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Usar Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'Un Bot�n Add to Cart',
	'PHPSHOP_DISPLAY_MANY' => 'Un Bot�n Add to Cart para cada Subcategor�a',
	'PHPSHOP_DISPLAY_START' => 'Valor Inicial',
	'PHPSHOP_DISPLAY_END' => 'Valor Final',
	'PHPSHOP_DISPLAY_STEP' => 'Valor de Paso',
	'PRODUCT_WAITING_LIST_TAB' => 'Lista de espera',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Usuarios que agardan ser notificados cando o producto volva a estar en Stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notificar a esos usuarios agora (cando vostede xa actualizara o n�mero de productos en Stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'Notificado',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Escollar Imaxe',
	'VM_PRODUCT_RELATED_SEARCH' => 'Buscar Productos ou Categor�as aqu�: ',
	'VM_FILES_LIST_ROLE' => 'Papel',
	'VM_FILES_LIST_UP' => 'Subir',
	'VM_FILES_LIST_GO_UP' => 'Ir o Tope da P�xina',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Mostrar x productos por li�a',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'P�xina para navegar pola Categor�a',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Opci�ns � Duplicar Producto',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Duplicar tam�n os produtos das subcategor�as',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Nome/Data',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Seleccione un ou m�is Productos ',
	'VM_PRODUCT_SEARCHING' => 'Buscando...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Exemplos para o formato da lista de atributos:</h4>T�tulo = Cor, Propiedade = Vermello; Click en  Nova Propiedade para engadir unha nova cor: Verde; Despois, click en Novo Atributo para engadir un novo atributo, e as� continuamente.<h4>Axustes do prezo do producto usando atributos:</h4>Prezo = +10 para engadir este valor do prezo configurado.<br />  Prezo = -10 para restar este valor do prezo configurado.<br />  Prezo = 10 para alterar o prezo configurado para este valor.',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Imaxe do Producto (grande e pequena)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Arquivo descargable (para ser vendido!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Redimensionar arquivo de Imaxe Completa?'
); $VM_LANG->initModule( 'product', $langvars );
?>
