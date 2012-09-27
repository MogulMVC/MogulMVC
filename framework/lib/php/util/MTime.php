<?php

class MTime {

	public static function sec2hms($sec) {

		$hms = '';

		$hours = intval($sec / 3600);
		$minutes = intval($sec / 60) % 60;
		$seconds = $sec % 60;

		//Padding
		//Hours
		$hours_pad = '';

		if ($hours < 10) {
			$hours_pad = '0';
		}

		//Minutes
		$minutes_pad = '';

		if ($minutes < 10) {
			$minutes_pad = '0';
		}

		//Seconds
		$seconds_pad = '';

		if ($seconds < 10) {
			$seconds_pad = '0';
		}

		//Output
		//If there are hours
		if ($hours >= 0) {
			$hms = $hours_pad + $hours + ':' + $minutes_pad + $minutes + ':' + $seconds_pad + $seconds;
		}

		//If there are no hours but there are mins
		if ($hours <= 0 && $minutes > 0) {
			$hms = $minutes_pad + $minutes + ':' + $seconds_pad + $seconds;
		}

		//If there are no hours and no minutes
		//This will display 00 if there are 0 seconds
		if ($hours <= 0 && $minutes <= 0) {
			$hms = $seconds_pad + $seconds;
		}

		return $hms;
	}

}
?>