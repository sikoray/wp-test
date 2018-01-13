<?php
/**
 * Footer template (footer.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
?>

<div class="contact" id="contact">
    <div class="contact-info">
        <div class="contact-info__title">get in touch</div>
        <div class="contact-info__txt">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et.ur adipis cing elit, sed do eiusmod tempor incididunt ut labore et. ur adipis cing elit, sed do eiusmod tempor incididunt ut labore et.</div>
        <div class="contact-info__line"></div>
    </div>
    <div class="custom-row">
    <form class="contact-form">
        <input class="contact-form__input contact-form__input_name" placeholder="Name">
        <input class="contact-form__input contact-form__input_email" placeholder="Your Mail">
        <textarea class="contact-form__input contact-form__input_txt" placeholder="Type your message" ></textarea>
        
        <div class="contact-form__input__btn">Send message</div>
    </form>
    <div class="contact-info-text_right">
        <div class="contact-info__title_right">contact info</div>
        <div class="contact-info__txt_right">
        Jalalabad 24 / A, Ambaarkhana, Sylhet, 
        Bangladesh<br>
            <br>
        (+88) 017 617 46373<br>
            <br>
        redwan@deviserweb.com<br>
        </div>
    </div>
    </div>
</div>
<footer>
    <div class="copyright">© Copyright @Junaed 2016, All rights reserved.</div>
    <div class="social-net">
        <div class="social-net__item social-net__item_twitter"></div>
        <div class="social-net__item social-net__item_linkedin"></div>
        <div class="social-net__item social-net__item_google"></div>
        <div class="social-net__item social-net__item_facebook"></div>
    </div>
</footer>
<?php wp_footer(); // necessary for work plugins and functionality wp ?>
<script>var $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
});</script>
</body>
</html>