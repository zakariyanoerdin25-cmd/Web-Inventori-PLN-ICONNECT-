

<body {
    font-family: 'Inter', sans-serif;
    color: #334155;
    scroll-behavior: smooth;
}

.fw-extrabold { font-weight: 800; }

/* --- 2. Hero Section --- */
.hero-section {
    background: linear-gradient(rgba(0, 173, 239, 0.85), rgba(0, 75, 141, 0.9)), 
                url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1920'); /* Gambar teknologi placeholder */
    background-size: cover;
    background-position: center;
    height: 70vh;
}

/* --- 3. Portfolio Card --- */
.portfolio-card {
    border-radius: 20px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    overflow: hidden;
}

.portfolio-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 15px 30px rgba(0, 173, 239, 0.15) !important;
    border-bottom: 5px solid #00ADEF !important;
}

.icon-box {
    width: 60px;
    height: 60px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
}

.bg-blue { background-color: #00ADEF; }
.bg-success { background-color: #10b981; }
.bg-danger { background-color: #ef4444; }
.bg-orange { background-color: #f59e0b; }
.bg-purple { background-color: #8b5cf6; }

/* --- 4. Decoration --- */
.underline {
    width: 80px;
    height: 5px;
    background-color: #00ADEF;
    border-radius: 5px;
    margin-top: 15px;
}

.conclusion-box {
    background: #f8fafc;
    border-radius: 30px;
}

/* --- 5. Responsive --- */
@media (max-width: 768px) {
    .hero-section { height: 60vh; }
    .display-3 { font-size: 2.5rem; }
}
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Divisi Retail - PLN Icon Plus</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/PT-PLN-Icon-Plus.jpg" alt="Logo" height="80">
            </a>
            <span class="fw-bold text-primary d-none d-sm-inline">Retail Division </span>
        </div>
    </nav>

    <header class="hero-section text-center text-white d-flex align-items-center">
        <div class="container">
            <h1 class="display-3 fw-extrabold mb-3">Divisi Retail</h1>
            <p class="lead mb-4 mx-auto" style="max-width: 700px;">
                Membangun konektivitas digital masa depan untuk setiap rumah dan bisnis di Indonesia.
            </p>
            <a href="stokbarang.php" class="btn btn-warning btn-lg px-5 fw-bold text-dark shadow">Beranda</a>
        </div>
    </header>

    <section id="tugas" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-widest">Core Responsibilities</h6>
                <h2 class="fw-extrabold display-5">📌 Tugas & Peran Utama</h2>
                <div class="underline mx-auto"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card shadow-sm border-0 h-100 bg-white">
                        <div class="card-body p-4">
                            <div class="icon-box bg-blue mb-4"><i class="fas fa-globe"></i></div>
                            <h5 class="fw-bold mb-3">1. Penyediaan Layanan Internet (B2C)</h5>
                            <p class="text-muted small mb-0">Layanan broadband rumah (ICONNET) dengan jangkauan luas dan kualitas stabil.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card shadow-sm border-0 h-100 bg-white">
                        <div class="card-body p-4">
                            <div class="icon-box bg-success mb-4"><i class="fas fa-users"></i></div>
                            <h5 class="fw-bold mb-3">2. Akuisisi & Pengelolaan Pelanggan</h5>
                            <p class="text-muted small mb-0">Strategi marketing untuk menarik pelanggan baru dan menjaga loyalitas pelanggan lama.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card shadow-sm border-0 h-100 bg-white">
                        <div class="card-body p-4">
                            <div class="icon-box bg-danger mb-4"><i class="fas fa-headset"></i></div>
                            <h5 class="fw-bold mb-3">3. Layanan Pelanggan (CS)</h5>
                            <p class="text-muted small mb-0">Menangani gangguan teknis dan menjaga kepuasan pelanggan secara responsif.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-2">
                    <div class="portfolio-card shadow-sm border-0 h-100 bg-white">
                        <div class="card-body p-4">
                            <div class="icon-box bg-orange mb-4"><i class="fas fa-chart-line"></i></div>
                            <h5 class="fw-bold mb-3">4. Penjualan & Pencapaian Target</h5>
                            <p class="text-muted small mb-0">Menjalankan kampanye promosi untuk mencapai target pendapatan retail.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card shadow-sm border-0 h-100 bg-white">
                        <div class="card-body p-4">
                            <div class="icon-box bg-purple mb-4"><i class="fas fa-rocket"></i></div>
                            <h5 class="fw-bold mb-3">5. Pengembangan Produk Retail</h5>
                            <p class="text-muted small mb-0">Inovasi paket harga dan kecepatan internet agar tetap kompetitif di pasar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="conclusion-box p-5 text-center shadow-lg border-0">
                <i class="fas fa-quote-left text-primary display-4 mb-4"></i>
                <h3 class="fw-bold text-dark mb-3">Kesimpulan Singkat</h3>
                <p class="lead text-muted mx-auto" style="max-width: 850px;">
                    Divisi Retail PLN Icon Plus menjalankan layanan internet dan solusi digital untuk pelanggan individu dan UMKM, mulai dari pemasaran, penjualan, hingga pelayanan pelanggan, dengan tujuan meningkatkan jumlah pengguna dan kepuasan pelanggan.
                </p>
                <div class="mt-4">
                    <span class="badge rounded-pill bg-primary px-3 py-2 me-2">Sales & Marketing</span>
                    <span class="badge rounded-pill bg-primary px-3 py-2 me-2">Customer Service</span>
                    <span class="badge rounded-pill bg-primary px-3 py-2">Product Development</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-white text-center">
        <div class="container">
            <small>&copy; 2024 PLN Icon Plus - Retail Division Portfolio Team</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>