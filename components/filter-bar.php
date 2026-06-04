<?php
/**
 * components/filter-bar.php
 * Responsibilities: Service filter dropdowns, facility name search
 */
$layanan_options = ['Semua Layanan', 'Kegawatdaruratan', 'Home Care', 'ODGJ Case', 'Lainnya'];
$bulan_options = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
$selected_bulan = $_GET['bulan'] ?? 'Mei';
$selected_tahun = $_GET['tahun'] ?? '2024';
$selected_layanan = $_GET['layanan'] ?? 'Semua Layanan';
?>
<div class="filter-bar" role="search" aria-label="Filter layanan kesehatan">
  <!-- Layanan Dropdown -->
  <div style="position:relative;">
    <select name="layanan" class="filter-select" aria-label="Pilih jenis layanan">
      <?php foreach ($layanan_options as $opt): ?>
        <option value="<?= htmlspecialchars($opt) ?>" <?= $selected_layanan === $opt ? 'selected' : '' ?>>
          <?= htmlspecialchars($opt) ?>
        </option>
      <?php endforeach; ?>
    </select>
    <svg style="position:absolute;right:10px;top:50%;transform:translateY(-50%);pointer-events:none;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
  </div>

  <!-- Bulan Dropdown -->
  <div style="position:relative;">
    <select name="bulan" class="filter-select" aria-label="Pilih bulan">
      <?php foreach ($bulan_options as $bulan): ?>
        <option value="<?= htmlspecialchars($bulan) ?>" <?= $selected_bulan === $bulan ? 'selected' : '' ?>>
          <?= htmlspecialchars($bulan) ?>
        </option>
      <?php endforeach; ?>
    </select>
    <svg style="position:absolute;right:10px;top:50%;transform:translateY(-50%);pointer-events:none;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
  </div>

  <!-- Tahun Spinner -->
  <div style="position:relative;">
    <input type="number" name="tahun" class="filter-select" style="width:88px;"
      value="<?= htmlspecialchars($selected_tahun) ?>"
      min="2020" max="2030" aria-label="Pilih tahun">
  </div>

  <!-- Facility Name Search -->
  <div style="position:relative;flex:1;">
    <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);pointer-events:none;" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
    <input type="text" name="faskes" class="filter-input" style="padding-left:2.25rem;"
      placeholder="Cari Nama Fasilitas..."
      value="<?= htmlspecialchars($_GET['faskes'] ?? '') ?>"
      aria-label="Cari nama fasilitas kesehatan">
  </div>

  <!-- Search Button -->
  <button type="submit" class="btn-search" aria-label="Cari fasilitas">
    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
    Cari
  </button>
</div>
