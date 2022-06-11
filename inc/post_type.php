<?php
/*
* Register post types
*/

//Register post types
add_action( 'init', 'register_custom_post_types' );
function register_custom_post_types(){
      //Register taxonomy
      register_taxonomy(
         'stages',
         'stages',
         array(
               'label' =>        'Категорїї підготовки',
               'hierarchical'               => true,
               'public'                     => true,
               'show_ui'                    => true,
               'show_admin_column'          => true,
               'show_in_nav_menus'          => true,
               'show_in_rest'               => null,
               'rewrite' => array(
               'slug' => 'stages',
               'with_front' => false
            )
         )
      ); 
   
      $labels = array(
      'name'               => 'Етапи',
      'singular_name'      => 'Етап',
      'add_new'            => 'Додати етап',
      'add_new_item'       => 'Додавання',
      'edit_item'          => 'Редагування',
      'new_item'           => 'Нове',
      'view_item'          => 'Переглянути',
      'search_items'       => 'Пошук',
      'not_found'          => 'Не знайдено',
      'not_found_in_trash' => 'Не знайдено у кошику',
      'parent_item_colon'  => '', 
      'menu_name'          => 'Етапи підготовки', 
   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_position'      => 2,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_icon'          => 'dashicons-category',
      'description'        => "('Stages', 'loren')",
      'show_in_rest'       => false,
      'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
      
   );
   register_post_type('stages', $args);
}

?>