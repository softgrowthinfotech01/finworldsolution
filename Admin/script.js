// sidebar js 

function profileToggle(){
const profileDropdown = document.getElementById("ProfileDropDown");
profileDropdown.classList.toggle("hidden");
}


function toggleMenu(menuId){
const menu = document.getElementById(menuId);

if(menu){
menu.classList.toggle("hidden");
}

}


function sidebarToggle(){

const sidebar = document.getElementById("sidebar");

if(window.innerWidth < 768){

// mobile
sidebar.classList.toggle("-translate-x-full");

}else{

// desktop
sidebar.classList.toggle("sidebar-collapsed");

}

}

// user profile js 
function profileToggle(event){
    event.stopPropagation(); // stop click from bubbling

    const dropdown = document.getElementById("ProfileDropDown");
    dropdown.classList.toggle("hidden");
}


// close dropdown if clicking outside
document.addEventListener("click", function(event){

    const dropdown = document.getElementById("ProfileDropDown");
    const profileArea = event.target.closest(".profile-area");

    if(!profileArea){
        dropdown.classList.add("hidden");
    }

});


