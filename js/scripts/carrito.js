function AgregarACarro(idProducto) {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.numProducto) {
            localStorage.numProducto = Number(localStorage.numProducto)+1;
        } else {
            localStorage.numProducto = 1;
        }
        localStorage.setItem("producto"+localStorage.numProducto,idProducto);
        document.getElementById("result").innerHTML = "Veces click " + localStorage.numProducto + " Id: " + localStorage.producto;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
