<!-- Stok Bahan Baku - Gudang Edit View -->
<div class="page-header">
    <div class="flex items-center justify-between">
        <div>
            <div class="page-title">Stok Bahan Baku</div>
            <div class="page-subtitle">Kelola stok bahan baku gudang</div>
        </div>
        <a href="?page=gudang_update_stok&role=gudang" class="btn btn-primary">➕ Tambah Stok</a>
    </div>
</div>

<div class="search-bar fade-in">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari bahan baku...">
    <span class="filter-icon">⚙️</span>
</div>

<div class="table-wrapper fade-in">
    <table class="data-table">
        <thead>
            <tr>
                <th>Bahan Baku</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <strong>Tepung</strong><br>
                    <span style="font-size:11.5px;color:var(--text-muted)">DB-01</span>
                </td>
                <td><strong>100 KG</strong></td>
                <td><span class="badge badge-green">✓ Tersedia</span></td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit" title="Edit">✏️</button>
                        <button class="action-btn delete" title="Hapus">🗑️</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Terigu</strong><br>
                    <span style="font-size:11.5px;color:var(--text-muted)">SB-02</span>
                </td>
                <td><strong>20 KG</strong></td>
                <td><span class="badge badge-yellow">⚠ Rendah</span></td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit" title="Edit">✏️</button>
                        <button class="action-btn delete" title="Hapus">🗑️</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Mentega</strong><br>
                    <span style="font-size:11.5px;color:var(--text-muted)">MG-2</span>
                </td>
                <td><strong>0 KG</strong></td>
                <td><span class="badge badge-red">✗ Habis</span></td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit" title="Edit">✏️</button>
                        <button class="action-btn delete" title="Hapus">🗑️</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Coklat</strong><br>
                    <span style="font-size:11.5px;color:var(--text-muted)">CK-12</span>
                </td>
                <td><strong>100 KG</strong></td>
                <td><span class="badge badge-green">✓ Tersedia</span></td>
                <td>
                    <div class="action-btns">
                        <button class="action-btn edit" title="Edit">✏️</button>
                        <button class="action-btn delete" title="Hapus">🗑️</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
