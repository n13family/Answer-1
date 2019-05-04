<?php
			function sort1($a, $b)
			{

			    if ($a == $b) {
			        return 0;

			    }

			    return (count($a) < count($b)) ? -1 : 1;

			}

			function sort_array($array){

			usort($array, 'sort1');
			$arr = array();

			foreach($array as $sorting){

					asort($sorting);
					$arr[] = $sorting;

			}

			return $arr;

			}

			$array = array(
					array(
						"g",
						"h",
						"i",
						"j"),
					array(
						"a",
						"c",
						"b",
						"e",
						"d"),
					array(
						"g",
						"e",
						"f")
					);
			print_r(sort_array($array));