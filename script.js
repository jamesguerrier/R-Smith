const header = document.querySelector("header");

window.addEventListener ("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0);
});

let navLinks = document.getElementById("navLinks");   

function showMenu(){
    navLinks.style.right = "0px";
}
function hideMenu(){
    navLinks.style.right = "-350px"
}