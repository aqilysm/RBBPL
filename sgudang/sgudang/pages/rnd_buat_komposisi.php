<!-- Membuat Detail Komposisi -->
<div class="page-header">
    <div class="page-title">Membuat Detail Komposisi</div>
    <div class="page-subtitle">Buat formula bahan baku produk baru</div>
</div>

<div class="form-card fade-in">
    <div class="form-actions" style="justify-content:flex-start;margin-bottom:6px">
        <button class="btn btn-secondary">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Komposisi berhasil disimpan!')">💾 Simpan</button>
    </div>

    <div class="form-section">
        <div class="form-section-title">📋 Identitas Formula</div>
        <div class="form-group" style="margin-bottom:14px">
            <label>Nama Formula / Produk</label>
            <input type="text" placeholder="Masukkan nama produk...">
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Kode Formula</label>
                <input type="text" placeholder="Contoh: RNKAL10" value="RNKAL10">
            </div>
            <div class="form-group">
                <label>Batch Size (Basis)</label>
                <input type="text" placeholder="Contoh: 1000 gram">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">🧂 Bahan Baku / Raw Material</div>
        <div class="form-group" style="margin-bottom:12px">
            <label>Nama Bahan Baku</label>
            <input type="text" placeholder="Masukkan nama bahan baku...">
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Persentase (%)</label>
                <input type="number" placeholder="0.00" step="0.01" min="0" max="100">
            </div>
            <div class="form-group">
                <label>Jumlah (gram)</label>
                <input type="number" placeholder="0.00" step="0.01" min="0" value="0.00">
            </div>
            <div class="form-group full">
                <label>Estimasi Harga (Rp/kg)</label>
                <input type="number" placeholder="Rp 0,00" min="0">
            </div>
        </div>
        <button class="btn btn-secondary" style="margin-top:10px;width:100%">➕ Tambah Bahan</button>
    </div>

    <div class="form-section" style="background:var(--blue-50);border-color:var(--blue-200)">
        <div class="form-section-title" style="color:var(--blue-700)">💰 Estimasi Harga Pokok (HPP) Material</div>
        <div style="font-size:12px;color:var(--blue-600);margin-bottom:10px">* Belum termasuk biaya packaging & produksi</div>
        <div style="display:flex;align-items:center;justify-content:space-between">
            <span style="font-size:15px;font-weight:700;color:var(--text-primary)">Total HPP Material</span>
            <span style="font-family:'Sora',sans-serif;font-size:20px;font-weight:800;color:var(--blue-600)">Rp 0,00/Kg</span>
        </div>
    </div>
</div>
