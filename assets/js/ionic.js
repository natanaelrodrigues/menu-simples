
function menuClick(itemMenu){
    menu = document.getElementsByClassName('menu-aberto');


    let subMenu = '';
    for (var m =5; m > 0; m--){
        
        subMenu = 'sub-';
        subMenu += m;
        document.getElementById(subMenu).style.display = 'none';
    }
    subMenu = 'sub-' + itemMenu;
    document.getElementById('menu-aberto').style.display = 'block';   
    document.getElementById(subMenu).style.display = 'block'
    
  
}

function menuFechar(){
    document.getElementById('menu-aberto').style.display = 'none';   
}


