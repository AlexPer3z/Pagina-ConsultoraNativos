
<?php include __DIR__ . '/includes/supabase.php'; ?>

<style>
.user-menu{position:relative;display:none;}
.user-button{border:1px solid #ddd;background:white;padding:6px 12px;border-radius:20px;cursor:pointer;font-size:14px;}
.user-dropdown{display:none;position:absolute;right:0;top:35px;background:white;border:1px solid #ddd;border-radius:10px;min-width:150px;box-shadow:0 4px 10px rgba(0,0,0,0.1);overflow:hidden;}
.user-dropdown a{display:block;padding:10px;text-decoration:none;color:#333;font-size:14px;}
.user-dropdown a:hover{background:#f5f5f5;}
.user-dropdown.show{display:block;}
.nav-menu {
  display: flex;
  gap: 20px;
}

/* Oculta menú en móvil inicialmente */
@media (max-width: 768px) {
      .nav-menu {
        display: none;
        flex-direction: column;
        position: absolute;
        right: 0;
        background: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        min-width: 200px;
        z-index: 1000;
        width: 100%;
        text-align: center;
        align-items: normal;
        height: max-content;
  }

  .nav-menu.show {
    display: flex;
  }
}
</style>


<header class="navbar navbar--sticky">
  <div class="container-header">
    <a href="index.php" class="logo" style="margin-right:auto;">
      <img src="assets/logo.png" alt="Toori Logo">
      <span>Toori ServiciosYa</span>
    </a>
    <div class="menu-toggle" id="mobile-menu-btn">
      <i class="bi bi-list"></i>
    </div>
    <nav class="nav-menu" id="nav-menu">
      <a href="index.php" class="nav-link">Inicio</a>
      <a href="index.php#como-funciona" class="nav-link">¿Cómo funciona?</a>
      <a href="ofertas.php" class="nav-link">Ofertas</a>
      <a href="registro.php" class="nav-link" id="nav-worker-link">Soy Trabajador</a>
      <a href="login.php" class="nav-link" id="nav-login-link">Ingresá</a>

      <!-- Usuario logueado -->
      <div id="user-menu" class="user-menu">
        <button id="user-button" class="user-button"></button>
        <div id="user-dropdown" class="user-dropdown">
          <a href="perfil.php">Perfil</a>
          <a href="#" id="logout-btn">Cerrar sesión</a>
        </div>
      </div>
    </nav>
  </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const mobileBtn = document.getElementById("mobile-menu-btn");
  const navMenu = document.getElementById("nav-menu");

  mobileBtn.addEventListener("click", () => {
    navMenu.classList.toggle("show"); // togglea clase para mostrar/ocultar
  });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", async () => {

  // Usa la instancia global de Supabase
  const supabaseClient = window.supabaseClient;

  const loginLink = document.getElementById("nav-login-link");
  const workerLink = document.getElementById("nav-worker-link");
  const userMenu = document.getElementById("user-menu");
  const userButton = document.getElementById("user-button");
  const userDropdown = document.getElementById("user-dropdown");
  const logoutBtn = document.getElementById("logout-btn");

  // Función para actualizar UI según sesión
  const updateUI = (session) => {
    if (session) {
      loginLink.style.display = "none";
      workerLink.style.display = "none";
      userMenu.style.display = "block";
      userButton.textContent = session.user.email;
    } else {
      loginLink.style.display = "block";
      workerLink.style.display = "block";
      userMenu.style.display = "none";
    }
  };

  // Obtener sesión inicial
  const { data: { session }, error } = await supabaseClient.auth.getSession();
  if (error) console.error("Error obteniendo sesión:", error);
  updateUI(session);

  // Detecta cambios de sesión en tiempo real
  supabaseClient.auth.onAuthStateChange((event, session) => {
    updateUI(session);
  });

  // Toggle dropdown
  userButton.addEventListener("click", (e) => {
    userDropdown.classList.toggle("show");
  });

  // Cerrar dropdown al click fuera
  document.addEventListener("click", (e) => {
    if (!userMenu.contains(e.target)) {
      userDropdown.classList.remove("show");
    }
  });

  // Logout
  logoutBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    await supabaseClient.auth.signOut();
    updateUI(null);
    window.location.href = "index.php";
  });

});
</script>