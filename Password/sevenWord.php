<!--<?php 
error_reporting(-1); #Report all PHP errors
ini_set('display_errors', 1);
?>-->

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>Password Generator</title>

    <?php 
		    function array_random($arr, $num = 1) {
		    shuffle($arr);
		    
		    $random = array();
		    for ($i = 0; $i < $num; $i++) {
		        $random[] = $arr[$i];
		    }
		    return $num == 1 ? $random[0] : $random;
		};

		
		$wordBank = Array(
		    		'cat',
		    		'dog',
		    		'bird',
		    		'car',
		    		'bus',
		    		'train',
		    		'airplane',
		    		'football',
		    		'soccer',
		    		'baseball',
		    		'hockey',
		    		'ball',
		    		'game',
		    		'golf',
		    		'controller',
		    		'swim',
		    		'bike',
		    		'run',
		    		'sign',
		    		'tattoo',
		    		'bag',
		    		'giraffe',
		    		'okapi',
		    		'lion',
		    		'tiger',
		    		'leopard',
		    		'eagle',
		    		'hawk',
		    		'falcon',
		    		'condor',
		    		'shark',
		    		'fish',
		    		'octopus');
		
		//random word
		$newPassword = array_random($wordBank);


		$numberBank = Array (
						'1',
						'2',
						'3',
						'4',
						'5',
						'6',
						'7',
						'8',
						'9'
			);

		//random number
		$newNumber = array_random($numberBank);

		$characterBank = Array (
                        '!',
                        '@',
                        '#',
                        '$',
                        '%',
                        '&'
            );

		//random character
        $newCharacter = array_random($characterBank);








        //password generators 


        if (isset($_GET['additions']) && 
   			$_GET['additions'] == 'both') {

    			$generatedPassword = array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).$newNumber.$newCharacter ;

			}



		 else if (isset($_GET['additions']) && 
   			$_GET['additions'] == 'number') {

    			$generatedPassword = array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).$newNumber ;

			}



		

		else if (isset($_GET['additions']) && 
   			$_GET['additions'] == 'character') {

    			$generatedPassword = array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).$newCharacter ;

			}


		else {

    		$generatedPassword = array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank).'-'.array_random($wordBank);
    		

		} ;

		



		

 


    ?>

    <link rel="stylesheet" type="text/css" href="main.css">

  
</head>

<body>

	<div class="generated">

		<h1>Your password is: <?=$generatedPassword?></h1>
	
		<a href="http://p2.mattmigliore.me/">Click Here to Return to Generator</a>
	
	</div>	


</body>
</html>