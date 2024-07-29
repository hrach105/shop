<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fast-food
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="site-branding">
                        <a href="/">Գաստրոնոմ</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, perspiciatis.</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere molestias neque sed voluptatibus? Aliquid consequuntur culpa doloremque ea eveniet magni minus mollitia necessitatibus placeat possimus quisquam, repudiandae saepe vel!</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, aspernatur, consequuntur deserunt, dignissimos expedita facere harum laboriosam minima necessitatibus non possimus quam reiciendis repudiandae tempore vitae. Dolor eum itaque veniam?</p>
                </div>
            </div>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
<script src="<?= get_template_directory_uri().'/assets/js/script.js' ?>"></script>
</html>
