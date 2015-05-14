<?php get_sidebar(); ?>

</div>
<!-- END MIDDLE -->

<!-- START FOOTER -->
<div id="footer">
<p>&copy;1997-<?php print ("" . date ('Y') . ""); ?> Premium Design Works.<span class="login"><?php wp_loginout(); ?>. <?php wp_register('','.'); ?></span></p>
</div>
<!-- END FOOTER -->

<?php wp_footer(); ?>

</body>
</html>