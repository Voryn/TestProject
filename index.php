<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <p>
            <?php
            echo "Hello World";
            echo "<br>";
            echo "Hello," . " " . "world" . "!";
            echo "<br>";
            echo 5 * 7;
            echo "<br>";
            $hobbitName = "Bilbo Baggins";
            $hobbitAge = 111;
            echo "My name is " . $hobbitName . " and I am " . $hobbitAge;
            echo "<br>";
            echo "I get printed";

            // I don't get printed.

            /*
             * I don't either.
             */

            // Force upload



            echo "<br>";

            $name = "Edgar";

            if($name == "Simon")
            {
                print "I know you!";
            }
            else
            {
                print "Who are you?";
            }

            echo "<br>";

            $myName = "";
            $myAge = 0;
            $allowedItems = "";

            if($myAge < 16)
            {
                $allowedItems = "You cannot buy any items.";
            }
            else if($myAge < 18)
            {
                $allowedItems = "You may buy specs.";
            }
            else if($myAge < 21)
            {
                $allowedItems = "You may buy specs and mugs.";
            }
            else
            {
                $allowedItems = "You may buy sepcs, mugs and sausage rolls.";
            }

            echo "My name is " . $myName . ". I am " . $myAge . ". " . $allowedItems;

            echo "<br>";

            $wantedGood = "mug";

            switch($wantedGood)
            {
                case "specs":
                    echo "you must be 16 or over to purchase specs.";
                    break;
                case "mugs":
                    echo "You must be 18 or over to purchase mugs.";
                    break;
                case "sausage rolls":
                    echo "You must be 21 or over to purchase sausage rolls.";
                    break;
                default:
                    echo "Please enter a valid item";
            }

            echo "<br>";
            ?>
        </p>
    </body>
</html>