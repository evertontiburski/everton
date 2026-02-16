<?php

use Pecee\SimpleRouter\SimpleRouter;

try {

    SimpleRouter::setDefaultNamespace('Everton\controller');

    SimpleRouter::get(URL_SITE, 'SiteController@index');
    SimpleRouter::get(URL_SITE . '/contato', 'SiteController@index');
    SimpleRouter::get(URL_SITE . '/sobre', 'SiteController@index');

    SimpleRouter::start();

} catch(Pecee\SimpleRouter\Exceptions\NotFoundHttpException $error) {

    // Ou colocar para redirecionar depois para uma pagina de erro estilo 404
    echo $error->getMessage();

}
