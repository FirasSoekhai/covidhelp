<?php

namespace Website\Controllers;
/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home($id = null): string {
		$template_engine = get_template_engine();
		echo $template_engine->render('homepage', ['products' => getProducts($id)]);

	}

	public function showFiras() {

		$template_engine = get_template_engine();
		echo $template_engine->render('firas');

	}

	public function shoppingcart() {

		$template_engine = get_template_engine();
		echo $template_engine->render('shoppingcart');
	}

}