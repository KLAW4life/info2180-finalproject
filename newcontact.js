window.onload = function(){

    let fname = document.getElementById("firstname");
    let lname = document.getElementById("lastname");
    let email = document.getElementById("email");
    let pword = document.getElementById("pword");
    let formbtn = document.getElementById("save-btn");

    formbtn.addEventListener('click', function(e){
        e.preventDefault();

        //console.log("console is working");

        var insertrequest = new XMLHttpRequest();
        var url = "http://localhost/info2180-project2/info2180-finalproject/newcontact.php?&firstname=" + fname.value + "&lastname=" + lname.value + "&email=" +  email.value + "&password=" +  pword.value;
        insertrequest.onreadystatechange = function(){
            if(insertrequest.readyState == XMLHttpRequest.DONE){
                if(insertrequest.status == 200){
                    alert("Contact successfully added!")
                }
                else{
                    alert("Contact cannot be added! Please try again!")
                }

            }
        }
        insertrequest.open("GET",url,true);
        insertrequest.send();
        document.location.reload();


    });
}
