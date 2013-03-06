<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator Miguel Pan Fidalgo
* @mail panfidalgo@gmail.com
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
	'PHPSHOP_BROWSE_LBL' => 'Buscar',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalles do Produto',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editar este Produto',
	'PHPSHOP_DOWNLOADS_START' => 'Iniciar Descarga',
	'PHPSHOP_DOWNLOADS_INFO' => 'Por favor escriba o Download-ID que recibiu no seu e-mail o clicar en \'Iniciar Descarga\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Por favor introduza o seu e-mail abaixo para ser avisado cando o producto volva a estar en stock. O seu e-mail non será compartido, alquilado ou vendido e non se lle dará outro uso que non sexa comunicarlle cando o producto no que estea interesado volva a estar dispoñible.<br /><br />Grazas!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Grazas por agardar! <br />Será avisado tan pronto esté dispoñible.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Avisame!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Buscar en todalas categorías',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Buscar na información de todolos productos',
	'PHPSHOP_SEARCH_PRODNAME' => 'Solo Nome do producto ',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Solo Proveedor/Vendedor',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Solo Descripción do producto ',
	'PHPSHOP_SEARCH_AND' => 'e',
	'PHPSHOP_SEARCH_NOT' => 'non',
	'PHPSHOP_SEARCH_TEXT1' => 'A primeira lista permite seleccionar unha categoría a fin de limitar a búsqueda. 
        A segunda lista permite limitar os detalles do producto (ex. Nome). 
        Unha vez estas seleccionadas (ou deixadas por defecto), introduza a palabra que desexa buscar.',
	'PHPSHOP_SEARCH_TEXT2' => 'Pode refinar a súa busca engadindo unha segunda palabra clave e seleccionando o operador \'E\' ou \'NON\'. Se escolle \'E\' significa que ambas palabras deben estar presentes para o producto que se vai mostrar.Seleccionar \'NON\' significa que no producto amosado a primera palabra clave está presente e a segunda non.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continuar Compra',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Imáxes Dispoñibles para ',
	'PHPSHOP_BACK_TO_DETAILS' => 'Voltar aos detalles do produto',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Imaxen non encontrada!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Atopu os productos conforme os parámetros técnicos?<BR>Pode empregar calquer formulario xa preparado: ',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lamentámolo. Non Existe Categoría para Buscar.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lamentámolo. Non existe un producto con este nome.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'É Como',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'É Diferente a ',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Buscar en todo o texto ',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Todos Seleccionados',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Calquera Seleccionado',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Limpar Formulario',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Lamentámolo, pero o producto que busca non foi atopado!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Cantidade {unit}s no embalaxe: ',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Cantidade {unit}s por caixa:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Prezo por Unidade',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Algunha pregunta sobre este producto',
	'VM_RECOMMEND_FORM_LBL' => 'Recomende este producto a un amigo',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Carro Valeiro',
	'VM_RETURN_TO_PRODUCT' => 'Voltar ao Produto',
	'EMPTY_CATEGORY' => 'Esta categoria está actualmente sen productos.',
	'ENQUIRY' => 'Dúbidas',
	'NAME_PROMPT' => 'Escriba o seu Nome',
	'EMAIL_PROMPT' => 'E-mail',
	'MESSAGE_PROMPT' => 'Escriba a súa Mensaxe',
	'SEND_BUTTON' => 'Enviar',
	'THANK_MESSAGE' => 'Gracias pola súa pregunta. Poñerémonos en contacto con vostede tan proto como nos sexa posible.',
	'PROMPT_CLOSE' => 'Pechar',
	'VM_RECOVER_CART_REPLACE' => 'Sustituir o Carro co Carro Gardado',
	'VM_RECOVER_CART_MERGE' => 'Engadir o Carro Gardado ao Carro Actual',
	'VM_RECOVER_CART_DELETE' => 'Eliminar Carro Gardado ',
	'VM_EMPTY_YOUR_CART_TIP' => 'Limpar o carro de tódolo seu contido',
	'VM_SAVED_CART_TITLE' => 'Gardar Carro',
	'VM_SAVED_CART_RETURN' => 'Voltar'
); $VM_LANG->initModule( 'shop', $langvars );
?>
