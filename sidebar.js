
function home(){
    document.getElementById("home-btn").addEventListener("click", function(event){
        event.preventDefault();
        window.location = "home.php";
    })
}

function newContact(){
    document.getElementById("new-contact-btn").addEventListener("click", function(event){
        event.preventDefault();
        window.location = "newcontact.php";
    })
}

function logOut(){
    document.getElementById("logout-btn").addEventListener("click", function(event){
        event.preventDefault();
        window.location = "logout.php";
    })
}

window.addEventListener("DOMContentLoaded", function(){
    home();
    newContact();
    logOut();
})