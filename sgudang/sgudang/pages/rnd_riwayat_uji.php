<!-- Riwayat Uji -->
<div class="page-header">
    <div class="page-title">Riwayat Uji</div>
    <div class="page-subtitle">Catatan pengujian formula dan bahan baku</div>
</div>

<div class="flex" style="gap:10px;margin-bottom:18px">
    <button class="btn btn-secondary">✖ Reset</button>
    <button class="btn btn-primary">➕ Tambahkan</button>
</div>

<div style="display:flex;flex-direction:column;gap:14px">
<?php
$ujis = [
    [
        ['02-02-2025','SC-P-V','Mentega','Viskositas/PH','pH: 7.2, visc: 200 pcs','Pass','badge-green'],
        ['02-03-2025','SC-P-V','Susu','Mikrobiologi','pH: 5.2, visc: 50 pcs','Failed','badge-red'],
    ],
    [
        ['05-02-2025','SC-P-V','Tepung','Viskositas/PH','pH: 6.8, visc: 180 pcs','Pass','badge-green'],
        ['08-03-2025','SC-P-V','Gula','Organoleptik','Warna OK, rasa manis normal','Pass','badge-green'],
    ],
    [
        ['12-02-2025','SC-P-V','Coklat','Mikrobiologi','pH: 7.0, count: <100 CFU','Pass','badge-green'],
        ['15-03-2025','SC-P-V','Mentega','Kimia','FFA: 0.8%, moisture: 15%','Failed','badge-red'],
    ],
];
foreach ($ujis as $i => $group): ?>
<div class="table-wrapper fade-in fade-in-<?=$i+1?>">
    <table class="data-table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Kode/Nama Formula</th>
                <th>Tipe Uji</th>
                <th>Parameter</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($group as $u): ?>
            <tr>
                <td><?=$u[0]?></td>
                <td><strong><?=$u[1]?></strong><br><span style="font-size:11.5px;color:var(--text-muted)"><?=$u[2]?></span></td>
                <td><?=$u[3]?></td>
                <td style="font-size:12.5px"><?=$u[4]?></td>
                <td><span class="badge <?=$u[6]?>"><?=$u[5]?></span></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endforeach; ?>
</div>
