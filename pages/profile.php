<?php
/**
 * pages/profile.php
 * Page: Profile DAMAKESMAS & SIRIA
 */
$page_title = 'DAMAKESMAS - Profile';
$base_path  = '../';
ob_start();
?>
<!-- Hero (shared) -->
<?php include '../components/hero.php'; ?>

<div style="background:#F5F7F6; padding-bottom:3rem;">
  <div class="container">
    <?php include '../components/filter-bar.php'; ?>

    <section class="section" style="padding-left:0;padding-right:0;" aria-labelledby="profile-title">
      <h2 class="section-title" id="profile-title">Profile</h2>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;" data-animate>
        <!-- DAMAKESMAS Card -->
        <div class="table-card" style="padding:2rem;">
          <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem;">
            <div style="width:56px;height:56px;background:var(--color-primary-light);border-radius:var(--radius-xl);display:grid;place-items:center;">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1A4A3C" stroke-width="2"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
            </div>
            <div>
              <h3 style="font-family:var(--font-display);font-size:1.125rem;font-weight:700;color:var(--color-text-primary);margin:0;">DAMAKESMAS</h3>
              <span style="font-size:0.8125rem;color:var(--color-text-muted);">Denpasar Mantap Kesehatan Masyarakat</span>
            </div>
          </div>
          <p style="font-size:0.9rem;line-height:1.75;color:var(--color-text-secondary);">
            DAMAKESMAS adalah program inovasi unggulan dari Pemerintah Kota Denpasar yang berfokus pada pelayanan kesehatan masyarakat secara terpadu dan responsif. Program ini hadir untuk memastikan seluruh lapisan masyarakat mendapatkan akses layanan kesehatan yang berkualitas dan merata.
          </p>
          <div style="margin-top:1.5rem;display:flex;gap:0.75rem;flex-wrap:wrap;">
            <span class="badge-active">Aktif</span>
            <span style="font-size:0.8125rem;color:var(--color-text-muted);">Sejak 2022</span>
          </div>
        </div>

        <!-- SIRIA Card -->
        <div class="table-card" style="padding:2rem;">
          <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem;">
            <div style="width:56px;height:56px;background:var(--color-primary-light);border-radius:var(--radius-xl);display:grid;place-items:center;">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1A4A3C" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            </div>
            <div>
              <h3 style="font-family:var(--font-display);font-size:1.125rem;font-weight:700;color:var(--color-text-primary);margin:0;">SIRIA</h3>
              <span style="font-size:0.8125rem;color:var(--color-text-muted);">Sistem Informasi Rujukan Inovatif Agile</span>
            </div>
          </div>
          <p style="font-size:0.9rem;line-height:1.75;color:var(--color-text-secondary);">
            SIRIA merupakan sistem informasi rujukan berbasis digital yang mendukung koordinasi antar fasilitas kesehatan di Kota Denpasar. Dengan teknologi agile, sistem ini memungkinkan penanganan kasus secara real-time dan efisien.
          </p>
          <div style="margin-top:1.5rem;display:flex;gap:0.75rem;flex-wrap:wrap;">
            <span class="badge-active">Aktif</span>
            <span style="font-size:0.8125rem;color:var(--color-text-muted);">Terintegrasi DAMAKESMAS</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Shared Stats + Map -->
    <section class="section" style="padding-left:0;padding-right:0;padding-top:0;" aria-labelledby="stats-profile-title">
      <h2 class="section-title" id="stats-profile-title">Statistik Layanan Publik</h2>
      <?php $show_all=false; $table_id='faskes-profile'; include '../components/table.php'; ?>
    </section>

    <section class="section" style="padding-left:0;padding-right:0;padding-top:0;" aria-labelledby="map-profile-title">
      <h2 class="section-title" id="map-profile-title">Informasi Titik Faskes</h2>
      <?php include '../components/map.php'; ?>
    </section>
  </div>
</div>

<?php
$content = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={theme:{extend:{colors:{primary:{'DEFAULT':'#1A4A3C','dark':'#0F3028','mid':'#2D6B52','light':'#E8F4F0'}},fontFamily:{display:['"Plus Jakarta Sans"'],body:['Inter']}}}}</script>
  <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body class="page-bg">
  <?php include '../components/navbar.php'; ?>
  <main id="main-content"><?= $content ?></main>
  <?php include '../components/footer.php'; ?>
  <script src="../assets/js/navbar.js" defer></script>
  <script src="../assets/js/modal.js" defer></script>
  <script src="../assets/js/animation.js" defer></script>
  <script src="../assets/js/app.js" defer></script>
</body>
</html>
