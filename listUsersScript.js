$(document).ready(function(){

    /*Kevin */


    

    /*Kimberly */



    /* Peter */




    /*Kerene*/




    /*Shantay*/

        var query = 'Users';
        var addUserBtn = $('#addUserBtn');


        $.ajax({
            url:'listUsersRequest.php?query='+query,
            method: "GET",
            data:{query:query},
        }).done(function(response) {
            var responsed = response

            var checkDiv = document.querySelector('#checkingR');
            checkDiv.innerHTML = responsed;
            var checkDiv2 = document.querySelector('#checkingR p');
            var res = checkDiv2.innerHTML;
            console.log(res);

            var resultDiv = document.querySelector('#userListresult');

            if(res === ' 1'){
                resultDiv.innerHTML = `<p> Acess Denied </p>`
            }else{
                var resultHeading = document.querySelector('#userListDiv');
                resultHeading.style.visibility = "visible";
                resultDiv.innerHTML = response;
                
            }
        
            
            

        

        }).fail(function() {
            alert('There was a problem with the request.');
        });


        /*addUserBtn.on('click', function(){
        $.ajax({
            url:'adduser.php',
            method: "GET",
        }).done(function() {

        

        }).fail(function() {
            alert('There was a problem with the request.');
        });

        });*/

    
});
