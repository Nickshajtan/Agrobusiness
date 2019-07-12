        <?php $footer = get_field('footer', $post -> ID); ?> 
        <footer id="footer">
            <div class="footer__first">
                <div class="container d-flex justify-content-start align-items-center" id="map">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-left ">
                                <span>Мы на карте</span>
                            </h4>
                        </div>
                    </div>     
                </div>
                <div class="tab-content" id="nav-tabContent">
                               <?php $count = 1; ?>
                               <?php $cycle = $footer['cities']; ?>
                                   <?php if(!empty($cycle)) : ?>
                                    <?php foreach( $cycle  as $cycl ) : ?>
                                      <a href="<?php echo $cycl['link']; ?>" class="tab-pane fade <?php echo ( $count == 1 )? 'show active':''; ?>" id="nav-home-<?php echo $count; ?>" role="tabpanel" aria-labelledby="nav-home-tab--<?php echo $count; ?>" target="_blank">
                                          <img src="<?php echo $cycl['map']; ?>" alt="">
                                      </a>
                                    <?php $count++; ?>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                </div>
                <div class="container">
                    <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                               <?php $count = 1; ?>
                               <?php $cycle = $footer['cities']; ?>
                                   <?php if(!empty($cycle)) : ?>
                                    <?php foreach( $cycle  as $cycl ) : ?>
                            <a class="nav-item nav-link col-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center <?php echo ( $count == 1 )? 'active':''; ?>" id="nav-home-tab-<?php echo $count; ?>" data-toggle="tab" href="#nav-home-<?php echo $count; ?>" role="tab" aria-controls="nav-home-<?php echo $count; ?>" aria-selected="true"><?php echo $cycl['city']; ?></a>
                                    <?php $count++; ?>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                          </div>
                    </nav>
                </div>
            </div>
            <div class="footer__two">
               <div class="container">
                   <div class="row">
                   <h4 class="text-center col-12">Оставьте заявку</h4>
               </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="tel-wrapper">
                           <?php $cycle = $footer['phones']; ?>
                           <?php if(!empty($cycle)) : ?>
                            <?php foreach( $cycle  as $cycl ) : ?>
                                <a href="tel:<?php echo $cycl['phone_tel']; ?>"><?php echo $cycl['phone']; ?></a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mail-wrapper">
                           <?php $cycle = $footer['email']; ?>
                           <?php if(!empty($cycle)) : ?>
                            <?php foreach( $cycle  as $cycl ) : ?>
                                <a href="mailto:<?php echo $cycl['one_email']; ?>"><?php echo $cycl['one_email']; ?></a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="copyright">
                            Все права защищены<br>
                            Created by HCC &copy;copyright <?php $date = date('Y'); if( $date > 2019 ) { echo '2019 - '; } ?><?php echo date('Y');?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <form action="" method="post" class="submit">
                               <?php echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; ?>
                               <textarea name="comment"></textarea>
                               <textarea name="message"></textarea>
                               <div class="row">
                                   <div class="col-12">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="name" class="sr-only"><?php echo __('Ваше имя'); ?></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo __('Ваше имя'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12">
                                       <div class="form-group d-flex justify-content-center">
                                            <label for="tel" class="sr-only"><?php echo __('Номер телефона'); ?></label>
                                            <input type="tel" class="form-control" id="tel" aria-describedby="tel" placeholder="<?php echo __('Номер телефона'); ?>">
                                        </div>
                                   </div>
                                   <div class="col-12 d-flex justify-content-center">
                                       <input type="submit" value="<?php echo __('ОСТАВИТЬ ЗАЯВКУ'); ?>">
                                   </div>
                               </div>
                          </form>
                    </div>
                    <div class="col-12 col-lg-4">
                        Появились какие-то вопросы или Вы хотите приобрести бизнес? Оставьте заявку справа и мы Вам перезвоним!
                    </div>
                </div>
               </div>
            </div>
        </footer>
             <div id="loader" style="display:none;"></div>
             <div class="overlay"></div>
             <div class="modal text-center justify-content-center align-items-center">
                 <div class="value text-center d-flex justify-content-center align-items-center"></div>
             </div>
             <div id="toTop"><a href="#main" class="down"><img src="<?php echo get_template_directory_uri(); ?>/img/ar-down-min.png" alt=""></a></div>
        </div>    
    <?php wp_footer(); ?>
</body>
</html>