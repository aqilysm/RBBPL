<?php
session_start();

// Simple router
$page = $_GET['page'] ?? 'welcome';
$role = $_GET['role'] ?? ($_SESSION['role'] ?? 'manager');

if (isset($_GET['role'])) {
    $_SESSION['role'] = $_GET['role'];
}

$allowed_pages = [
    'welcome', 'login',
    'manager_dashboard', 'manager_laporan', 'manager_buat_wo', 'manager_detail_laporan', 'manager_detail_komposisi', 'manager_stok_bahan',
    'gudang_dashboard', 'gudang_stok', 'gudang_stok_edit', 'gudang_laporan_reject', 'gudang_detail_reject', 'gudang_update_stok',
    'qc_dashboard', 'qc_laporan', 'qc_buat_laporan', 'qc_detail_laporan',
    'rnd_dashboard', 'rnd_komposisi', 'rnd_buat_komposisi', 'rnd_riwayat_uji',
    'produksi_dashboard', 'produksi_wo', 'produksi_detail_wo', 'produksi_daftar_komposisi', 'produksi_buat_laporan', 'produksi_update_status',
    'packaging_dashboard', 'packaging_buat_laporan', 'packaging_update_status',
    'distributor_dashboard', 'distributor_buat_laporan', 'distributor_update_status'
];

if (!in_array($page, $allowed_pages)) $page = 'welcome';

// Include helpers
function getActiveNav($current, $target) {
    return $current === $target ? 'active' : '';
}

function renderSidebar($role, $active_page) {
    $roles = [
        'manager'     => ['icon'=>'📊','label'=>'Manager','color'=>'#2563eb'],
        'gudang'      => ['icon'=>'🏭','label'=>'Gudang','color'=>'#0891b2'],
        'qc'          => ['icon'=>'🔍','label'=>'Quality Control','color'=>'#7c3aed'],
        'rnd'         => ['icon'=>'🧪','label'=>'RnD','color'=>'#059669'],
        'produksi'    => ['icon'=>'⚙️','label'=>'Produksi','color'=>'#d97706'],
        'packaging'   => ['icon'=>'📦','label'=>'Packaging','color'=>'#dc2626'],
        'distributor' => ['icon'=>'🚚','label'=>'Distributor','color'=>'#9333ea'],
    ];

    $navs = [
        'manager' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'manager_dashboard'],
            ['icon'=>'📋','label'=>'Kelola Laporan','page'=>'manager_laporan'],
            ['icon'=>'📝','label'=>'Buat Work Order','page'=>'manager_buat_wo'],
            ['icon'=>'🧾','label'=>'Detail Komposisi','page'=>'manager_detail_komposisi'],
            ['icon'=>'📦','label'=>'Stok Bahan Baku','page'=>'manager_stok_bahan'],
        ],
        'gudang' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'gudang_dashboard'],
            ['icon'=>'📦','label'=>'Stok Bahan Baku','page'=>'gudang_stok'],
            ['icon'=>'⚠️','label'=>'Laporan Reject','page'=>'gudang_laporan_reject'],
            ['icon'=>'🔄','label'=>'Update Stok','page'=>'gudang_update_stok'],
        ],
        'qc' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'qc_dashboard'],
            ['icon'=>'📋','label'=>'Laporan QC','page'=>'qc_laporan'],
            ['icon'=>'➕','label'=>'Buat Laporan QC','page'=>'qc_buat_laporan'],
        ],
        'rnd' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'rnd_dashboard'],
            ['icon'=>'🧪','label'=>'Daftar Komposisi','page'=>'rnd_komposisi'],
            ['icon'=>'➕','label'=>'Buat Komposisi','page'=>'rnd_buat_komposisi'],
            ['icon'=>'📊','label'=>'Riwayat Uji','page'=>'rnd_riwayat_uji'],
        ],
        'produksi' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'produksi_dashboard'],
            ['icon'=>'📝','label'=>'Work Order','page'=>'produksi_wo'],
            ['icon'=>'📋','label'=>'Daftar Komposisi','page'=>'produksi_daftar_komposisi'],
            ['icon'=>'📄','label'=>'Buat Laporan','page'=>'produksi_buat_laporan'],
            ['icon'=>'🔄','label'=>'Update Status','page'=>'produksi_update_status'],
        ],
        'packaging' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'packaging_dashboard'],
            ['icon'=>'📄','label'=>'Buat Laporan','page'=>'packaging_buat_laporan'],
            ['icon'=>'🔄','label'=>'Update Status Barang','page'=>'packaging_update_status'],
        ],
        'distributor' => [
            ['icon'=>'🏠','label'=>'Dashboard','page'=>'distributor_dashboard'],
            ['icon'=>'📄','label'=>'Buat Laporan Distribusi','page'=>'distributor_buat_laporan'],
            ['icon'=>'🔄','label'=>'Update Status Barang','page'=>'distributor_update_status'],
        ],
    ];

    $r = $roles[$role] ?? $roles['manager'];
    $initials = strtoupper(substr($r['label'],0,2));
    $nav = $navs[$role] ?? $navs['manager'];
    ?>
    <aside class="sidebar">
        <div class="sidebar-brand">
            <a href="?page=welcome" class="brand-logo">
                <div class="brand-icon">🏪</div>
                <div class="brand-text">
                    <h2>SGUDANG</h2>
                    <span>Supply Chain Portal</span>
                </div>
            </a>
        </div>

        <div class="role-selector">
            <div class="role-label">Portal</div>
            <select class="role-select" onchange="window.location='?role='+this.value+'&page='+this.value+'_dashboard'">
                <option value="manager"     <?=($role=='manager'    ?'selected':'')  ?>>📊 Manager</option>
                <option value="gudang"      <?=($role=='gudang'     ?'selected':'')  ?>>🏭 Gudang</option>
                <option value="qc"          <?=($role=='qc'         ?'selected':'')  ?>>🔍 QC</option>
                <option value="rnd"         <?=($role=='rnd'        ?'selected':'')  ?>>🧪 RnD</option>
                <option value="produksi"    <?=($role=='produksi'   ?'selected':'')  ?>>⚙️ Produksi</option>
                <option value="packaging"   <?=($role=='packaging'  ?'selected':'')  ?>>📦 Packaging</option>
                <option value="distributor" <?=($role=='distributor'?'selected':'')  ?>>🚚 Distributor</option>
            </select>
        </div>

        <nav class="sidebar-nav">
            <span class="nav-section-label">Menu Utama</span>
            <?php foreach ($nav as $n): ?>
            <a href="?page=<?=$n['page']?>&role=<?=$role?>" class="nav-item <?=getActiveNav($active_page,$n['page'])?>">
                <span class="nav-icon"><?=$n['icon']?></span>
                <?=$n['label']?>
            </a>
            <?php endforeach; ?>
        </nav>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar"><?=$initials?></div>
                <div class="user-details">
                    <strong><?=$r['label']?></strong>
                    <span>sgudang.local</span>
                </div>
            </div>
        </div>
    </aside>
    <?php
}

function renderTopbar($title) {
    ?>
    <header class="topbar">
        <div class="topbar-title"><?=$title?></div>
        <div class="topbar-actions">
            <button class="topbar-btn" title="Notifikasi">🔔</button>
            <button class="topbar-btn" title="Settings">⚙️</button>
            <div class="topbar-avatar">AD</div>
        </div>
    </header>
    <?php
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SGUDANG - Supply Chain Portal</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

// ── PAGE: WELCOME ────────────────────────────────────────────
if ($page === 'welcome'): ?>
<div class="welcome-screen">
    <div class="welcome-header fade-in">
        <div class="welcome-logo">🏪</div>
        <h1>Selamat Datang<br>di Portal SGUDANG</h1>
        <p>Sistem Manajemen Gudang & Produksi Terpadu</p>
    </div>
    <div class="role-buttons-grid">
        <a href="?page=login&role=manager"     class="role-btn fade-in fade-in-1"><span class="role-btn-icon">📊</span><span class="role-btn-text">Manager</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=gudang"      class="role-btn fade-in fade-in-2"><span class="role-btn-icon">🏭</span><span class="role-btn-text">Gudang</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=qc"          class="role-btn fade-in fade-in-2"><span class="role-btn-icon">🔍</span><span class="role-btn-text">QC</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=rnd"         class="role-btn fade-in fade-in-3"><span class="role-btn-icon">🧪</span><span class="role-btn-text">RnD</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=produksi"    class="role-btn fade-in fade-in-3"><span class="role-btn-icon">⚙️</span><span class="role-btn-text">Produksi</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=packaging"   class="role-btn fade-in fade-in-4"><span class="role-btn-icon">📦</span><span class="role-btn-text">Packaging</span><span class="role-btn-arrow">→</span></a>
        <a href="?page=login&role=distributor" class="role-btn fade-in fade-in-4"><span class="role-btn-icon">🚚</span><span class="role-btn-text">Distributor</span><span class="role-btn-arrow">→</span></a>
    </div>
</div>

<?php
// ── PAGE: LOGIN ───────────────────────────────────────────────
elseif ($page === 'login'):
    $roleLabels = ['manager'=>'Manager','gudang'=>'Gudang','qc'=>'QC','rnd'=>'RnD','produksi'=>'Produksi','packaging'=>'Packaging','distributor'=>'Distributor'];
    $rl = $roleLabels[$role] ?? 'Manager';
?>
<div class="login-bg">
    <div class="login-card fade-in">
        <div class="login-header">
            <div class="login-logo">🏪</div>
            <h1>Portal SGUDANG</h1>
            <p>Login sebagai <strong><?=$rl?></strong></p>
        </div>

        <div class="login-form-group">
            <label>Username</label>
            <input type="text" placeholder="Masukkan username" value="<?=strtolower($role)?>_user">
        </div>
        <div class="login-form-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan password" value="••••••••">
        </div>
        <div class="login-forgot">Lupa Password?</div>
        <a href="?page=<?=$role?>_dashboard&role=<?=$role?>" class="btn-login">MASUK →</a>
        <div class="login-footer">
            Belum punya akun? <a href="#">Registrasi</a>
        </div>
        <div class="login-footer" style="margin-top:10px">
            <a href="?page=welcome">← Kembali ke halaman utama</a>
        </div>
    </div>
</div>

<?php
// ── PAGES WITH SIDEBAR ────────────────────────────────────────
else:
    // Determine role from page prefix
    $parts = explode('_', $page, 2);
    $current_role = $parts[0];
    if (!in_array($current_role, ['manager','gudang','qc','rnd','produksi','packaging','distributor'])) {
        $current_role = $role;
    }

    $pageTitles = [
        'manager_dashboard'     => 'Dashboard Manager',
        'manager_laporan'       => 'Kelola Laporan',
        'manager_buat_wo'       => 'Buat Work Order',
        'manager_detail_laporan'=> 'Detail Laporan',
        'manager_detail_komposisi'=>'Detail Komposisi',
        'manager_stok_bahan'    => 'Stok Bahan Baku',
        'gudang_dashboard'      => 'Dashboard Gudang',
        'gudang_stok'           => 'Stok Bahan Baku',
        'gudang_stok_edit'      => 'Edit Stok Bahan Baku',
        'gudang_laporan_reject' => 'Laporan Bahan Reject',
        'gudang_detail_reject'  => 'Detail Laporan Reject',
        'gudang_update_stok'    => 'Update Stok Gudang',
        'qc_dashboard'          => 'Dashboard QC',
        'qc_laporan'            => 'Laporan QC',
        'qc_buat_laporan'       => 'Buat Laporan QC',
        'qc_detail_laporan'     => 'Detail Laporan QC',
        'rnd_dashboard'         => 'Dashboard RnD',
        'rnd_komposisi'         => 'Daftar Komposisi',
        'rnd_buat_komposisi'    => 'Membuat Detail Komposisi',
        'rnd_riwayat_uji'       => 'Riwayat Uji',
        'produksi_dashboard'    => 'Dashboard Produksi',
        'produksi_wo'           => 'Work Order',
        'produksi_detail_wo'    => 'Detail Work Order',
        'produksi_daftar_komposisi'=>'Daftar Komposisi',
        'produksi_buat_laporan' => 'Membuat Laporan Produksi',
        'produksi_update_status'=> 'Update Status Barang',
        'packaging_dashboard'   => 'Dashboard Packaging',
        'packaging_buat_laporan'=> 'Membuat Laporan Packaging',
        'packaging_update_status'=>'Update Status Barang',
        'distributor_dashboard' => 'Dashboard Distributor',
        'distributor_buat_laporan'=>'Membuat Laporan Distribusi',
        'distributor_update_status'=>'Update Status Barang',
    ];

    $pt = $pageTitles[$page] ?? 'SGUDANG';
?>
<div class="app-wrapper">
    <?php renderSidebar($current_role, $page); ?>
    <div class="main-content">
        <?php renderTopbar($pt); ?>
        <div class="page-content">
        <?php include "pages/{$page}.php"; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<script>
// Highlight active nav links
document.querySelectorAll('.nav-item').forEach(el => {
    el.addEventListener('click', function() {
        document.querySelectorAll('.nav-item').forEach(x => x.classList.remove('active'));
        this.classList.add('active');
    });
});

// Role select redirect
const rs = document.querySelector('.role-select');
if (rs) {
    rs.addEventListener('change', function() {
        window.location = '?role=' + this.value + '&page=' + this.value + '_dashboard';
    });
}
</script>
</body>
</html>
