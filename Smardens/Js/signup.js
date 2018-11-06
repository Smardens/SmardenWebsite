function validate() {
        
    unam = document.getElementById("username").value;
    pass = document.getElementById("pass").value;
    tok = document.getElementById("tok").value;

        
        if(unam.trim() ==="" || pass.trim()===""|| tok.trim()==="") {
            alert('You must enter valid data for username, password , and token!');
            return false;
        }
        else {
            return true;
        }
    }
