<?php
/**
 * Single page template (page.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
get_header(); // include header.php ?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // cycle start ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // post container with id and classes ?>
		<h1><?php the_title(); // page title ?></h1>
		<?php the_content(); // page content ?>
	</article>
<?php endwhile; // cycle end ?>
</section>
<div class="service" id="home">
        <div class="service-text">
        <div class="service-text__title"><?php echo get_field('about_title'); ?></div>
        <div class="service-text__txt"><?php echo get_field('about_text'); ?></div>
        <div class="service-text__btn">Learn More</div>
    </div>
    <div class="service-group">
        <div class="service-group__item">
            <div class="service-group__item__img service-group__item__img_settings"></div>
            <div class="service-group__item__title">Management</div>
            <div class="service-group__item__txt">Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor</div>
        </div>
        <div class="service-group__item">
            <div class="service-group__item__img service-group__item__img_pencil"></div>
            <div class="service-group__item__title">UI /UX Design</div>
            <div class="service-group__item__txt">Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor</div>
        </div>
        <div class="service-group__item">
            <div class="service-group__item__img service-group__item__img_diamond"></div>
            <div class="service-group__item__title">Logo / Branding</div>
            <div class="service-group__item__txt">Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor</div>
        </div>
        <div class="service-group__item">
            <div class="service-group__item__img service-group__item__img_truck-2"></div>
            <div class="service-group__item__title">Animation</div>
            <div class="service-group__item__txt">Lorem ipsum dolor sitea amet, zixf conseit  adipi cing elit, seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor</div>
        </div>
        
    </div>
</div>
<div class="portfolio" id="portfolio">
    <div class="portfolio__title">feature products</div>
    <div class="portfolio__txt">Lorem ipsum dolor sit amet, consectetur adipis cing elit,sed do eiusmod tempor incididunt ut labore et.</div>
    <div class="portfolio__line"></div>
    <div class="portfolio-group">
        <div class="portfolio-group__navigation">
            <div class="portfolio-group__navigation__item ">all</div>
            <div class="portfolio-group__navigation__item">print template</div>
            <div class="portfolio-group__navigation__item">web template</div>
            <div class="portfolio-group__navigation__item">user interface</div>
            <div class="portfolio-group__navigation__item">mock-up</div>
        </div>

        <div class="portfolio-group__row">
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_1'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_2'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_3'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_4'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_5'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_6'); ?>)"></div>
            </div>            
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_7'); ?>)"></div>
            </div>
            <div class="portfolio-group__row__item">
                <div class="portfolio-group__row__item__my-animation" style="background: url(<?php echo get_field('image_8'); ?>)"></div>
            </div>
            </div>
            
        </div>
				
            </div>
            
        </div>
    </div>
</div>
<div class="team" id="aboutus">
    <div class="team-info">
        <div class="team-info__title">Meet our team</div>
        <div class="team-info__txt">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing eiusmod tempor incididut labore Ui / Ux , print template.</div>
        <div class="team-info__line"></div>
    </div>
    <div class="team-images">
        <img src="<?php echo get_field('big_img'); ?>"  class="team-images__big-img">
        <div class="team-images__info">
            <div class="team-images__title">mark waugh</div> 
            <div class="team-images__txt">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing eiusmod tempor incididut labore Ui / Ux , print template.</div>
            <div class="team-images__navigation">
                <div class="team-images__navigation__item">Facebook</div>
                <div class="team-images__navigation__item">Dribble</div>
                <div class="team-images__navigation__item">Behance</div>
                <div class="team-images__navigation__item">Twiter</div>
            </div>
    </div>
        <div class="team-images__row-small-img">            
            <div class="team-images__row-small-img__item">
                <div class="my-animation" style="background: url(<?php echo get_field('team__img_1'); ?>"></div>
                <div class="team-images__row-small-img__item_name-line">some name</div>
            </div>
            <div class="team-images__row-small-img__item">
                <div class="my-animation" style="background: url(<?php echo get_field('team__img_2'); ?>)"></div>
                <div class="team-images__row-small-img__item_name-line">sokina jue</div>
            </div>
            <div class="team-images__row-small-img__item">
                <div class="my-animation" style="background: url(<?php echo get_field('team__img_3'); ?>)"></div>
                <div class="team-images__row-small-img__item_name-line">test name</div>
            </div>
            <div class="team-images__row-small-img__item">
                <div class="my-animation" style="background: url(<?php echo get_field('team__img_4'); ?>)"></div>
                <div class="team-images__row-small-img__item_name-line">jonh dou</div>
            </div>
        </div>
    </div>
</div>
<div class="subscribe ">
    <div class="subscribe__title">Design tips, tricks, and freebies. Delivered weekly.</div>
    <div class="subscribe__txt">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod.</div>
    <form class="subscribe__input-line">
        <input class="subscribe__email" type="email" placeholder="Email Address...">
        <div class="subscribe__btn" >subscribe</div>
    </form>
</div>
<?php get_footer(); // include footer.php ?>