<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Looking Glass</title>
        <meta charset="utf-8">
        <link href="game.css" type="text/css" rel="stylesheet">
        <link href="nasa.ico" rel="icon" type="image/x-icon">
    </head>
<body>
    <div id="navbar">
        <ul id="nav">
            <a href="index.html"><li class="item">Home</li></a>
            <a href="lookingGlassDescription.html"><li class="item">Description</li></a>
            <a href="showcase/telescopes.html" target="_blank"><li class="item">Images</li></a>
        </ul>
    </div>

    <div id="counter">Pts:<div id="number">0</div></div>

    <div id="question">Which image was taken by the James Webb Telescope?</div>

    <div id="grid">
        <div class="options"><img id="pic_1" class="pics"/></div>
        <div class="options"><img id="pic_2" class="pics"/></div>
        <div class="options"><img id="pic_3" class="pics"/></div>
        <div class="options"><img id="pic_4" class="pics"/></div>
    </div>

    <!--<div id="fact_grid">
        <div class="facts"><p id="fact_1">Here</p></div>
        <div class="facts"><p id="fact_2">Here</p></div>
        <div class="facts"><p id="fact_3">Here</p></div>
        <div class="facts"><p id="fact_4">Here</p></div>
    </div>-->

    <div id="modal">
        <span id="close">X</span>
        <div id="result"></div>
        <div id="buttons">
            <button id="again">Next Attempt</button>
        </div>
    </div>

<?php
    $jwstPics = scandir('telescope-images/jwst', 1);
    $telescopes = scandir('telescope-images', 1); // list of all telescopes
    $key = array_search('jwst', $telescopes, true);
    unset($telescopes[$key]);
    $telescopes = array_values($telescopes);
    for ($i = 0; $i < (count($telescopes) - 2); $i++) {
        $tele[$i] = scandir("telescope-images/$telescopes[$i]", 1); // multi dimensional array of telescopes then their images
    }


?>


</body>
<script type="application/javascript">
 const telescopes = <?php echo json_encode($telescopes); ?>;
 const telePics = <?php echo json_encode($tele); ?>;
 const jwstPics = <?php echo json_encode($jwstPics); ?>;
</script>
<script src="game.js"></script>
<script src="game-script.js"></script>
</html>