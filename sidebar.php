<aside>
    <div class="logo">
        <img src="assets/website-logo/Bizzhub-logo.png" alt="Bizzhub Logo">
        <span>BizzHub</span> <!-- Menambahkan teks BizzHub -->
    </div>
    <ul>
        <li><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li>
            <a onclick="toggleSubmenu('management-submenu')">
                <i class="fas fa-cogs"></i> Manajemen <i class="fas fa-chevron-down"></i>
            </a>
            <ul id="management-submenu" class="submenu">
                <li><a onclick="loadPage('manajemen/kuota.php')"><i class="fas fa-box"></i> Kuota</a></li>
                <li><a onclick="loadPage('manajemen/penjualan.php')"><i class="fas fa-exchange-alt"></i> Penjualan</a></li>
                <li><a onclick="loadPage('manajemen/pesanan.php')"><i class="fas fa-users"></i> Pesanan</a></li>
                <li><a onclick="loadPage('manajemen/pelanggan.php')"><i class="fas fa-user-tie"></i> Pelanggan</a></li>
            </ul>
        </li>
        <li>
            <a onclick="toggleSubmenu('finance-submenu')">
                <i class="fas fa-wallet"></i> Keuangan <i class="fas fa-chevron-down"></i>
            </a>
            <ul id="finance-submenu" class="submenu">
                <li><a onclick="loadPage('keuangan/data_penjualan.php')"><i class="fas fa-chart-bar"></i> Data Penjualan</a></li>
                <li><a onclick="loadPage('keuangan/pengiriman.php')"><i class="fas fa-shipping-fast"></i> Pengiriman</a></li>
                <li><a onclick="loadPage('keuangan/invoice.php')"><i class="fas fa-file-invoice"></i> Invoice</a></li>
                <li><a onclick="loadPage('keuangan/pembayaran.php')"><i class="fas fa-credit-card"></i> Pembayaran</a></li>
            </ul>
        </li>
        <li><a onclick="loadPage('laporan_penjualan.php')"><i class="fas fa-chart-line"></i> Laporan Penjualan</a></li>
        <li><a onclick="loadPage('bantuan.php')"><i class="fas fa-question-circle"></i> Bantuan</a></li>
    </ul>
</aside>
<script src="js/script.js"></script>