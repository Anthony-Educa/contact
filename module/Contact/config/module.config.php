<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(// Tableau des parametres
    'router' => array(//Routage
        'routes' => array(//Ensemble des routes
            //Declaration d'une route nommée
            'rContact' => array('rContact',
                'type' => 'Zend\Mvc\Router\Http\Literal', //Type de route
                'options' => array(
                    'route' => '/', //Url de la route
                    'defaults' => array(
                        //Controleur initialise par defaut
                        'controller' => 'CtrlIndex',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ), //FIN ROUTAGE 
    'controllers' => array(// Controller
        'invokables' => array(//Declaration des controleurs dynamiquement initialisables
            'CtrlIndex' => 'Contact\Controller\IndexController'
        ),
    ), // Fin Controller
    'view_manager' => array(// Gestionnaire de vue
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'contact/index/index' => __DIR__ . '/../view/contact/index/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ), //Fin Gestionnaire de vue
); // FIN TABLEAU DES PARAMETRES
