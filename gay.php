<!DOCTYPE html>
    <html>
        <head></head>
    <body>
        <p>
            <?php
            $myage = 19;
            if($myage >= 16){
                print "You are allowed to buy specs!";
            }
            elseif($myage >= 18) {
                print "You are allowed to buy mugs!";
            }
            elseif($myage >= 21 ) {
                 print "you are allowed to buy sausage rolls" ;
                }

            ?>
         </p>
        </body>
</html>