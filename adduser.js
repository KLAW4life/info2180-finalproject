window.onload = function(){

    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let email = document.getElementById("email");
    let pword = document.getElementById("pword");
    let formbtn = document.getElementById("savebtn");

    formbtn.addEventListener('click', function(e){
        e.preventDefault();

        //console.log("console is working");

        var insertrequest = new XMLHttpRequest();
        var url = "http://localhost/info2180-project2/info2180-finalproject/adduser.php?firstname=" + fname.value + "&lastname=" + lname.value + "&email=" +  email.value + "&password=" +  pword.value;
        insertrequest.onreadystatechange = function(){
            if(insertrequest.readyState == XMLHttpRequest.DONE){
                if(insertrequest.status == 200){
                    alert("User successfully added!")
                }
                else{
                    alert("User cannot be added! Please try again!")
                }
                
            }
        }
        insertrequest.open("GET",url,true);
        insertrequest.send();
        document.location.reload();


    });
}




