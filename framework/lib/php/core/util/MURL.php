<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}

class MURL {

	public static function protocol() {

		$protocol = 'http';

		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {

			$protocol = 'https';

		}

		return $protocol;

	}

	public static function subdomain() {

		$uri = explode('.', $_SERVER['SERVER_NAME']);

		$subdomain = $uri[0];
		return $subdomain;

	}

	public static function domain() {

		$uri = explode('.', $_SERVER['SERVER_NAME']);

		$ext = $uri[count($uri) - 1];
		$domain = $uri[count($uri) - 2];
		return $domain . '.' . $ext;

	}

	public static function base() {

		return self::protocol() . '://' . $_SERVER['SERVER_NAME'];

	}

	public static function current() {

		return self::protocol() . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

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
