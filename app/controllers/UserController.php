<?php 

	class UserController extends BaseController {
			
			public function getIndex(){
				return View::make('session/login');
			}

			public function registerClient(){
				return View::make('register');
			}

		} 


?>