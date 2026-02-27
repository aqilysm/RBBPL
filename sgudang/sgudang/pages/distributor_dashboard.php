<!-- Distributor Dashboard -->
<div class="page-header">
    <div class="page-title">Dashboard Distributor</div>
    <div class="page-subtitle">Pantau pengiriman dan distribusi produk</div>
</div>

<div class="stats-grid" style="margin-bottom:20px">
    <div class="stat-card blue-card fade-in fade-in-1">
        <div class="stat-label">Total Output</div>
        <div class="stat-value">4.240</div>
        <div class="stat-sub">unit/bottles hari ini</div>
    </div>
    <div class="stat-card green-card fade-in fade-in-2">
        <div class="stat-label">Efisiensi Line</div>
        <div class="stat-value">92%</div>
        <div class="stat-sub">Rata-rata line A-C</div>
    </div>
    <div class="stat-card orange-card fade-in fade-in-3">
        <div class="stat-label">Pending Transfer</div>
        <div class="stat-value">140</div>
        <div class="stat-sub">Box di Staging area</div>
    </div>
    <div class="stat-card red-card fade-in fade-in-4">
        <div class="stat-label">Reject Rate</div>
        <div class="stat-value">0.8%</div>
        <div class="stat-sub">Target &lt; 1.0%</div>
    </div>
</div>

<div class="section-title fade-in">🚚 Pengiriman Berjalan</div>
<div class="line-grid">
<?php
$lines = [
    ['Line A','Mie Lemonilo Aceh 45gr','wr-2023-1 | Batch: B-8918',65],
    ['Line B','Mie Lemonilo Rendang 45gr','wr-2023-1 | Batch: B-8918',45],
    ['Line C','Mie Lemonilo Geprek 45gr','wr-2023-1 | Batch: B-8918',80],
];
foreach ($lines as $i => $l): ?>
<div class="line-card fade-in fade-in-<?=$i+1?>">
    <div class="line-header">
        <span class="line-name"><?=$l[0]?></span>
        <span class="badge badge-blue" style="font-size:10.5px">On The Way</span>
    </div>
    <div class="line-product"><?=$l[1]?></div>
    <div class="line-batch"><?=$l[2]?></div>
    <div class="progress-bar">
        <div class="progress-fill" style="width:<?=$l[3]?>%"></div>
    </div>
    <div class="progress-label"><?=$l[3]?>% terkirim</div>
</div>
<?php endforeach; ?>
</div>

<div class="flex" style="gap:12px;margin-top:8px">
    <a href="?page=distributor_buat_laporan&role=distributor" class="btn btn-primary">📄 Buat Laporan</a>
    <a href="?page=distributor_update_status&role=distributor" class="btn btn-secondary">🔄 Update Status</a>
</div>
