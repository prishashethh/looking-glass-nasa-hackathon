<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Showcase</title>
        <meta charset="utf-8">
        <style type="text/css">
            #pic_grid {
                width: 100%;
                display: grid;
                grid-template-columns: auto auto auto;
            }

            img {
                width: 100%;
            }
        </style>
    </head>
<body>
    <div id="pic_grid">
<?php 
    $tele = $_GET['telescope'];
    $pics = scandir("../telescope-images/$tele", 1); // backwards listing
    
    for ($i = 0; $i < (count($pics) - 2); $i++) {
        echo '<img class="pictures">';
    }

?>
    </div>
</body>
<script type="application/javascript">
     const picsSrc = <?php echo json_encode($pics); ?>;
     const tele = <?php echo json_encode($tele); ?>;
</script>
<script>
    const images = document.getElementsByClassName("pictures");

    for (let i = 0; i < (picsSrc.length - 2); i++) { // not the . and .. directories
        images[i].setAttribute("src", "../telescope-images/"+tele+"/"+picsSrc[i]);
    }
</script>
</html>