const modal = document.getElementById("modal");
const result = document.getElementById("result");

for (let i = 0; i < spots.length; i++) {
    spots[i].addEventListener("click", function(e) {
        if (e.target.getAttribute("src").includes("jwst")) {
            result.innerText = "Yes that's correct! :)";

        } else {
            result.innerText = "Sorry but that's wrong :(";
        }

        styling();

    })
}

document.getElementById("again").addEventListener("click", function() {
    shufflePics();
    modal.style.display = "none";
    for (let i = 0; i < spots.length; i++) {
        spots[i].style.opacity = "1";
    }
})

document.getElementById("close").addEventListener("click", function() {
    modal.style.display = "none";
    for (let i = 0; i < spots.length; i++) {
        spots[i].style.opacity = "1";
    }
})

function styling() {
    modal.style.display = "block";
    modal.style.zIndex = 1;
    for (let i = 0; i < spots.length; i++) {
        spots[i].style.opacity = "0.8";
    }
}