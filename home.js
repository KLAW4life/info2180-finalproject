function allUsers(){
    document.getElementById("filter-all").addEventListener("click", function(event){
        event.preventDefault();

        var filterSpace = document.getElementById("contact-table");
        var httpReq = new XMLHttpRequest();
        var url = "http://localhost/info2180-finalproject/dashphp/allfilter.php";

        httpReq.onreadystatechange = function(){
            if(this.readyState == XMLHttpRequest.DONE && this.status == 200){
                filterSpace.innerHTML = this.responseText;
            }
        }

        httpReq.open("GET", url);
        httpReq.send();
    })
}

function salesLeads(){
    document.getElementById("sales-lead").addEventListener("click", function(event){
        event.preventDefault();

        var filterSpace = document.getElementById("contact-table");
        var httpReq = new XMLHttpRequest();
        var url = "http://localhost/info2180-finalproject/dashphp/salesfilter.php";

        httpReq.onreadystatechange = function(){
            if(this.readyState == XMLHttpRequest.DONE && this.status == 200){
                filterSpace.innerHTML = this.responseText;
            }
        }

        httpReq.open("GET", url);
        httpReq.send();
    })
}

function supports(){
    document.getElementById("support").addEventListener("click", function(event){
        event.preventDefault();

        var filterSpace = document.getElementById("contact-table");
        var httpReq = new XMLHttpRequest();
        var url = "http://localhost/info2180-finalproject/dashphp/supportfilter.php";

        httpReq.onreadystatechange = function(){
            if(this.readyState == XMLHttpRequest.DONE && this.status == 200){
                filterSpace.innerHTML = this.responseText;
            }
        }

        httpReq.open("GET", url);
        httpReq.send();
    })
}

function assigned(){
    document.getElementById("assigned").addEventListener("click", function(event){
        event.preventDefault();

        var filterSpace = document.getElementById("contact-table");
        var httpReq = new XMLHttpRequest();
        var url = "http://localhost/info2180-finalproject/dashphp/assignfilter.php";

        httpReq.onreadystatechange = function(){
            if(this.readyState == XMLHttpRequest.DONE && this.status == 200){
                filterSpace.innerHTML = this.responseText;
            }
        }

        httpReq.open("GET", url);
        httpReq.send();
    })
}

function newContact(){
    document.getElementById("contact-btn").addEventListener("click", function(event){
        event.preventDefault();
        window.location = "newcontact.php";
    })
}

window.addEventListener("DOMContentLoaded", function(){
    allUsers();
    salesLeads();
    supports();
    assigned();
    newContact();
})