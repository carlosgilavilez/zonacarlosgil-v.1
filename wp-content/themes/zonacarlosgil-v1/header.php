<?php
/**
 * Header template
 * 
 * @package zonacarlosgil-v1
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body <?php body_class('hola-clase-de-zonacarlogil-v1'); ?>>

<?php wp_body_open(); ?>

<?php

if(function_exists('wp_body_open')){
    wp_body_open();
}

?>


    <header>Header</header>