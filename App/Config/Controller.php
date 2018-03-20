<?php 
class Controller {

	public function view($nama, $data = []) {
		require_once "../App/Views/{$nama}.php";
	}

	public function model($nama) {
		require_once "../App/Models/{$nama}.php";
		return new $nama;
	}
	
}

