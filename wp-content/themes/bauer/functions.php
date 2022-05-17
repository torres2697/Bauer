<?php
  function bauer_scripts() {

      wp_enqueue_style( 'b-main-css', get_stylesheet_uri() );
      wp_enqueue_style( 'b-fancy-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );
      wp_enqueue_style( 'b-slick-css', get_template_directory_uri() . '/css/slick.css' );

      wp_deregister_script('jquery');
      wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js', true );
      wp_enqueue_script( 'b-fancy-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', true );
      wp_enqueue_script( 'b-slick-js', get_template_directory_uri() . '/js/slick.min.js', true );
      wp_enqueue_script( 'b-main-js', get_template_directory_uri() . '/js/main.js', true );


      wp_enqueue_script( 'contact-form-js', get_template_directory_uri() . '/js/contact-form.js', true );

  }
  add_action( 'wp_enqueue_scripts', 'bauer_scripts' );


  add_action('init', 'register_post_types');
  function register_post_types(){

    register_post_type('catalog', array(
      'labels'             => array(
        'name'               => 'Каталог', // Основное название типа записи
        'singular_name'      => 'Продукт', // отдельное название записи типа Book
        'add_new'            => 'Добавить продукт',
        'add_new_item'       => 'Добавить новый продукт',
        'edit_item'          => 'Редактировать',
        'new_item'           => 'Новый продукт',
        'view_item'          => 'Посмотреть продукт',
        'parent_item_colon'  => '',
        'menu_name'          => 'Каталог'
  
        ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-clipboard',
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title','thumbnail'),
      'menu_position'      => 2
    ) );

    register_post_type('projects', array(
      'labels'             => array(
        'name'               => 'Проекты', // Основное название типа записи
        'singular_name'      => 'Проект', // отдельное название записи типа Book
        'add_new'            => 'Добавить проект',
        'add_new_item'       => 'Добавить новый проект',
        'edit_item'          => 'Редактировать',
        'new_item'           => 'Новый проект',
        'view_item'          => 'Посмотреть проект',
        'parent_item_colon'  => '',
        'menu_name'          => 'Проекты'
  
        ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-admin-post',
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title'),
      'menu_position'      => 2
    ) );
  }



  require_once get_template_directory() . '/redux/sample-config.php';
  add_theme_support( 'post-thumbnails' );

  function yt_code($link){
    $out = '';
    if(strripos($link, '?v=')){
      $out = array_pop(explode("?v=", $link));
    }
    if(strripos($link, 'youtu.be')){
      $out = array_pop(explode("/", $link));
    }
    if(strripos($link, 'embed')){
      $out = array_pop(explode("/", $link));
    }
    return 'https://www.youtube.com/embed/' . $out;
  }


  function send_mail() {

    /* Забираем отправленные данные */
    $mail_name = $_POST['mail_name'];
    $mail_phone = $_POST['mail_phone'];
  
    /* Отправляем нам письмо */
    $emailTo = 'bun.frith228@gmail.com';
    $subject = 'Заказ проекта';
    $headers = "Content-type: text/html; charset=\"utf-8\"";
    $mailBody = "Имя: $mail_name   \n\n   Телефон: $mail_phone";
    wp_mail($emailTo, $subject, $mailBody, $headers);
  
    
    /* Завершаем выполнение ajax */
    die();
    
    }
  
    if( wp_doing_ajax() ){
      add_action('wp_ajax_send_mail', 'send_mail');
      add_action('wp_ajax_nopriv_send_mail', 'send_mail');
    }	