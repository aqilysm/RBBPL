<!-- Membuat Laporan Distribusi -->
<div class="page-header">
    <div class="page-title">Membuat Laporan Distribusi</div>
    <div class="page-subtitle">Buat laporan pengiriman barang ke customer</div>
</div>

<div class="form-card fade-in">
    <div class="form-actions" style="justify-content:flex-start;margin-bottom:6px">
        <button class="btn btn-secondary">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Laporan distribusi berhasil disimpan!')">💾 Simpan</button>
    </div>

    <div class="form-section">
        <div class="form-section-title">🏪 Informasi Penerima</div>
        <div class="form-group" style="margin-bottom:12px">
            <label>Nama Toko / Customer</label>
            <input type="text" placeholder="Informasi Penerima">
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Pilih Supir & Kendaraan (Armada)</label>
                <select>
                    <option value="">-- Pilih Armada --</option>
                    <option>Budi Santoso - Truck Box B-9201</option>
                    <option>Ahmad Fauzi - Truck Box B-7820</option>
                    <option>Reza Pratama - Pick-up B-1234</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" placeholder="Masukkan Alamat">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📦 Detail Barang</div>
        <div class="form-group">
            <textarea rows="3" placeholder="Contoh: 500 Kardus Mie Lemonilo Aceh 45gr"></textarea>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📝 Catatan Pengiriman</div>
        <div class="form-group">
            <textarea rows="4" placeholder="Catatan khusus pengiriman, instruksi handling, dll..."></textarea>
        </div>
    </div>
</div>
