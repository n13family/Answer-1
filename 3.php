<?php
	function cetak_gambar($jumlah){

		if ($jumlah % 2 == 0) {
		  die("Jumlah Harus Genap");
		}

		for($x = 1; $x <= $jumlah; $x++)
		{

			$arr = array();
			for($y = 1; $y<=$jumlah; $y++)
			{

				if($x == round($jumlah/2))
				{

					$arr[] = "*";
				}

				 else
				{

					if($y == 1 || $y == $jumlah)
					{

						$arr[] = "*";

					}
					else 
					{

				$arr[] = "=";

				}

			}

		}
		foreach ($arr as $text){

			echo "$text	";

		}
		
		echo PHP_EOL;
		
	}

}

		jumlah:

		echo "Masukan Jumlah: ";
		$jumlah = trim(fgets(STDIN));
		if(is_numeric($jumlah) == false){

			echo "Hanya menerima numeric".PHP_EOL;
			goto jumlah;

		}

		cetak_gambar($jumlah);