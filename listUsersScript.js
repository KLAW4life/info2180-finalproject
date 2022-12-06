$(document).ready(function(){

    /*Kevin */


    

    /*Kimberly */



    /* Peter */




    /*Kerene*/




    /*Shantay*/

        var query = 'Users';


        $.ajax({
            url:'listUsersRequest.php?query='+query,
            method: "GET",
            data:{query:query},
        }).done(function(response) {
        
            var resultDiv = document.querySelector('#userListresult');
            resultDiv.innerHTML = response;

        

        }).fail(function() {
            alert('There was a problem with the request.');
        });
    })

    

;