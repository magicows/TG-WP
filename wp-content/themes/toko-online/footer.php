<?php
/**
 * The template for displaying the footer.
 *
 * Template part file that contains the site footer and
 * closing HTML body elements
 *
 * This file is called by all primary template pages
 * 
 * Child Themes can override this template part file globally,
 * via "footer.php", or in a given specific context, via
 * "footer-{context}.php". For example, to replace this
 * template part file on static Pages, a Child Theme would
 * include the file "footer-page.php".
 *
 * Contains the closing of the "site-content" div and all content after.
 * @package tokoonline
 * @since Toko Online 1.0
 */
?>
	
	</div><!-- .site-content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="site-info">

                    <div class="contact-info">
                       Contact<br/>
                       <br/>
                       General Enquiries:<br/> 
                       +44 (0)121 236 6833<br/>
                       <br/>
                      
                       <a href="mailto:enquiries@magicmilestones.com">enquiries@magicmilestones.com</a>
                       
                    </div>

            
                    <div class="contact-info" style="left: 40px;">
                        Registered Office:<br/>
                        40 Warstone Parade East,<br/>
                        The Jewellery Quarter,<br/>
                        Birmingham. B18 6NR<br/>
                        Registered in England and Wales: 06261134
                    </div>

                    <div id="search-footer-container" class="search-container">
                        <?php get_search_form(); ?>
                    </div>
                </div>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php 
// Fire the 'wp_footer' action hook
// 
// @link http://codex.wordpress.org/Hook_Reference/wp_footer
// 
// This hook is used by WordPress core, Themes, and Plugins to 
// add scripts, CSS styles, meta tags, etc. to the document footer.
// 
// MUST come immediately before the closing </body> tag
// 
// @param	null
// @return	mixed	any output hooked into 'wp_footer'

wp_footer(); 

// -------------------------------------------------------	
?>
</div>
</body>
</html>