<!-- Gudang Dashboard -->
<div class="page-header">
    <div class="page-title">Dashboard Gudang</div>
    <div class="page-subtitle">Pantau stok dan aktivitas gudang hari ini</div>
</div>

<div class="activity-card fade-in" style="border-left:4px solid var(--danger);margin-bottom:20px">
    <div class="activity-icon" style="background:#fef2f2;color:#dc2626">🚨</div>
    <div class="activity-body">
        <div class="activity-title">Laporan Reject Bahan Baku (dari QC)</div>
        <div style="font-size:13px;color:var(--text-secondary);margin-top:6px;line-height:1.7">
            🧈 Mentega: <strong>2 kg</strong> &nbsp;|&nbsp; 🍬 Gula: <strong>2 kg</strong> &nbsp;|&nbsp; 🥛 Susu: <strong>2 kg</strong>
        </div>
    </div>
    <span class="activity-badge" style="background:#fef2f2;color:#dc2626">QC</span>
</div>

<div class="section-title fade-in">📦 Stok Gudang Hari Ini</div>
<div class="product-list fade-in">
    <div class="product-item">
        <div class="product-name">
            <strong>Mentega</strong>
            <span>MG-2</span>
        </div>
        <div class="product-progress-bar">
            <div class="product-progress-fill" style="width:80%"></div>
        </div>
        <span style="font-size:13px;font-weight:700;color:var(--blue-500);min-width:70px;text-align:right">200 kg</span>
    </div>
    <div class="product-item">
        <div class="product-name">
            <strong>Susu</strong>
            <span>SU-1</span>
        </div>
        <div class="product-progress-bar">
            <div class="product-progress-fill" style="width:65%"></div>
        </div>
        <span style="font-size:13px;font-weight:700;color:var(--blue-500);min-width:70px;text-align:right">179 kg</span>
    </div>
    <div class="product-item">
        <div class="product-name">
            <strong>Gula</strong>
            <span>GL-3</span>
        </div>
        <div class="product-progress-bar">
            <div class="product-progress-fill" style="width:70%"></div>
        </div>
        <span style="font-size:13px;font-weight:700;color:var(--blue-500);min-width:70px;text-align:right">181 kg</span>
    </div>
</div>

<div class="flex" style="gap:12px;margin-top:20px">
    <a href="?page=gudang_update_stok&role=gudang" class="btn btn-primary">🔄 Update Stok</a>
    <a href="?page=gudang_stok&role=gudang" class="btn btn-secondary">📦 Lihat Semua Stok</a>
</div>
