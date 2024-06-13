  <?php wp_footer(); ?>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            <a href="<?= get_site_url(); ?>"><img src="<?= get_theme_mod('site_logo') ?>" alt="<?php bloginfo('name'); ?>" /></a>
          </div>
        </div>

        <div class="col-md-3 col-12">
          <div class="footer-col">
            <div class="header">
              <h4 class="title"><?= wp_get_nav_menu_name('footer_menu_1') ?></h4>
            </div>
            <div class="links">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_1' ) ); ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-12">
          <div class="footer-col">
            <div class="header">
              <h4 class="title"><?= wp_get_nav_menu_name('footer_menu_2') ?></h4>
            </div>
            <div class="links">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_2' ) ); ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-12">
          <div class="footer-col">
            <div class="header">
              <h4 class="title"><?= wp_get_nav_menu_name('footer_menu_3') ?></h4>
            </div>
            <div class="links">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_3' ) ); ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-12">
          <div class="footer-col">
            <div class="header">
              <h4 class="title"><?= wp_get_nav_menu_name('footer_menu_4') ?></h4>
            </div>
            <div class="links">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_4' ) ); ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12">
          <div class="footer-col social-media">
            <div class="header">
              <h4 class="title">Social Media</h4>
            </div>
            <div class="links">
              <a class="social-link" href="https://instagram.com/<?= get_theme_mod('instagram') ?>" rel="me" target="_blank" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.356" height="20.36" viewBox="0 0 20.356 20.36"><g transform="translate(-0.449)"><path d="M20.754,5.986a7.44,7.44,0,0,0-.473-2.47A5.216,5.216,0,0,0,17.3.537a7.459,7.459,0,0,0-2.47-.473C13.742.012,13.4,0,10.631,0s-3.11.012-4.2.06a7.442,7.442,0,0,0-2.47.473A4.968,4.968,0,0,0,2.16,1.71a5.013,5.013,0,0,0-1.173,1.8,7.46,7.46,0,0,0-.473,2.47c-.052,1.09-.064,1.436-.064,4.2s.012,3.11.06,4.2a7.439,7.439,0,0,0,.473,2.47,5.215,5.215,0,0,0,2.979,2.979,7.46,7.46,0,0,0,2.47.473c1.086.048,1.432.06,4.2.06s3.11-.012,4.2-.06a7.438,7.438,0,0,0,2.47-.473,5.208,5.208,0,0,0,2.979-2.979,7.465,7.465,0,0,0,.473-2.47c.048-1.086.06-1.432.06-4.2S20.8,7.072,20.754,5.986ZM18.92,14.3a5.581,5.581,0,0,1-.35,1.889,3.377,3.377,0,0,1-1.933,1.933,5.6,5.6,0,0,1-1.889.35c-1.074.048-1.4.06-4.113.06s-3.043-.012-4.113-.06a5.578,5.578,0,0,1-1.889-.35,3.133,3.133,0,0,1-1.169-.76,3.165,3.165,0,0,1-.76-1.169,5.6,5.6,0,0,1-.35-1.889c-.048-1.074-.06-1.4-.06-4.113s.012-3.043.06-4.113A5.578,5.578,0,0,1,2.7,4.188a3.1,3.1,0,0,1,.764-1.169,3.161,3.161,0,0,1,1.169-.76,5.6,5.6,0,0,1,1.889-.35c1.074-.048,1.4-.06,4.113-.06s3.043.012,4.113.06a5.581,5.581,0,0,1,1.889.35,3.131,3.131,0,0,1,1.169.76,3.165,3.165,0,0,1,.76,1.169,5.6,5.6,0,0,1,.35,1.889c.048,1.074.06,1.4.06,4.113S18.968,13.225,18.92,14.3Zm0,0" transform="translate(0 0)" fill="#fff"></path><path d="M130.18,124.5a5.23,5.23,0,1,0,5.23,5.23A5.232,5.232,0,0,0,130.18,124.5Zm0,8.623a3.393,3.393,0,1,1,3.393-3.393A3.393,3.393,0,0,1,130.18,133.123Zm0,0" transform="translate(-119.548 -119.548)" fill="#fff"></path><path d="M364.891,89.823A1.221,1.221,0,1,1,363.67,88.6,1.221,1.221,0,0,1,364.891,89.823Zm0,0" transform="translate(-347.602 -85.078)" fill="#fff"></path></g></svg>
              </a>
              <a class="social-link" href="https://facebook.com/<?= get_theme_mod('facebook') ?>" rel="me" target="_blank" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="9.476" height="18.949" viewBox="0 0 9.476 18.949"><path d="M13.933,3.146h1.73V.133A22.339,22.339,0,0,0,13.142,0c-2.494,0-4.2,1.569-4.2,4.452V7.106H6.187v3.368H8.939V18.95h3.375V10.475h2.641l.419-3.368H12.313V4.786c0-.974.263-1.64,1.619-1.64Z" transform="translate(-6.187)" fill="#fff"></path></svg>
              </a>
              <a class="social-link" href="https://x.com/<?= get_theme_mod('x') ?>" rel="me" target="_blank" title="X">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16.255" viewBox="0 0 18 16.255"><path d="M13.121,0H15.88L9.822,6.9,16.9,16.255H11.346L7,10.568,2.019,16.255H-.74L5.678,8.877-1.1,0H4.592L8.521,5.194Zm-.966,14.635h1.529L3.788,1.559H2.145Z" transform="translate(1.1)" fill="#fff"/></svg>
              </a>
              <a class="social-link" href="https://youtube.com/<?= get_theme_mod('youtube') ?>" rel="me" target="_blank" title="Youtube">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.711" height="12.4" viewBox="0 0 17.711 12.4"><path d="M17.346-4.142A2.219,2.219,0,0,0,15.785-5.7a51.842,51.842,0,0,0-6.93-.379,53.862,53.862,0,0,0-6.93.365A2.264,2.264,0,0,0,.365-4.142,23.38,23.38,0,0,0,0,.118a23.294,23.294,0,0,0,.365,4.26A2.219,2.219,0,0,0,1.926,5.939a51.936,51.936,0,0,0,6.93.379,53.862,53.862,0,0,0,6.93-.365,2.219,2.219,0,0,0,1.561-1.561,23.388,23.388,0,0,0,.365-4.26A22.194,22.194,0,0,0,17.346-4.142ZM7.09,2.774v-5.31L11.7.118Zm0,0" transform="translate(0 6.082)" fill="#fff"></path></svg>
              </a>
            </div>
          </div>
        </div>

        
        <div class="col-md-12">
          <div class="copyright">
            <span class="small text-secondary">© <?= date('Y') ?> - <?php bloginfo('name'); ?></span>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <div class="overlay"></div>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/infinite.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js?v=0.23"></script>
</body>
</html>