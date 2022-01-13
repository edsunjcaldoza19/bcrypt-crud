<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">Admin</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item <?= ($activePage == 'home') ? 'active': ''; ?>">
                    <a href="home.php" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Accounts</li>
                <li class="sidebar-item <?= ($activePage == 'account_staff_add') ? 'active': ''; ?>">
                    <a href="account_staff_add.php" class='sidebar-link'>
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Add Account</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($activePage == 'account_staff' ||
                $activePage == 'account_staff_update') ? 'active': ''; ?>">
                    <a href="account_staff.php" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Accounts</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($activePage == 'account_browse') ? 'active': ''; ?>">
                    <a href="account_browse.php" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Browse Accounts</span>
                    </a>
                </li>

                <li class="sidebar-title">Settings</li>
                <li class="sidebar-item <?= ($activePage == 'logs') ? 'active': ''; ?>">
                    <a href="logs.php" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Logs</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($activePage == 'settings_account') ? 'active': ''; ?>">
                    <a href="settings_account.php" class='sidebar-link'>
                    <i class="bi bi-file-earmark-person-fill"></i>
                        <span>Account Settings</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>