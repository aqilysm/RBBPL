<!-- Update Status Barang - Distributor -->
<div class="page-header">
    <div class="page-title">Update Status Barang</div>
    <div class="page-subtitle">Pantau dan perbarui status pengiriman</div>
</div>

<!-- View existing deliveries -->
<div class="section-title fade-in">📋 Pengiriman Berjalan</div>
<div style="display:flex;flex-direction:column;gap:10px;margin-bottom:24px">
<?php
$deliveries = [
    ['DO-2023-1','Toko Maju Jaya','Budi Santoso / Truck Box','14.30 WIB','On The Way'],
    ['DO-2023-2','Indomaret Pusat','Ahmad Fauzi / Truck Box','15.00 WIB','On The Way'],
    ['DO-2023-3','Alfamart Jakarta','Reza Pratama / Pick-up','16.00 WIB','Delivered'],
    ['DO-2023-4','Giant Hypermarket','Budi Santoso / Truck Box','17.30 WIB','Pending'],
    ['DO-2023-5','Superindo Selatan','Ahmad Fauzi / Truck Box','18.00 WIB','On The Way'],
];
$badgeMap = ['On The Way'=>'badge-blue','Delivered'=>'badge-green','Pending'=>'badge-yellow'];
foreach ($deliveries as $i => $d): ?>
<div class="table-wrapper fade-in fade-in-<?=$i+1?>">
    <table class="data-table">
        <thead>
            <tr>
                <th>No. DO</th>
                <th>Customer</th>
                <th>Supir / Armada</th>
                <th>Estimasi Tiba</th>
                <th>Status Saat ini</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong><?=$d[0]?></strong></td>
                <td><?=$d[1]?></td>
                <td><?=$d[2]?></td>
                <td><?=$d[3]?></td>
                <td><span class="badge <?=$badgeMap[$d[4]]??'badge-gray'?>"><?=$d[4]?></span></td>
            </tr>
        </tbody>
    </table>
</div>
<?php endforeach; ?>
</div>

<!-- Input form -->
<div class="section-title fade-in">➕ Input Pengiriman Baru</div>
<div style="display:flex;flex-direction:column;gap:10px">
<?php for ($i=1;$i<=3;$i++): ?>
<div class="table-wrapper fade-in">
    <table class="data-table">
        <thead>
            <tr>
                <th>No. DO</th>
                <th>Customer</th>
                <th>Supir / Armada</th>
                <th>Estimasi Tiba</th>
                <th>Status Saat ini</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" placeholder="Input" style="width:90px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="text" placeholder="Input" style="width:120px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="text" placeholder="Input" style="width:130px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="time" style="font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td>
                    <select style="font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)">
                        <option>Input</option>
                        <option>Pending</option>
                        <option>On The Way</option>
                        <option>Delivered</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php endfor; ?>
</div>

<div style="text-align:right;margin-top:16px">
    <button class="btn btn-primary" onclick="alert('Status berhasil diperbarui!')">💾 Simpan Semua</button>
</div>
