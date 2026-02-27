<!-- Laporan Bahan Reject -->
<div class="page-header">
    <div class="page-title">Laporan Bahan Reject</div>
    <div class="page-subtitle">Riwayat laporan bahan baku yang ditolak</div>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
$rejects = [
    ['02-02-2025','Mentega','Kemasan yang rusak',10,'Pending','badge-yellow'],
    ['17-02-2025','Susu','Expired',5,'Approved','badge-green'],
    ['20-02-2025','Gula','Banyak semutnya',7,'Pending','badge-yellow'],
    ['02-05-2025','Mentega','Kemasan yang rusak',10,'Pending','badge-yellow'],
];
foreach ($rejects as $i => $r): ?>
<div class="table-wrapper fade-in fade-in-<?=$i+1?>">
    <table class="data-table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Barang</th>
                <th>Alasan</th>
                <th>Jml</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location='?page=gudang_detail_reject&role=gudang'" style="cursor:pointer">
                <td><?=$r[0]?></td>
                <td><strong><?=$r[1]?></strong></td>
                <td><?=$r[2]?></td>
                <td><?=$r[3]?></td>
                <td><span class="badge <?=$r[5]?>"><?=$r[4]?></span></td>
            </tr>
        </tbody>
    </table>
</div>
<?php endforeach; ?>
</div>
