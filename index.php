<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toori ServiciosYa - Gestión Humana con Respaldo Total</title>
    <meta name="description"
        content="Pedí el servicio que necesitás. Nosotros nos ocupamos del resto. Gestión profesional y respaldo para tu hogar.">

    <!-- OpenGraph / WhatsApp -->
    <meta property="og:title" content="Toori ServiciosYa - Gestión Humana con Respaldo Total">
    <meta property="og:description"
        content="Pedí el servicio que necesitás. Nosotros nos ocupamos del resto. Gestión profesional y respaldo para tu hogar.">
    <meta property="og:image" content="assets/logo.png">
    <meta property="og:url" content="https://tooriserviciosya.com">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/logo.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    


  <link rel="stylesheet" crossorigin href="./assets/main-D3W1u2cc.css">
</head>

<body>

        <?php include 'header.php'; ?>
        

    <!-- Hero Section -->
    <section class="hero" id="home"
        style="background-image: url('assets/hero_house.png'); background-position: bottom; align-items: flex-start;">
        <div class="hero-overlay"
            style="background: linear-gradient(180deg, rgba(75, 78, 109, 0.85) 0%, rgba(75, 78, 109, 0.4) 50%, rgba(255, 255, 255, 0) 100%);">
        </div>
        <div class="container"
            style="display: flex; flex-direction: column; align-items: center; text-align: center; justify-content: flex-start; padding-top: 25vh; gap: 30px;">
            <div class="hero-content" style="max-width: 800px;">
                <h1
                    style="font-size: 4rem; margin-bottom: 1rem; line-height: 1.1; color: white; text-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                    Hacé tu vida más fácil
                </h1>
                <p
                    style="font-size: 1.5rem; color: rgba(255,255,255,0.9); margin-bottom: 2.5rem; text-shadow: 0 2px 10px rgba(0,0,0,0.3); font-weight: 500;">
                    Disfrutá de cualquier servicio, en la comodidad de tu propio hogar.
                </p>
                <div class="flex gap-3 justify-content-center"
                    style="background: white; padding: 10px; border-radius: 60px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); display: inline-flex; width: 100%; max-width: 600px;">
                    <a href="#categorias" class="btn btn-primary"
                        style="flex: 1; margin: 0; padding: 18px 30px; font-size: 1.1rem;">Buscar un Servicio</a>
                    <a href="registro.php" class="btn btn-secondary"
                        style="border: none; background: #f1f8e9; color: #558b2f; flex: 1; margin: 0; padding: 18px 30px; font-size: 1.1rem;">Ofrecer
                        Servicios</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Sponsors Carousel -->
    <section style="background-color: var(--bg-soft); padding: 40px 0;">
        <div class="container" style="max-width: 900px;">

            <div id="sponsors-carousel" style="position:relative; border-radius:16px; overflow:hidden; box-shadow:0 8px 30px rgba(0,0,0,0.12); height:260px; cursor:pointer;">

                <!-- Badge -->
                <span style="position:absolute;top:12px;right:12px;z-index:10;background:rgba(0,0,0,0.35);color:#fff;font-size:0.7rem;font-weight:600;padding:3px 10px;border-radius:20px;letter-spacing:0.05em;text-transform:uppercase;">Publicidad</span>

                <!-- Slides -->
                <div class="sponsor-slide" data-index="0" style="position:absolute;inset:0;display:flex;align-items:center;padding:30px 40px;opacity:1;transition:opacity 0.5s ease;background:#FF6B35;">
                    <div style="flex:1;">
                        <div style="display:inline-block;background:rgba(255,255,255,0.2);border-radius:8px;padding:6px 12px;margin-bottom:12px;">
                            <span style="color:#fff;font-weight:700;font-size:0.85rem;">🔧 Ferretería El Tornillo</span>
                        </div>
                        <h3 style="color:#fff;font-size:1.5rem;font-weight:800;margin:0 0 6px;">Todo para tu hogar</h3>
                        <p style="color:rgba(255,255,255,0.85);margin:0;font-size:0.95rem;">Materiales y herramientas de calidad al mejor precio</p>
                    </div>
                    <div style="flex-shrink:0;margin-left:20px;font-size:5rem;opacity:0.3;">🔩</div>
                </div>

                <div class="sponsor-slide" data-index="1" style="position:absolute;inset:0;display:flex;align-items:center;padding:30px 40px;opacity:0;transition:opacity 0.5s ease;background:#2C3E50;">
                    <div style="flex:1;">
                        <div style="display:inline-block;background:rgba(255,255,255,0.15);border-radius:8px;padding:6px 12px;margin-bottom:12px;">
                            <span style="color:#fff;font-weight:700;font-size:0.85rem;">🚗 Automotores Catamarca</span>
                        </div>
                        <h3 style="color:#fff;font-size:1.5rem;font-weight:800;margin:0 0 6px;">Tu próximo auto te espera</h3>
                        <p style="color:rgba(255,255,255,0.75);margin:0;font-size:0.95rem;">Financiación inmediata, sin trámites complicados</p>
                    </div>
                    <div style="flex-shrink:0;margin-left:20px;font-size:5rem;opacity:0.3;">🚙</div>
                </div>

                <div class="sponsor-slide" data-index="2" style="position:absolute;inset:0;display:flex;align-items:center;padding:30px 40px;opacity:0;transition:opacity 0.5s ease;background:#27AE60;">
                    <div style="flex:1;">
                        <div style="display:inline-block;background:rgba(255,255,255,0.2);border-radius:8px;padding:6px 12px;margin-bottom:12px;">
                            <span style="color:#fff;font-weight:700;font-size:0.85rem;">💊 Farmacia Central</span>
                        </div>
                        <h3 style="color:#fff;font-size:1.5rem;font-weight:800;margin:0 0 6px;">Tu salud, nuestra prioridad</h3>
                        <p style="color:rgba(255,255,255,0.85);margin:0;font-size:0.95rem;">Medicamentos, cosméticos y atención personalizada</p>
                    </div>
                    <div style="flex-shrink:0;margin-left:20px;font-size:5rem;opacity:0.3;">💊</div>
                </div>

                <!-- Flechas -->
                <button id="sponsor-prev" style="position:absolute;left:12px;top:50%;transform:translateY(-50%);z-index:10;background:rgba(255,255,255,0.25);border:none;border-radius:50%;width:36px;height:36px;color:#fff;font-size:1.1rem;cursor:pointer;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(4px);">&#8249;</button>
                <button id="sponsor-next" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);z-index:10;background:rgba(255,255,255,0.25);border:none;border-radius:50%;width:36px;height:36px;color:#fff;font-size:1.1rem;cursor:pointer;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(4px);">&#8250;</button>
            </div>

            <!-- Indicadores -->
            <div style="display:flex;justify-content:center;gap:8px;margin-top:14px;">
                <button class="sponsor-dot active" data-dot="0" style="width:24px;height:6px;border-radius:3px;border:none;background:#4b4e6d;cursor:pointer;transition:all 0.3s;"></button>
                <button class="sponsor-dot" data-dot="1" style="width:8px;height:6px;border-radius:3px;border:none;background:#ccc;cursor:pointer;transition:all 0.3s;"></button>
                <button class="sponsor-dot" data-dot="2" style="width:8px;height:6px;border-radius:3px;border:none;background:#ccc;cursor:pointer;transition:all 0.3s;"></button>
            </div>
        </div>
    </section>

    <style>
        @media (max-width: 768px) {
            #sponsors-carousel { height: 190px !important; }
            #sponsors-carousel .sponsor-slide { padding: 20px !important; }
            #sponsors-carousel .sponsor-slide h3 { font-size: 1.1rem !important; }
            #sponsors-carousel .sponsor-slide p { font-size: 0.8rem !important; }
            #sponsors-carousel .sponsor-slide > div:last-child { display: none; }
        }
    </style>

    <script>
    (function() {
        const sponsors = [
            { id: 1, nombre: "Ferretería El Tornillo", link: "#", color: "#FF6B35", titulo: "Todo para tu hogar", descripcion: "Materiales y herramientas de calidad al mejor precio" },
            { id: 2, nombre: "Automotores Catamarca", link: "#", color: "#2C3E50", titulo: "Tu próximo auto te espera", descripcion: "Financiación inmediata, sin trámites complicados" },
            { id: 3, nombre: "Farmacia Central", link: "#", color: "#27AE60", titulo: "Tu salud, nuestra prioridad", descripcion: "Medicamentos, cosméticos y atención personalizada" }
        ];

        let current = 0;
        const slides = document.querySelectorAll('.sponsor-slide');
        const dots = document.querySelectorAll('.sponsor-dot');
        let timer;

        function goTo(index) {
            slides[current].style.opacity = '0';
            dots[current].style.width = '8px';
            dots[current].style.background = '#ccc';
            current = (index + slides.length) % slides.length;
            slides[current].style.opacity = '1';
            dots[current].style.width = '24px';
            dots[current].style.background = '#4b4e6d';
        }

        function startTimer() {
            clearInterval(timer);
            timer = setInterval(() => goTo(current + 1), 5000);
        }

        document.getElementById('sponsor-prev').addEventListener('click', (e) => { e.stopPropagation(); goTo(current - 1); startTimer(); });
        document.getElementById('sponsor-next').addEventListener('click', (e) => { e.stopPropagation(); goTo(current + 1); startTimer(); });
        dots.forEach(dot => dot.addEventListener('click', () => { goTo(parseInt(dot.dataset.dot)); startTimer(); }));

        document.getElementById('sponsors-carousel').addEventListener('click', () => {
            window.open(sponsors[current].link, '_blank', 'noopener');
        });

        startTimer();
    })();
    </script>

    <!-- How it Works (Toori Original Look) -->
    <section class="section" id="como-funciona" style="background-color: var(--bg-white);">
        <div class="container text-center">
            <h2 class="mb-5" style="font-size: 2.5rem; font-weight: bold; color: var(--text-main);">¿Cómo funciona?</h2>

            <div class="grid"
                style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; align-items: start; margin-bottom: 50px;">
                <!-- Card 1 -->
                <div>
                    <div
                        style="width: 100%; display: flex; justify-content: center; align-items: center; margin-bottom: 24px; min-height: 220px;">
                        <img src="assets/paso1.png" alt="Buscás el servicio"
                            style="max-width: 100%; height: auto; max-height: 240px; object-fit: contain; filter: drop-shadow(0px 10px 20px rgba(0,0,0,0.08));">
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--text-main); line-height: 1.4;">Buscás
                        el servicio que<br>necesites</h4>
                </div>

                <!-- Card 2 -->
                <div>
                    <div
                        style="width: 100%; display: flex; justify-content: center; align-items: center; margin-bottom: 24px; min-height: 220px;">
                        <img src="assets/paso2.png" alt="Encontramos perfil"
                            style="max-width: 100%; height: auto; max-height: 240px; object-fit: contain; filter: drop-shadow(0px 10px 20px rgba(0,0,0,0.08));">
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--text-main); line-height: 1.4;">
                        Encontramos el mejor<br>prestador para vos</h4>
                </div>

                <!-- Card 3 -->
                <div>
                    <div
                        style="width: 100%; display: flex; justify-content: center; align-items: center; margin-bottom: 24px; min-height: 220px;">
                        <img src="assets/paso3.png" alt="Coordinamos"
                            style="max-width: 100%; height: auto; max-height: 240px; object-fit: contain; filter: drop-shadow(0px 10px 20px rgba(0,0,0,0.08));">
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 700; color: var(--text-main); line-height: 1.4;">
                        Coordinamos juntos el<br>servicio</h4>
                </div>
            </div>

            <!-- Demo Link -->
            <div
                style="display: inline-flex; align-items: center; gap: 16px; flex-wrap: wrap; justify-content: center;">
                <span style="font-size: 1.1rem; color: var(--text-muted); font-weight: 500;">¿Querés saber más?</span>
                <a href="https://wa.me/5493512139046?text=Hola!%20Me%20gustaria%20agendar%20una%20demo%20de%20Toori"
                    class="btn btn-primary" style="padding: 12px 30px; border-radius: 50px;">Agendar una demo</a>
            </div>
        </div>
    </section>

    <!-- Categories Grid (Icon focus based on Toori) -->
    <section class="section" id="categorias" style="background-color: var(--bg-soft);">
        <div class="container text-center">
            <h2 class="mb-5" style="font-size: 2.5rem; font-weight: bold; color: var(--text-main);">¿Qué servicio estás
                buscando?</h2>

            <div id="categories-container"
                style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 900px; margin: 0 auto;">

                <div class="card-premium text-center" data-category="Limpieza"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-stars" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Limpieza</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Limpieza"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Plomería"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-wrench" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Plomería</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Plomería"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Electricidad"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-lightbulb" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Electricidad</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Electricidad"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Gas"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-fire" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Gas</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Gas"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Pintura"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-brush" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Pintura</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Pintura"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Jardinería"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-tree" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Jardinería</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Jardinería"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <div class="card-premium text-center" data-category="Albañilería"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="bi bi-bricks" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Albañilería</h4>
                    <button class="btn btn-primary whatsapp-btn" data-category="Albañilería"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem;">Iniciar gestión</button>
                </div>

                <!-- Ver todas -->
                <div class="card-premium text-center"
                    style="width: 180px; padding: 25px 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; cursor: pointer; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                    <i class="bi bi-grid-fill" style="font-size: 2.5rem; color: var(--toori-purple); margin-bottom: 0.8rem;"></i>
                    <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Ver todas</h4>
                    <a href="categorias.php" class="btn btn-secondary"
                        style="padding: 8px 16px; font-size: 0.85rem; margin-top: 0.5rem; text-decoration: none;">Explorar más</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Registration CTA (Worker Side) -->
    <section class="section" style="padding-bottom: 100px;">
        <div class="container text-center">
            <h2 class="mb-5" style="font-size: 2.2rem; font-weight: 700; color: var(--text-main);">¿Querés ofrecer
                servicios en Toori?</h2>

            <div class="grid"
                style="grid-template-columns: 1fr 1.2fr; gap: 0; align-items: stretch; text-align: left; background: white; border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden; border: 1px solid #eaeaea;">
                <div style="padding: 60px 50px; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="font-size: 2.2rem; margin-bottom: 0.2rem; color: #2C2C2C; font-weight: 700;">Registrate
                        facilísimo y</h3>
                    <h3 style="font-size: 2.2rem; margin-bottom: 1.5rem; color: #2C2C2C; font-weight: 700;">empezá <span
                            style="color: var(--toori-green);">hoy mismo</span></h3>
                    <p style="color: #555; font-size: 1.1rem; margin-bottom: 2rem; max-width: 350px; line-height: 1.6;">
                        Hay miles de usuarios esperando contratarte. ¿Qué esperás?</p>
                    <div>
                        <a href="registro.php" class="btn btn-primary"
                            style="padding: 12px 30px; font-size: 1rem; border-radius: 6px; box-shadow: none;">Ofrecer
                            Servicios</a>
                    </div>
                </div>
                <!-- Drop "assets/paso4.png" inside public/assets -->
                <div style="padding: 30px 30px 30px 10px;">
                    <div
                        style="width: 100%; height: 100%; min-height: 380px; border-radius: 12px; background-image: url('assets/paso4.png'); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Toori Design) -->
   <?php include 'footer.php'; ?>

    <!-- Fixed Mobile CTA -->
    <div class="fixed-mobile-cta">
        <a href="#categorias" class="btn btn-primary w-100" style="padding: 16px;">Iniciar mi pedido ahora</a>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/5493512139046?text=Hola!%20Necesito%20ayuda%20con%20Toori" class="floating-wa"
        target="_blank" rel="noopener noreferrer" title="Contactate con nuestro Bot">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WhatsApp Category Handler -->
    <script>
        document.addEventListener('click', function(e) {
            var btn = e.target.closest('.whatsapp-btn, .dynamic-whatsapp-btn');
            if (btn) {
                e.preventDefault();
                e.stopImmediatePropagation();
                var category = btn.getAttribute('data-category') || 'Servicio General';
                window.open('https://wa.me/5493512139046?text=' + encodeURIComponent('Busco un servicio de ' + category), '_blank');
            }
        }, true);
    </script>


</body>

</html>