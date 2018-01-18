<?php

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {

	$days = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eight', 'ninth', 'tenth', 'eleventh', 'twelfth'];

	$gifts = [
		'A Partridge in a Pear Tree',
		'Two Turtle Doves',
		'Three French Hens',
		'Four Calling Birds',
		'Five Golden Rings',
		'Six Geese a Laying',
		'Seven Swans a Swimming',
		'Eight Maids a Milking',
		'Nine Ladies Dancing',
		'Ten Lords a Leaping',
		'Eleven Pipers Piping',
		'Twelve Drummers Drumming'
	];

	for ($i = 0; $i < count($days); $i++) {
		
		if ($i == 0) {
			echo '<div id="v' . $i . '">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showNext()"></i> sent to me:</div><br>';
			echo '<div id="v' . $i . 'L' . $i . '">' . $gifts[$i] . '</div><br>';
		}

		else {
			echo '<div id="v' . $i . '">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="show' . $i . '()"></i> sent to me:</div><br>';
			// echo '<div id="first" class="verse first">' . $gifts[$i] . ' <i class="fa fa-tree animated pulse infinite" aria-hidden="true" onclick="showSecond()"></i></div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v' . $i . 'L' . $j  . '">And ' . $gifts[$j] . '</div><br>';
				else
					echo '<div id="v' . $i . 'L' . $j . '">' . $gifts[$j] . '</div><br>';
			}
		}

		echo '<br>';
	}

}