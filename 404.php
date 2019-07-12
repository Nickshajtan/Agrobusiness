<?php if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(«ob_gzhandler»); else ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,user-scalable=0">
    <meta name="keywords" content="">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<section id="main" class="circle__title">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-12 col-md-12 text-white"><a href="<?php echo home_url(); ?>" style="font-size:1.5rem;color:#fff;">Продажа агробизнеса</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7">
                <div class="row d-flex justify-content-start align-items-center h-100">
                        <div class="col-12">
                            <h1 class="text-left ">
                                <?php $id = get_option('page_on_front'); ?> 
                                <span class="text-white"><?php the_field('error', $id); ?></span>
                            </h1>
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
    </div>
</section>
   <?php wp_footer(); ?>
</body>
</html>