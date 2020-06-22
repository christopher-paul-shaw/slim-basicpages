<?php
namespace App\Controllers;
use Psr\Container\ContainerInterface;
class HomeController
{
	protected $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function home($request, $response, $args) {
   		$view = $this->container->get('view');
   		$file = strtolower('homepage.html');
   		return $view->render($response, $file);
	}

	public function about($request, $response, $args) {
   		$view = $this->container->get('view');
   		$file = strtolower('message.html');
		return $view->render(
			$response, 
			$file, 
			[
				'title' => 'About Page', 
				'message' => 'Just a little learning project'
			]
		);

		return $response;
	}
}
