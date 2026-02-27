<!-- Update Stok Gudang -->
<div class="page-header">
    <div class="page-title">Update Stok Gudang</div>
    <div class="page-subtitle">Perbarui data stok bahan baku masuk</div>
</div>

<div class="form-card fade-in">
    <div class="form-section">
        <div class="form-section-title">📦 Informasi Bahan Baku</div>
        <div class="form-group" style="margin-bottom:14px">
            <label>Nama Produk</label>
            <input type="text" placeholder="Contoh: Mentega, Tepung, Gula...">
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" value="<?=date('Y-m-d')?>">
            </div>
            <div class="form-group">
                <label>Waktu Expired</label>
                <input type="date">
            </div>
            <div class="form-group full">
                <label>Jumlah Stok (kg)</label>
                <input type="number" placeholder="Contoh: 100" min="0">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📷 Dokumentasi</div>
        <div style="background:var(--silver-100);border-radius:var(--radius-md);height:180px;display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--text-muted);font-size:13px;border:2px dashed var(--silver-300);cursor:pointer;transition:var(--transition)"
             onmouseover="this.style.borderColor='var(--blue-400)'" onmouseout="this.style.borderColor='var(--silver-300)'">
            <div style="font-size:32px;margin-bottom:8px">📷</div>
            Klik untuk upload foto
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-secondary" onclick="history.back()">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Stok berhasil diperbarui!')">✔ Sign & Simpan</button>
    </div>
</div>
