<!-- Buat Work Order -->
<div class="page-header">
    <div class="page-title">Buat Work Order</div>
    <div class="page-subtitle">Buat work order baru untuk tim produksi</div>
</div>

<div class="form-card fade-in">
    <div class="form-section">
        <div class="form-section-title">📋 Detail Work Order</div>
        <div class="form-group" style="margin-bottom:14px">
            <label>Nama Produk / Detail WO</label>
            <input type="text" placeholder="Contoh: Brownies Fudgy Intense Dark Chocolate">
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" value="<?=date('Y-m-d')?>">
            </div>
            <div class="form-group">
                <label>Waktu Mulai</label>
                <input type="time" value="08:00">
            </div>
            <div class="form-group">
                <label>Jumlah SDM</label>
                <input type="number" placeholder="Contoh: 5" min="1">
            </div>
            <div class="form-group">
                <label>Target (pcs)</label>
                <input type="number" placeholder="Contoh: 1000" min="1">
            </div>
            <div class="form-group full">
                <label>Tenggat (Deadline)</label>
                <input type="date">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📝 Detail WO</div>
        <div class="form-group">
            <label>Instruksi & Detail Pekerjaan</label>
            <textarea rows="6" placeholder="Tuliskan detail instruksi pekerjaan, formula yang digunakan, target kualitas, dll..."></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-secondary" onclick="history.back()">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Work Order berhasil dibuat!')">✔ Sign & Simpan</button>
    </div>
</div>
