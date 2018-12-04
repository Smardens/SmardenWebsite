// validate input
function validate(i) {

    epNum = document.getElementById("epNum" + i).value;
    ehNum = document.getElementById("ehNum" + i).value;
    eName = document.getElementById("eName" + i).value;
    if(i===0 && (epNum === "" || ehNum === "" || eName ==="")){
        alert("All fields must be filled in for a new entry!");
    }
    if(epNum.match(/[^\d]/)|| ehNum.match(/[^\d]/) || epNum < 0 || ehNum < 0 ){
        alert("Only positive digits are allowed as input!");
        return false;
    }return true;


}

// Sets what is visible on form when editing a plant
function toggleForm(i) {

    var edit = document.getElementById("form" + i);


    if (edit.style.display === "none") {

        edit.style.display = "table-row";


    } else {

        edit.style.display = "none";



    }
    Scroll();

}

function Scroll() {
    window.scrollTo(0, document.body.scrollHeight);
}