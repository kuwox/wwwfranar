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
	'PHPSHOP_BROWSE_LBL' => 'Escoger producto',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalle del producto',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editar este producto',
	'PHPSHOP_DOWNLOADS_START' => 'Empezar a descargar',
	'PHPSHOP_DOWNLOADS_INFO' => 'Por favor, introduzca la identificación de descarga que ha obtenido en el e-mail y haga click en \'Empezar a descargar\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Por favor, introduzca su correo electrónico debajo para avisarle cuando el producto tenga stock.
                                                                        No vamos a compartir, alquilar, vender ni utilizar este correo para ningun propósito excepto
                                                                        para avisarle cuando el producto vuelva a estar en stock.<br /><br />Gracias!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Gracias por esperar! ! <br />En cuanto tengamos el producto en nuestro stock, se lo avisaremos.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Avísame!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Buscar en todas las categorías',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Buscar en todas las características del producto',
	'PHPSHOP_SEARCH_PRODNAME' => 'Buscar en el nombre del producto',
	'PHPSHOP_SEARCH_MANU_VENDOR' => '--',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Sólo en la descripción del producto',
	'PHPSHOP_SEARCH_AND' => 'y',
	'PHPSHOP_SEARCH_NOT' => 'no',
	'PHPSHOP_SEARCH_TEXT1' => 'la primera lista desplegable le permite a usted seleccionar una categoría para limitar su búsquedad.
        La segunda lista desplegable le permite a usted limitar su búsqueda para una sección particular de información del producto (e.j. Nombre).
        una vez que usted ha seleccionado estos (o dejan el predeterminado TODO), insertar la palabra clave a buscar. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Puede refinar más su búsqueda por agregando la segunda palabra clave y seleccionando un operador Y o NO.
        Seleccionando Y significa que ambas palabras deben estar presentes para el producto.
        Selecccionando NO significa el producto será mostrado sólo cuando la primera palabra clave está presente
        y la segunda no. ',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Seguir comprando',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Imágenes disponibles para',
	'PHPSHOP_BACK_TO_DETAILS' => 'Volver a detalles del producto',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'No se ha encontrado la imagen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Va a encontrar productos de acuerdo con parametros tecnicos?<BR>Puede usar cualquier formulario preparado:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lo siento. No hay categoría a buscar.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lo siento. No hay un tipo de producto publicado para esta categoría .',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Es como',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'No es como',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Busqueda de texto completo',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Todos los seleccionados',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Cualquier seleccionado',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Borrar formulario',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Disculpe, el producto solicitado no fue encontrado!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Numero {unit}s en paquete:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Numero {unit}s en caja:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Precio por unidad',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Realizar una consulta sobre este producto',
	'VM_RECOMMEND_FORM_LBL' => 'Recomendar este producto a un amigo',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Vaciar cesta',
	'VM_RETURN_TO_PRODUCT' => 'Regresar a producto',
	'EMPTY_CATEGORY' => 'Esta categoría se encuentra vacía.',
	'ENQUIRY' => 'Consulta',
	'NAME_PROMPT' => 'Ingrese su nombre',
	'EMAIL_PROMPT' => 'Correo electrónico',
	'MESSAGE_PROMPT' => 'Su mensaje',
	'SEND_BUTTON' => 'Enviar',
	'THANK_MESSAGE' => 'Gracias por su consulta. Lo contactaremos lo antes posible.',
	'PROMPT_CLOSE' => 'Cerrar',
	'VM_RECOVER_CART_REPLACE' => 'Reemplazar cesta con cesta guardada',
	'VM_RECOVER_CART_MERGE' => 'Agregar cesta guardada a cesta actual',
	'VM_RECOVER_CART_DELETE' => 'Eliminar cesta guardada',
	'VM_EMPTY_YOUR_CART_TIP' => 'Limpiar cesta de su contenido',
	'VM_SAVED_CART_TITLE' => 'Cesta guardada',
	'VM_SAVED_CART_RETURN' => 'Regresar'
); $VM_LANG->initModule( 'shop', $langvars );
?>
