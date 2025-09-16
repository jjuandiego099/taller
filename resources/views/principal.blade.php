<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biografía</title>
  <style>
    :root{
      --blue-1:#0b69ff;
      --blue-2:#0f4fc1;
      --blue-3:#e9f2ff;
      --soft:#f6f9ff;
      --muted:#6b7280;
      --card-shadow: 0 6px 18px rgba(11,105,255,0.12);
    }
    body{
      font-family: Inter, system-ui, sans-serif;
      background: linear-gradient(180deg, var(--soft) 0%, #ffffff 100%);
      margin:0;
      color:#0b2340;
    }
    .app{max-width:980px;margin:36px auto;padding:28px;}
    header{display:flex;align-items:center;gap:18px;margin-bottom:22px;}
    .logo{
      width:82px;height:82px;border-radius:14px;
      background:linear-gradient(135deg,var(--blue-1),var(--blue-2));
      display:flex;align-items:center;justify-content:center;
      color:white;font-weight:700;font-size:20px;
      box-shadow:var(--card-shadow);
    }
    h1{margin:0;font-size:22px}
    .shell{display:grid;grid-template-columns:260px 1fr;gap:20px;}
    .sidebar{
      background:white;border-radius:12px;padding:16px;box-shadow:var(--card-shadow);
    }
    .commit-btn{
      display:block;background:transparent;border:0;padding:12px 10px;
      border-radius:8px;width:100%;text-align:left;cursor:pointer;
      font-weight:600;color:var(--blue-2);margin-bottom:6px;
    }
    .commit-btn.active{
      background:linear-gradient(90deg,var(--blue-3),#fff);
      box-shadow:inset 0 1px 0 rgba(255,255,255,0.6);
    }
    .commit-meta{font-size:13px;color:var(--muted);margin:0 0 12px 4px;}
    .canvas{
      background:white;border-radius:12px;padding:22px;
      box-shadow:var(--card-shadow);min-height:380px;
    }
    .commit-view{display:none}
    .commit-view.active{display:block}
    .card-title{display:flex;align-items:center;gap:12px}
    .badge{
      background:var(--blue-1);color:white;
      padding:6px 10px;border-radius:999px;font-weight:700
    }
    .section{margin-top:16px}
    .section h3{margin:0 0 8px}
    .section p{margin:0;color:#213546;line-height:1.5}
    footer{margin-top:22px;color:var(--muted);font-size:13px;text-align:center}
  </style>
</head>
<body>
  <div class="app">
    <header>
      <div class="logo">BIO</div>
      <div><h1>Biografía</h1></div>
    </header>

    <div class="shell">
      <!-- Sidebar -->
      <aside class="sidebar" aria-label="Lista de commits">
        <button class="commit-btn active" data-target="c1">Nombre</button>
        <div class="commit-meta">Mi Nombre</div>
        
        <button class="commit-btn" data-target="c2">Orígenes</button>
        <div class="commit-meta">Lugar de nacimiento, padres, hermanos</div>
         <button class="commit-btn" data-target="c3">Niñez</button>
        <div class="commit-meta">Narración de mi niñez</div>
        <button class="commit-btn" data-target="c4">Adolescencia</button>
        <div class="commit-meta">Experiencias y aprendizajes</div>
        <button class="commit-btn" data-target="c5">Actualidad</button>
        <div class="commit-meta">A qué te dedicas hoy</div>
         <button class="commit-btn" data-target="c6">Metas</button>
        <div class="commit-meta">Aspiraciones y metas</div>
        <button class="commit-btn" data-target="c7">Habilidades</button>
        <div class="commit-meta">Mis Habilidades</div>
      </aside>

      <!-- Canvas -->
      <main class="canvas">
        <!-- Commit 1 -->
        <article id="c1" class="commit-view active">
          <div class="card-title">
            <div class="badge">1</div>
            <h2>Mi Nombre</h2>
          </div>
          <div class="section">
            <h3>Juan Diego Chaparro García</h3>
          </div>
        </article>

        <!-- Commit 2 -->
        <article id="c2" class="commit-view">
          <div class="card-title">
            <div class="badge">2</div>
            <h2>Orígenes y procedencia</h2>
          </div>
          <div class="section">
            <h3>Soy de Bucaramanga, he vivido aqui toda mi vida y mis papas tambien</h3>
            
          </div>
         
        </article>
        <article id="c3" class="commit-view">
          <div class="card-title">
            <div class="badge">3</div>
            <h2>Mi Niñez</h2>
          </div>
          <div class="section">
            <h3>En mi niñez jugue mucho futbol y reia mucho</h3>
            
          </div>
         
        </article>
        
        <article id="c4" class="commit-view">
          <div class="card-title">
            <div class="badge">4</div>
            <h2>Mi Adolesencia</h2>
          </div>
          <div class="section">
            <h3>En mi Adolesencia disfrute mucho de la vida y vivi una pandemia</h3>
            
          </div>
         
        </article>
        <article id="c5" class="commit-view">
          <div class="card-title">
            <div class="badge">5</div>
            <h2>Actualidad</h2>
          </div>
          <div class="section">
            <h3>Actualmente estudio ingenieria de sistemas y voy en 5 semestre</h3>
            
          </div>
         
        </article>
        <article id="c6" class="commit-view">
          <div class="card-title">
            <div class="badge">6</div>
            <h2>Mis Metas</h2>
          </div>
          <div class="section">
            <h3>Mis metas son graduarme y comprarme un dodge challenger demon 170</h3>
            
          </div>
         
        </article>
        <article id="c7" class="commit-view">
          <div class="card-title">
            <div class="badge">7</div>
            <h2>Mis Habilidades</h2>
          </div>
          <div class="section">
            <h3>Habilidad 1:</h3>
            <p>Pensamiento Critico</p>
            <br> <h3>Habilidad 2:</h3>
            <p>Resolucion de Problemas</p>
            <br>
             <h3>Habilidad 3:</h3>
            <p>Comunicacion efectiva</p>
            <br>
            
          </div>
         
        </article>
        
      </main>
    </div>
  </div>

  <script>
    document.querySelectorAll('.commit-btn').forEach(btn => {
      btn.addEventListener('click', ()=>{
        document.querySelectorAll('.commit-btn').forEach(b=>b.classList.remove('active'));
        btn.classList.add('active');
        const target = btn.getAttribute('data-target');
        document.querySelectorAll('.commit-view').forEach(v=>v.classList.remove('active'));
        document.getElementById(target).classList.add('active');
      })
    });
  </script>
</body>
</html>
