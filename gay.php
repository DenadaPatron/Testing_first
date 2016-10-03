<!DOCTYPE html>
    <html>
        <head></head>
    <body>
        <p>
            <?php

            $wantedgood = "mugs";

            switch ($wantedgood) {
                case "specs":
                    echo "You have to be over 16 to buy specs";
                    break;
                case "mugs":
                    echo "You have to be over 18 to buy mugs";
                    break;
                case "sausage rolls":
                    echo "You have to be over 21 to buy sausage rolls";
                    break;
                default:
                    echo "please specify a right product";
            }
            ?>
         </p>
        </body>
</html>