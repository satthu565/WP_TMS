<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TMS
 */

?>

<footer class="clear">
    <div class="container">
        <div class="footer-left">
            <div class="wrap-ft-content">
                <p class="top-text">国土交通省関東運輸局長認可認可No. ：関整整第45号</p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/text-bottom.svg" alt=""></p>
                <p class="kanto-text">Kanto Truck Monitoring Cooperative Association</p>
                <p class="post-text">〒290-0046 千葉県市原市岩崎西1-6-5</p>
                <a class="map-button" href="#">MAP</a>
            </div>

        </div>
        <div class="footer-right">
            <div class="wrap-ft-content">
                <div class="fl-wrap-button">
                    <a href="#" class="fl-left-button">組合員専用ページ</a>
                    <a href="#" class="fl-right-button">組合へのご入会</a>
                </div>
                <div class="clear"></div>
                <p class="middle-text">プライバシーポリシー ｜ サイトポリシー ｜ リンク</p>
                <p class="copyright">©️2018 Kanto Truck Monitoring Cooperative Association All Rights Reserved </p>
            </div>
        </div>
        <div class="up-top">
            <a href="#up-top" id="scroll"><span>ページトップへ</span></a>
        </div>
    </div>
</footer>
<!--End footer-->
</div>
<?php wp_footer(); ?>

</body>
</html>
