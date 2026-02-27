<!-- Kelola Laporan -->
<div class="page-header">
    <div class="flex items-center justify-between">
        <div>
            <div class="page-title">Kelola Laporan</div>
            <div class="page-subtitle">Semua laporan dari seluruh divisi</div>
        </div>
        <a href="?page=manager_buat_wo&role=manager" class="btn btn-primary">➕ Buat WO</a>
    </div>
</div>

<div class="search-bar fade-in">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari laporan...">
    <span class="filter-icon">⚙️</span>
</div>

<div style="display:flex;flex-direction:column;gap:12px">
    <div class="activity-card fade-in fade-in-1" onclick="window.location='?page=manager_detail_laporan&role=manager'">
        <div class="activity-icon" style="background:#fef2f2;color:#dc2626">⚠️</div>
        <div class="activity-body">
            <div class="activity-title">Laporan QC Bahan Baku</div>
            <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:2px">LP12899</div>
            <div class="activity-desc">Jumlah Barang reject: Mentega 10 pcs, kemasan rusak</div>
        </div>
        <span class="badge badge-yellow">Pending</span>
    </div>

    <div class="activity-card fade-in fade-in-2" onclick="window.location='?page=manager_detail_laporan&role=manager'">
        <div class="activity-icon green">🏭</div>
        <div class="activity-body">
            <div class="activity-title">Laporan Produksi</div>
            <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:2px">LP12899</div>
            <div class="activity-desc">Barang siap Produksi: Brownies 420 pcs</div>
        </div>
        <span class="badge badge-green">Approved</span>
    </div>

    <div class="activity-card fade-in fade-in-3" onclick="window.location='?page=manager_detail_laporan&role=manager'">
        <div class="activity-icon blue">🚚</div>
        <div class="activity-body">
            <div class="activity-title">Laporan Distribusi</div>
            <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:2px">LP12899</div>
            <div class="activity-desc">Barang sudah didistribusi ke Toko Maju Jaya</div>
        </div>
        <span class="badge badge-green">Selesai</span>
    </div>

    <div class="activity-card fade-in fade-in-4" onclick="window.location='?page=manager_detail_laporan&role=manager'">
        <div class="activity-icon" style="background:#f5f3ff;color:#7c3aed">🔍</div>
        <div class="activity-body">
            <div class="activity-title">Laporan QC Produksi</div>
            <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:2px">LP12899</div>
            <div class="activity-desc">Barang Produksi Reject: 64 pcs tidak lolos standar</div>
        </div>
        <span class="badge badge-yellow">Review</span>
    </div>
</div>
