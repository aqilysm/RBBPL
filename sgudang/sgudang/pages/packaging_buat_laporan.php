<!-- Membuat Laporan Packaging -->
<div class="page-header">
    <div class="page-title">Membuat Laporan Packaging</div>
    <div class="page-subtitle">Input hasil packaging per shift dan lini</div>
</div>

<div class="form-card fade-in">
    <div class="form-actions" style="justify-content:flex-start;margin-bottom:6px">
        <button class="btn btn-secondary">✖ Reset</button>
        <button class="btn btn-primary" onclick="alert('Laporan packaging berhasil disimpan!')">💾 Simpan</button>
    </div>

    <div class="form-section">
        <div class="form-section-title">📝 Pilih Work Order</div>
        <div class="form-group" style="margin-bottom:12px">
            <label>Work Order Aktif</label>
            <select>
                <option value="">-- Pilih WO aktif --</option>
                <option>WO-MIE-2023-1 - Mie Lemonilo Aceh 45gr</option>
                <option>WO-MIE-2023-2 - Mie Lemonilo Rendang 45gr</option>
                <option>WO-MIE-2023-3 - Mie Lemonilo Geprek 45gr</option>
            </select>
        </div>
        <div class="form-grid">
            <div class="form-group">
                <label>Shift</label>
                <select>
                    <option>Shift 1 (Pagi) 06:00-14:00</option>
                    <option>Shift 2 (Siang) 14:00-22:00</option>
                    <option>Shift 3 (Malam) 22:00-06:00</option>
                </select>
            </div>
            <div class="form-group">
                <label>Operator Leader</label>
                <input type="text" placeholder="Nama Leader">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📊 Hasil Packaging</div>
        <div class="form-grid">
            <div class="form-group">
                <label>Good Quantity (pcs)</label>
                <input type="number" value="0" min="0">
            </div>
            <div class="form-group">
                <label>Reject Quantity (pcs)</label>
                <input type="number" value="0" min="0">
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="form-section-title">📝 Catatan & Kendala</div>
        <div class="form-group">
            <label>Catatan / Kendala Mesin</label>
            <textarea rows="4" placeholder="Contoh: Mesin sealer butuh kalibrasi ulang..."></textarea>
        </div>
    </div>
</div>
