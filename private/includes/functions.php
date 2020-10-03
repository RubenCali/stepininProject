<?php
// Dit bestand hoort bij de router, enb bevat nog een aantal extra functiesdie je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */


/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url( $path = '' ) {
	return get_config( 'BASE_URL' ) . $path;
}
function absolute_url( $path = '' ) {
	return get_config( 'BASE_HOST' ) . $path;
}

function get_config( $name ) {
	$config = require __DIR__ . '/config.php';
	$name = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[$name];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	return new League\Plates\Engine( $templates_path );

}






/**
 * Maak de SwiftMailer aan en stet hem op de juiste manier in
 *
 * @return Swift_Mailer
 */


/**
 * Maak een Swift_Message met de opgegeven subject, afzender en ontvanger
 *
 * @param $to
 * @param $subject
 * @param $from_name
 * @param $from_email
 *
 * @return Swift_Message
 */


/**
 *
 * @param $message \Swift_Message De Swift Message waarin de afbeelding ge-embed moet worden
 * @param $filename string Bestandsnaam van de afbeelding (wordt automatisch uit juiste folder gehaald)
 *
 * @return mixed
 */


