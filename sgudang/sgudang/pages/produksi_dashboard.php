<!-- Produksi Dashboard -->
<div class="page-header">
    <div class="page-title">Dashboard Produksi</div>
    <div class="page-subtitle">Pantau Work Order dan status produksi berjalan</div>
</div>

<div class="activity-card fade-in" style="border-left:4px solid var(--blue-400);margin-bottom:20px" onclick="window.location='?page=produksi_wo&role=produksi'">
    <div class="activity-icon blue">📝</div>
    <div class="activity-body">
        <div class="activity-title">Work Order Aktif</div>
        <div style="font-size:11.5px;color:var(--text-muted)">No. Dokumen: WO-BRN-FUD-DC-001</div>
        <div class="activity-desc">Brownies Fudgy Intense Dark Chocolate — 1 Batch</div>
    </div>
    <span class="activity-badge">Manager</span>
</div>

<div class="two-col" style="margin-bottom:20px">
    <div class="stat-card red-card fade-in fade-in-1">
        <div class="stat-label">Produk Reject</div>
        <div class="stat-value">64</div>
        <div class="stat-sub">pcs hari ini</div>
    </div>
    <div class="stat-card green-card fade-in fade-in-2">
        <div class="stat-label">Produk Good</div>
        <div class="stat-value">420</div>
        <div class="stat-sub">pcs hari ini</div>
    </div>
</div>

<div class="flex" style="gap:12px">
    <a href="?page=produksi_wo&role=produksi" class="btn btn-primary">📝 Lihat Work Order</a>
    <a href="?page=produksi_buat_laporan&role=produksi" class="btn btn-secondary">📄 Buat Laporan</a>
</div>
