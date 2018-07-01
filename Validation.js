function validateForm() {
    // var x = document.forms["myForm"]["myInputAmount"].value;
    var x = document.getElementById("myInputAmount").value;
    if (x == "") {
        alert("Amount must be filled out");
        return false;
    }
}