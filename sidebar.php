<aside id="sidebar">
    <div class="toggle-sidebar" onclick="toggleSidebar()">
        <img src="https://img.icons8.com/ios-filled/24/000000/menu--v1.png" alt="Toggle Sidebar">
    </div>
    <ul>
        <li><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        <li>
            <a onclick="toggleSubmenu('management-submenu')">
                <i class="fas fa-cogs"></i> <span>Manajemen</span> <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <ul id="management-submenu" class="submenu">
                <li><a onclick="loadPage('manajemen/kuota.php')"><i class="fas fa-box"></i> <span>Kuota</span></a></li>
                <li><a onclick="loadPage('manajemen/penjualan.php')"><i class="fas fa-exchange-alt"></i> <span>Penjualan</span></a></li>
                <li><a onclick="loadPage('manajemen/pesanan.php')"><i class="fas fa-users"></i> <span>Pesanan</span></a></li>
                <li><a onclick="loadPage('manajemen/pelanggan.php')"><i class="fas fa-user-tie"></i> <span>Pelanggan</span></a></li>
            </ul>
        </li>
        <li>
            <a onclick="toggleSubmenu('finance-submenu')">
                <i class="fas fa-wallet"></i> <span>Keuangan</span> <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <ul id="finance-submenu" class="submenu">
                <li><a onclick="loadPage('keuangan/data_penjualan.php')"><i class="fas fa-chart-bar"></i> <span>Data Penjualan</span></a></li>
                <li><a onclick="loadPage('keuangan/pengiriman.php')"><i class="fas fa-shipping-fast"></i> <span>Pengiriman</span></a></li>
                <li><a onclick="loadPage('keuangan/invoice.php')"><i class="fas fa-file-invoice"></i> <span>Invoice</span></a></li>
                <li><a onclick="loadPage('keuangan/pembayaran.php')"><i class="fas fa-credit-card"></i> <span>Pembayaran</span></a></li>
            </ul>
        </li>
        <li><a onclick="loadPage('laporan_penjualan.php')"><i class="fas fa-chart-line"></i> <span>Laporan Penjualan</span></a></li>
        <li><a onclick="loadPage('bantuan.php')"><i class="fas fa-question-circle"></i> <span>Bantuan</span></a></li>
    </ul>
</aside>
<div class="content">
    <!-- Konten halaman akan dimuat di sini -->
</div>
<script src="js/main.js"></script>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const content = document.querySelector('.content');
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('expanded');
    }
</script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">