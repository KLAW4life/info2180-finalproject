function login(){
    document.querySelector("button").addEventListener("click", function(event){
        event.preventDefault();
        var emailInput = document.getElementById("email").value;
        var passwordInput = document.getElementById("password").value;
        var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


        console.log(emailInput);
        console.log(passwordInput);

        if (regex.test(emailInput) == false){
            alert("Invalid email address");
        }
        else{
            window.location = "home.php";
        }
    })
}

window.addEventListener("DOMContentLoaded", function(){
    login();
})