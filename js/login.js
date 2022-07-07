function login(){
    var username = document.getElementById("usuario").value;
    var password = document.getElementById("contrasena").value; 
    if (username === "admin" && password === "admin") {
        location.replace("./index.html");
    } else {
      alert("El usuario o contraseña son inválidos");
    }
}

function linkdirectorio(){
  location.assign("./index.html")
}