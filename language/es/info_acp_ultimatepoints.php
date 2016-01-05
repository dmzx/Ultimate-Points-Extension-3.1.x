<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(

	'ACP_POINTS'						=> 'Puntos',
	'ACP_POINTS_BANK_EXPLAIN'			=> 'Aquí puede alterar la configuración del banco',
	'ACP_POINTS_BANK_TITLE'				=> 'Configuración del Banco',
	'ACP_POINTS_DEACTIVATED'			=> '¡Los Puntos están actualmente desactivados!',
	'ACP_POINTS_FORUM_EXPLAIN'			=> 'Aquí se pueden establecer los puntos del foro por defecto para todos los foros a la vez. Por lo tanto ideal para la primera configuración.<br />Por favor, tenga en cuenta que estos valores son para <strong>todos</strong> los foros. Así que si usted cambia manualmente la configuración de cualquiera de los puntos de foro con los valores individuales, ¡es necesario rehacer esto después de utilizar esta opción!',
	'ACP_POINTS_FORUM_TITLE'			=> 'Configuración de los puntos para los foros',
	'ACP_POINTS_INDEX_EXPLAIN'			=> 'Aquí puede modificar la configuración general de los Puntos',
	'ACP_POINTS_INDEX_TITLE'			=> 'Configuración de los puntos',
	'ACP_POINTS_LOTTERY_EXPLAIN'		=> 'Aquí puede modificar la configuración del módulo de la Lotería',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Configuración de la Lotería',
	'ACP_POINTS_ROBBERY_EXPLAIN'		=> 'Aquí puede modificar la configuración del módulo de Robo',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Configuración del robo',
	'ACP_POINTS_VALUES_HINT'			=> '<strong>Sugerencia: </strong>Siempre introducir los valores sin separador de miles<br />y los decimales con un punto, i.e. 1000.50',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Guía del usuario',
	'ACP_POINTS_USERGUIDE_EXPLAIN'		=> 'Aquí puede obtener ayuda sobre cómo utilizar los Puntos.<br />Así que si usted tiene preguntas, por favor, siempre mire primero aquí, ¡antes de hacer preguntas en los sitios de soporte!',
	'ACP_USER_POINTS_TITLE'				=> 'Configuración de los Puntos',

	'BANK_COST'							=> 'El coste por el mantenimiento de una cuenta bancaria',
	'BANK_COST_EXPLAIN'					=> 'Aquí puede establecer el precio, que los usuarios tienen que pagar por su cuenta bancaria en cada periodo(establezca 0 para deshabilitar esta característica)',
	'BANK_ENABLE'						=> 'Habilitar el banco',
	'BANK_ENABLE_EXPLAIN'				=> 'Esto permitirá a los usuarios utilizar el Banco',
	'BANK_FEES'							=> 'Tasas por retirar',
	'BANK_FEES_ERROR'					=> '¡¡ La tasa por retirar no puede ser superior al 100% !!',
	'BANK_FEES_EXPLAIN'					=> 'La cantidad en porcentaje (%) que los usuarios tendrán que pagar, cuando retiran puntos del banco',
	'BANK_INTEREST'						=> 'Tasa de interés',
	'BANK_INTERESTCUT'					=> 'Deshabilitar interés en',
	'BANK_INTERESTCUTP'					=> '(establezca 0 para deshabilitar esta función)',
	'BANK_INTERESTCUT_EXPLAIN'			=> 'Esta es la cantidad máxima por la que un usuario tendrá la tasa de interés. ¡Si poseen más, el valor establecido es el máximo! Establezca 0 para desactivar esta función.',
	'BANK_INTEREST_ERROR'				=> '¡¡ La tasa de interés no puede ser mayor del 100% !!',
	'BANK_INTEREST_EXPLAIN'				=> 'La cantidad en % de intereses',
	'BANK_MINDEPOSIT'					=> 'Mín. a depositar',
	'BANK_MINDEPOSIT_EXPLAIN'			=> 'La cantidad mínima que los usuarios pueden depositar en el banco',
	'BANK_MINWITHDRAW'					=> 'Mín. a retirar',
	'BANK_MINWITHDRAW_EXPLAIN'			=> 'La cantidad mínima que los usuarios pueden retirar del banco',
	'BANK_NAME'							=> 'Nombre del banco',
	'BANK_NAME_EXPLAIN'					=> 'Introduzca un nombre para el banco, ej. Banco del Foro',
	'BANK_OPTIONS'						=> 'Configuración del Banco',
	'BANK_PAY'							=> 'Tiempo de pago de los intereses',
	'BANK_PAY_EXPLAIN'					=> 'El período de tiempo entre los pagos bancarios',
	'BANK_TIME'							=> 'días',
	'BANK_VIEW'							=> 'Habilitar el banco',
	'BANK_VIEW_EXPLAIN'					=> 'Esto habilita el módulo del banco',

	'FORUM_OPTIONS'						=> 'Puntos para los foros',
	'FORUM_PEREDIT'						=> 'Puntos por editar',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Introduzca aquí cuantos puntos van a recibir los usuarios por <strong>editar</strong> un mensaje. Tenga en cuenta, que también recibirán puntos adicionales, que se definen en la configuración avanzada de los puntos.<br />Se establece en 0 para desactivar los puntos de recepción para este foro.',
	'FORUM_PERPOST'						=> 'Puntos por mensaje',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Introduzca aquí cuantos puntos van a recibir los usuarios por <strong>editar</strong> un mensaje. Tenga en cuenta, que también recibirán puntos adicionales, que se definen en la configuración avanzada de los puntos.<br />Se establece en 0 para desactivar los puntos de recepción para este foro.',
	'FORUM_PERTOPIC'					=> 'Puntos por tema',
	'FORUM_PERTOPIC_EXPLAIN'			=> 'Introduzca aquí cuantos puntos van a recibir los usuarios por publicar un <strong>tema nuevo</strong>. Tenga en cuenta, que también recibirán puntos adicionales, que se definen en la configuración avanzada de los puntos.<br />Se establece en 0 para desactivar los puntos de recepción para este foro. ¡De esta manera también los ajustes avanzados de los puntos están desactivados para este foro!',
	'FORUM_COSTS'						=> 'Foro puede pagar los costos',
	'FORUM_COSTS_EXPLAIN'				=> '¡Marque este campo, si el foro debe ser obligado a pagar los costos de los adjuntos. Los costos por la extensión se definen en  ACP -> Mensajes -> Administrar extensiónes!',
	'FORUM_COST_TOPIC'					=> 'Puntos a pagar por un nuevo tema',
	'FORUM_COST_TOPIC_EXPLAIN'			=> 'Entra aqui, cuánto puntos un usuario tiene que pagar para iniciar un nuevo tema en este foro',
	'FORUM_COST_POST'					=> 'Puntos a pagar por un nuevo post',
	'FORUM_COST_POST_EXPLAIN'			=> 'Entra aqui, la cantidad de puntos que un usuario tiene que pagar para hacer un nuevo post en este foro',
	'FORUM_POINT_SETTINGS'				=> 'Configuración de Ultimate Points',
	'FORUM_POINT_SETTINGS_EXPLAIN'		=> 'Aquí usted puede configurar cuánto ganarán los usuarios por publicar temas o mensajes nuevos, o por editar un mensaje. Estos ajustes son básicos para cada foro. De esta manera usted puede hacer que sea muy detallado, dónde los usuarios obtendrán puntos y dónde no.',
	'FORUM_POINT_SETTINGS_UPDATED'		=> 'Puntos globales de los foros actualizados ',
	'FORUM_POINT_UPDATE'				=> 'Actualizar puntos globales de los foros y costos de adjuntos cambiados',
	'FORUM_POINT_UPDATE_CONFIRM'		=> '<br />¿Está seguro de que desea actualizar todos los puntos del foro con los valores dados y cambia los costos de los adjuntos?<br />¡Este paso sobrescribirá todos los ajustes actuales y no es reversible!',

	'LOG_GROUP_TRANSFER_ADD'			=> 'Puntos transferidos a un grupo',
	'LOG_GROUP_TRANSFER_SET'			=> 'Puntos establecidos a un nuevo valor para un grupo ',
	'LOG_MOD_BANK'						=> 'Editado %1s puntos del banco',
	'LOG_MOD_POINTS'					=> 'Editado %1s puntos',
	'LOG_MOD_POINTS_BANK'				=> 'Editados ajustes del banco',
	'LOG_MOD_POINTS_BANK_PAYS'			=> '<strong>Pagos de intereses del banco</strong><br />» %1$s',
	'LOG_MOD_POINTS_FORUM'				=> 'Editados ajustes globales de los puntos para los foros',
	'LOG_MOD_POINTS_FORUM_SWITCH'		=> 'Editado interruptores de los puntos para los foros',
	'LOG_MOD_POINTS_FORUM_VALUES'		=> 'Editado valor de los puntos para los foros',
	'LOG_MOD_POINTS_LOTTERY'			=> 'Editado ajustes de la lotería',
	'LOG_MOD_POINTS_RANDOM'				=> '<strong>Punto aleatorios ganados por</strong><br />» %1$s',
	'LOG_MOD_POINTS_ROBBERY'			=> 'Editado ajustes del robo',
	'LOG_MOD_POINTS_SETTINGS'			=> 'Editado ajustes de los puntos',
	'LOG_RESYNC_LOTTERY_HISTORY'		=> '<strong>El historial de la lotería ha sido reiniciado con éxito</strong>',
	'LOG_RESYNC_POINTSCOUNTS'			=> '<strong>Todos los puntos de los usuarios se han reiniciado con éxito</strong>',
	'LOG_RESYNC_POINTSLOGSCOUNTS'		=> '<strong>Todos los registros de los usuarios se han reiniciado con éxito</strong>',

	'LOTTERY_BASE_AMOUNT'				=> 'Bote inicial',
	'LOTTERY_BASE_AMOUNT_EXPLAIN'		=> 'El Bote comenzará inicialmente con esta cantidad. Si se cambia durante un período de sorteo, las sumas adicionales serán añadidos para el próximo sorteo. El Bote no disminuirá si lo baja.',
	'LOTTERY_CHANCE'					=> 'Las posibilidades de ganar el Bote',
	'LOTTERY_CHANCE_ERROR'				=> '¡¡ Las posibilidades de ganar, no pueden ser superiores al 100% !!',
	'LOTTERY_CHANCE_EXPLAIN'			=> 'Aquí se puede establecer el porcentaje de posibilidades de ganar el Bote (cuanto más alto es el valor, mayor es la oportunidad de ganar)',
	'LOTTERY_DISPLAY_STATS'				=> 'Mostrar la fecha del próximo sorteo en el índice del foro',
	'LOTTERY_DISPLAY_STATS_EXPLAIN'		=> 'Esto mostrará el periodo del próximo sorteo de lotería en el índice del foro.',
	'LOTTERY_DRAW_PERIOD'				=> 'Periodo entre sorteos',
	'LOTTERY_DRAW_PERIOD_EXPLAIN'		=> 'Cantidad de tiempo en horas entre cada sorteo. Cambiar esto afectará el día/tiempo. Pon a 0 para deshabilitar los sorteos, Los boletos/Bote se mantendrá hasta el sorteo.',
	'LOTTERY_DRAW_PERIOD_SHORT'			=> '¡El periodo entre sorteos debe ser mayor de 0!',
	'LOTTERY_ENABLE'					=> 'Habilitar lotería',
	'LOTTERY_ENABLE_EXPLAIN'			=> 'Esto permite a los usuarios usar el módulo de la lotería',
	'LOTTERY_MAX_TICKETS'				=> 'Número máx. de boletos',
	'LOTTERY_MAX_TICKETS_EXPLAIN'		=> 'Establezca el número máximo de boletos que un usuario puede comprar',
	'LOTTERY_MULTI_TICKETS'				=> 'Permitir múltiples boletos',
	'LOTTERY_MULTI_TICKETS_EXPLAIN'		=> 'Establezca "Sí" para permitir a los usuarios comprar más de un boleto',
	'LOTTERY_NAME'						=> 'Nombre de la lotería',
	'LOTTERY_NAME_EXPLAIN'				=> 'Introduzca un nombre para la lotería, ej.Lotería del Foro',
	'LOTTERY_OPTIONS'					=> 'Configuración de la lotería',
	'LOTTERY_PM_ID'						=> 'ID del remitente',
	'LOTTERY_PM_ID_EXPLAIN'				=> 'Ingrese aquí el ID de usuario, que será utilizada como remitente del Mensaje Privado para el afortunado ganador (0 = ID del ganador)',
	'LOTTERY_TICKET_COST'				=> 'Coste del boleto',
	'LOTTERY_VIEW'						=> 'Habilitar puntos para la loteria',
	'LOTTERY_VIEW_EXPLAIN'				=> 'Esto habilita el módulo de la lotería',

	'NO_RECIPIENT'						=> 'Ningún beneficiario definido.',

	'POINTS_ADV_OPTIONS'				=> 'Configuración avanzada de los puntos',
	'POINTS_ADV_OPTIONS_EXPLAIN'		=> 'Establezca aquí los valores, ¡¡son válidos para <strong>todos</strong> los foros y no tienen nada que ver con la configuración de los puntos de los foros!!',
	'POINTS_ATTACHMENT'					=> 'Puntos generales por añadir adjuntos en un mensaje',
	'POINTS_ATTACHMENT_PER_FILE'		=> 'Puntos adicionales por cada archivo adjunto',
	'POINTS_BONUS_CHANCE'				=> 'Probabilidad de puntos de bonus',
	'POINTS_BONUS_CHANCE_EXPLAIN'		=> 'La posibilidad de que un usuario recibe puntos de bonificación para la creacion de un nuevo tema, post o editar. <br /> El azar entre 0 y 100%, puede utilizar decimales. <br /> Se establece en <strong> 0 </ strong> para desactivar Esta característica.',
	'POINTS_BONUS_VALUE'				=> 'Valor puntos de bonus',
	'POINTS_BONUS_VALUE_EXPLAIN'		=> 'Da límites entre los que vamos a elegir una cantidad de bonificación al azar. <br /> Si desea una cantidad fija, ajuste el mínimo y el máximo de la misma.',
	'POINTS_COMMENTS'					=> 'Permitir comentarios',
	'POINTS_COMMENTS_EXPLAIN'			=> 'Permitir a los usuarios dejar comentarios con la transferencia/donación de sus puntos',
	'POINTS_CONFIG_SUCCESS'				=> 'La configuración de los Puntos se actualizó con éxito',
	'POINTS_DISABLEMSG'					=> 'Deshabilitar mensaje',
	'POINTS_DISABLEMSG_EXPLAIN'			=> 'Mensaje a mostrar cuando los Puntos están desactivados',
	'POINTS_ENABLE'						=> 'Habilitar puntos',
	'POINTS_ENABLE_EXPLAIN'				=> 'Permite a los usuarios usar los Puntos',
	'POINTS_GROUP_TRANSFER'				=> 'Transferir a grupos',
	'POINTS_GROUP_TRANSFER_ADD'			=> 'Añadir',
	'POINTS_GROUP_TRANSFER_EXPLAIN'		=> 'Aquí usted puede agregar o restar valores para un determinado grupo. Usted también puede enviar un Mensaje Privado a cada miembro del grupo. Si usted desea enviar felicitaciones de Navidad, es decir, con un pequeño regalo (puede usar emoticonos y BBCodes). Si usted no desea enviar un mensaje personal junto a su transferencia, deje los campos del tema y comentario vacíos.',
	'POINTS_GROUP_TRANSFER_FUNCTION'	=> 'Función',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'	=> 'Comentario del Mensaje Privado',
	'POINTS_GROUP_TRANSFER_PM_ERROR'	=> 'Es necesario introducir el tema <strong>y</strong> el comentario con el fin de enviar un mensaje personal con la transferencia de grupo!',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS'	=> 'La transferencia al grupo se ha realizado correctamente y<br /> los miembros del grupo han recibido un mensaje personal.',
	'POINTS_GROUP_TRANSFER_PM_TITLE'	=> 'Asunto del Mensaje Privado',
	'POINTS_GROUP_TRANSFER_SEL_ERROR'	=> '¡No se puede hacer una transferencia de grupo a los grupos de invitados y bots!',
	'POINTS_GROUP_TRANSFER_SET'			=> 'Establecer',
	'POINTS_GROUP_TRANSFER_SUBSTRACT'	=> 'Sustraer',
	'POINTS_GROUP_TRANSFER_SUCCESS'		=> 'La transferencia al grupo se realizó correctamente.',
	'POINTS_GROUP_TRANSFER_USER'		=> 'Grupo de usuarios',
	'POINTS_GROUP_TRANSFER_VALUE'		=> 'Valor',
	'POINTS_IMAGES_MEMBERLIST'			=> 'Mostrar una imagen después de los puntos en el perfil',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN'	=> 'Mostrar una imagen en el perfil de los usuarios en lugar del nombre de los puntos',
	'POINTS_IMAGES_TOPIC'				=> 'Mostrar una imagen despues de los puntos',
	'POINTS_IMAGES_TOPIC_EXPLAIN'		=> 'Mostrar una imagen en los temas en lugar del nombre de los puntos',
	'POINTS_LOGS'						=> 'Habilitar los registros de los puntos',
	'POINTS_LOGS_EXPLAIN'				=> 'Permitir a los usuarios ver los registros de las transferencias',
	'POINTS_MINIMUM'					=> '&nbsp;Minimo', // &nbsp; is for alignment of input boxes for Points Bonus Value
	'POINTS_MAXIMUM'					=> 'Maximo',
	'POINTS_NAME'						=> 'Puntos',
	'POINTS_NAME_EXPLAIN'				=> 'El nombre que desea dar a los puntos del foro',
	'POINTS_POLL'						=> 'Puntos por nueva encuesta',
	'POINTS_POLL_PER_OPTION'			=> 'Puntos por opción en nueva encuesta',
	'POINTS_POST_PER_CHARACTER'			=> 'Puntos por carácter en nuevos mensajes',
	'POINTS_POST_PER_WORD'				=> 'Puntos por palabra en nuevos mensajes',
	'POINTS_SHOW_PER_PAGE'				=> 'Número de entradas por página',
	'POINTS_SHOW_PER_PAGE_ERROR'		=> 'El número por página que necesita para ver las últimas 5 entradas.',
	'POINTS_SHOW_PER_PAGE_EXPLAIN'		=> 'Ingrese aquí el número de entradas por página, que deben ser mostradas en los registros y la historia de la lotería (mín. 5)',
	'POINTS_SMILIES'					=> 'Emoticonos',
	'POINTS_STATS'						=> 'Mostrar las estadísticas de los puntos en el índice',
	'POINTS_STATS_EXPLAIN'				=> 'Mostrar las estadísticas de los puntos sobre el índice del foro',
	'POINTS_TOPIC_PER_CHARACTER'		=> 'Puntos por carácter en nuevos temas',
	'POINTS_TOPIC_PER_WORD'				=> 'Puntos por palabra en nuevos temas',
	'POINTS_TRANSFER'					=> 'Permitir transferencias',
	'POINTS_TRANSFER_EXPLAIN'			=> 'Permitir a los usuarios transferir/donar puntos a los demás',
	'POINTS_TRANSFER_FEE'				=> 'Tasa de transferencia',
	'POINTS_TRANSFER_FEE_EXPLAIN'		=> 'Porcentaje que se ve retenida por transferencia',
	'POINTS_TRANSFER_FEE_ERROR'			=> 'Tasa de transferencia no puede ser un 100% o más.',
	'POINTS_TRANSFER_PM'				=> 'Notificar al usuario por Mensaje Privado de una transferencia',
	'POINTS_TRANSFER_PM_EXPLAIN'		=> 'Permitir a los usuarios recibir un Mensaje Privado, cuando alguien envíe puntos',
	'POINTS_WARN'						=> 'Cantidad de puntos que se restan por una advertencia al usuario (establezca 0 para deshabilitar esta característica)',

	'REG_POINTS_BONUS'					=> 'Bonus de puntos al registrarse',

	'RESYNC_ATTENTION'					=> '¡¡Las siguientes acciones no se pueden deshacer!!',
	'RESYNC_DESC'						=> 'Reiniciar los registros y los puntos de los usuarios',
	'RESYNC_LOTTERY_HISTORY'			=> 'Reiniciar el historial de la lotería',
	'RESYNC_LOTTERY_HISTORY_CONFIRM'	=> '¿Está seguro de que quiere reiniciar el historial de la lotería?<br />Nota: ¡Esta acción no se puede deshacer!',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN'	=> 'Esto restablecerá la historia de la Lotería por completo',
	'RESYNC_POINTS'						=> 'Reiniciar los puntos de los usuarios',
	'RESYNC_POINTSLOGS'					=> 'Reiniciar los registros de los puntos',
	'RESYNC_POINTSLOGS_CONFIRM'			=> '¿Está seguro de que quiere reiniciar todos los registros de los usuarios?<br />Nota: ¡Esta acción no se puede deshacer!',
	'RESYNC_POINTSLOGS_EXPLAIN'			=> 'Borrar todos los registros de los usuarios',
	'RESYNC_POINTS_CONFIRM'				=> '¿Está seguro de que quiere reiniciar todos los puntos de los usuarios?<br />Nota: ¡Esto no se puede deshacer!',
	'RESYNC_POINTS_EXPLAIN'				=> 'Reiniciar todos los puntos de las cuentas de los usuarios a 0',

	'ROBBERY_CHANCE'					=> 'Oportunidad de hacer un robo con éxito',
	'ROBBERY_CHANCE_ERROR'				=> '¡¡ La posibilidad de éxito de un robo no puede ser superior al 100% !!',
	'ROBBERY_CHANCE_EXPLAIN'			=> 'Aquí se puede establecer el porcentaje de éxito al hacer un robo (cuanto mayor es el valor, mayor es la oportunidad de tener éxito)',
	'ROBBERY_CHANCE_MINIMUM'			=> '¡¡ La posibilidad de éxito de un robo no puede ser inferior al 0% !!',
	'ROBBERY_ENABLE'					=> 'Hablitar el robo',
	'ROBBERY_ENABLE_EXPLAIN'			=> 'Esto permitirá a los usuarios utilizar el módulo de robo',
	'ROBBERY_LOOSE'						=> 'Penalización por robo fallado',
	'ROBBERY_LOOSE_ERROR'				=> '¡¡ La penalización por el robo fallado no puede ser superior al 100% !!',
	'ROBBERY_LOOSE_EXPLAIN'				=> 'Si un usuario falla el robo, el usuario que trató de robar a otra persona perderá x% del valor deseado en el robo',
	'ROBBERY_LOOSE_MINIMUM'				=> '¡¡La penalización por robo fallado no puede ser menor del 0%. Usted realmente debe dar la penalización!!',
	'ROBBERY_MAX_ROB'					=> 'Porcentaje máximo del robo',
	'ROBBERY_MAX_ROB_ERROR'				=> '¡¡ No puede establecer un valor mayor del 100% !!',
	'ROBBERY_MAX_ROB_EXPLAIN'			=> 'Este es el valor en porcentaje de la cantidad de dinero del usuario que puede robar cada vez',
	'ROBBERY_MAX_ROB_MINIMUM'			=> '¡El valor máximo para el robo debe ser superior a 0%. De lo contrario, esta opción no tiene sentido!',
	'ROBBERY_NOTIFY'					=> 'Enviar una notificación al usuario robado',
	'ROBBERY_NOTIFY_EXPLAIN'			=> 'Esto activará la opción de enviar una notificación a los usuarios atacados',
	'ROBBERY_OPTIONS'					=> 'Configuración del robo',

	'TOP_POINTS'						=> 'Número a mostrar de usuarios con más puntos',
	'TOP_POINTS_EXPLAIN'				=> 'Aquí se puede establecer el valor a mostrar de usuarios con más puntos. Trabaja en diferentes vistas.',

	'UPLIST_ENABLE'						=> 'Activar lista Ultimate Points',
	'UPLIST_ENABLE_EXPLAIN'				=> 'Permite a los usuarios usar lista Ultimate Points',

	'USER_POINTS'						=> 'Puntos de usuario',
	'USER_POINTS_EXPLAIN'				=> 'Cantidad de puntos que el usuario posee',
	//Permissions
	'ACL_CAT_POINTS'		=> 'Puede usar los Puntos',
	'ACL_U_USE_POINTS'		=> 'Puede usar Ultimate Points',
	'ACL_U_USE_ROBBERY'		=> 'Puede usar el módulo de robo',
	'ACL_U_USE_BANK'		=> 'Puede usar módulo del banco',
	'ACL_U_USE_LOGS'		=> 'Puede ver el módulo de registros',
	'ACL_U_USE_LOTTERY'		=> 'Puede usar el módulo de la lotería',
	'ACL_U_USE_TRANSFER'	=> 'Puede usar el módulo de transferencia',
	'ACL_F_PAY_ATTACHMENT'	=> 'Tiene que pagar por la descarga de archivos adjuntos',
	'ACL_F_PAY_TOPIC'		=> 'Tiene que pagar por hacer nuevos temas',
	'ACL_F_PAY_POST'		=> 'Tiene que pagar por hacer nuevos post',
	'ACL_M_CHG_POINTS'		=> 'Puede cambiar los puntos de los usuarios',
	'ACL_M_CHG_BANK'		=> 'Puede cambiar los puntos del banco de los usuarios',
	'ACL_A_POINTS'			=> 'Puede administrar los Puntos',

));
$help = array(
	array(
		0 => '--',
		1 => 'General'
	),
	array(
		0 => 'Editar posts',
		1 => 'Si un usuario edita su mensaje, los puntos por el mensaje son re-calculados y sólo recibe los puntos después de las ediciones. Pero el mensaje sólo se volverá a calcular, si se establecen puntos por publicar en este foro (> 0) en el Panel de Administración(ACP) y el interruptor para su publicación se establece en ON (encendido).'
	),
	array(
		0 => 'Editar temas',
		1 => 'Si un usuario edita su tema (la primera entrada en un tema), sólo recibirá los puntos por la publicación de un nuevo tema. Así que, de hecho, el tema será completamente re-calculado.
Pero el tema sólo se volverá a calcular, si establece los puntos para nuevos temas de este foro (> 0) en el Panel de Administración(ACP) y el interruptor para nuevos temas se establece en ON (encendido).'
	),
	array(
		0 => 'Editar adjuntos',
		1 => 'Si un usuario añade un archivo adjunto o se elimina un archivo adjunto, sólo los puntos para los archivos adjuntos se calculan finalmente con los mensajes.
Si se eliminan todos los archivos adjuntos, los puntos generales para adjuntos se restarán también. ¡Los adjuntos se calculan siempre y no tienen nada que ver con temas y mensajes nuevos!'
	),
	array(
		0 => 'Editar encuestas',
		1 => 'Si un usuario edita su encuesta, la encuesta será completamente re-calculada y finalmente recibe los puntos de las partes que quedan. Si elimina la encuesta, todos los puntos de encuesta se restan y el usuario recibirá los puntos ya que es un tema nuevo.
Pero el tema sólo se volverá a calcular, si establece los puntos para los temas en la configuración avanzada puntos (> 0) en el Panel de Administración(ACP) y el interruptor para nuevos temas está activado. ¡Esto se debe al hecho de que las encuestas son siempre nuevos temas!'
	),
	array(
		0 => 'Borrar mensajes',
		1 => 'Si un usuario elimina un mensaje, los puntos obtenidos se restan de su cuenta.
Si un moderador borra un mensaje, los puntos del usuario permanecen en su cuenta. También si usted tiene la purga automática activada, los puntos del usuario permanecen.'
	),
	array(
		0 => 'bbCodes',
		1 => 'Todos los carácteres dentro de un bbcode serán contados. El BBCode en sí mismo no se contará.'
	),
	array(
		0 => 'Etiquetas code',
		1 => '¡Todo dentro de los bloques de código ( [code] [/code] ) no se contarán!'
	),
	array(
		0 => 'Emoticonos',
		1 => 'Los emoticonos no se cuentan. Pero tenga en cuenta, que entre dos smilies tiene espacios en blanco, ¡que se cuentan como un carácter!'
	),
	array(
		0 => 'Carácteres y carácteres especiales',
		1 => 'Todos los carácteres se contarán, si ha habilitado el recuento de carácteres. ¡Los carácteres son todas las letras, números, carácteres especiales e incluso espacios en blanco!'
	),
	array(
		0 => 'Citas',
		1 => '¡Todo entre los BBCodes cita ([quote] / [/quote]) no será contado! Sólo el mensaje en sí y el texto fuera de la cita se cuenta.'
	),
	array(
		0 => '¡Nota importante!',
		1 => 'Sólo el texto dentro de BBCodes será contado, pero no el BBCode. ¡¡El código no se lee de la base de datos!! Así que el inicio [xxx] y el final [/xxx] son los códigos importantes. Así que si no se pone fin a un BBCode, sólo se contará el texto hasta la etiqueta de apertura.
<br /><br />
Si un usuario edita un mensaje, porque no consiguió puntos anteriores (es decir, antes de instalar el mod o de estar inactivo por un tiempo), el usuario no obtiene puntos por su edición!
<br /><br />
Si un usuario edita un mensaje o tema, donde no consiguió puntos anteriores en la parte de puntos avanzados, ¡este mensaje o tema no se volverá a calcular!'
	),
	array(
		0 => '--',
		1 => 'Configuración de los puntos'
	),
	array(
		0 => 'General',
		1 => 'Aquí puede introducir un nombre diferente para los puntos, activar/desactivar el sistema de puntos e introducir un mensaje de desactivación.
Además se puede activar o desactivar las diferentes partes del sistema de puntos y algunas cosas más, que debe ser auto explicativa.'
	),
	array(
		0 => 'Transferencia a grupo',
		1 => 'Con esta opción en los ajustes principales de los puntos tienes la posibilidad de transferir/quitar una determinada cantidad de puntos a un grupo, o poner a todos el mismo valor. Si usted rellena el asunto y el campo de comentarios, puede enviar un mensaje personal a todos los miembros del grupo. Usted puede utilizar, por supuesto, todos los BBCodes, pero sólo los más comunes en el cuadro.'
	),
	array(
		0 => 'Reiniciar los puntos del usuario',
		1 => 'Con esta opción en los ajustes principales de los puntos, puede restablecer todos los puntos de usuario a cero. ¡Pero cuidado! ¡Esta acción no se puede deshacer!'
	),
	array(
		0 => 'Reiniciar los registros de los usuarios',
		1 => 'Con esta opción en los ajustes principales puntos, puede restablecer todos los registros de los usuarios. ¡Pero cuidado! ¡Esta acción no se puede deshacer!'
	),
	array(
		0 => '--',
		1 => 'Configuración avanzada de los puntos'
	),
	array(
		0 => 'Adjuntos',
		1 => 'Usted puede dar puntos por temas y mensajes con un archivo adjunto. Los puntos principales se dan de una vez y los puntos adicionales se indican para cada archivo adjunto.
¡Usted <strong>NO PUEDE</strong> deshabilitar los archivos adjuntos en cada foro base!'
	),
	array(
		0 => 'Encuestas',
		1 => 'Usted puede dar puntos para una encuesta en sí misma (se trata de dar una vez) y puntos para cada opción de la encuesta.
En las encuestas sólo son posibles en nuevos temas, ¡los puntos sólo se dan, si los ajustes de los puntos (> 0) para temas nuevos en la configuración del foro y ha activado el interruptor para temas nuevos!'
	),
	array(
		0 => 'Nuevos temas',
		1 => 'Adicionalmente a los principales puntos por tema de la configuración del foro, se puede dar puntos por cada palabra y/o puntos para cada carácter.
Si se establece en 0 en el foro o se deshabilitan los puntos para temas nuevos, ¡los puntos adicionales no se cuentan!'
	),
	array(
		0 => 'Nuevos mensajes/respuestas',
		1 => 'Adicionalmente a los principales puntos por cada mensaje de la configuración del foro, se puede dar puntos por cada palabra y/o puntos para cada carácter.
Si se establece en 0 en el foro o se deshabilitan los puntos por mensajes nuevos, ¡los puntos adicionales no se cuentan!'
	),
	array(
		0 => 'Puntos por advertencia',
		1 => 'Si se advierte a un usuario, usted tiene la posibilidad de restar puntos de su cuenta. Si el usuario no tiene puntos suficientes, el valor se restará de todos modos. A continuación, ¡tendrá puntos negativos!'
	),
	array(
		0 => 'Puntos por registrarse',
		1 => 'Aquí se puede establecer, la cantidad de puntos que un usuario recibe en su registro en el foro. De esta manera tendrá un capital base. Estos puntos se dan a la vez. ¡Así que no después de activar su cuenta!'
	),
	array(
		0 => 'Entradas por página',
		1 => 'Aquí se puede establecer cuántas entradas de registros e historial de la Lotería se muestran por página. El valor de mínimo es 5.'
	),
	array(
		0 => 'Número de usuarios con más puntos',
		1 => 'Aquí se puede establecer, la cantidad a mostrar de usuarios con más puntos. Verá este número en varios lugares: en el índice, en el banco y en el resumen.
Establece en 0 para desactivar esta función. No serán visibles más en el índice, y en el banco y en la descripción general, los usuarios verán un mensaje correspondiente.'
	),
	array(
		0 => '--',
		1 => 'Configuración de los puntos para los foros'
	),
	array(
		0 => 'General',
		1 => 'Los puntos para los foros son en su mayoría independientes de la configuración de otros puntos y se contarán adicionalmente. Usted puede establecer los puntos para cada foro. De esta manera usted puede establecer los puntos, que los usuarios recibirán, completamente individual. Va a encontrar estos valores en el Panel de Administración(ACP) - Foros - Administrar Foros - Foro que quieres editar.'
	),
	array(
		0 => 'Los interruptores',
		1 => 'Con los interruptores de los puntos para foros puede activar/desactivar los puntos de foro de nivel global. Si deshabilita los puntos para los temas, los mensajes o editar los puntos no son contados en todos los foros. Además los puntos avanzados no se cuentan, hasta que los active de nuevo.'
	),
	array(
		0 => 'Ajustes globales de los puntos para foros',
		1 => 'Usted puede establecer los puntos de todo el mundo aquí para todos los foros a la vez. ¡Estos ajustes sobrescribirán la configuración previa individual de los puntos! ¡Así que si utiliza esta función, tiene que rehacer todos los foros, donde se definen los diferentes puntos!'
	),
	array(
		0 => 'Nuevo tema',
		1 => 'Aquí se puede establecer, la cantidad de puntos que un usuario recibe un la publicación de un tema nuevo. Se puede configurar de forma global o individual a través del Panel de Administración(ACP) -> Foros.
Si establece 0, también los ajustes avanzados de los puntos (palabras, carácteres) NO cuentan.'
	),
	array(
		0 => 'Nuevo mensaje',
		1 => 'Aquí se puede establecer, la cantidad de puntos que recibe un usuario por la publicación de un mensaje o respuesta nueva. Se puede configurar de forma global o individual a través del Panel de Administración(ACP) -> Foros.
Si establece 0, también los ajustes avanzados de los puntos (palabras, carácteres) NO cuentan.'
	),
	array(
		0 => 'Editar tema/mensaje',
		1 => 'Aquí se puede establecer, si un usuario va a ganar puntos por la edición de un tema o un mensaje.'
	),
array(
		0 => 'Foro capaz de poner costo por los adjuntos',
		1 => 'Aqui se puede establecer si la descarga de adjuntos por los usuarios tendrá costes. Los costes se fijarán en Mensajes - Adjuntos - Manejar extensiones. No se puede si el usuario tendrá los costos por la extensión y si es así, ¡cuánto va a ser!
¡Nota importante! Como sabéis, las imágenes adjuntas se muestran directamente en los mensajes, por lo que los puntos se restarán directamente. Si un usuario no tiene puntos suficientes, no podrá ver la imagen.'
	),
	array(
		0 => '--',
		1 => 'Banco'
	),
	array(
		0 => 'General',
		1 => 'Si se activa el banco, los usuarios verán una ficha adicional en menú principal de Ultimate Points. Además encontrará Información en el perfil y a la vista de un tema, donde administradores/moderadores tienen la posibilidad de modificar los puntos de los usuarios de los puntos y el importe del  banco, si lo permite.'
	),
	array(
		0 => 'Tasa de interés',
		1 => 'Aquí se puede establecer un tipo de interés entre el 0 y el 100 por ciento por cada período de pago. El período de pago se establece como un período "en días". Después de este período los usuarios tendrán su tipo de interés pagado de forma automática. También se puede definir, en qué cantidad de estos pagos se detendrá. Así que tan pronto como un usuario tiene más en su cuenta bancaria, como se ha definido, no recibe ningún pago adicional.'
	),
	array(
		0 => 'Coste de la cuenta',
		1 => 'Aquí se puede establecer el coste por retirar dinero de la cuenta bancaria. Puede establecer cualquier valor entre 0 y 100 por ciento. Además, puede definir un coste fijo por el mantenimiento de la cuenta bancaria en cada período. Éste tendrá el mismo período que la tasa de interés. Por lo tanto los pagos de intereses se efectuarán solamente por el valor establecido.'
	),
	array(
		0 => '--',
		1 => 'Lotería'
	),
	array(
		0 => 'General',
		1 => 'Si se habilita la Lotería, los usuarios tendrán acceso al módulo de la Lotería.
Si deshabilita el módulo, la Lotería aún se ejecuta en segundo plano, pero los usuarios no tienen acceso. La Lotería se ejecutará en el período definido previamente a través de la página de la lotería o de la página del índice.'
	),
	array(
		0 => 'Cómo funciona la lotería',
		1 => 'Con un cálculo aleatorio, sale un boleto de todos los boletos comprados, es seleccionado como un posible boleto ganador. Después otro cálculo al azar - usando el valor de la oportunidad de ganar - determina si el boleto seleccionado gana realmente o no. Si no gana, el valor va al Bote hasta que salga un boleto ganador.'
	),
	array(
		0 => 'Bote',
		1 => 'La Lotería funciona con un sistema de Bote. Así que el valor de todos los boletos comprados al Bote. Además se puede definir un valor inicial para el Bote, que será pagado por estos. Si nadie gana, el Bote se acumula y crecerá cuando se compren más boletos para el próximo sorteo.'
	),
	array(
		0 => 'Posibilidad de ganar',
		1 => 'Aquí se puede establecer la posibilidad de ganar. Los usuarios no verán este valor. Cuanto mayor sea este valor, mayor es la posibilidad de ganar.
0 significa que nadie va a ganar el Bote, 100 significa que será pagado a uno de los jugadores.'
	),
	array(
		0 => 'Periodo de pago',
		1 => 'Puede establecer el período de pago en horas. ¡Esto tiene un efecto inmediato!
Si se establece el período de pago a 0, el pago se detendrá.
Si los usuarios no pueden comprar boletos el Bote se mantendrá con el el valor actual.
Usted puede utilizar esta característica para obligar a un pago. Tan pronto como se establezca un nuevo valor, el pago comenzará.'
	),
		array(
		0 => 'Hora del siguiente sorteo',
		1 => 'Ponga aquí la hora del próximo sorteo. Tiene que usar el formato UNIX. Se puede conseguir de <a href="http://www.onlineconversion.com/unix_time.htm" onclick="window.open(this.href); retorno false"> OnlineConversion.com </ a>. Esto sólo es necesario una vez. Durante el recorrido regular esto va a cambiar.'
	),
	array(
		0 => 'ID del Remitente',
		1 => 'Aquí se puede establecer el ID del usuario, que enviará un mensaje privado al usuario ganador, avisándole de que ha ganado. Si no desea utilizar un remitente diferente, establezca 0 aquí. Entonces el usuario recibe el mensaje de sí mismo.'
	),
	array(
		0 => '--',
		1 => 'Robo'
	),
	array(
		0 => 'General',
		1 => 'Con el módulo del robo, un usuario puede robar puntos de la cuenta de otros usuarios (¡del banco no!). Usted puede activar o desactivar el módulo. Si está deshabilitado, los usuarios no verán el módulo.'
	),
	array(
		0 => 'Ajustes de los mensajes personales',
		1 => 'Aquí se puede establecer, si los usuarios son informados sobre el robo. Si el usuario establece en sus ajustes de carácter personal que no quiere recibir mensajes personales de otros usuarios, no se reciben mensajes desde el módulo de robo.
Si el que intenta robar a otro usuario se bloquea el envío de Mensajes Privados, el usuario robado todavía recibe un mensaje. Estos mensajes son pre-definidos y el usuario, que trató de robar, no tiene ninguna influencia en este mensaje.
Cada usuario puede configurar en el módulo interfaz de robo, si a él le gusta ser informado por el módulo robo, si alguien trató de robarle o de si se ha realizado correctamente. Si el envío de la PN se desactiva, el usuario no puede verlo.'
	),
	array(
		0 => 'Posibilidad de éxito del robo',
		1 => 'Aquí se puede establecer el porcentaje de posibilidad de hacer un robo con éxito. Así que usted puede poner cualquier valor entre 0 y 100 por ciento.'
	),
	array(
		0 => 'Penalización por robo fallido',
		1 => 'Aquí se puede establecer la penalización que un usuario tiene que pagar, si falla su robo.
El ladrón tendrá que pagar el porcentaje del valor que trató de robar. Lo que un usuario tiene que pagar, si no, se muestra en la página de Robo. Puede establecer cualquier valor entre 0 y 100 por ciento.'
	),
	array(
		0 => 'El valor máximo, que puede ser robado a la vez',
		1 => 'Aquí se puede establecer el porcentaje máximo de los puntos que el usuario robado posee, que puede ser robado a la vez. Este valor se muestra en la página del Robo. Usted puede utilizar cualquier valor entre 0 y 100 por ciento.'
	),
	array(
		0 => 'El uso de la pena por robo fallido',
		1 => 'Aquí se puede establecer, lo que le gustaría hacer con la pena de un robo fallido. Puede que quiera directamente la transferencia del premio mayor de la Lotería o seleccionar al azar, si la pena debe ir a la cuenta de usuario robado o a la del premio mayor de la Lotería.'
	),
	array(
		0 => '--',
		1 => 'Transferir/Donar'
	),
	array(
		0 => 'General',
		1 => 'Si los usuarios tienen el permiso, los usuarios tendrán la posibilidad de transferir los puntos de su cuenta a otra cuenta de los usuarios. Esto se puede hacer desde la página de transferencia, viendo un tema o en el perfil.'
	),
	array(
		0 => 'Mensaje personal con las transferencias',
		1 => 'Usted puede activar o desactivar esta función dentro de la configuración principal de los puntos en la página del Panel de Administración(ACP). Si el usuario tiene bloqueado el envío de Mensajes Privados, no puede añadir un comentario a su transferencia.'
	),
	array(
		0 => 'Registros',
		1 => 'Todo incluido transferencias. Todas las informaciones necesarias se muestran en la página de registros. Esta característica puede ser activada/desactivada en la página principal de los ajustes de los puntos. También tiene la posibilidad de restablecer los registros de todos los usuarios. ¡Pero tenga en cuenta, esto no se puede deshacer!'
	),
	array(
		0 => '--',
		1 => 'Permisos'
	),
	array(
		0 => 'Permisos de Administradores',
		1 => 'Usted puede dar al administrador el derecho de administrar Ultimate Points System. Esto se puede hacer en el Panel de Administración(ACP) -> Permisos -> Permisos de administrador -> Permisos avanzados.'
	),
	array(
		0 => 'Permisos de Moderadores Globales',
		1 => 'Dentro del Panel de Administración(ACP) -> Permisos -> Moderadores globales usted puede establecer, si tienen permiso para cambiar los puntos y las cuentas bancarias de otros usuarios.'
	),
	array(
		0 => 'Permisos de usuarios y grupos',
		1 => 'Dentro del Panel de Administración(ACP) -> Permisos -> Permisos de usuario/grupos, puede poner diferentes cosas en el sistema de puntos Ultimate. Véase a continuación:
<ul>
	<li>Puede usar los puntos</li>
	<li>Puede usar el banco</li>
	<li>Puede usar el módulo de los registros</li>
	<li>Puede usar la lotería</li>
	<li>Puede usar el robo</li>
	<li>Puede usar la transferencia</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'AddOns y compatibilidad con otras modificaciones'
	),
	array(
		0 => 'General',
		1 => 'Ultimate Points System es actualmente soportado por otras modificaciones.'
	),
	array(
		0 => 'phpBB Arcade',
		1 => 'El phpBB Arcade de Jeff ( <a href="http://www.jeffrusso.net/">JeffRusso.net</a> ) soporta Ultimate Points System. El Arcade autodetecta, si está instalado el UPS. Puede establecer el conjunto de coste por juegar y un Bote.'
	),
	array(
		0 => 'phpbb Gallery',
		1 => 'La phpBB Gallery de nickvergessen ( <a href="http://www.flying-bits.org/">Flying-bits.org</a> ) soporta Ultimate Points.<br />
Tan pronto como se haya instalado la Galería, podrás ver los campos adicionales en los ajustes principales de los puntos.<br /><br />¡Usted tendrá que copiar el complemento de conexiones incluida, que se puede encontrar en el paquete de UPS en contrib/addons/Gallery_Integration/root/gallery/includes/hookup_gallery.php a la ubicación correcta en la carpeta de la Galería!<br /><br /><strong>¡Sugerencia Importante!</strong> ¡Si está utilizando una de las casillas de la imagen (Highslide, Lightbox, Shadowbox.), los puntos se restan dos veces aquí, debido a un problema técnico. Así que si quiere restar 2 puntos para la visualización de imágenes, usted tiene que introducir 1 punto aquí!<br />Para el cuadro Highslide se puede encontrar una solución para este problema <a href="http://highslide.com/forum/viewtopic.php?p=18498#p18498">aquí</a><br /><br />Además, puede activar/deshabilitar, si el usuario con cero puntos o negativos en la cuenta todavía será capaz de ver las imágenes o no.'
	),
	array(
		0 => 'Medal System MOD',
		1 => 'El Medal System de Gremlinn ( <a href="http://test.dupra.net/">Gremlinn\'s Mod Support Site</a> ) soporta UPS.
Dentro del Panel de Administración(ACP), Mod. Medal, encontrará un campo, donde usted puede establecer, la cantidad de puntos que un usuario recibe adicionalmente por recinbir una medalla.'
	),
	array(
		0 => 'Sudoku',
		1 => 'El Sudoku MOD de el_teniente ( <a href="http://vfalcone.ru/">vfalcone.ru</a> ) soporta UPS.
A pesar de que todavía tienen un sistema interno de puntos, puede establecer los puntos, que los usuarios recibirán en el sistema de recompensas.'
	),
	array(
		0 => 'F1 Webtipp',
		1 => 'El Fórmula 1 Webtipp de Dr.Death ( <a href="http://www.lpi-clan.de/">LPI-Clan</a> ) soporta UPS.
Puede configurar los puntos que los usuarios recibirán por sus pronósticos.'
	),
	array(
		0 => 'DM Video',
		1 => 'El DM Video MOD de femu ( <a href="http://area53.die-muellers.org/">femu\'s Mod Support Site</a> ) soporta UPS.
Puede establecer allí, cuántos puntos recibirán los usuarios , cuando añaden un video. Esta cantidad se restará, por supuesto, cuando el usuario elimina un vídeo.'
	),
	array(
		0 => 'UPS Easy Shop',
		1 => 'El UPS Easy Shop ( <a href="http://area53.die-muellers.org/">femu\'s Mod Support Site</a> ) funciona con Ultimate Points. El usuario puede comprtar objetos y listarlos en su perfil y en la lista de temas.<br />
Hay plugins para que los usuarios puedan comprar colores o mensajes.'
	),
	array(
		0 => 'User Blog Mod',
		1 => 'El User Blog Mod de EXreaction ( <a href="http://www.lithiumstudios.org/">Lithiumstudios.org</a> ) soporta UPS.

Para utilizar el Mod blog del usuario con UPS, tiene que instalar el plugin, que se puede encontrar en la carpeta contrib/addons/User_Blog_Mod_Plugin.
Después de la instalación encontrará ajustes adicionales en la configuración del blog Mod.'
	),
	array(
		0 => 'Board3 Portal',
		1 => 'Usted encontrará en la carpeta contrib/AddOns/Board3_Portal_AddOns un addon, que mostrará la lotería en la página Portal Board3 ( <a href="http://www.board3.de/">Board3 Portal</a> ).'
	),
	array(
		0 => 'DM Easy Download System',
		1 => 'El DM EDS de femu ( <a href="http://area53.die-muellers.org/">femu\'s Mod Support Site</a> ) soporta Ultimate Points.<br />El DM EDS simple sistema de descargas, donde se pueden establecer los costes para cada descarga por separado. Así que si los usuarios no tienen suficientes puntos, no puede descargar los archivos.'
	),
	array(
		0 => 'DM Quotes Collection',
		1 => 'DM Quotes Collection es una simple herramienta de femu ( <a href="http://area53.die-muellers.org/">femu\'s Mod Support Site</a> ), en donde usted tiene la posibilidad de empezar a crear una colección de citas, que se mostrarán en un orden aleatorio en el índice. Todas las citas se gestionan a través del Panel de Administración(ACP). Tan pronto como se aprueba una cita, el usuario recibirá los puntos, que se establecieron en el Panel de Administración(ACP).'
	),
	array(
		0 => 'Knuffel (Dice role game)',
		1 => 'Ultimate Points soporta Knuffel (un clon del juego Kniffel) de Wuerzi ( <a href="http://www.spieleresidenz.de/">Spieleresidenz</a> ). Dentro de este juego usted necesita diferentes conjuntos de datos de dados para obtener el máximo de puntos. En el Panel de Administración(ACP) se puede establecer el coste por jugar y también establecer un Bote.'
	),
	array(
		0 => 'Invite A Friend',
		1 => 'El Invite A Friend Mod de Bycoja ( <a href="http://bycoja.by.funpic.de/">Bycoja\'s Bugs</a> ) en la version 0.5.3 soporta Ultimate Points.
. Invite A Friend es una adición para phpBB3, con lo que habilitas a los usuarios para invitar a nuevos amigos.'
	),
	array(
		0 => 'Hangman',
		1 => 'El juego Hangman ( <a href="http://area53.die-muellers.org/">Our Mod Support Site</a> ) soporta Ultimate Points. Con este juego los usuarios podrán ganar puntos mediante la publicación de Hangmans o adivinar las palabras.'
	),
	array(
		0 => 'DM Music Charts',
		1 => ' DM Music Charts de femu ( <a href="http://area53.die-muellers.org/">femu\'s Mod Support Site</a> ) soporta Ultimate Points. Con este mod puede ofrecer a sus usuarios una mesa de cartas, que es llenada por los usuarios. Así que todos los usuarios registrados pueden agregar nuevas canciones.'
	),
	array(
		0 => 'phpBB Football',
		1 => 'phpBB Football( <a href="http://football.bplaced.net//">football\'s Support aund Demo Site</a> ) soporta Ultimate Points. Con esta modificación se pueden gestionar diferentes ligas y ofrecer a sus usuarios una página de apuestas.'
	),
);
