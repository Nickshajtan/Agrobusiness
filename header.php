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
    <div class="main__wrapper">
        <header id="nav">
           <div class="burger">
               <span class="top d-block ml-auto mr-auto"></span>
               <span class="center d-block ml-auto mr-auto"></span>
               <span class="bottom d-block ml-auto mr-auto"></span>
           </div>
            <div class="menu justify-content-center">
                <ul class="display-flex flex-column w-100">
                    <li class="d-flex justify-content-center"><a href="#mark" class="down d-flex justify-content-center">О хозяйстве в целом</a></li>
                    <li class="d-flex justify-content-center"><a href="#korch" class="down d-flex justify-content-center">О хозяйстве в Корчовке</a></li>
                    <li class="d-flex justify-content-center"><a href="#adv" class="down d-flex justify-content-center">Преимущества и активы</a></li>
                    <li class="d-flex justify-content-center"><a href="#numland" class="down d-flex justify-content-center">В цифрах о землях</a></li>
                    <li class="d-flex justify-content-center"><a href="#harvest" class="down d-flex justify-content-center">Потенциальная урожайность</a></li>
                    <li class="d-flex justify-content-center"><a href="#gallery" class="down d-flex justify-content-center">Галерея</a></li>
                    <li class="d-flex justify-content-center"><a href="#schema" class="down d-flex justify-content-center">Схема участка</a></li>
                    <li class="d-flex justify-content-center"><a href="#footer" class="down d-flex justify-content-center">Контакты</a></li>
                </ul>
            </div>
        </header>
