<!DOCTYPE html>
    <html>
        <head></head>
    <body>
    <p>
        <?php

        function data($name, $specsno, $sausagesno, $mugsno){
            echo "Wanted: " . $name . "<br/> \n";
            echo "Known to be in possession of the following items: " . "<br/> \n";
            echo "The number of  mugs they own:(" . $mugsno . ")" . "<br/> \n";
            echo "The number of specs they own:(" .$specsno. ")" . "<br/> \n";
            echo "The number of sausage rolls they own :(" . $sausagesno . ")" . "<br/ \n>";


            $aCapt = 10* ((($specsno*$mugsno*$sausagesno)^2)/2);


            echo "Award for the capture: £" . $aCapt;



        }
        data("Arthur", 5, 7, 3);
        data("Joel", 2, 4, 9);
        data("Jaki", 4, 7, 2);


        ?>
    </p>
    </body>
</html>