<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package name
 */

get_header(); ?>
	<main class="main">
		<div class="advantages">
			<div class="case">
				<div class="advantages__list row_line">
					<?php for ($i=1; $i < 5; $i++) { ?>
					<div class="advantages__item col_line">
						<div class="advantages__img"><img src="<?php the_field('преимущества_'.$i.'_изображение'); ?>" alt=""></div>
						<div class="advantages__title"><?php the_field('преимущества_'.$i.'_текст'); ?></div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="gallery" id="gallery">
			<div class="gallery__slider">
				<?php $loop = new WP_Query( array( 'post_type' => 'slaider', 'posts_per_page' => 999, 'orderby' => 'author' ) ); ?> 
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
				<div class="gallery__item">
					<div class="gallery__img">
					    
					    

					    
 <img src="<?php the_field('слайд_изображение'); ?>" alt="">					   
					    
					    
					    </div>
					<div class="gallery__title"><?php the_title(); ?></div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query();?>
			</div>
			<div class="case">
				<a data-fancybox data-src="#popup-callback" href="javascript:;" class="gallery__btn btn btn_orange btn_radius btn_shadow">заказать обратный звонок</a>
			</div>
		</div>
		<div class="map">
			<div class="case">
				<div class="map__zoom">
					<div class="map__title title"><span>ПЕРУ? А ГДЕ ЭТО?</span><img src="upload/text/text-map.png" alt=""></div>
					<div class="map__img"></div>
				</div>
			</div>
		</div>
		<div class="program" id="program">
			<div class="case">
				<div class="program__title title"><span>Программа путешествия</span><img src="upload/text/text-program.png" alt=""></div>
				<div class="program__list">
					<?php $i = 1; ?>
					<?php $loop = new WP_Query( array( 'post_type' => 'programma', 'posts_per_page' => 999, 'orderby' => 'author' ) ); ?> 
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
					<div class="program__item program__item_<?php if($i < 7){ echo "show"; }else{echo "hide"; } ?>">
						<div class="row">
							<div class="program__content col">
								<div class="program__day">День <?php echo $i; $i++; ?></div>
								<div class="program__name"><?php the_title(); ?></div>
								<div class="program__text"><?php the_content(); ?></div>
							</div>
							<div class="program__slider col">
								<div class="program__slider-wrap">
									<?php if(get_field('место_1_изображение')){ ?><div class="program__slider-item"><img src="<?php the_field('место_1_изображение'); ?>" alt=""></div><?php } ?>
									<?php if(get_field('место_2_изображение')){ ?><div class="program__slider-item"><img src="<?php the_field('место_2_изображение'); ?>" alt=""></div><?php } ?>
									<?php if(get_field('место_3_изображение')){ ?><div class="program__slider-item"><img src="<?php the_field('место_3_изображение'); ?>" alt=""></div><?php } ?>
									<?php if(get_field('место_4_изображение')){ ?><div class="program__slider-item"><img src="<?php the_field('место_4_изображение'); ?>" alt=""></div><?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_query();?>
				</div>
				<div class="program__btn-more btn btn_gray btn_radius"><span>Развернуть</span> полную программу путешествия</div>
				<a data-fancybox href="#popup-plan" href="javascript:;" class="program__btn-plan btn btn_orange btn_radius btn_pdf btn_shadow" download><span>Скачать план путешествия</span></a>
			</div>
		</div>
		<div class="price">
			<div class="case">
				<div class="price__wrap row">
					<div class="price__data col">
						<div class="price__title">Стоимость путешествия</div>
						<div class="price__count"><?php the_field('стоимость'); ?></div>
						<div class="price__desc"><?php the_field('стоимость_-_описание'); ?></div>
					</div>
					<div class="price__form col right">
						<div class="price__form-title">Узнать о предложении</div>
						<div class="form"><?php the_field('форма_узнать_предложение', option); ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="data">
			<div class="case">
				<div class="data__block">
					<div class="data__head data__head_orange"><i class="icon icon-checkbox"></i><span>Входит в стоимость</span></div>
					<div class="data__body">
						<div class="data__wrap data__wrap_plus row_line">
							<div class="data__col col_line"><?php the_field('входит_в_стоимость_левый_столбец'); ?></div>
							<div class="data__col col_line"><?php the_field('входит_в_стоимость_правый_столбец'); ?></div>
						</div>
					</div>
				</div>
				<div class="data__block">
					<div class="data__head data__head_black"><i class="icon icon-minusbox"></i><span>НЕ входит в стоимость</span></div>
					<div class="data__body">
						<div class="data__wrap data__wrap_minus row_line">
							<div class="data__col col_line"><?php the_field('не_входит_в_стоимость_левый_столбец'); ?></div>
							<div class="data__col col_line"><?php the_field('не_входит_в_стоимость_правый_столбец'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="experience">
			<div class="case">
				<div class="experience__title title"><span>уникальный опыт</span><img src="upload/text/text-experience.png" alt=""></div>
				<div class="experience__wrap">
					<div class="experience__text"><?php the_field('уникальный_опыт_текст'); ?></div>
				</div>
			</div>
		</div>
		<div class="peru">
			<div class="case">
				<div class="peru__title title"><span>перу</span><img src="upload/text/text-peru.png" alt=""></div>
				<div class="peru__wrap">
					<div class="peru__text"><?php the_field('перу_текст'); ?></div>
					<a data-fancybox data-src="#popup-callback" href="javascript:;" class="peru__btn btn btn_orange btn_orange btn_radius">Оставить заявку</a>
				</div>
			</div>
		</div>
		<div class="about">
			<div class="case">
				<div class="about__title title"><span>“ITINERO” это….</span><img src="upload/text/text-about.png" alt=""></div>
				<div class="about__list">
					<?php for ($i=1; $i < 7; $i++) { ?>
					<div class="about__item">
						<div class="about__count"><?php echo $i; ?></div>
						<div class="about__text"><?php the_field('итинеро_'.$i); ?></div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="team" id="team">
			<div class="case">
				<div class="team__title title"><span>Наша команда</span><img src="upload/text/text-team.png" alt=""></div>
				<div class="team__list">
					<?php $i = 0; ?>
					<?php $loop = new WP_Query( array( 'post_type' => 'komanda', 'posts_per_page' => 999, 'orderby' => 'author' ) ); ?> 
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
					<div class="team__item row_line">
						<?php if ($i == 0 || $i == 2 || $i == 4 || $i == 6){ ?>
						<div class="team__data col_line">
							<div class="team__data-title"><?php the_title(); ?></div>
							<div class="team__data-list"><?php the_content(); ?></div>
						</div>
						<div class="team__img col_line"><img src="<?php the_field('команда_изображение'); ?>" alt=""></div>
						<?php } else{ ?>
						<div class="team__img col_line"><img src="<?php the_field('команда_изображение'); ?>" alt=""></div>
						<div class="team__data col_line">
							<div class="team__data-title"><?php the_title(); ?></div>
							<div class="team__data-list"><?php the_content(); ?></div>
						</div>
						<?php } ?>
					</div>
					<?php $i++; ?>
					<?php endwhile; ?>
					<?php wp_reset_query();?>
					
				</div>
				<a href="<?php the_field('календарь_путешествий', option); ?>" target="_blank" class="team__btn btn btn_orange btn_shadow btn_radius"><i class="icon icon-earth"></i><span>посмотреть Календарь путешествий по миру</span></a>
			</div>
		</div>
		<div class="now">
			<div class="case">
				<div class="now__wrap row">
					<div class="now__title title col"><span>заПЛАНИРУЙТЕ ПУТЕШЕСТВИЕ ПРЯМО СЕЙЧАС</span><img src="upload/text/text-now.png" alt=""></div>
					<div class="now__form col">
						<div class="now__form-title">Обсудить организационные вопросы, или заказать индивидуальное путешествие.</div>
						<div class="form"><?php the_field('форма_запланировать_путишествие', option); ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="data" id="questions">
			<div class="case">
				<div class="data__block">
					<div class="data__head data__head_black"><i class="icon icon-question"></i><span>Важно знать</span></div>
					<div class="data__body">
						<div class="data__wrap data__wrap_check row_line">
							<div class="data__col col_line"><?php the_field('важно_знать_левый_столбец'); ?></div>
							<div class="data__col col_line"><?php the_field('важно_знать_правый_столбец'); ?></div>
						</div>
						<div class="data__list row_line">
							<?php for ($i=1; $i < 5; $i++) { ?>
							<div class="data__item col_line">
								<div class="data__count"><?php echo $i; ?></div>
								<div class="data__title"><?php the_field('важно_знать_'.$i.'_заголовок'); ?></div>
								<div class="data__text"><?php the_field('важно_знать_'.$i.'_текст'); ?></div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="questions">
			<div class="case">
				<div class="questions__title title"><span>Остались вопросы?</span><img src="upload/text/text-questions.png" alt=""></div>
				<div class="questions__form">
					<div class="questions__form-title">Заполните форму и получите консультацию по любым интересующим вас вопросам.</div>
					<div class="form"><?php the_field('форма остались_вопросы', option); ?></div>
				</div>
			</div>
		</div>
		<div class="report">
			<div class="case">
				<div class="report__title title"><span>Отчет о прошлых поездках</span><img src="upload/text/text-report.png" alt=""></div>
				<div class="report__wrap"><a href="<?php the_field('видео-отчет', option); ?>" data-fancybox><img src="upload/report-video-bg.png" alt=""></a></div>
			</div>
		</div>
		<div class="reviews" id="reviews">
			<div class="case">
				<div class="reviews__title title"><span>Отзывы наших путешественников</span><img src="upload/text/text-reviews.png" alt=""></div>
				<div class="reviews__list">
					<?php $loop = new WP_Query( array( 'post_type' => 'otzivi', 'posts_per_page' => 0 ) ); ?> 
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
						
					
					<div class="reviews__item row">
						<div class="reviews__img col"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></div>
						<div class="reviews__content col">
							<div class="reviews__name"><?php the_title(); ?></div>
							<div class="reviews__date"><?php the_field('дата_полета'); ?></div>
							<div class="reviews__text"><?php the_content(); ?></div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_query();?>
				</div>
			</div>
		</div>
		<div class="insta">
			<div class="case">
				<div class="insta__title"><i class="icon icon-inst"></i><span><?php the_field('insta', option); ?></span></div>
				<div class="insta__wrap"><?php the_field('инстаграм_-_область', option); ?></div>
			</div>
		</div>
		<div class="office" id="contacts">
			<div class="case">
				<div class="office__title title"><span>Посетите наш офис</span><img src="upload/text/text-office.png" alt=""></div>
				<div class="offce__data">
					<p>Наш адрес: <?php the_field('адрес', option); ?></p>
				</div>
			</div>



			<div class="office__map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abe5c3dcb493e256a39bf2afc88cfd061a48b15daa4cb97501cd5658a22f9cc4e&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script></div>
		</div>
		
		<div class="office__map-mobile"><a href="https://yandex.ru/maps/?um=constructor%3Abe5c3dcb493e256a39bf2afc88cfd061a48b15daa4cb97501cd5658a22f9cc4e&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Abe5c3dcb493e256a39bf2afc88cfd061a48b15daa4cb97501cd5658a22f9cc4e&amp;width=600&amp;height=400&amp;lang=ru_RU" alt="" style="border: 0;" /></a></div>
		
	</main>




<?php
get_footer();
