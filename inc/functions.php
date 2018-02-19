
<?php
     /*$allquotes = array(
        $strength,
        $courage,
        $success
        );
                    
                    
        $quotes = array("To be strong is to understand weakness.", "Courage is knowing what not to fear.",
                                "Failure is not the opposite of success, it is part of success");
                                
        $arrlength = count($quotes);*/
        
        function displayRandomPhotoArea() {
            $photoAreas = array("/hw2/imgs/trip.jpg", "/hw2/imgs/strength.jpg");
            
            $randomNumber = array_rand($photoAreas);
            $randomImage = $photoAreas[$randomNumber]
            
            echo'<img src="'.$photoAreas[$randomNumber] .'" width="725" height = "194">';
       
?>