<?php
$headerMenuArgs = array(
    'theme_location' => 'header-menu',
    'container' => '',
    'item_spacing' => 'discard',
    'echo' => false
);
$headerMenu = wp_nav_menu($headerMenuArgs);
?>
<?php /*
<nav class="sidebar" id="js-sidebar">
    <span class="sidebar__close" id="js-close">×</span>
    <?php echo $headerMenu ?>
</nav>
*/ ?>

<div class="stickybar">
    <div class="container-fluid">
        <a href="/" class="link link--no-decoration">
            <img class="stickybar__logo mobile-hide" src="<?php echo get_template_directory_uri() ?>/media/pl_logo_full.png" alt="Plus Learning logo">
            <img class="stickybar__logo stickybar__logo--mobile desktop-hide" src="<?php echo get_template_directory_uri() ?>/media/pl_logo_stack.png" alt="Plus Learning logo">
        </a>

        <nav class="menu-nav" id="js-sidebar">
            <button
                class="sidebar__close desktop-hide"
                id="js-close"
                title="Close menu"
                aria-label="Close menu">
                <span aria-hidden="true">×</span>
            </button>
            <?php echo $headerMenu ?>
        </nav>

        <button
            class="toggle desktop-hide"
            id="js-toggle"
            title="Toggle menu"
            aria-label="Toggle menu" >
            MENU <span aria-hidden="true">☰</span>
        </button>
    </div>
</div>