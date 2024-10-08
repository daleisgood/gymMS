<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        // Check if the current controller or action requires authentication
        if ($this->shouldUseAuth()) {
            $this->loadComponent('Auth', [
                'authenticate' => [
                    'Form' => [
                        'fields' => ['username' => 'email', 'password' => 'password'],
                        'userModel' => 'Users'
                    ]
                ],
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'authError' => 'Please log in to access this area',
                'loginRedirect' => [
                    'controller' => 'Users',
                    'action' => 'dashboard'
                ],
                'logoutRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ]
            ]);
            $this->Auth->allow(['login']);
        }

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    protected function shouldUseAuth(): bool
    {
        $controller = $this->request->getParam('controller');
        $action = $this->request->getParam('action');

        // List of controllers and actions that require authentication
        $authRequired = [
            'Users' => ['login', 'dashboard'],
            'Admin' => '*', // All actions in AdminController require auth
            // Add more controllers and actions as needed
        ];

        if (isset($authRequired[$controller])) {
            if ($authRequired[$controller] === '*' || in_array($action, $authRequired[$controller])) {
                return true;
            }
        }

        return false;
    }
}
