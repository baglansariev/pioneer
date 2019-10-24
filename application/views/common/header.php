<header id="header">
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
                        <?php if($menu['url'] == $page): ?>
                            <li>
                                <a href="<?php echo $menu['url'] ?>" class="menu-active"><?php echo $menu['name'] ?></a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo $menu['url'] ?>"><?php echo $menu['name'] ?></a>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                    <li>
                        <a href="" id="feedback"><?php echo $local_feedback; ?></a>
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
            <a class="header-phone" href="tel:+77021114466">
                <i class="fas fa-phone-volume"></i>
                <span>+7 702 111 44 66</span>
            </a>
            <div class="header-social-icons">
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="mailto:pioneergrain@mail.ru">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
            <?php if(isset($languages)): ?>
                <div class="languages">
                    <a href="#" class="language">
                        <i class="fas fa-globe-americas"></i>
                        <span>Русский</span>
                    </a>
                    <div class="language-list">
                        <?php foreach($languages as $language): ?>
                            <?php if($language['id'] !== '4'): ?>
                                <a href="/<?php echo $language['link']; ?>" class="lang <?php echo $language['class']; ?>"><?php echo $language['name']; ?></a>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <nav class="mobile-menu">
        <ul>
            <?php foreach ($menu_list as $menu): ?>
                <?php if($menu['url'] == $page): ?>
                    <li>
                        <a href="<?php echo $menu['url'] ?>" class="menu-active"><?php echo $menu['name'] ?></a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo $menu['url'] ?>"><?php echo $menu['name'] ?></a>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
            <li>
                <a href="" id="mobile-feedback"><?php echo $local_feedback; ?></a>
            </li>
        </ul>
        <span class="menu-close">
            <i class="fas fa-times"></i>
        </span>
    </nav>
    <?php echo $popup_form ?>
</header>