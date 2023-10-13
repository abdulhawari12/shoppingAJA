$(document).ready(function(){
 const navbarItems = document.querySelectorAll('.navbar-items');
 
 for(let i = 0; i < navbarItems.length; i++){
  if(navbarItems[i].href === window.location.href){
    navbarItems[i].classList.add('active');
  }
 }
  const menuToggle = document.querySelector(".menu-toggle");
 const menuToggleItems = document.querySelector(".menu-toggle-items");
   menuToggle.addEventListener("click", function(){
    menuToggle.classList.toggle('actived');
    menuToggleItems.classList.toggle('actived');
  });
});