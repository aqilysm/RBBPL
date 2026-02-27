<!-- Update Status Barang - Packaging -->
<div class="page-header">
    <div class="page-title">Update Status Barang</div>
    <div class="page-subtitle">Input dan perbarui status pallet packaging</div>
</div>

<div class="search-bar fade-in">
    <input type="text" placeholder="Cari kode pallet...">
</div>

<div style="display:flex;flex-direction:column;gap:12px">
<?php
for ($i=1;$i<=4;$i++): ?>
<div class="table-wrapper fade-in fade-in-<?=$i?>">
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
                <td><input type="datetime-local" style="font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="text" placeholder="Input" style="width:80px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="text" placeholder="Input" style="width:100px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="number" placeholder="0" style="width:60px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td><input type="text" placeholder="Lokasi" style="width:90px;font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)"></td>
                <td>
                    <select style="font-size:12px;padding:5px 8px;border-radius:6px;border:1px solid var(--silver-200)">
                        <option>Input status</option>
                        <option>Produksi</option>
                        <option>Packed</option>
                        <option>Distribusi</option>
                        <option>Done</option>
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
