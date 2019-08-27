<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="header-social-icons">
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <a href="/" class="main-logo">
                <img src="/public/images/logo-mobile.png" alt="">
            </a>
            <a href="/" class="main-desktop-logo">
                <img src="/public/images/logo-desktop.png" alt="">
            </a>
            <nav class="desktop-menu">
                <ul>
                    <?php foreach ($menu_list as $menu): ?>
                        <li>
                            <a href="<?php echo $menu['url'] ?>"><?php echo $menu['name'] ?></a>
                        </li>
                    <?php endforeach ?>
                    <li>
                        <a href="" id="feedback">Заказать звонок</a>
                    </li>
                </ul>
            </nav>
            <span class="mobile-menu-toggler">
                <i class="fas fa-bars"></i>
            </span>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <a href="">
                Позвонить сейчас:
                <span>+30 1234 56789</span>
            </a>
        </div>
    </div>
    <nav class="mobile-menu">
        <ul>
            <?php foreach ($menu_list as $menu): ?>
                <li>
                    <a href="<?php echo $menu['url'] ?>"><?php echo $menu['name'] ?></a>
                </li>
            <?php endforeach ?>
            <li>
                <a href="" id="mobile-feedback">Заказать звонок</a>
            </li>
        </ul>
        <span class="menu-close">
            <i class="fas fa-times"></i>
        </span>
    </nav>
    <?php echo $popup_form ?>
</header>
<!-- https://www.cssigniter.com/preview/oikia -->