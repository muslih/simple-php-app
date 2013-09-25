<aside>
    <!-- masukan header -->
    <?php include 'view/header.php'; ?>
    <nav>
        <ul>
            <li><a href="?hal=awal">home</a></li>
            <li><a href="?hal=rkakl">rkakl</a></li>
            <li><a href="?hal=pnbp">pnbp</a></li>
            <li class="dropdown"><a >bku</a>
                <ul>
                    <li><a href="?hal=bku/up">up</a></li>
                    <li><a href="?hal=bku/ls">ls</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <form action="">
        <input type="search">
        <button type="submit">cari</button>
    </form>
</aside>