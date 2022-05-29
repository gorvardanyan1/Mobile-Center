let alertDiv = document.querySelector(".alertDiv")

function validateFormInsert(){
    let name = document.forms["Iform"]["name"].value
    let price = document.forms["Iform"]["price"].value
    let model = document.forms["Iform"]["model"].value
    let img = document.forms["Iform"]["img"].value
    let info = document.forms["Iform"]["info"].value
    if (name == "" || price == "" || model == "" || img == "" || info =="") {
       alertDiv.style.display = "block"
        return false;
      }
}
function validateFormUpdate(){
    let name = document.forms["Uform"]["name"].value
    let price = document.forms["Uform"]["price"].value
    let model = document.forms["Uform"]["model"].value
    
    let info = document.forms["Uform"]["info"].value
    if (name == "" || price == "" || model == ""  || info =="") {
       alertDiv.style.display = "block"
        return false;
      }
}
