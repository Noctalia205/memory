

function button_commencer_jeu(){
document.getElementById('button_commencer_jeu').addEventListener('click'), function() {
}
let select = document.getElementById('select_diff')
let select2 = document.getElementById('select_themes')
}


if(select.value==''){
            var selectDiv = document.getElementById ('fileSelect_diff');
            console.log(selectDiv)
            fileSelect_diff.insertAdjacentHTML('beforeend',
            '<p class="error"> Veuillez selectionnez une difficultés </p>')
        }


if(select2.value ==''){
            var selectDiv = document.getElementById ('fileSelect_themes');
            fileSelect_themes.insertAdjacentHTML('beforeend',
            '<p class="error"> Ce champ doit être rempli </p>')
        }
