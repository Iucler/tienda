const tableLista = document.querySelector("#tableListaProductos tbody");

document.addEventListener("DOMContentLoaded", function () {
  const tableLista = document.querySelector("#tableListaProductos tbody");
  if (tableLista) {
    getListaProductos();
  }
});

function getListaProductos() {
  const url = base_url + "principal/listaProductos";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(JSON.stringify(listaCarrito));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      let html = "";
      res.productos.forEach((producto) => {
        html += `  <tr>
          <td> <img class="img-thumbnail rounded-circle" src="${
            producto.imagen
          }" alt="" width="100"></td>
          <td>${producto.nombre}</td>
          <td><span class="badge bg-info">${
            producto.precio + res.moneda
          }</span></td>
          <td><span class="badge bg-info">${producto.cantidad}</span></td>
          <td><span class="badge bg-success">${
            producto.subtotal + res.moneda
          }</span>
      </tr>`;
      });
      tableLista.innerHTML = html;
      document.querySelector("#totalProductos").textContent =
        "Total a pagar: " + res.total + res.moneda;
    }
  };
}
