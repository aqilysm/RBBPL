<!-- QC Dashboard -->
<div class="page-header">
    <div class="page-title">Dashboard QC</div>
    <div class="page-subtitle">Ringkasan aktivitas Quality Control hari ini</div>
</div>

<div class="stats-grid">
    <div class="stat-card blue-card fade-in fade-in-1">
        <div class="stat-label">Total Laporan</div>
        <div class="stat-value">8</div>
        <div class="stat-sub">Hari ini</div>
    </div>
    <div class="stat-card orange-card fade-in fade-in-2">
        <div class="stat-label">QC Bahan Baku</div>
        <div class="stat-value">7</div>
        <div class="stat-sub">Waited (menunggu)</div>
    </div>
    <div class="stat-card red-card fade-in fade-in-3">
        <div class="stat-label">QC Produk</div>
        <div class="stat-value">4</div>
        <div class="stat-sub">Waited (menunggu)</div>
    </div>
</div>

<div class="two-col" style="margin-bottom:20px">
    <div class="stat-card fade-in fade-in-4">
        <div class="stat-label">Avg Reject Bahan</div>
        <div class="stat-value" style="font-size:28px;color:var(--warning)">1.8%</div>
        <div class="stat-sub" style="color:var(--danger)">Min Target: 2.5%</div>
        <div style="margin-top:10px;background:var(--silver-100);border-radius:20px;height:6px;overflow:hidden">
            <div style="width:72%;height:100%;background:linear-gradient(90deg,var(--warning),#fcd34d);border-radius:20px"></div>
        </div>
    </div>
    <div class="stat-card fade-in fade-in-5">
        <div class="stat-label">Avg Reject Produk</div>
        <div class="stat-value" style="font-size:28px;color:var(--success)">1.2%</div>
        <div class="stat-sub" style="color:var(--text-muted)">Minimal: 2.0% ✓</div>
        <div style="margin-top:10px;background:var(--silver-100);border-radius:20px;height:6px;overflow:hidden">
            <div style="width:60%;height:100%;background:linear-gradient(90deg,var(--success),#34d399);border-radius:20px"></div>
        </div>
    </div>
</div>

<div class="flex" style="gap:12px">
    <a href="?page=qc_buat_laporan&role=qc" class="btn btn-primary">➕ Buat Laporan QC</a>
    <a href="?page=qc_laporan&role=qc" class="btn btn-secondary">📋 Lihat Semua Laporan</a>
</div>
