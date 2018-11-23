<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_img">
                <a href="#"><?php the_custom_logo(); ?></a>
            </div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle">Animals</button>
                <div class="dropdown-content">
                    <a href="<?php echo get_page_link(7); ?>"">Owls</a>
                    <a href="<?php echo get_page_link(23); ?>"">Flamingos</a>
                    <a href="<?php echo get_page_link(29); ?>">Lions</a>
                </div>
            </div>


            <ul class="nav nav-masthead justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(10); ?>"> About us <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(3); ?>"> Privacy Policy <span class="sr-only"></span></a>
                </li>
            </ul>
        </nav>
    </header>
