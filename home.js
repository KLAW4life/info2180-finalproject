function allUsers(){
    document.getElementById("filter-all").addEventListener("click", function(event){
        event.preventDefault();

        var filterSpace = document.getElementById("contact-table");
        var httpReq = new XMLHttpRequest();
        var url = "http://localhost/info2180-finalproject/dash.php";

        httpReq.onreadystatechange = function(){
            if(this.readyState == XMLHttpRequest.DONE && this.status == 200){
                filterSpace.innerHTML = this.responseText;
            }
        }

        httpReq.open("GET", url);
        httpReq.send();
    })
}

function viewContact(){
    document.getElementById("view").addEventListener("click", function(event){
        event.preventDefault();
        window.location = "viewContact.html";
    })
}

window.addEventListener("DOMContentLoaded", function(){
    allUsers();
    viewContact();
})