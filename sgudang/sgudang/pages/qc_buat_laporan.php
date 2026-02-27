<!-- Buat Laporan QC -->
<div class="page-header">
    <div class="page-title">Buat Laporan QC</div>
    <div class="page-subtitle">Buat laporan quality control baru</div>
</div>

<div class="form-card fade-in">
    <div class="form-section">
        <div class="form-section-title">📋 Informasi Laporan</div>
        <div class="form-grid">
            <div class="form-group">
                <label>Judul Laporan</label>
                <input type="text" placeholder="Contoh: Laporan QC Bahan Baku">
            </div>
            <div class="form-group">
                <label>Kode Laporan</label>
                <input type="text" placeholder="Contoh: LP12001">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" value="<?=date('Y-m-d')?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select>
                    <option>QC Bahan Baku</option>
                    <option>QC Produksi</option>
                    <option>QC Packaging</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📷 Dokumentasi</div>
        <div style="background:var(--silver-100);border-radius:var(--radius-md);height:160px;display:flex;flex-direction:column;align-items:center;justify-content:center;color:var(--text-muted);font-size:13px;border:2px dashed var(--silver-300);cursor:pointer">
            <div style="font-size:28px;margin-bottom:8px">📷</div>
            Upload dokumentasi foto
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📝 Detail Laporan</div>
        <div class="form-group">
            <label>Detail / Deskripsi</label>
            <textarea rows="5" placeholder="Tuliskan detail temuan QC, jumlah reject, alasan, dan rekomendasi..."></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-secondary" onclick="history.back()">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Laporan QC berhasil disimpan!')">✔ Sign & Simpan</button>
    </div>
</div>
