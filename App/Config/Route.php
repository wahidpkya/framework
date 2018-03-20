<?php 

class Route {
	protected $controller = "home";
	protected $method = "index";
	protected $params = [];

	public function __construct() {
		// mengecek jika url di set atau belum
		if(isset($_GET['url'])) {
			// merubah string menjadi array
			$url = explode("/", filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
			// tampilkan
			// print_r($url);
		}

		// mengecek jika filenya controller-nya ada
		if(file_exists("../App/Controllers/$url[0].php")) {
			// set controller menjadi url[0]
			$this->controller = $url[0];
		}

		require_once "../App/Controllers/{$this->controller}.php";
		$this->controller = new $this->controller;
		

		if(isset($url[1])) {
			if(method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
			}
		}

		unset($url[0]);
		unset($url[1]);
		$this->params = $url;
		call_user_func_array([$this->controller, $this->method], $this->params);
		
	}
}