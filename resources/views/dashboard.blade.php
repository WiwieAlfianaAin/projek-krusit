<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Krusit — UMKM</title>
  <style>
    /* ==== RESET RINGAN ==== */
    *,*::before,*::after{box-sizing:border-box}
    html,body{height:100%}
    body{margin:0;overflow-x:hidden;font-family:ui-sans-serif,system-ui,Segoe UI,Roboto,Arial,sans-serif;color:#fff}

    /* ==== BACKGROUND ==== */
    .bg{position:fixed;inset:0;z-index:-2;background:#000 center/cover no-repeat}
    .overlay{position:fixed;inset:0;z-index:-1;background:rgba(0,0,0,.55)}

    /* ==== LAYOUT UTAMA ==== */
    .wrap{min-height:100svh;display:flex;flex-direction:column}
    .container{max-width:1120px;margin:0 auto;padding:0 1rem}

    /* ==== NAVBAR ==== */
    .nav-wrap{
      position:sticky;top:0;z-index:40;
      background:rgba(0,0,0,.32);
      border-bottom:1px solid rgba(255,255,255,.12);
      box-shadow:0 6px 24px rgba(0,0,0,.18);
    }
    .nav{display:flex;align-items:center;justify-content:space-between;padding:12px 0}
    .brand{display:inline-flex;align-items:center;gap:10px;text-decoration:none;color:#fff}
    /* pakai komponen Breeze: fill-current mengikuti color elemen ini */
    .app-logo{display:block;height:44px;width:auto;color:#f59e0b} /* ganti ke #fff jika mau putih */
    .brand-name{font-weight:800;letter-spacing:.2px;font-size:1.05rem}
    .actions{display:flex;gap:.6rem}

    /* ==== TOMBOL ==== */
    .btn{
      display:inline-flex;align-items:center;justify-content:center;
      padding:.62rem 1rem;border-radius:14px;border:1px solid transparent;
      text-decoration:none;font-weight:700;color:#fff;
      transition:transform .12s ease,background-color .12s ease,opacity .12s ease
    }
    .btn:focus{outline:2px solid rgba(255,255,255,.55);outline-offset:2px}
    .btn-primary{background:#f59e0b;color:#111}
    .btn-primary:hover{background:#d97706;transform:translateY(-1px)}
    .btn-ghost{background:rgba(255,255,255,.16);border-color:rgba(255,255,255,.28)}
    .btn-ghost:hover{background:rgba(255,255,255,.26);transform:translateY(-1px)}

    /* ==== HERO ==== */
    .hero{flex:1;display:grid;place-items:center;text-align:center;padding:56px 0 28px}
    .title{font-size:clamp(2rem,4vw+1rem,3.5rem);font-weight:900;line-height:1.15;text-shadow:0 2px 16px rgba(0,0,0,.35)}
    .accent{color:#f59e0b}
    .subtitle{margin-top:.9rem;font-size:clamp(1rem,1.2vw+.8rem,1.25rem);color:rgba(255,255,255,.92)}
    .cta{margin-top:1.6rem;display:flex;gap:.8rem;justify-content:center;flex-wrap:wrap}

    /* ==== FOOTER ==== */
    .footer{border-top:1px solid rgba(255,255,255,.15);padding:16px 0;text-align:center;color:rgba(255,255,255,.85);font-size:.9rem}

    /* HP kecil: hemat ruang brand text */
    @media(max-width:420px){.brand-name{display:none}}
  </style>
</head>
<body>
  <!-- Background -->
  <div class="bg" style="background-image:url('{{ asset('img/krusit2.png') }}')"></div>
  <div class="overlay"></div>

  <div class="wrap">
    <!-- NAVBAR -->
    <header class="nav-wrap">
      <div class="container">
        <nav class="nav" aria-label="Navigasi utama">
          <a class="brand" href="{{ url('/') }}">
            <x-application-logo class="app-logo" />
            <span class="brand-name">Krusit</span>
          </a>
          <div class="actions">
            <a class="btn btn-ghost" href="{{ route('login') }}">Masuk</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Daftar</a>
          </div>
        </nav>
      </div>
    </header>

    <!-- HERO -->
    <main class="container hero">
      <section>
        <h1 class="title">Selamat Datang di <span class="accent">Krusit</span></h1>
        <p class="subtitle">Platform UMKM untuk memajukan produk lokal—rapi, cepat, dan modern.</p>
        <div class="cta">
          <a class="btn btn-primary" href="{{ route('register') }}">Daftar Sekarang</a>
          <a class="btn btn-ghost" href="{{ route('login') }}">Masuk</a>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="container footer">
      &copy; {{ date('Y') }} Krusit. All rights reserved.
    </footer>
  </div>
</body>
</html>
