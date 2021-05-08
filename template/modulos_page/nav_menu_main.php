<?php
// Validacion para menu en pagina principal o secundaria
$data = '';
$class = 'sticky';
if (isset($page_main) && $page_main == true) {
    $data = 'data-active-sticky="true"';
    $class = '';
}
$menu = $GLOBALS['lang']['menu'];
?>
<nav class="nav_header_main <?php echo $class ?>" id="nav_header_main" <?php echo $data; ?>>
    <a href="<?php echo URL; ?>" class="logo">
        <h1 class="title_special">Aventurate y Vive tours</h1>
        <img src="<?php echo IMAGES . 'web/'; ?>logo_main_black.png" dark="<?php echo IMAGES . 'web/'; ?>logo_main_white.png" alt="logo aventurate y vive tours">
    </a>
    <div class="btn_hamburger" id="btn_hamburger">
        <span class="hamb_part_1"></span>
        <span class="hamb_part_2"></span>
        <span class="hamb_part_3"></span>
    </div>
    <ul class="nav_enlaces" id="nav_enlaces">
        <li class="languages">
            <div class="option_selected">
                <span style="text-transform: uppercase;"><?php echo $_SESSION['language']; ?></span>
            </div>
            <ul class="options_language">
                <li>
                    <a class="option_lang" href="<?php echo URL . 'inicio?lang=es'; ?>">
                        <?php echo $menu['espaniol'] ?>
                    </a>
                </li>
                <li>
                    <a class="option_lang" href="<?php echo URL . 'inicio?lang=en'; ?>">
                        <?php echo $menu['ingles'] ?>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="enlaces" href="<?php echo URL; ?>">
                <?php echo $menu['inicio'] ?>
            </a>
        </li>
        <li>
            <a class="enlaces" href="<?php echo URL . 'tours'; ?>">
                <?php echo $menu['tours'] ?>
            </a>
        </li>
        <li>
            <a class="enlaces" href="<?php echo URL . 'galeria'; ?>">
                <?php echo $menu['galeria'] ?>
            </a>
        </li>
        <li>
            <a class="enlaces" href="<?php echo URL . 'contactos'; ?>">
                <?php echo $menu['contactos'] ?>
            </a>
        </li>
    </ul>
</nav>