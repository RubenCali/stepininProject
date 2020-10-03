<?php

namespace Website\Controllers;

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController
{
	public function homepage()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');
	}
	public function projectRuben()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('project-detailsRuben');
	}
	public function projectJoey()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('project-detailsJoey');
	}
	public function projectRosanne()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('project-detailsRosanne');
	}
	public function projectFonteyn()
	{

		$template_engine = get_template_engine();
		echo $template_engine->render('project-detailsFonteyn');
	}
	public function naarLogin(){
		redirect(url('homepage'));
	}
	

	
	
	
	

}
// $result = validateRegistrationData( $_POST);
// if( userNotRegistered( $result['data']['email'])) {
// 	$result['errors']['email'] = 'Deze gebruiker is niet bekend';
// } else{
// 	$user = getUserByEmail( $result['data']['email']);
// }
// if(password_verify($result['data']['password'], $user['password'])) 