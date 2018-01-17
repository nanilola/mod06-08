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

	// $gifts = [
	// 	["first"=>"A Partridge in a Pear Tree"], 
	// 	["second"=>"Two Turtle Doves"],
	// 	["third"=>"Three French Hens"],
	// 	["fourth"=>"Four Calling Birds"],
	// 	["fifth"=>"Five Golden Rings"],
	// 	["sixth"=>"Six Geese a Laying"],
	// 	["seventh"=>"Seven Swans a Swimming"],
	// 	["eight"=>"Eight Maids a Milking"],
	// 	["ninth"=>"Nine Ladies Dancing"],
	// 	["tenth"=>"Ten Lords a Leaping"],
	// 	["eleventh"=>"Eleven Pipers Piping"],
	// 	["twelfth"=>"Twelve Drummers Drumming"]
	// ];

	// foreach ($gifts as $index => $lyrics) {
	// 	foreach ($lyrics as $day => $value) {
	// 		echo 'On the ' . $day . ' day of Christmas, my true love sent to me:<br>';
	// 		echo $value . '<br>';

	// 		if ($index > 0) {
	// 			echo $value;
	// 		}
	// 		echo '<br>';
	// 	}
	// }

	for ($i = 0; $i < count($days); $i++) {
		
		if ($i == 0) {
			echo '<div id="v0">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showNext()"></i> sent to me:</div><br>';
			echo '<div id="v0L0">' . $gifts[$i] . '</div><br>';
		}

		if ($i == 1) {
			echo '<div id="v1">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showThird()"></i> sent to me:</div><br>';
			// echo '<div id="first" class="verse first">' . $gifts[$i] . ' <i class="fa fa-tree animated pulse infinite" aria-hidden="true" onclick="showSecond()"></i></div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v1L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v1L1">' . $gifts[$j] . '</div><br>';
			}
		}


		if ($i == 2) {
			echo '<div id="v2">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showFourth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v2L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v2L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v2L2">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 3) {
			echo '<div id="v3">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showFifth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v3L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v3L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v3L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v3L3">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 4) {
			echo '<div id="v4">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showSixth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v4L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v4L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v4L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v4L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v4L4">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 5) {
			echo '<div id="v5">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showSeventh()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v5L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v5L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v5L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v5L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v5L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v5L5">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 6) {
			echo '<div id="v6">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showEighth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v6L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<<div id="v6L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v6L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v6L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v6L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v6L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v6L6">' . $gifts[$j] . '</div><br>';
			}
		}


		if ($i == 7) {
			echo '<div id="v7">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showNinth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v7L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v7L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v7L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v7L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v7L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v7L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v7L6">' . $gifts[$j] . '</div><br>';
				if ($j == 7)
					echo '<div id="v7L7">' . $gifts[$j] . '</div><br>';
			}
		}


		if ($i == 8) {
			echo '<div id="v8">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showTenth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v8L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v8L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v8L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v8L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v8L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v8L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v8L6">' . $gifts[$j] . '</div><br>';
				if ($j == 7)
					echo '<div id="v8L7">' . $gifts[$j] . '</div><br>';
				if ($j == 8)
					echo '<div id="v8L8">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 9) {
			echo '<div id="v9">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showEleventh()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v9L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v9L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v9L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v9L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v9L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v9L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v9L6">' . $gifts[$j] . '</div><br>';
				if ($j == 7)
					echo '<div id="v9L7">' . $gifts[$j] . '</div><br>';
				if ($j == 8)
					echo '<div id="v9L8">' . $gifts[$j] . '</div><br>';
				if ($j == 9)
					echo '<div id="v9L9">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 10) {
			echo '<div id="v10">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true" onclick="showTwelfth()"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v10L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v10L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v10L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v10L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v10L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v10L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v10L6">' . $gifts[$j] . '</div><br>';
				if ($j == 7)
					echo '<div id="v10L7">' . $gifts[$j] . '</div><br>';
				if ($j == 8)
					echo '<div id="v10L8">' . $gifts[$j] . '</div><br>';
				if ($j == 9)
					echo '<div id="v10L9">' . $gifts[$j] . '</div><br>';
				if ($j == 10)
					echo '<div id="v10L10">' . $gifts[$j] . '</div><br>';
			}
		}

		if ($i == 11) {
			echo '<div id="v11">On the ' . $days[$i] . ' day of Christmas, my true love <i class="fa fa-heart animated pulse infinite" aria-hidden="true"></i> sent to me:</div><br>';

			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<div id="v11L0">And ' . $gifts[$j] . '</div><br>';
				if ($j == 1)
					echo '<div id="v11L1">' . $gifts[$j] . '</div><br>';
				if ($j == 2)
					echo '<div id="v11L2">' . $gifts[$j] . '</div><br>';
				if ($j == 3)
					echo '<div id="v11L3">' . $gifts[$j] . '</div><br>';
				if ($j == 4)
					echo '<div id="v11L4">' . $gifts[$j] . '</div><br>';
				if ($j == 5)
					echo '<div id="v11L5">' . $gifts[$j] . '</div><br>';
				if ($j == 6)
					echo '<div id="v11L6">' . $gifts[$j] . '</div><br>';
				if ($j == 7)
					echo '<div id="v11L7">' . $gifts[$j] . '</div><br>';
				if ($j == 8)
					echo '<div id="v11L8">' . $gifts[$j] . '</div><br>';
				if ($j == 9)
					echo '<div id="v11L9">' . $gifts[$j] . '</div><br>';
				if ($j == 10)
					echo '<div id="v11L10">' . $gifts[$j] . '</div><br>';
				if ($j == 11)
					echo '<div id="v11L11">' . $gifts[$j] . '</div><br>';
			}
			echo '<br>';
		}
		echo '<br>';
	}

}