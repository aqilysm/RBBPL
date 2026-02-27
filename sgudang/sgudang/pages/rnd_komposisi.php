<!-- Daftar Komposisi RnD -->
<div class="page-header">
    <div class="flex items-center justify-between">
        <div>
            <div class="page-title">Daftar Komposisi</div>
            <div class="page-subtitle">Formula produk yang tersimpan</div>
        </div>
        <a href="?page=rnd_buat_komposisi&role=rnd" class="btn btn-primary">➕ Buat Baru</a>
    </div>
</div>

<div class="search-bar fade-in">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari formula/komposisi...">
    <span class="filter-icon">⚙️</span>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
$komposisi = [
    ['Brownies','Brn-124','Bahan baku: Dark Chocolate 250g, Gula 300g, Mentega 150g, Telur 120g, Tepung 100g...','active'],
    ['Mie Instan','Brn-124','Bahan baku: Tepung Terigu 80%, Minyak Nabati 10%, Garam, Bumbu...','active'],
    ['Waffer','Brn-124','Bahan baku: Tepung Gandum, Minyak Kelapa, Gula Halus, Vanillin...','active'],
    ['Mie Instan (outdated)','Brn-124','Formulasi lama — sudah tidak digunakan dalam produksi aktif.','outdated'],
];
foreach ($komposisi as $i => $k): ?>
<div class="activity-card fade-in fade-in-<?=$i+1?>">
    <div class="activity-icon <?=($k[3]=='outdated'?'':'blue')?>">🧪</div>
    <div class="activity-body">
        <div class="activity-title" style="<?=($k[3]=='outdated'?'color:var(--text-muted)':'')?>"><?=$k[0]?></div>
        <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:3px"><?=$k[1]?></div>
        <div class="activity-desc"><?=$k[2]?></div>
    </div>
    <?php if ($k[3]==='outdated'): ?>
    <span class="badge badge-gray">Outdated</span>
    <?php else: ?>
    <span class="badge badge-green">Aktif</span>
    <?php endif; ?>
</div>
<?php endforeach; ?>
</div>
