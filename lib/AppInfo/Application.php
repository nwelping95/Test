<?php
namespace OCA\User_Manager\AppInfo;

use OCP\AppFramework\App;

use OCA\User_Manager\Controller\PageController;

class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('User_Manager', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService('PageController', function($c) {
            return new AuthorApiController(
                $c->query('AppName'),
                $c->query('Request')
            );
        });
    }

}