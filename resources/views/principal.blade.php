<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biografía </title>
  <style>
    :root{
      --blue-1:#0b69ff;
      --blue-2:#0f4fc1;
      --blue-3:#e9f2ff;
      --soft:#f6f9ff;
      --muted:#6b7280;
      --card-shadow: 0 6px 18px rgba(11,105,255,0.12);
      --glass: rgba(255,255,255,0.6);
    }
    *{box-sizing:border-box}
    body{
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg, var(--soft) 0%, #ffffff 100%);
      margin:0;
      color:#0b2340;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }
    .app{
      max-width:980px;
      margin:36px auto;
      padding:28px;
    }
    header{
      display:flex;
      align-items:center;
      gap:18px;
      margin-bottom:22px;
    }
    .logo{
      width:82px;height:82px;border-radius:14px;
      background:linear-gradient(135deg,var(--blue-1),var(--blue-2));
      display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:20px;
      box-shadow:var(--card-shadow);
    }
    h1{margin:0;font-size:22px}
    p.lead{margin:4px 0 0;color:var(--muted)}

    .shell{
      display:grid;grid-template-columns:260px 1fr;gap:20px;
    }

    /* sidebar */
    .sidebar{
      background: white;border-radius:12px;padding:16px;box-shadow:var(--card-shadow);
      height:calc(100% - 0px);
    }
    .commit-btn{display:block;background:transparent;border:0;padding:12px 10px;border-radius:8px;width:100%;text-align:left;cursor:pointer;font-weight:600;color:var(--blue-2);margin-bottom:8px}
    .commit-btn.active{background:linear-gradient(90deg,var(--blue-3),#fff);box-shadow:inset 0 1px 0 rgba(255,255,255,0.6);}
    .commit-meta{font-size:13px;color:var(--muted);margin-top:6px}

    /* canvas */
    .canvas{
      background: linear-gradient(180deg, white 0%, #fbfdff 100%);
      border-radius:12px;padding:22px;box-shadow:var(--card-shadow);min-height:380px;position:relative;
    }
    .commit-view{display:none}
    .commit-view.active{display:block}

    .card-title{display:flex;align-items:center;gap:12px}
    .badge{background:var(--blue-1);color:white;padding:6px 10px;border-radius:999px;font-weight:700}
    .section{margin-top:16px}
    .section h3{margin:0 0 8px}
    .section p{margin:0;color:#213546;line-height:1.5}

    footer{margin-top:22px;color:var(--muted);font-size:13px;text-align:center}

    /* responsive */
    @media (max-width:840px){
      .shell{grid-template-columns:1fr;}
      .sidebar{display:flex;overflow-x:auto;padding:12px;gap:10px}
      .commit-btn{min-width:150px;white-space:nowrap}
    }
  </style>
</head>
<body>
  <div class="app">
    <header>
      <div class="logo">BIO</div>
      <div>
        <h1>Biografía</h1>
      </div>
    </header>

    <div class="shell">
      <aside class="sidebar" aria-label="Lista de commits">
        <button class="commit-btn active" data-target="c1">Nombre</button>
        <div class="commit-meta">Mi Nombre</div>

       
      </aside>

      <main class="canvas">
        <!-- COMMIT 1 -->
        <article id="c1" class="commit-view active">
          <div class="card-title">
            <div class="badge">1</div>
            <div>
              <h2>Mi Nombre:</h2>
            </div>
          </div>

          <div class="section">
            <h3>Juan Diego Chaparro Garcia</h3>
            
          </div>
        
      </main>
    </div>
  </div>

  <script>
    document.querySelectorAll('.commit-btn').forEach(btn => {
      btn.addEventListener('click', ()=>{
        // sidebar active
        document.querySelectorAll('.commit-btn').forEach(b=>b.classList.remove('active'));
        btn.classList.add('active');
        // views
        const target = btn.getAttribute('data-target');
        document.querySelectorAll('.commit-view').forEach(v=>v.classList.remove('active'));
        document.getElementById(target).classList.add('active');
      })
    });
  </script>
</body>
</html>
