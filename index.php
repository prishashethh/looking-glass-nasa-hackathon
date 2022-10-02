<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Looking Glass</title>
        <meta charset="utf-8">
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
<body>
    <div id="navbar">
        <ul id="nav">
            <li class="item"><a>Filler</a></li>
            <li class="item"><a>Filler</a></li>
            <li class="item"><a>Filler</a></li>
        </ul>
    </div>

    <div id="question">Which image was taken by the James Webb Telescope?</div>

    <div id="grid">
        <div class="options"><img id="pic_1" class="pics"/></div>
        <div class="options"><img id="pic_2" class="pics"/></div>
        <div class="options"><img id="pic_3" class="pics"/></div>
        <div class="options"><img id="pic_4" class="pics"/></div>
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
<script src="index.js"></script>
</html>