
document.getElementById('button_commencer_jeu').addEventListener('click'), function() {

        let elements = document.getElementsByClassName("error");
        while (elements.length > 0) elements[0].remove();

let select = document.getElementById('select_diff')
let select2 = document.getElementById('select_themes')
}


if(select.value == ''){
            var selectDiv = document.getElementById ('fileSelect_diff');
            fileSelect_diff.insertAdjacentHTML('beforeend',
            '<p class="error"> Veuillez selectionnez une difficultés </p>')
        }


if(select.value == ''){
            var selectDiv = document.getElementById ('fileSelect_themes');
            fileSelect_themes.insertAdjacentHTML('beforeend',
            '<p class="error"> Ce champ doit être rempli </p>')
        }
