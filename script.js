

function button_commencer_jeu(){
document.getElementById('button_commencer_jeu').addEventListener('click'), function() {

        let elements = document.getElementsByClassName("error");
        while (elements.length > 0) {elements[0].remove();}
}
let select = document.getElementById('select_diff')
let select2 = document.getElementById('select_themes')
}


if(select.value == ''){
            var selectDiv = document.getElementById ('fileSelect_diff');
            console.log(selectDiv)
            fileSelect_diff.insertAdjacentHTML('beforeend',
            '<p class="error"> Veuillez selectionnez une difficultés </p>')
        }


if(select.value == ''){
            var selectDiv = document.getElementById ('fileSelect_themes');
            fileSelect_themes.insertAdjacentHTML('beforeend',
            '<p class="error"> Ce champ doit être rempli </p>')
        }




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
                    strengthText.textContent = "Fort";
                    progressBar.style.backgroundColor = "green";
                  } else {
                    strengthText.textContent = "Moyen";
                    progressBar.style.backgroundColor = "orange";
                  }
                } else if (length > 8) {
                  strengthText.textContent = "Moyen";
                  progressBar.style.backgroundColor = "orange";
                } else {
                  strengthText.textContent = "Faible";
                  progressBar.style.backgroundColor = "red";
                }
              }
              