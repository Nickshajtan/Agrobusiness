<?php get_header(); ?>
<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
<section id="main" class="circle__title">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-12 col-md-4 text-white">Продажа агробизнеса</div>
                    <div class="col-12 col-md-8"><a href="<?php the_field('main__phone_tel'); ?>" class="text-white"><?php the_field('main__phone'); ?></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7">
                <div class="row d-flex justify-content-start align-items-center h-100">
                        <div class="col-12">
                            <h1 class="text-left ">
                                <span class="text-white"><?php the_field('slogan'); ?></span>
                            </h1>
                            <p class="subtitle text-left text-white"><?php the_field('subslogan'); ?></p>
                        </div>
                </div> 
            </div>
                    <form action="" method="post" class="submit col-12 col-md-6 col-lg-5 blue__form">
                               <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                               <textarea name="comment"></textarea>
                               <textarea name="message"></textarea>
                               <div class="row">
                                   <div class="col-12 form__desc d-flex justify-content-center">
                                       <p>Если у Вас есть вопросы или Вы хотите приобрести бизнес оставьте заявку и мы Вам перезвоним!</p>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-12">
                                       <div class="form-group d-flex justify-content-center flex-column align-items-center">
                                            <label for="name" class="text-left float-left d-block" style="width: 90%;"><?php echo __('Ваше имя:'); ?></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo __('Ваше имя'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group d-flex justify-content-center flex-column align-items-center">
                                            <label for="tel" class="text-left float-left d-block" style="width: 90%;"><?php echo __('Номер телефона:'); ?></label>
                                            <input type="tel" class="form-control" id="tel" aria-describedby="tel" placeholder="<?php echo __('Номер телефона'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12 d-flex justify-content-center">
                                       <input type="submit" value="<?php echo __('ОСТАВИТЬ ЗАЯВКУ'); ?>">
                                   </div>
                               </div>
                          </form>
        </div>
        <div class="row d-flex justify-content-start align-items-center">
            <a href="#mark" class="down d-block ml-auto mr-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ar-down-min.png" alt="">
            </a>
        </div>
    </div>
</section>
<?php if( get_field('text_organic_second') || get_field('text_organic_first') || get_field('organic_cycle') ) : ?>
<section id="mark" class="circle__title">
       <div class="container">
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <h4 class="text-left ">
                                <span>Об органическом хозяйстве <br>в целом</span>
                            </h4>
                        </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="marked__text d-block float-right">
                        <?php the_field('text_organic_first'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-block float-right right__part">
                        <?php the_field('text_organic_second'); ?>
                    </div>
                </div>
            </div>
            <?php $cycle = get_field('organic_cycle'); ?>
            <?php if(!empty($cycle)) : ?>    
            <div class="row">
                <?php $count = 1; ?>
                <?php foreach( $cycle  as $cycl ) : ?>
                    <div class="col-12 col-md-6 col-lg-4 numered">
                        <div class="row">
                           <div class="col-2 marked__num">
                                <span><?php echo $count++; ?></span>
                           </div>
                           <div class="col-10">
                               <?php echo $cycl['punct']; ?>
                           </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
</section>
<?php endif; ?>
<?php if( get_field('img_about') || get_field('text_about') ) : ?>
<section id="korch" class="blue__bg circle__title normal">
    <div class="container"> 
            <div class="row">
                        <div class="col-12 col-lg-10 w-50 d-block ml-auto mr-auto">
                            <h3 class="text-left home ">
                                <span>О хозяйстве в Корчовке</span>
                            </h3>
                        </div>
            </div>  
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="marked__text d-block float-right">
                        <?php the_field('text_about'); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6 rounded__img__wrapper">
                               <?php   
                                    $img = get_field('img_about');
                                    $size = 'moda';
                                    $thumb = $img['sizes'][ $size ];
                                    $width = $img['sizes'][ $size . '-width' ];
                                    $height = $img['sizes'][ $size . '-height' ];
                                ?>
                   <?php if(!empty($img)) : ?>
                    <div class="rounded__img d-none d-md-block">
                        <a href="<?php the_field('img_about'); ?>" class="fancybox">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="540" height="540">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
       </div>
</section>
<?php endif; ?>
<?php $adv = get_field('advantage'); ?>
<?php if($adv) : ?>
<section id="adv" class="circle__title adv">
       <div class="container">
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <h4 class="text-left ">
                                <span>В добавок ко всему</span>
                            </h4>
                            <p class="subtitle text-left">Организационные преимущества бизнеса</p>
                        </div>
            </div>  
            <?php $cycle = $adv['bisnes']; ?>
            <?php if(!empty($cycle)) : ?>  
            <div class="row subsection">
                <?php foreach( $cycle  as $cycl ) : ?>
                    <div class="col-12 col-md-6 col-lg-3 text-center d-flex flex-column justify-content-center align-items-center column">
                        <img src="<?php echo $cycl['icon']; ?>" alt="" width="120">
                        <p class="title text-center"><?php echo $cycl['title']; ?></p>
                        <p class="sub text-center"><?php echo $cycl['subtitle']; ?></p>
                        <div class="more off">
                            <div class="a text-center d-flex justify-content-center">Подробнее</div>
                            <div class="d-none text-center desc"><?php echo $cycl['desc']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php $cycle = $adv['commercial']; ?>
            <?php if(!empty($cycle)) : ?>    
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <p class="subtitle text-left col-12">Коммерческие преимущества</p>
                        </div>
            </div>  
            <div class="row subsection">
                    <div class="col-12">
                        <div class="row  justify-content-center align-items-center d-flex flex-column flex-md-row">
                            <?php foreach( $cycle  as $cycl ) : ?>
                                    <div class="col-12 col-md-4 col-lg-3 text-center column">
                                        <img src="<?php echo $cycl['icon']; ?>" alt="" width="120">
                                        <div><?php echo $cycl['desc']; ?></div>
                                    </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
            </div>
            <?php endif; ?>
            <?php $cycle = $adv['material']; ?>
            <?php if(!empty($cycle)) : ?> 
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <p class="subtitle text-left col-12">Материальные активы</p>
                        </div>
            </div>  
            <div class="row subsection">
                <?php foreach( $cycle  as $cycl ) : ?>
                    <div class="col-12 col-md-6 col-lg-3 text-center d-flex flex-column justify-content-center align-items-center column">
                        <img src="<?php echo $cycl['icon']; ?>" alt="" width="120">
                        <p class="title text-center"><?php echo $cycl['title']; ?></p>
                        <div class="more off">
                            <div class="a text-center d-flex justify-content-center">Подробнее</div>
                            <div class="d-none text-center desc"><?php echo $cycl['desc']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
       </div>
  </section>
  <?php endif; ?>
<section class="green__bg form__section">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-3"></div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <h4 class="white__title col-12 text-center"><span>Заинтересовало предложение?</span></h4>
                        <p class="col-12 text-center">Оставьте заявку и мы ответим на все Ваши вопросы!</p>
                    </div>
                    <div class="row">
                        <form action="" method="post" class="submit col-12">
                               <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                               <textarea name="comment"></textarea>
                               <textarea name="message"></textarea>
                               <div class="row">
                                   <div class="col-12 col-md-6">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="name" class="sr-only"><?php echo __('Ваше имя:'); ?></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo __('Ваше имя:'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12 col-md-6">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="tel" class="sr-only"><?php echo __('Номер телефона:'); ?></label>
                                            <input type="tel" class="form-control" id="tel" aria-describedby="tel" placeholder="<?php echo __('Номер телефона:'); ?>">
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-12 d-flex justify-content-center">
                                       <input type="submit" value="<?php echo __('ОСТАВИТЬ ЗАЯВКУ'); ?>">
                                   </div>
                               </div>
                          </form>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-3"></div>
            </div>
        </div>
    </section>
<section id="numland" class="circle__title">
       <div class="container">
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <h4 class="text-left ">
                                <span>В цифрах о землях</span>
                            </h4>
                        </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                                <div class="row">
                                    <div class="col-5 d-block ml-auto mr-auto marked__num num__ga">
                                        <span>12</span>
                                    </div>
                               <p class="ga text-center col-12">га</p>
                               <p class="col-12 text-center">Всего территория</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-7 d-block ml-auto mr-auto marked__num num__ga">
                                    <span>1.25</span>
                               </div>
                               <p class="ga text-center col-12">га</p>
                               <p class="text-center col-12">Земли выделенные под технические зоны и озера</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-7 d-block ml-auto mr-auto marked__num num__ga red">
                                    <span>+25</span>
                               </div>
                               <p class="ga text-center col-12">соток</p>
                               <p class="text-center col-12">Земли под застройку</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/circle-min.png" class="fancybox ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/circle-min.png" alt="" class="dior">
                    </a>
                </div>
            </div>   
       </div>
  </section>
  <?php $culre = get_field('culture'); ?>
  <?php if($culre) : ?>
  <section id="harvest" class="blue__bg circle__title normal">
        <div class="container">
            <div class="row">
                        <div class="col-12 col-lg-10 w-50 d-block ml-auto mr-auto">
                            <h3 class="text-center ">
                                <span>Потенциальная урожайность засаженных культур</span>
                            </h3>
                        </div>
            </div>  
            <div class="row">
                <div class="col-12 col-lg-6">
                   <div class="marked__text d-block float-right">
                       <?php echo $culre['text_left']; ?>
                   </div>
                </div>
                <div class="col-12 col-lg-6 marked__list">
                    <div class="row">
                        <?php $cycle = $culre['cycle']; ?>
                        <?php if(!empty($cycle)) : ?>
                        <?php foreach( $cycle  as $cycl ) : ?>
                        <div class="col-12 col-md-6">
                            <div class="culture"><span class="plant"><?php echo $cycl['one']; ?></span></div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <?php endif; ?>
  <?php $gallery = get_field('gallery_cycle'); ?>
   <?php if($gallery) : ?>
   <section id="gallery" class="circle__title">
       <div class="container">
            <div class="row d-flex justify-content-start align-items-center" style="padding-bottom:50px;">
                        <div class="col-12">
                            <h4 class="text-left" style="padding-bottom:0;">
                                <span>Галерея</span>
                            </h4>
                        </div>
                        <div class="col-12">
                            Наведите на фото мышкой, чтобы узнать<br>дополнительную информацию
                        </div>
            </div>  
       </div>
        <?php $cycle = $gallery; ?>
            <?php $count = 1; ?>
            <?php if(!empty($cycle)) : ?>
            <div class="gallery">
            <?php foreach( $cycle  as $cycl ) : ?>
                    <div class="foto__wrap" style="background-image: url('<?php echo $cycl['foto']; ?>');">
                        <a href="<?php echo $cycl['foto']; ?>" class="fancybox d-flex justify-content-center align-items-center flex-column">
                           <span class="hidden">
                               <?php echo $cycl['text']; ?>
                           </span>
                       </a>
                    </div>
                <?php if($count % 3 == 0 ) : ?>
                <style>
                    .gallery{grid-template-rows: repeat(<?php echo $count/3; ?>, 1fr);}
                </style>
                <?php endif; ?>
            <?php $count++; ?>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>
   </section>
   <?php endif; ?>
    <section id="schema" class="blue__bg circle__title">
        <div class="container">
            <div class="row d-flex justify-content-start align-items-center">
                        <div class="col-12">
                            <h4 class="text-left ">
                                <span>Схема участка</span>
                            </h4>
                        </div>
            </div>   
            <div class="row">
                <div class="col-12">
                   <a href="<?php echo get_template_directory_uri(); ?>/img/schema-min.png" class="fancybox">
                       <img src="<?php echo get_template_directory_uri(); ?>/img/schema-min.png" alt="Схема участка на продажу">
                   </a>
                </div>
            </div>
        </div>
    </section>
    <section class="green__bg form__section">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-3"></div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <h4 class="white__title col-12 text-center"><span>Бесплатный трансфер<br> Киев-Корчовка-Киев</span></h4>
                        <p class="col-12 text-center">Оставьте заявку на ознакомительную экскурсию на фермерское хозяйство и получите бесплатный трансфер Киев-Корчовка-Киев</p>
                    </div>
                    <div class="row">
                        <form action="" method="post" class="submit col-12">
                               <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                               <textarea name="comment"></textarea>
                               <textarea name="message"></textarea>
                               <div class="row">
                                   <div class="col-12 col-md-6">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="name" class="sr-only"><?php echo __('Ваше имя:'); ?></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo __('Ваше имя:'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12 col-md-6">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="tel" class="sr-only"><?php echo __('Номер телефона:'); ?></label>
                                            <input type="tel" class="form-control" id="tel" aria-describedby="tel" placeholder="<?php echo __('Номер телефона:'); ?>">
                                        </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-12 d-flex justify-content-center">
                                       <input type="submit" value="<?php echo __('ОСТАВИТЬ ЗАЯВКУ'); ?>">
                                   </div>
                               </div>
                          </form>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-3"></div>
            </div>
        </div>
    </section>
<?php }} ?>
<?php get_footer(); ?>