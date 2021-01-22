<aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

           
                        <li><a class="has-arrow waves-effect waves-dark" href="index1.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Beranda</span></a></li>
						<li><a class="has-arrow waves-effect waves-dark" href="?page=identifikasi" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Identifikasi</span></a></li>
						<?php if(!isset($_SESSION['username'])){?>
						<li><a class="has-arrow waves-effect waves-dark" href="?page=daftardef" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Daftar Defisiensi</span></a></li>
						<li><a class="has-arrow waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Login</span></a></li>
						<?php }?>
                    </ul>
                </nav>
            </div>
        </aside>