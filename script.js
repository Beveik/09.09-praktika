"use strict";

function showUsers() {
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "action.php", true);
    xhttp.send();
}

showUsers();

// });

document.querySelector("#create").addEventListener("click", function() {

var UserForm = document.querySelector("#UserForm");
UserForm.classList.toggle("d-none");
// jeigu paslepta - atsiranda
// jeigu matoma - pasislepia

document.querySelector("#vardas").value = "";
document.querySelector("#pavarde").value = "";
document.querySelector("#slapyvardis").value = "";
document.querySelector("#slaptazodis").value = "";
document.querySelector("#teises_id").value = "";

});

document.querySelector("#createUser").addEventListener("click", function() {
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var slapyvardis = document.querySelector("#slapyvardis").value;
    var slaptazodis = document.querySelector("#slaptazodis").value;
    var teises_id =  document.querySelector("#teises_id").value;
    
    //ajax uzklausa
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("GET", "addUser.php?vardas=" + vardas + "&pavarde=" + pavarde + "&slapyvardis=" + slapyvardis + "&slaptazodis=" + slaptazodis + "&teises_id=" + teises_id, true);

    xhttp.send();    

    
    showUsers();

});  
var mygtukai =   document.querySelectorAll('deleteUser'); // mygtukų masyvas

for(mygtukai of mygtukas) { //foreach js
mygtukas.addEventListener("click", function() {
   console.lg (this.getAttribute("data-user-id"));

   var id = this.getAttribute("data-company-id")
   var xhttp = new XMLHttpRequest(); //objektas

   xhttp.onreadystatechange = function() {
       if(this.readyState == 4 && this.status == 200) {
           document.querySelector("#alert-space").innerHTML = this.responseText; // 
       }
   };
   
   xhttp.open("GET", "deleteUser.php?id=" + id, true);
   xhttp.send(); 
});
}
//document.querySelector("#deleteButton").addEventListener("click", function(){ - pasirinks tik pirmą mygtuką


//});
