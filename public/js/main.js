let checkbox_hond = document.getElementById("hond");
let checkbox_kat = document.getElementById("kat");
let checkbox_vogel = document.getElementById("vogel");
let checkbox_vis = document.getElementById("vis");
let checkbox_overig = document.getElementById("overig");
let list_of_dieren = document.getElementsByTagName("li");

checkbox_hond.checked = true;
checkbox_kat.checked = true;
checkbox_vogel.checked = true;
checkbox_vis.checked = true;
checkbox_overig.checked = true;

checkbox_hond.addEventListener('change', function(){
    if(checkbox_hond.checked){
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'hond'){
                list_of_dieren[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'hond'){
                list_of_dieren[i].style.display = 'none';
            }
        }
    }

});

checkbox_kat.addEventListener('change', function(){
    if(checkbox_kat.checked){
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'kat'){
                list_of_dieren[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'kat'){
                list_of_dieren[i].style.display = 'none';
            }
        }
    }

});

checkbox_vogel.addEventListener('change', function(){
    if(checkbox_vogel.checked){
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'vogel'){
                list_of_dieren[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'vogel'){
                list_of_dieren[i].style.display = 'none';
            }
        }
    }

});

checkbox_vis.addEventListener('change', function(){
    if(checkbox_vis.checked){
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'vis'){
                list_of_dieren[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'vis'){
                list_of_dieren[i].style.display = 'none';
            }
        }
    }

});

checkbox_overig.addEventListener('change', function(){
    if(checkbox_overig.checked){
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'overig'){
                list_of_dieren[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < list_of_dieren.length; i++){
            if(list_of_dieren[i].dataset.kindOfHuisdier == 'overig'){
                list_of_dieren[i].style.display = 'none';
            }
        }
    }

});

