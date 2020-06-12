<?php

namespace Website\Controllers;

/**
 * Class RegistrationController
 *
 * Deze handelt de logica van het registreren af
 * - Registratie formulier
 * - Afhandelen registratie formulier
 * - Afhandelen bevestigings link?
 */
class RegistrationController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');

	}

	public function handleRegistrationForm() {

		echo "Hier wordt het registratie formulier afgehandeld";

	}

}