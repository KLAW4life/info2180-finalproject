let assignBtn = document.querySelector(".assign")
let switchBtn = document.querySelector(".switch")
let notesInput = document.getElementById("noteInput")
let noteAddBtn = document.querySelector(".Add")

noteAddBtn.addEventListener("click", function(element){
    element.preventDefault();
    if (notesInput.value != ""){
        fetch("",{
            method:"POST",
            headers: {'Content-Type':'application/x-www-form-urlencoded'},
            body: `note=${notesInput.value}`
        })
        .then(response=>{return response.text()})
        .then(data =>{
            
        })
        .catch(error=>{console.log(error)})
    }
})

assignBtn.addEventListener("click", function(element){
    element.preventDefault();
    
    


});
switchBtn.addEventListener("click", function(element){
    element.preventDefault
    
});