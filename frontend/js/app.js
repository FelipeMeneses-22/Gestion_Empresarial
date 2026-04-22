// ========================= REGISTRO ==========================

document.addEventListener("DOMContentLoaded", () => {
  const registerForm = document.getElementById("registerForm");
  if (registerForm) {
    registerForm.addEventListener("submit", function (e) {
      e.preventDefault();

      let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

      const nuevoUsuario = {
        nombre: document.getElementById("r-name").value,
        email: document.getElementById("r-email").value,
        pass: document.getElementById("r-pass").value,
        rol: document.getElementById("r-role").value,
      };

      usuarios.push(nuevoUsuario);
      localStorage.setItem("usuarios", JSON.stringify(usuarios));

      alert("Usuario registrado correctamente");
      window.location.href = "login.html";
    });
  }

  // ========================= LOGIN ==========================

  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();

      let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

      const email = document.getElementById("l-email").value;
      const pass = document.getElementById("l-pass").value;
      const rol = document.getElementById("l-role").value;

      const usuarioEncontrado = usuarios.find(
        (u) => u.email === email && u.pass === pass && u.rol === rol,
      );

      if (!usuarioEncontrado) {
        alert("Datos incorrectos.");
        return;
      }

      localStorage.setItem("usuarioActivo", JSON.stringify(usuarioEncontrado));
      window.location.href = "home.html";
    });
  }
});

// ========================= HOME ==============================

function cargarHome() {
  const usuario = JSON.parse(localStorage.getItem("usuarioActivo"));
  if (!usuario) window.location.href = "login.html";

  document.getElementById("mensajeRol").textContent =
    `Bienvenido ${usuario.nombre}, tu rol es ${usuario.rol}`;

  cargarOpciones(usuario.rol);
}

function cargarOpciones(rol) {
  const menu = document.getElementById("menuOpciones");
  menu.innerHTML = `<option>Opciones</option>`;

  const roles = {
    administrador: ["Administrador", "Productos", "Inventario", "Reportes"],
    gerente: [
      "ventas",
      "inventario",
      "Compra de insumos",
      "Reportes basicos",
      "pedidos",
      "empleados",
    ],
    asistente: [
      "Registrar venta",
      "Ver inventario",
      "Registrar gastos",
      "Caja diaria",
    ],
  };

  roles[rol]?.forEach((op) => {
    const opt = document.createElement("option");
    opt.textContent = op;
    menu.appendChild(opt);
  });
}

function cerrarSesion() {
  localStorage.removeItem("usuarioActivo");
  window.location.href = "login.html";
}
