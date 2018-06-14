  <footer class="page-footer bg-ebony-clay">
    <div class="section section-md bg-bright-gray">
      <div class="shell text-left">
        <div class="range range-xs-center range-50">
          <div class="cell-sm-4">
            <h4>Connect with Us</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <div class="group group-xl"> <span class="small text-italic">Follow Us:</span>
              <ul class="inline-list">
                <li> <a href="" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-facebook"></a> </li>
                <li> <a href="" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-twitter"></a> </li>
                <li> <a href="" class="icon icon-xxs icon-circle icon-dark icon-white-filled fa-google-plus"></a> </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-4">
            <h4>Contact info</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <address class="contact-info">
            <ul class="list">
              <li>
                <div class="unit unit-horizontal unit-spacing-md">
                  <div class="unit-left"> <span class="icon icon-sm fa-phone text-picton-blue"></span> </div>
                  <div class="unit-body"> <a href="tel:+17208494934">(720) 849-4934</a> </div>
                </div>
              </li>
            </ul>
            </address>
          </div>
          <div class="cell-sm-4">
            <h4>Subscribe</h4>
            <hr class="hr bg-shuttle-gray inset-lg-right-70">
            <p>Get the latest updates and offers.</p>
            <?php echo do_shortcode('[forminator_form id="41"]'); ?><form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="" class="rd-mailform rd-mailform-inline">
              <div class="form-froup">
                <label for="footer-contact-email" class="form-label">E-mail</label>
                <input id="footer-contact-email" name="email" data-constraints="@Required @Email" class="form-input" type="email">
              </div>
              <button type="submit" class="button button-xs button-primary-filled">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="shell text-center rights">
      <p>©&nbsp; <span id="copyright-year">2017</span>&nbsp;Kim Marinoff <a href="privacy-policy.html">Privacy policy</a> </p>
    </div>
  </footer>
</div>
<div id="form-output-global" class="snackbars"></div>
<?php wp_footer(); ?>
</body>
</html>
