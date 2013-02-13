<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     *
     * @return Response
     */
    public function get_response()
    {
        $view = View::factory('site/404');

        // Remembering that `$this` is an instance of HTTP_Exception_404
        $view->fail = $sitename = Kohana::$config->load('site.page404');

        $response = Response::factory()
            ->status(404)
            ->body($view->render());

        return $response;
    }
}