const btnRegister = document.querySelector("#btnRegister");
const btnLogin = document.querySelector("#btnLogin");
const formLogin = document.querySelector("#formLogin");
const formRegister = document.querySelector("#formRegister");
const registrarse = document.querySelector("#registrarse");
const login = document.querySelector("#login");

const nombreRegistro = document.querySelector("#nombreRegister");
const claveRegistro = document.querySelector("#claveRegistro");
const correoRegistro = document.querySelector("#correoRegistro");

const claveLogin = document.querySelector("#claveLogin");
const correoLogin = document.querySelector("#correoLogin");

const modalLogin = new bootstrap.Modal(document.getElementById("modalLogin"));

document.addEventListener("DOMContentLoaded", function () {
  btnRegister.addEventListener("click", function () {
    formLogin.classList.add("d-none");
    formRegister.classList.remove("d-none");
  });
  btnLogin.addEventListener("click", function () {
    formRegister.classList.add("d-none");
    formLogin.classList.remove("d-none");
  });

  //registro
  registrarse.addEventListener("click", function () {
    if (
      nombreRegistro.value == "" ||
      correoRegistro.value == "" ||
      claveRegistro.value == ""
    ) {
      Swal.fire({
        title: "Aviso!",
        text: "Todos los campos son requeridos",
        icon: "warning",
        confirmButtonText: "Cool",
      });
    } else {
      let formData = new FormData();
      formData.append("nombre", nombreRegistro.value);
      formData.append("clave", claveRegistro.value);
      formData.append("correo", correoRegistro.value);
      const url = base_url + "clientes/registroDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          Swal.fire({
            title: "Aviso!",
            text: res.msg,
            icon: res.icono,
            confirmButtonText: "Cool",
          });
          if (res.icono == "success") {
            setTimeout(() => {
              enviarCorreo(correoRegistro.value, res.token);
            }, 2000);
          }
        }
      };
    }
  });
  //login directo
  login.addEventListener("click", function () {
    if (correoLogin.value == "" || claveLogin.value == "") {
      console.log("aviso");
      Swal.fire({
        title: "Aviso!",
        text: "Todos los campos son requeridos",
        icon: "warning",
        confirmButtonText: "Cool",
      });
    } else {
      console.log("entre");
      let formData = new FormData();
      formData.append("correoLogin", correoLogin.value);
      formData.append("claveLogin", claveLogin.value);
      const url = base_url + "clientes/loginDirecto";
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(formData);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          Swal.fire({
            title: "Aviso!",
            text: res.msg,
            icon: res.icono,
            confirmButtonText: "Cool",
          });
          if (res.icono == "success") {
            setTimeout(() => {
              window.location.reload();
            }, 2000);
          }
        }
      };
    }
  });
});

function enviarCorreo(correo, token) {
  let formData = new FormData();
  formData.append("token", token);
  formData.append("correo", correo);
  const url = base_url + "clientes/enviarCorreo";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(formData);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      Swal.fire({
        title: "Aviso!",
        text: res.msg,
        icon: res.icono,
        confirmButtonText: "Cool",
      });
      if (res.icono == "success") {
        setTimeout(() => {
          window.location.reload();
        }, 2000);
      }
    }
  };
}

function abrirModalLogin() {
  myModal.hide();
  modalLogin.show();
}
