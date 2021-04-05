let checkbox_hond = document.getElementById("hond");
let checkbox_kat = document.getElementById("kat");
let list_of_pets = document.getElementsByTagName('li');

checkbox_hond.checked = true;
checkbox_kat.checked = true;


checkbox_hond.addEventListener('change', function(){
    if(checkbox_hond.checked ){
        for(let i = 0;  i < list_of_pets.length; i++){          
            if (list_of_pets[i].dataset.kindOfPet == "hond"){
                list_of_pets[i].style.display = '';
                console.log("kaas");
                
            }

        }
    }
    else{
        for(let i = 0;  i < list_of_pets.length; i++){
            if (list_of_pets[i].dataset.kindOfPet == "hond"){
                list_of_pets[i].style.display = 'none';
            }

        }

    }

});
checkbox_kat.addEventListener('change', function(){
    if(checkbox_kat.checked ){
        for(let i = 0;  i < list_of_pets.length; i++){
            if (list_of_pets[i].dataset.kindOfPet == "kat"){
                list_of_pets[i].style.display = '';
            }

        }
    }
    else{
        for(let i = 0;  i < list_of_pets.length; i++){
            if (list_of_pets[i].dataset.kindOfPet == "kat"){
                list_of_pets[i].style.display = 'none';
            }

        }

    }
});

