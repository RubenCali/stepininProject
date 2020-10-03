<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/project-details-ruben', 'WebsiteController@projectRuben' )->name( 'project.details.ruben' );
	SimpleRouter::get( '/project-details-joey', 'WebsiteController@projectJoey' )->name( 'project.details.joey' );
	SimpleRouter::get( '/project-details-fonteyn', 'WebsiteController@projectFonteyn' )->name( 'project.details.fonteyn' );
	SimpleRouter::get( '/project-details-rosanne', 'WebsiteController@projectRosanne' )->name( 'project.details.rosanne' );

	SimpleRouter::get( '/', 'WebsiteController@homepage' )->name( 'homepage' );
	
	// STOP: Tot hier al je eigen URL's zetten

	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

