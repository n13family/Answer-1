<?php
		function cetak($jumlah){

			$arr = array();
			for($x = 1; $x <= $jumlah; $x++){
				cetak:
				$str = substr(sha1(rand()), 0, 32);

				if(in_array($str, $arr)){
					goto cetak;
				}

				$arr[] = $str;
			}
			return $arr;
		}
		jumlah:
		echo "Masukan Jumlah: ";
		$jumlah = trim(fgets(STDIN));
		if(is_numeric($jumlah) == false){

			echo "Hanya menerima numeric".PHP_EOL;
			goto jumlah;

		}

		foreach(cetak($jumlah) as $string){
			echo $string.PHP_EOL;
		}