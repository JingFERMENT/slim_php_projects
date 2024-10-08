<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SecureController extends Controller {

    public function default (Request $request, Response $response) {
        $html = $this->render($response, 'default.html', [
            'user' => $this->ci->get('session')->get('user')
        ]);
        return $html;
    }

    public function status (Request $request, Response $response) {
       $html = $this->render($response, 'status.html');
       return $html;
    }

}