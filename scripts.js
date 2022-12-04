$(document).ready(function(){

    /*Kevin */


    

    /*Kimberly */



    /* Peter */




    /*Kerene*/




    /*Shantay*/


    var listUsersBtn = $('#listUsersBtn');

    listUsersBtn.on('click', function(){
        var query = 'Users';


        $.ajax({
            url:'schema.php?query='+query,
            method: "GET",
            data:{query:query}
        }).done(function(response) {
        
            var resultDiv = document.querySelector('#resultspace');
            var resultHeading = document.querySelector('#result');
            resultHeading.insertBefore(document.querySelector('#userListDiv'), resultHeading.children[0]);
            resultDiv.innerHTML = response;
            resultDiv.style.visibility = "visible";

        

        }).fail(function() {
            alert('There was a problem with the request.');
        });
    })

    

});