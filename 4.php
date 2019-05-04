<?php
			function sort_array($array){
			sort($array);
			$arr = array();
			foreach($array as $sorting){
					sort($sorting);
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
