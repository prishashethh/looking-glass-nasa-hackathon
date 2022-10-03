/* const telescopes and const telePics are defined in index.php 
telescopes is the name of the all of the possible telescopes and telePics 
is a multi-dimensional array with the first index being the different telescopes 
and the second index being the pic taken by that telescope */

const pic1 = document.getElementById("pic_1");
const pic2 = document.getElementById("pic_2");
const pic3 = document.getElementById("pic_3");
const pic4 = document.getElementById("pic_4");
const spots = document.getElementsByClassName("options");
const pics = document.getElementsByClassName("pics");

function shufflePics() {
    const telescopesLen = telescopes.length - 2; // the directories . and .. are removed
    let lvlPics = [];
    let telePicNames = [];

    for (let i = 0; i < 3; i++) { // less than 3 because there are only 3 spots where the telescopes can vary, the 4th must be the jwst 
        let firstIndexRand = Math.floor(Math.random() * telescopesLen);
        let telePicsLen = telePics[firstIndexRand].length - 2; // the length of pics within that first index selection
        let secIndexRand = Math.floor(Math.random() * telePicsLen);
        if (lvlPics.includes(telePics[firstIndexRand][secIndexRand])) { // no duplicates
            i--;
            console.log("Duplicate");
            continue;
        }
    
        let indexAt = telePics[firstIndexRand][secIndexRand].indexOf("-");
        telePicName = telePics[firstIndexRand][secIndexRand].slice(0, indexAt);
        telePicNames.push(telePicName);
        lvlPics.push(telePics[firstIndexRand][secIndexRand]);
    }
    
    let jwstLen = jwstPics.length - 2; // jwstPics is a list of all pics taken by jwst, defined in index.php
    let rand = Math.floor(Math.random() * jwstLen); // between 0 and length of jwst pics
    console.log(jwstPics[rand]);

    shuffleRand = Math.random(); // the same random number used to randomize lvlPics and telePicNames so they correspond

    lvlPics.push(jwstPics[rand]);
    telePicNames.push("jwst");
    shuffledPics = lvlPics.sort((a, b) => 0.5 - shuffleRand); // order correlates to that of shuffledTeleNames
    shuffledTeleNames = telePicNames.sort((a, b) => 0.5 - shuffleRand);

    for (let i = 0; i < 4; i++) {
       pics[i].setAttribute("src", "telescope-images/"+shuffledTeleNames[i]+"/"+shuffledPics[i]);
    }
    


} shufflePics();