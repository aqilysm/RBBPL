<!-- Work Order Produksi -->
<div class="page-header">
    <div class="page-title">Work Order</div>
    <div class="page-subtitle">Daftar work order yang diterima dari Manager</div>
</div>

<div class="activity-card fade-in" style="cursor:pointer;border-left:4px solid var(--blue-400)" onclick="window.location='?page=produksi_detail_wo&role=produksi'">
    <div class="activity-icon blue">📝</div>
    <div class="activity-body">
        <div class="activity-title">Work Order</div>
        <div style="font-size:11.5px;color:var(--text-muted);margin-bottom:3px">No. Dokumen: WO-BRN-FUD-DC-001</div>
        <div class="activity-desc">Brownies Fudgy Intense Dark Chocolate</div>
    </div>
    <span class="activity-badge">Manager</span>
</div>

<!-- Stats -->
<div class="stat-card red-card fade-in fade-in-2" style="max-width:220px;margin:20px 0">
    <div class="stat-label">Produk Reject</div>
    <div class="stat-value">64</div>
    <div class="stat-sub">pcs</div>
</div>

<!-- Daftar Komposisi -->
<div class="section-title fade-in">📋 Daftar Komposisi</div>
<div class="activity-card fade-in" onclick="window.location='?page=produksi_daftar_komposisi&role=produksi'">
    <div class="activity-icon blue">🧪</div>
    <div class="activity-body">
        <div class="activity-title">Brownies</div>
        <div style="font-size:11.5px;color:var(--text-muted)">Brn-124</div>
        <div class="activity-desc">Bahan baku: Dark Chocolate 250g, Gula 300g, Mentega 150g...</div>
    </div>
</div>

<!-- Update Status WO -->
<div class="section-title fade-in" style="margin-top:20px">🔄 Update Status WO</div>
<div class="detail-card fade-in">
    <div class="detail-body" style="padding:18px 20px">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px">
            <div>
                <div style="font-size:13px;font-weight:700">WORK ORDER (WO)</div>
                <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Produk: Brownies Fudgy Intense Dark Chocolate<br>Kode Produk: BRN-FUD-DC-001<br>Batch: 1 Batch (1.000 g) → Output ±950 g / 16 potong</div>
            </div>
            <div>
                <div style="font-size:11px;color:var(--text-muted);margin-bottom:5px;text-align:right">Status</div>
                <label class="toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                </label>
            </div>
        </div>
    </div>
</div>
