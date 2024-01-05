<!DOCTYPE html>
<html lang="fr-BE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header id="head_bar" class="container-fluid mt-0 pt-2 sticky-top">
        <nav class="navbar navbar-expand-lg rounded bg-white pt-0 pb-0 pl-5 pr-5">
            <div class="container-fluid">
                <a class="navbar-brand py-0" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo BeFit" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Afficher ou masquer la navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <?php wp_nav_menu([
                        'theme_location' => 'header', // localisation de mon menu
                        'container' => false, // permet de retirer mon container
                        'menu_class' => 'navbar-nav ms-auto' // la classe que je veux dans mon <ul></ul>
                    ]); ?>
                </div>
            </div>
        </nav>
    </header>