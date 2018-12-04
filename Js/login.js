//validate input
function validate() {
        
    unam = document.getElementById("username").value;
    pass = document.getElementById("pass").value;

        
        if(unam.trim() ==="" || pass.trim()==="") {
            alert('You must enter valid data for username and password!');
            return false;
        }
        else {
            return true;
        }
    }
