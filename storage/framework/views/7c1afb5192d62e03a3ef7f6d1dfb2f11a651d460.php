<div style="background-color:#008ED1">
    <div class="col-lg-12 text-white pt-1 pb-0">
        <marquee direction="scroll">A scrolling text created with HTML Marquee element and styled with CSS properties.</marquee>
    </div>
    
</div>
<nav class="navbar navbar-expand-lg text-white bg-primary py-4" data-navbar="static">
    <div class="container ">
        
        <div class="navbar-left">
            <button class="navbar-toggler text-white" type="button">☰</button>
            <a class="navbar-brand" href="/">
                <img class="logo-dark" style="width:200px;" src="<?php echo e(asset('images/companyAssets/logoPrimary.png')); ?>" alt="logo">
            </a>
        </div>
        
        <section class="navbar-mobile">
            
            <ul class="nav nav-navbar ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">E - Procurement <span class="arrow"></span></a>
                    <nav class="nav ">
                        <a class="nav-link text-dark" href="/eproc/list-procurement">Daftar Pengadaan</a>
                        <a class="nav-link text-dark" href="#">Rekanan</a>
                    </nav>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="/blog">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact">Contact</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link active" href="/contact">Logout</a>
                </li> -->
            </ul>
            <span class="navbar-divider"></span>
            <div>
            <?php if( User::authenticated() ): ?>
                <div class="dropdown">
                <span class="dropdown-toggle btn btn-sm text-white bg-gradient-primary btn-round" data-toggle="dropdown"><?php echo e(User::info()->company_name); ?></span>
                <div class="dropdown-menu dropdown-menu-right shadow-lg">
                  <a class="dropdown-item" href="/partner/myaccount">My Account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/auth/logout">Logout</a>
                </div>
              </div>
            <?php else: ?>
                <a class="btn btn-sm btn-round btn-white ml-lg-4 mr-2" href="/auth/login">Sign in</a>
                <a class="btn btn-sm btn-round btn-outline-white text-white" href="/register">Sign up</a>
            <?php endif; ?>
            </div>
        </section>
        
    </section>
    
</div>
</nav><?php /**PATH /Users/marshall/Desktop/wt/public_html/resources/views/layout/_nav.blade.php ENDPATH**/ ?>