<?php

class MURL {

	public static function protocol() {

		if (MRequest::is_cli()) {
			return '';
		}

		$protocol = 'http';

		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {

			$protocol = 'https';

		}

		return $protocol;

	}

	public static function subdomain() {

		if (MRequest::is_cli()) {
			return '';
		}

		$url = explode('.', $_SERVER['SERVER_NAME']);

		$subdomain = '';

		if (isset($url[0])) {
			$subdomain = $url[0];
		}

		return $subdomain;

	}

	public static function domain() {

		if (MRequest::is_cli()) {
			return '';
		}

		$url = explode('.', $_SERVER['SERVER_NAME']);

		$ext = $url[count($url) - 1];
		$domain = $url[count($url) - 2];
		return $domain . '.' . $ext;

	}

	public static function canonical() {

		if (MRequest::is_cli()) {
			return '';
		}

		return self::protocol() . '://' . $_SERVER['SERVER_NAME'];

	}

	public static function current() {

		if (MRequest::is_cli()) {
			return '';
		}

		return self::protocol() . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

	}

	public static function segment($segment) {

		if (MRequest::is_cli()) {
			return '';
		}

		$url = explode('/', $_SERVER['REQUEST_URI']);

		if (!empty($url[$segment])) {

			return MString::sub_before($url[$segment], '?');

		} else {

			return '';

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
