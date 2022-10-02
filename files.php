<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $telescopes = scandir('telescope-images', 1);
            print_r($telescopes);
        ?>
    </body>
</html>