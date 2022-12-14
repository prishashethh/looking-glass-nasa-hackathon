<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Telecope Showcase</title>
        <meta charset="utf-8">
        <link href="telescopes.css" type="text/css" rel="stylesheet">
        <link href="../nasa.ico" rel="icon" type="image/x-icon">
    </head>
<body>
    <h1>Telescope Showcase 🏆</h1>
    <div id="grid">
        <a><div id="chandra" class="telescopes">Chandra</div></a>
        <a><div id="hubble" class="telescopes">Hubble</div></a>
        <a><div id="voyager" class="telescopes">Voyager</div></a>
        <a><div id="juno" class="telescopes">Juno</div></a>
        <a><div id="spitzer" class="telescopes">Spitzer</div></a>
        <a><div id="jwst" class="telescopes">James Webb Space Telescope (JWST)</div></a>
    </div>

    <form method="GET" id="form" action="showcase-pics.php">
        <input type="hidden" id="hidden_input" name="telescope">
    </form>
</body>
<script>
    const teles = document.getElementsByClassName("telescopes");
    const input = document.getElementById("hidden_input");
    for (let i = 0; i < teles.length; i++) {
        teles[i].addEventListener("click", function(e) {
            if (e.target.innerText.toLowerCase() == "james webb space telescope (jwst)") {
                input.value = "jwst";
            } else {
                input.value = e.target.innerText.toLowerCase();
            }
            console.log(input.value);
            document.getElementById("form").submit();
        })
    }
</script>
</html>
