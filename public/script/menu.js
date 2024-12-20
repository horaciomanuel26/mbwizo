const menu = document.getElementById('menu')

function abri_fechar(){
    if(menu.style.display === 'none'){
        menu.style.display='flex'
    }else{
        menu.style.display='none'
    }
}