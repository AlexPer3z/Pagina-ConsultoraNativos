<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Trabajador - Toori ServiciosYa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/main-D3W1u2cc.css">
    <style>
        body { background-color: #f8fafc; font-family: 'Plus Jakarta Sans', sans-serif; }
        .container { padding: 60px 0; display: flex; justify-content: center; }
        .card-premium { max-width: 650px; width: 100%; padding: 50px; background: white; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);}
        .form-group { margin-bottom: 20px; }
        .form-control { width: 100%; padding: 12px 15px; border-radius: 12px; border: 1px solid #ccc; }
        select.form-control { cursor: pointer; }
        .alert { padding: 10px; border-radius: 5px; margin-bottom: 20px; display:none; }
        .alert-success { background-color: #d4edda; color: #155724; }
        .alert-error { background-color: #f8d7da; color: #721c24; }
        .profile-preview {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 2px dashed #ccc;
    margin: 0 auto 10px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    cursor: pointer;
    position: relative;
}

#preview-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

#preview-placeholder {
    font-size: 48px;
    color: #ccc;
}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    <script>
        // Inicializar Supabase
        const supabaseUrl = "https://dhhhftzdfpqthzvkrqoz.supabase.co";
        const supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImRoaGhmdHpkZnBxdGh6dmtycW96Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NDQ2OTQyODUsImV4cCI6MjA2MDI3MDI4NX0.-atBYl9Uica9quKZQzqmgWQ8wNd1PFB4ivLrSNv89OQ";
        window.supabaseClient = supabase.createClient(supabaseUrl, supabaseKey);
    </script>
</head>
<body>
<?php include 'header.php'; ?>

<main class="container">
    <div class="card-premium">
        <h1 class="text-center mb-3">Sumate a nuestra red</h1>
        <p class="text-center text-muted mb-4">Postulate para formar parte de los profesionales gestionados por Toori.</p>

        <div id="reg-alert" class="alert"></div>

        <form id="registro-form">
            <div class="grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                <div class="form-group text-center">
    <label>Foto de perfil</label>
    <div class="profile-preview" id="profile-preview">
        <img src="" alt="Preview" id="preview-img" style="display:none;">
        <div id="preview-placeholder">+</div>
    </div>
    <input type="file" id="reg-foto" accept="image/*" style="display:none;">
</div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" id="reg-nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>DNI</label>
                    <input type="text" id="reg-dni" class="form-control" required>
                </div>
            </div>

            <div class="grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="reg-email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" id="reg-password" class="form-control" required minlength="6">
                </div>
            </div>

            <div class="grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                <div class="form-group">
                    <label>Edad</label>
                    <input type="number" id="reg-edad" class="form-control">
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="tel" id="reg-celular" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label>En qué te especializás</label>
                <select id="reg-profesion" class="form-control" required>
                    <option value="">Cargando categorías...</option>
                </select>
            </div>

            <div class="form-group">
                <label>Matrícula / Habilitación</label>
                <input type="checkbox" id="reg-matricula" style="width:20px;height:20px;">
            </div>

            <div class="form-group">
                <label>Años de experiencia</label>
                <input type="number" id="reg-antiguedad" class="form-control" value="1">
            </div>

            <div class="form-group">
                <label>Contanos sobre vos</label>
                <textarea id="reg-antecedentes" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="checkbox" id="reg-terminos" required>
                <label>Acepto los <a href="/Terminos-y-condiciones.php">Términos y Condiciones</a></label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>


<script>
document.addEventListener('DOMContentLoaded', async () => {
    const alertDiv = document.getElementById('reg-alert');
    const select = document.getElementById('reg-profesion');

    // Traer categorías desde Supabase
    const { data: categorias, error } = await window.supabaseClient
        .from('categorias')
        .select('nombre')
        .order('nombre', { ascending: true });

    if (error) {
        select.innerHTML = '<option value="">Error al cargar categorías</option>';
        console.error(error);
        return;
    }

    select.innerHTML = '<option value="">Seleccioná una opción...</option>';
    categorias.forEach(cat => {
        const option = document.createElement('option');
        option.value = cat.nombre;
        option.textContent = cat.nombre;
        select.appendChild(option);
    });

    // --- Preview de foto circular ---
    const previewDiv = document.getElementById('profile-preview');
    const fileInput = document.getElementById('reg-foto');
    const previewImg = document.getElementById('preview-img');
    const placeholder = document.getElementById('preview-placeholder');

    previewDiv.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', () => {
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                previewImg.src = e.target.result;
                previewImg.style.display = 'block';
                placeholder.style.display = 'none';
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    // --- Form submit ---
    document.getElementById('registro-form').addEventListener('submit', async (e) => {
        e.preventDefault();

        const email = document.getElementById('reg-email').value;
        const password = document.getElementById('reg-password').value;

        // 1️⃣ Registrar usuario en Supabase Auth
        const { data: authData, error: authError } = await window.supabaseClient.auth.signUp({
            email: email,
            password: password
        });

        if (authError) {
            alertDiv.className = 'alert alert-error';
            alertDiv.textContent = 'Error de registro: ' + authError.message;
            alertDiv.style.display = 'block';
            return;
        }

        const user_id = authData.user.id; // ID único del usuario
        let fotoUrl = null;

        // 2️⃣ Subir foto si hay archivo
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const fileName = `${user_id}-perfil-${Date.now()}`;
            const { data: storageData, error: storageError } = await window.supabaseClient
                .storage
                .from('imagenes')
                .upload(fileName, file);

            if (storageError) {
                alertDiv.className = 'alert alert-error';
                alertDiv.textContent = 'Error al subir la foto: ' + storageError.message;
                alertDiv.style.display = 'block';
                return;
            }

            // URL pública
            fotoUrl = `${supabaseUrl}/storage/v1/object/public/imagenes/${fileName}`;
        }

        // 3️⃣ Guardar perfil en tabla "usuarios"
        const data = {
            id: user_id,
            nombre: document.getElementById('reg-nombre').value,
            dni: document.getElementById('reg-dni').value,
            email: document.getElementById('reg-email').value,
            edad: parseInt(document.getElementById('reg-edad').value) || null,
            celular: document.getElementById('reg-celular').value || null,
            categoria: document.getElementById('reg-profesion').value,
            matricula: document.getElementById('reg-matricula').checked,
            antiguedad: parseInt(document.getElementById('reg-antiguedad').value) || 0,
            antecedentes: document.getElementById('reg-antecedentes').value || null,
            rol: 'worker',
            foto_perfil: fotoUrl
        };

        console.log("Datos que se intentan insertar:", data);

        const { error: insertError } = await window.supabaseClient.from('usuarios').insert([data]);

        if (insertError) {
            alertDiv.className = 'alert alert-error';
            alertDiv.textContent = 'Error al guardar perfil: ' + insertError.message;
            alertDiv.style.display = 'block';
        } else {
            alertDiv.className = 'alert alert-success';
            alertDiv.textContent = 'Registro completado correctamente! Revisa tu email para confirmar.';
            alertDiv.style.display = 'block';
            document.getElementById('registro-form').reset();
            previewImg.style.display = 'none';
            placeholder.style.display = 'block';
        }
    });
});
</script>

</body>
</html>