<!-- QC Laporan -->
<div class="page-header">
    <div class="flex items-center justify-between">
        <div>
            <div class="page-title">Laporan QC</div>
            <div class="page-subtitle">Semua laporan quality control</div>
        </div>
        <a href="?page=qc_buat_laporan&role=qc" class="btn btn-primary">➕ Buat Laporan</a>
    </div>
</div>

<div class="search-bar fade-in">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari laporan QC...">
    <span class="filter-icon">⚙️</span>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
$laporan = [
    ['LP12001','Laporan QC Bahan Baku - Mentega','Kemasan rusak, 10 pcs ditolak','02-02-2025','Pending','badge-yellow'],
    ['LP12002','Laporan QC Bahan Baku - Susu','Expired date, 5 pcs ditolak','17-02-2025','Approved','badge-green'],
    ['LP12003','Laporan QC Produksi - Brownies','Tekstur tidak sesuai standar','20-02-2025','Pending','badge-yellow'],
    ['LP12004','Laporan QC Produksi - Mie Instan','Berat di bawah standar','25-02-2025','Review','badge-purple'],
];
foreach ($laporan as $i => $l): ?>
<div class="activity-card fade-in fade-in-<?=$i+1?>" onclick="window.location='?page=qc_detail_laporan&role=qc'">
    <div class="activity-icon blue">🔍</div>
    <div class="activity-body">
        <div class="activity-title"><?=$l[1]?></div>
        <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:3px"><?=$l[0]?> &nbsp;•&nbsp; <?=$l[3]?></div>
        <div class="activity-desc"><?=$l[2]?></div>
    </div>
    <span class="badge <?=$l[5]?>"><?=$l[4]?></span>
</div>
<?php endforeach; ?>
</div>
