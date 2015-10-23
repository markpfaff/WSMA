            </div><!-- /middle -->



            <footer>
                <ul>
                    <li><?php print ("&copy; " . date ('Y') . " "); ?> &nbsp|&nbsp WSMA &nbsp|&nbsp Design by SCC Group 8</li>
                </ul>
                    <?php wp_loginout(); ?>

            </footer>

        </main>
        <script>


            window.onload = function() {


                jQuery(".jquery-title").click(function() {
                    jQuery(".menu-main-menu-container").slideToggle();
                    return false;
                });

        </script>
        <script src="//localhost:35729/livereload.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
