<?php

echo "Welke operatie wil je uitvoeren? (+,-,%) \n";

$operatie = readline();

	if ($operatie === "+" ) {

		echo "Eerste getal? \n";
		$eerste_getal = readline();

		if (is_numeric($eerste_getal)) {

			echo "Tweede getal? \n";
			$tweede_getal = readline();

			if (is_numeric($tweede_getal)){

				$uitkomst = $eerste_getal + $tweede_getal;
				} else{
					echo "'$tweede_getal' is geen getal! \n";
					}				
				print("Uw resultaat is: " . $uitkomst);
				}
		}

	if ($operatie === "-") {

		echo "Eerste getal? \n";
		$eerste_getal = readline();

		if (is_numeric($eerste_getal)) {
		
			echo "Tweede getal? \n";
			$tweede_getal = readline();

			if (is_numeric($tweede_getal)){

				$uitkomst = $eerste_getal - $tweede_getal;
				} else{
					echo "'$tweede_getal' is geen getal! \n";
					}
				print("Uw resultaat is: " . $uitkomst);
				}
		}

	if ($operatie === "%") {

		echo "Eerste getal? \n";
		$eerste_getal = readline();

		if (is_numeric($eerste_getal)) {
		
			echo "Tweede getal? \n";
			$tweede_getal = readline();

			if (is_numeric($tweede_getal)){

				$uitkomst = $eerste_getal % $tweede_getal;
				} else{
					echo "'$tweede_getal' is geen getal! \n";
					}
				print("Uw resultaat is: " . $uitkomst);
				}
		}

	
?>