var alreadycreated = false;
 firstCard = '';
 secondCard = '';
document.getElementById("button_commencer_jeu").addEventListener("click", function () {
    let elements = document.getElementsByClassName("error");
    while (elements.length > 0) elements[0].remove();

    let select = document.getElementById("select_diff");
    let select2 = document.getElementById("select_themes");

    if (select.value == "") {
      var Select_diff = document.getElementById("fileSelect_diff");
      Select_diff.insertAdjacentHTML(
        "beforeend",
        '<p class="error"> Aucune difficultée selectionné ! </p>'
      );
    }

    if (select2.value == "") {
      var  Select_themes = document.getElementById("fileSelect_themes");
      Select_themes.insertAdjacentHTML(
        "beforeend",
        '<p class="error"> Aucun thèmes selectionné !</p>'
      );
    }
  });

document.getElementById("button_commencer_jeu").addEventListener("click", function () {
    let elements = document.getElementById("Tab_EasyDBZ");
    while (elements.length > 0) elements[0].remove();

    var selectionDifficulte = document.getElementById("select_diff");
    selectionDifficulte.addEventListener("change", function () {
      console.log(selectionDifficulte.value);
    });

    var selectionTheme = document.getElementById("select_themes");
    selectionTheme.addEventListener("change", function () {
      console.log(selectionTheme);
    });

    var cards = document.querySelectorAll(".card");

    [...cards].forEach((card) => {
      card.addEventListener("click", function () {
        card.classList.toggle("is-flipped");
      });
    });

    // FONCTION SECURITE DU MOT DE PASSE
    function checkPasswordStrength() {
      const password = document.getElementById("passwordInput").value;
      const progressBar = document.getElementById("progressBar");
      const strengthText = document.getElementById("strengthText");
      var reg =
        /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

      const length = password.length;

      progressBar.style.width = length * 2 + "%";

      console.log(reg.test(password));
      if (reg.test(password)) {
        if (length > 7) {
          strengthText.textContent = "Mot de Passe Fort";
          strengthText.style.color = "green";
          progressBar.style.backgroundColor = "green";
        } else {
          strengthText.textContent = " Mot de Passe Moyen";
          strengthText.style.color = "orange";
          progressBar.style.backgroundColor = "orange";
        }
      } else if (length > 8) {
        strengthText.textContent = "Mot de Passe Moyen";
        strengthText.style.color = "orange";
        progressBar.style.backgroundColor = "orange";
      } else {
        strengthText.textContent = "Mot de Passe Faible";
        strengthText.style.color = "red";
        progressBar.style.backgroundColor = "red";
      }
    }
  });

// FONCTION CARTE RANDOM
function shuffle(array) {
  let currentIndex = array.length,
    randomIndex;

  while (currentIndex > 0) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex],
      array[currentIndex],
    ];
  }

  return array;
}

// FONCTION CREATION DE LA TABLE
function addTable(size) {
  if (alreadycreated) {
    document.getElementById("Tab_EasyDBZ" && "Tab_MediumDBZ" && "Tab_HardDBZ").innerHTML = "";
  }
  let counter = 0;
  let diff_selected = document.getElementById("select_diff");

  if (diff_selected.options[diff_selected.selectedIndex].value == "Easy") {
    var images = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8];
  }

  if (diff_selected.options[diff_selected.selectedIndex].value == "Medium") {
    var images = [
      1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 12,
      12, 13, 13, 14, 14, 15, 15, 16, 16, 17, 17, 18, 18, 19,
    ];
  }

  if (diff_selected.options[diff_selected.selectedIndex].value == "Hard") {
    var images = [
      1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 12,
      12, 13, 13, 14, 14, 15, 15, 16, 16, 17, 17, 18, 18, 19, 19, 20, 20, 21,
      21, 22, 22, 23, 23, 24, 24, 25, 25, 26, 26, 27, 27, 28, 28, 29, 29, 30,
      30, 31, 31, 32, 32, 33, 33, 34, 34, 35, 35, 36, 36, 37, 37, 38, 38, 39,
      39, 40, 40, 41, 41, 42, 42, 43, 43, 44, 44, 45, 45, 46, 46, 47, 47, 48,
      48, 49, 49, 50, 50, 51, 51, 52, 52, 53, 53, 54, 54, 55, 55, 56, 56, 57,
      57, 58, 58, 59, 59, 60, 60, 61, 61, 62, 62, 63, 63, 64, 64, 65, 65, 66,
      66, 67, 67, 68, 68, 69, 69, 70, 70, 71, 71, 72, 72,
    ];
  }

  shuffle(images);
  console.log(images);
  var myTableDiv = document.getElementById("Tab_EasyDBZ" && "Tab_MediumDBZ" && "Tab_HardDBZ");
  
  var table = document.createElement("table");
  table.id = "block";
  if (document.getElementById("block")) {
    return;
  }
  console.log(table);
  var tableBody = document.createElement("tbody");
  table.appendChild(tableBody);

  for (var i = 0; i < size; i++) {
    var tr = document.createElement("tr");
    tableBody.appendChild(tr);

    for (var j = 0; j < size; j++) {
      counter++;
      var td = document.createElement("td");
      var image = document.createElement("img");
      image.src = "assets/carte_DBZ/Carte_dosDBZ.png";
      image.classList.add(images[0]);
      image.id = counter;
      image.setAttribute("onclick", "change(this)");
      images.shift(); //remove le premier element du tableau
      td.appendChild(image);      
      tr.appendChild(td);
    }
  }
  myTableDiv.appendChild(table);
 
  alreadycreated = true;
}

// FONCTION CHANGEMENT D'IMAGE DE DOS À FACE
function change(img) {
  img.classList.add("animation");
  setTimeout(function () {
  
    img.src = "assets/DBZ_T1/DBZ-" + img.classList[0] + ".png";
    

    
    
  }, 150);

  setTimeout(function () {
  if (firstCard == ''){
    firstCard = img;
  }else{
    secondCard = img;

  console.log('firstCard = '+firstCard.classList);
  console.log('secondCard = '+secondCard.classList);
    if( firstCard.src == secondCard.src ){
      firstCard = '';
      secondCard = '';
    }else{
      firstCard.src = "assets/carte_DBZ/Carte_dosDBZ.png";
      secondCard.src = "assets/carte_DBZ/Carte_dosDBZ.png";
       firstCard.classList.remove('animation');
        secondCard.classList.remove('animation');
    }
    firstCard = '';
    secondCard = '';

  }

}, 1200);

}

// FONCTION VERIF DU SELECT DE LA DIFFICULTE DU THEME ET ACTIVE LE CHRONO
function checkSelectedAndChrono() {
  let diff_selected = document.getElementById("select_diff");
  let theme_selected = document.getElementById("select_themes");

  if (
    diff_selected.options[diff_selected.selectedIndex].value != "" &&
    theme_selected.options[theme_selected.selectedIndex].value != ""
  ) {
    console.log("test");
    diff_selected = diff_selected.options[diff_selected.selectedIndex].value;
    theme_selected = theme_selected.options[theme_selected.selectedIndex].value;
    if (diff_selected == "Easy") {
      addTable(4);
    }
    if (diff_selected == "Medium") {
      addTable(6);
    }
    if (diff_selected == "Hard") {
      addTable(12);
    }
  }
}

const time_button = document.getElementById("time_button");
const start = document.getElementById("strt");


let sec = 0;
let min = 0;
let hrs = 0;
let t = null;

function tick() {
  sec++;
  if (sec >= 60) {
    sec = 0;
    min++;
    if (min >= 60) {
      min = 0;
      hrs++;
    }
  }
}
function add() {
  tick();
  time_button.textContent =
    (hrs > 9 ? hrs : "0" + hrs) +
    ":" +
    (min > 9 ? min : "0" + min) +
    ":" +
    (sec > 9 ? sec : "0" + sec);
  timer();
}
function timer() {
  t = setTimeout(add, 1000);
}

start.onclick = timer;

