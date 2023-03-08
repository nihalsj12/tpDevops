
function CalcAge(age){
    var datej = new Date ();
    var dateN = document.Forms[0].elemets[3].value;
    var age= datej.getTime - dateN.getTime;

}

function run(value) {
        if (!value.includes("@")) {
            alert("ecrire  votre correct email");
            document.forms[0].elements[2].focus();

        }
    }