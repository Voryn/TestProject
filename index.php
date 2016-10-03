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
            echo "Hello," . " " . "world" . "!";
            echo 5 * 7;
            $myName = "Bilbo Baggins";
            $myAge = 111;
            echo "My name is " . $myName . " and I am " . $myAge;
            echo "I get printed";

            // I don't get printed.

            /*
             * I don't either.
             */

            // Force upload

            echo "\r\n";

            $name = "Edgar";

            if($name == "Simon")
            {
                print "I know you!";
            }
            else
            {
                print "Who are you?";
            }


            ?>
        </p>
    </body>
</html>