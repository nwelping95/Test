<?php
namespace OCA\User_Manager\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;

class PageController extends Controller {

    public function index() {
        $templateName = 'index';  // will use templates/main.php
        return new TemplateResponse($this->appName, $templateName);
    }

}

?>