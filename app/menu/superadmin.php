<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                    Informasi
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data_ibu_hamil" class="nav-link">
                        <i class="fa fa-user nav-icon"></i>
                        <p>Data Ibu Hamil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data_kbpp" class="nav-link">
                        <i class='fas fa-pills' style='font-size:24px;'></i>
                        <p>Data KBPP</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data_kader" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Data Kader</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="logout.php?page=logout" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>