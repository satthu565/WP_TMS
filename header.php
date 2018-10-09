<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TMS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php wp_head(); ?>
</head>

<body id="st-container" <?php body_class('st-container'); ?>>
<div class="st-pusher">
    <header>
        <div class="top-header container">
            <div class="logo">
                <h1>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
                    </a>
                </h1>
            </div>
            <div class="header-button">
                <a href="#">
                    <i class="icon-email"></i>
                    <span>お問い合わせ</span>
                </a>
            </div>
        </div>
        <div class="menu">
            <nav class="main-menu">
                <ul>
                    <li><a href="#"><i class="icon-menu-1 menu-icon"></i><span class="menu-text">組合について</span></a></li>
                    <li><a href="#"><i class="icon-menu-2 menu-icon"></i><span class="menu-text">活 動 予 定</span></a></li>
                    <li><a href="#"><i class="icon-menu-3 menu-icon"></i><span class="menu-text">活 動 実 績</span></a></li>
                    <li><a href="#"><i class="icon-menu-4 menu-icon"></i><span class="menu-text">会 員 一 覧</span></a></li>
                    <li><a href="#"><i class="icon-menu-5 menu-icon"></i><span class="menu-text">組 合 加 入</span></a></li>
                </ul>
                <!--<a href="#" id="pull"></a>-->
            </nav>
        </div>

        <nav class="st-menu st-effect-3" id="menu-3">
            <div class="sp-menu-title">
                <h3>メニュー <button data-effect="st-effect-3" id="close_btn">閉じる</button></h3><!--<img src="./images/nav-icon.png" alt="">-->
            </div>
            <ul>
                <li><a href="#"><i class="icon-menu-1 menu-icon"></i><span class="menu-text">組合について</span></a></li>
                <li><a href="#"><i class="icon-menu-2 menu-icon"></i><span class="menu-text">活 動 予 定</span></a></li>
                <li><a href="#"><i class="icon-menu-3 menu-icon"></i><span class="menu-text">活 動 実 績</span></a></li>
                <li><a href="#"><i class="icon-menu-4 menu-icon"></i><span class="menu-text">会 員 一 覧</span></a></li>
                <li><a href="#"><i class="icon-menu-5 menu-icon"></i><span class="menu-text">組 合 加 入</span></a></li>
            </ul>
        </nav>

        <div class="sp-menu">
            <div class="st-content"><!-- this is the wrapper for the content -->
                <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                    <div class="main clearfix">
                        <div id="st-trigger-effects" class="column">
                            <button data-effect="st-effect-3"><img src="<?php echo get_template_directory_uri(); ?>/images/nav-icon.png" alt=""></button>
                        </div>
                    </div><!-- /main -->
                </div><!-- /st-content-inner -->
            </div><!-- /st-content -->
        </div>
    </header>
    <!--End header-->

