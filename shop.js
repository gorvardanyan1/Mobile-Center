let date = new Date()
let openClose = document.querySelectorAll(".openClose")

if (date.getHours() <= 18) {
    openClose.forEach(function (item) {
        item.style.color = "blue"
        item.innerHTML = "Բաց է"
    })
}else{
    openClose.forEach(function (item) {
        item.style.color = "red"
        item.innerHTML = "Փակ է"
    })
}