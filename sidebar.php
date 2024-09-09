<aside>
    <div class="logo">
        <img src="assets/website-logo/Bizzhub-logo.png" alt="Bizzhub Logo">
        <span>BizzHub</span> <!-- Menambahkan teks BizzHub -->
    </div>
    <ul>
        <li><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li>
            <a href="javascript:void(0)" onclick="toggleSubmenu('management-submenu')">
                <i class="fas fa-cogs"></i> Manajemen <i class="fas fa-chevron-down"></i>
            </a>
            <ul id="management-submenu" class="submenu">
                <li><a href="index.php?page=submenus/quota"><i class="fas fa-box"></i> Kuota</a></li>
                <li><a href="index.php?page=submenus/sales"><i class="fas fa-exchange-alt"></i> Penjualan</a></li>
                <li><a href="index.php?page=submenus/orders"><i class="fas fa-users"></i> Pesanan</a></li>
                <li><a href="index.php?page=submenus/Customers"><i class="fas fa-user-tie"></i> Pelanggan</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)" onclick="toggleSubmenu('finance-submenu')">
                <i class="fas fa-wallet"></i> Keuangan <i class="fas fa-chevron-down"></i>
            </a>
            <ul id="finance-submenu" class="submenu">
                <li><a href="index.php?page=submenus/sales_data"><i class="fas fa-chart-bar"></i> Data Penjualan</a></li>
                <li><a href="index.php?page=submenus/shipping"><i class="fas fa-shipping-fast"></i> Pengiriman</a></li>
                <li><a href="index.php?page=submenus/invoice"><i class="fas fa-file-invoice"></i> Invoice</a></li>
                <li><a href="index.php?page=submenus/payment"><i class="fas fa-credit-card"></i> Pembayaran</a></li>
            </ul>
        </li>
        <li><a href="index.php?page=sales_report"><i class="fas fa-chart-line"></i> Laporan Penjualan</a></li>
        <li><a href="index.php?page=help"><i class="fas fa-question-circle"></i> Bantuan</a></li>
    </ul>
</aside>