<?php
function biodata($name, $address, $hobbies, $is_married, $school, $skills){

    $biodata = array(
    	"Name" => $name,
		"Address" => $address,
		"hobbies" => $hobbies,
		"is_married" => $is_married,
		"school" => (object)$school,
		"skill" => new ArrayObject($skills)
		);

    return json_encode($biodata);
    
}

		$name = "Bambang Priyanto";
		$address = "";
		$hobbies = array(
			"Coding",
			"Playing a game"
		);
		$is_married = false;
		$school = array("highSchool" => "SMA MANDALAHAYU BEKASI", "university" => "null");
		$skills = array(
			"0" => "PHP",
			"1" => "JavaScript",
			"2" => "MySql"
		);

		print(biodata($name, $address, $hobbies, $is_married, $school, $skills));

?>
