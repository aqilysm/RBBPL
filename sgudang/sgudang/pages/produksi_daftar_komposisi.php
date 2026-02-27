<!-- Daftar Komposisi Produksi -->
<div class="page-header">
    <div class="page-title">Daftar Komposisi</div>
    <div class="page-subtitle">Formula komposisi bahan baku produksi</div>
</div>

<div class="search-bar fade-in">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari komposisi...">
    <span class="filter-icon">⚙️</span>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
$komps = [
    ['Brownies','Brn-124','Dark Chocolate 250g, Gula 300g, Mentega 150g, Telur 120g, Tepung 100g, Cocoa Powder 60g...','active'],
    ['Mie Instan','Brn-124','Tepung Terigu 80%, Minyak Nabati 10%, Garam, Bumbu rempah...','active'],
    ['Waffer','Brn-124','Tepung Gandum, Minyak Kelapa, Gula Halus, Vanillin, Lecithin...','active'],
    ['Mie Instan (outdated)','Brn-124','Formula lama yang sudah tidak digunakan dalam produksi aktif.','outdated'],
];
foreach ($komps as $i => $k): ?>
<div class="activity-card fade-in fade-in-<?=$i+1?>">
    <div class="activity-icon <?=($k[3]==='outdated'?'':'blue')?>">🧪</div>
    <div class="activity-body">
        <div class="activity-title" style="<?=($k[3]==='outdated'?'color:var(--text-muted)':'')?>"><?=$k[0]?></div>
        <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:3px"><?=$k[1]?></div>
        <div class="activity-desc"><?=$k[2]?></div>
    </div>
    <span class="badge <?=($k[3]==='outdated'?'badge-gray':'badge-green')?>"><?=($k[3]==='outdated'?'Outdated':'Aktif')?></span>
</div>
<?php endforeach; ?>
</div>
