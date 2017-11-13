console.log('yaw');

var menu = document.querySelector(".menu-wrapper");
console.log(menu);
var menuButton = document.querySelector(".menu-icon");
console.log(menuButton);

var menuState = 0;
console.log(menuState);

menuButton.addEventListener("click", function(){
    if(menuState == 0){
        menuState = 1;
        console.log(menuState);
        menu.classList.remove("menu-hidden");
    }
    else {
        menuState = 0;
        console.log(menuState);
        menu.classList.add("menu-hidden");
    }
});