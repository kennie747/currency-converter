
function getOption() {
    var objFrom = document.getElementById("myFromSelection");
    var objTo = document.getElementById("myToSelection");
   
    var query = objFrom.options[objFrom.selectedIndex].text + "_" + objTo.options[objTo.selectedIndex].text ;
    document.getElementById("myHidden").value = query;
    document.getElementById("demo").innerHTML = query;
}
