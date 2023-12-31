<style>
    .sidebar-menu li:hover {
        background-color: #f1f1f1;
    }

    .sidebar-menu li:hover a {
        color: rgba(103, 119, 239, 255);
    }

    .sidebar-menu li.active {
        background-color: rgba(103, 119, 239, 255);
    }

    .sidebar-menu li.active a {
        color: #000;
    }
</style>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand" style="font-size: 20px;">
            <a href="/">SI-IDA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">IDA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li>
                <a href="/" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li><a class="nav-link" href="/umkmdata"><i class="fas fa-columns"></i> <span>Data UMKM</span></a></li>
            <?php if (session()->get('role') == 1) { ?>
                <li class="menu-header">Account</li>
                <li><a class="nav-link" href="/register"><i class="fas fa-user-plus"></i> <span>Register</span></a>
                </li>
            <?php } ?>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://www.instagram.com/rumah.halalnusantara/?hl=id"
                    class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fab fa-instagram"></i> Official Instagram
                </a>
            </div>
    </aside>
</div>