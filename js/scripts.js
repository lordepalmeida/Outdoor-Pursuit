window.onscroll = function(){
  menu = document.querySelector('.menu');
  if(this.scrollY > 20)
    menu.classList.add("sticky");
  else
    menu.classList.remove("sticky");
}

function toggleShape(elem){
  elem.classList.toggle('active');
  document.querySelector('.navbar-menu').classList.toggle('active');
}



