<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Looking Glass</title>
        <meta charset="utf-8">
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
<body>
    <div id="grid">
        <div id="opt_1" class="options"><img src="telescope-images/chandra/a2384_big.jpg"/></div>
        <div id="opt_2" class="options"><img src="telescope-images/chandra/a2384_big.jpg"/></div>
        <div id="opt_3" class="options"><img src="telescope-images/jwst/jwst-1.png"/></div>
        <div id="opt_4" class="options"><img src="telescope-images/chandra/a2384_big.jpg"/></div>
    </div>

    <div id="navbar">
        <ul id="nav">
            <li class="item">Filler</li>
            <li class="item">Filler</li>
            <li class="item">Filler</li>
        </ul>
    </div>


<?php
    $telescopes = scandir('telescope-images', 1);

    for ($i = 0; $i < (count($telescopes) - 2); $i++) {
        echo $telescopes[$i]."\n";
    }

?>


</body>
<script type="application/javascript">
 const telescopes = <?php echo json_encode($telescopes); ?>;
</script>
<script src="index.js"></script>
</html>