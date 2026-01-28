</div>
</div>
<div id="footer">
    <div id="footbar">
        <?php if (is_active_sidebar('side_1')) : ?>
            <?php dynamic_sidebar('side_1'); ?>
        <?php endif; ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" style="float: right; margin-top: -143px; z-index: 2;" />
        <div id="atb" style="text-align: right; color: #fff; font-weight: bold; font-size: 15px;">
            <span style="visibility:hidden; display:none;">
                <script id="_wau7l1">
                    var _wau = _wau || [];
                    _wau.push(["small", "xvm6tw2tahs0", "7l1"]);
                    (function() {
                        var s = document.createElement("script");
                        s.async = true;
                        s.src = "http://widgets.amung.us/small.js";
                        document.getElementsByTagName("head")[0].appendChild(s);
                    })();
                </script>
                <!-- Site Meter -->
                <script type="text/javascript" src="http://s51.sitemeter.com/js/counter.js?site=s51pradioativa"></script>
                <noscript>
                    <a href="http://s51.sitemeter.com/stats.asp?site=s51pradioativa" target="_top">
                        <img src="http://s51.sitemeter.com/meter.asp?site=s51pradioativa" alt="Site Meter" border="0" /></a>
                </noscript>
                <!-- Copyright (c)2009 Site Meter -->
            </span>
            Pipoca Radioativa - 2014<br>
            Designed by <a href="http://meadow.freeiz.com/" target="_blank">Meadow Designs</a><br>
            Powered by <a href="http://wordpress.org/" target="_blank">Wordpress</a> &bull; <a href="#">Topo</a> &bull; <a href="<?php echo esc_url(home_url()); ?>/wp-login.php" target="_blank">&Aacute;rea Restrita</a><br>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>