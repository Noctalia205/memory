document.getElementById('button_commencer_jeu').addEventListener('click', function() {

  let elements = document.getElementsByClassName("error");
  while (elements.length > 0) elements[0].remove();

let select = document.getElementById('select_diff')
let select2 = document.getElementById('select_themes')


if(select.value == ''){
      var selectDiv = document.getElementById ('fileSelect_diff');
      fileSelect_diff.insertAdjacentHTML('beforeend',
      '<p class="error"> Aucune difficultée selectionné ! </p>')
  }


if(select2.value == ''){
      var selectDiv = document.getElementById ('fileSelect_themes');
      fileSelect_themes.insertAdjacentHTML('beforeend',
      '<p class="error"> Aucun thèmes selectionné !</p>')
  }

})

var time_button = document.getElementById('time_button');
var start = document.getElementById('strt');
var stop = document.getElementById('stp');

var sec = 0;
var min = 0;
var hrs = 0;
var t;

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
time_button.textContent = (hrs > 9 ? hrs : '0' + hrs) + ':' +
(min > 9 ? min : '0' + min) + ':' + (sec > 9 ? sec : '0' + sec);
timer();
}
function timer() {
t = setTimeout(add, 1000);
}

start.onclick = timer;
stop.onclick = function() {
clearTimeout(t);
}


document.getElementById('button_commencer_jeu').addEventListener('click',function () {

  let elements = document.getElementById("Tab_EasyDBZ");
  while (elements.length > 0) elements[0].remove();



function addTable() {

}
}
)






//         var classimg = [1,1,2,2,3,3,4,4,5,5,6,6,7,8,8];
//         shuffle(classimg);

//         var myTableDiv = document.getElementById("Tab_EasyDBZ");
//         var table = document.createElement('TABLE');
//         console.log(table)
//         var tableBody = document.createElement('TBODY');
//         table.appendChild(tableBody);

//         for (var i = 0; i < 4; i++) {
//           var tr = document.createElement('TR');
//           tableBody.appendChild(tr);

//           for (var j = 0; j < 4; j++) {
//             var td = document.createElement('TD');
//             td.width = '75';
//             td.innerHTML ='  <img src="assets/DBZ_T1/DBZ_8.png" onclick="getClass('+classimg[0]+')" class="'+classimg[0]+'" />';
     
//             classimg.shift();
//             tr.appendChild(td);
//           }
//         }
//         myTableDiv.appendChild(table);
//       }
//       addTable();

//       function getClass(classImage){
//         alert(classImage);
//       }


//       function randomize(table) {
//         let i, j, tmp;
//         for (i = tab.length - 1; i > 0; i--) {
//             j = Math.floor(Math.random() * (i + 1));
//             tmp = table[i];
//             table[i] = table[j];
//             table[j] = tmp;
//         }
//         return table;
//     }

//     function shuffle(array) {
//         let currentIndex = array.length,  randomIndex;

  
//         while (currentIndex > 0) {

    
//           randomIndex = Math.floor(Math.random() * currentIndex);
//           currentIndex--;

    
//           [array[currentIndex], array[randomIndex]] = [
//             array[randomIndex], array[currentIndex]];
//         }

//         return array;



        function checkPasswordStrength() {
                const password = document.getElementById("passwordInput").value;
                const progressBar = document.getElementById("progressBar");
                const strengthText = document.getElementById("strengthText");
                var reg = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
              
                const length = password.length;
              

                progressBar.style.width = length * 2 + "%";
              
               
                console.log(reg.test(password))
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
              