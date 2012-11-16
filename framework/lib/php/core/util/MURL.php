<?php

class MURL {

	public static function domain() {
		$uri = explode('.', $_SERVER['SERVER_NAME']);

		$ext = $uri[count($uri) - 1];
		$domain = $uri[count($uri) - 2];
		return $domain . '.' . $ext;

	}

	public static function base() {
		return 'http://' . $_SERVER['SERVER_NAME'];
	}

	public static function current() {
		return 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	}

	public static function segment($segment) {
		$uri = explode('/', $_SERVER['REQUEST_URI']);

		if (!empty($uri[$segment])) {
			return MString::sub_before($uri[$segment], '?');
		} else {
			return NULL;
		}
	}

	public static function curl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

}
