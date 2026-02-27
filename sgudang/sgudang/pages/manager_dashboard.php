<!-- Manager Dashboard -->
<div class="page-header">
    <div class="page-title">Dashboard Manager</div>
    <div class="page-subtitle">Selamat datang kembali! Berikut ringkasan aktivitas hari ini.</div>
</div>

<div class="stats-grid">
    <div class="stat-card blue-card fade-in fade-in-1">
        <div class="stat-label">Total Laporan</div>
        <div class="stat-value">150</div>
        <div class="stat-sub">Semua laporan</div>
    </div>
    <div class="stat-card green-card fade-in fade-in-2">
        <div class="stat-label">Total WO</div>
        <div class="stat-value">13</div>
        <div class="stat-sub">Work Order aktif</div>
    </div>
    <div class="stat-card orange-card fade-in fade-in-3">
        <div class="stat-label">WO on Progress</div>
        <div class="stat-value">3</div>
        <div class="stat-sub">Sedang berjalan</div>
    </div>
</div>

<div class="two-col" style="margin-bottom:24px">
    <div>
        <div class="section-title">📬 Notifikasi Terbaru</div>
        <div class="activity-card fade-in fade-in-1" onclick="window.location='?page=manager_detail_komposisi&role=manager'">
            <div class="activity-icon blue">🧪</div>
            <div class="activity-body">
                <div class="activity-title">Update Komposisi</div>
                <div class="activity-desc">Komposisi Brownies telah diperbarui oleh RnD</div>
                <div class="activity-meta">10 menit lalu</div>
            </div>
            <span class="activity-badge">RnD</span>
        </div>
        <div class="activity-card fade-in fade-in-2" onclick="window.location='?page=manager_stok_bahan&role=manager'">
            <div class="activity-icon orange">📦</div>
            <div class="activity-body">
                <div class="activity-title">Update Stok</div>
                <div class="activity-desc">Stok bahan baku terbaru telah diinput oleh Gudang</div>
                <div class="activity-meta">45 menit lalu</div>
            </div>
            <span class="activity-badge">Gudang</span>
        </div>
        <div class="activity-card fade-in fade-in-3">
            <div class="activity-icon" style="background:#fef2f2;color:#dc2626">⚠️</div>
            <div class="activity-body">
                <div class="activity-title">Stok Mentega Habis</div>
                <div class="activity-desc">Mentega saat ini 0 KG - perlu pemesanan segera</div>
                <div class="activity-meta">1 jam lalu</div>
            </div>
            <span class="activity-badge" style="background:#fef2f2;color:#dc2626">Alert</span>
        </div>
    </div>

    <div>
        <div class="section-title">🍫 Status Produk Hari Ini</div>
        <div class="product-list fade-in fade-in-1">
            <div class="product-list-header">Produksi Berjalan</div>
            <div class="product-item">
                <div class="product-name">
                    <strong>Brownies Fudgy</strong>
                    <span>BRN-FUD-DC-001</span>
                </div>
                <div class="product-progress-bar">
                    <div class="product-progress-fill" style="width:75%"></div>
                </div>
                <span style="font-size:12px;font-weight:600;color:var(--blue-500)">420 pcs</span>
            </div>
            <div class="product-item">
                <div class="product-name">
                    <strong>Mie Instan</strong>
                    <span>MIE-001</span>
                </div>
                <div class="product-progress-bar">
                    <div class="product-progress-fill" style="width:55%"></div>
                </div>
                <span style="font-size:12px;font-weight:600;color:var(--blue-500)">200 pcs</span>
            </div>
            <div class="product-item">
                <div class="product-name">
                    <strong>Waffer</strong>
                    <span>WAF-001</span>
                </div>
                <div class="product-progress-bar">
                    <div class="product-progress-fill" style="width:40%"></div>
                </div>
                <span style="font-size:12px;font-weight:600;color:var(--blue-500)">200 pcs</span>
            </div>
        </div>
    </div>
</div>

<div class="flex" style="gap:12px">
    <a href="?page=manager_buat_wo&role=manager" class="btn btn-primary">📝 Buat Work Order Baru</a>
    <a href="?page=manager_laporan&role=manager" class="btn btn-secondary">📋 Lihat Semua Laporan</a>
</div>
