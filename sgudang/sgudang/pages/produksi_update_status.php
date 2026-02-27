<!-- Update Status Barang - Produksi -->
<div class="page-header">
    <div class="page-title">Update Status Barang</div>
    <div class="page-subtitle">Perbarui status pallet / batch produksi</div>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
$statuses = [
    ['02-02-2025','FG-100','Mentega','20','Staged Area','Produksi'],
    ['02-02-2025','FG-100','Susu','20','Staged Area','Packed'],
    ['02-02-2025','FG-100','Mentega','20','Staged Area','Distribusi'],
    ['02-02-2025','FG-100','Mentega','20','Staged Area','Packed'],
];
$badgeMap = ['Produksi'=>'badge-blue','Packed'=>'badge-green','Distribusi'=>'badge-purple'];
foreach ($statuses as $i => $s): ?>
<div class="table-wrapper fade-in fade-in-<?=$i+1?>">
    <table class="data-table">
        <thead>
            <tr>
                <th>Waktu Packaging</th>
                <th>Kode Pallet</th>
                <th>Produk/Batch</th>
                <th>Qty (Box)</th>
                <th>Lokasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$s[0]?></td>
                <td><strong><?=$s[1]?></strong></td>
                <td><?=$s[2]?></td>
                <td><?=$s[3]?></td>
                <td><?=$s[4]?></td>
                <td><span class="badge <?=$badgeMap[$s[5]]??'badge-gray'?>"><?=$s[5]?></span></td>
            </tr>
        </tbody>
    </table>
</div>
<?php endforeach; ?>
</div>
