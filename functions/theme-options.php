<?php
function get_theme_image($image_name)
{
  $image_url = home_url() . '/wp-content/themes/marmota-theme/resources/images/' . $image_name;

  return $image_url;
}

function register_templates_marmota_cpt() {
  $labels = array(
      'name'                  => _x('Templates Marmota', 'Post Type General Name', 'textdomain'),
      'singular_name'         => _x('Template Marmota', 'Post Type Singular Name', 'textdomain'),
      'menu_name'             => __('Templates Marmota', 'textdomain'),
      'name_admin_bar'        => __('Template Marmota', 'textdomain'),
      'archives'              => __('Arquivos de Templates Marmota', 'textdomain'),
      'attributes'            => __('Atributos do Template Marmota', 'textdomain'),
      'parent_item_colon'     => __('Template Marmota Pai:', 'textdomain'),
      'all_items'             => __('Todos os Templates Marmota', 'textdomain'),
      'add_new_item'          => __('Adicionar Novo Template Marmota', 'textdomain'),
      'add_new'               => __('Adicionar Novo', 'textdomain'),
      'new_item'              => __('Novo Template Marmota', 'textdomain'),
      'edit_item'             => __('Editar Template Marmota', 'textdomain'),
      'update_item'           => __('Atualizar Template Marmota', 'textdomain'),
      'view_item'             => __('Ver Template Marmota', 'textdomain'),
      'view_items'            => __('Ver Templates Marmota', 'textdomain'),
      'search_items'          => __('Buscar Template Marmota', 'textdomain'),
      'not_found'             => __('Nenhum template Marmota encontrado', 'textdomain'),
      'not_found_in_trash'    => __('Nenhum template Marmota na lixeira', 'textdomain'),
      'featured_image'        => __('Imagem de Destaque', 'textdomain'),
      'set_featured_image'    => __('Definir imagem de destaque', 'textdomain'),
      'remove_featured_image' => __('Remover imagem de destaque', 'textdomain'),
      'use_featured_image'    => __('Usar como imagem de destaque', 'textdomain'),
      'insert_into_item'      => __('Inserir no template Marmota', 'textdomain'),
      'uploaded_to_this_item' => __('Enviado para este template Marmota', 'textdomain'),
      'items_list'            => __('Lista de templates Marmota', 'textdomain'),
      'items_list_navigation' => __('Navegação da lista de templates Marmota', 'textdomain'),
      'filter_items_list'     => __('Filtrar lista de templates Marmota', 'textdomain'),
  );

  $args = array(
      'label'                 => __('Template Marmota', 'textdomain'),
      'description'           => __('Post type para armazenar templates Marmota personalizados.', 'textdomain'),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-layout',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => true,
      'rewrite'               => array('slug' => 'templates-marmota'),
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'show_in_rest'          => true,
  );

  register_post_type('templates_marmota', $args);
}
add_action('init', 'register_templates_marmota_cpt');

function register_templates_marmota_taxonomy() {
  $labels = array(
      'name'              => _x('Categorias Marmota', 'taxonomy general name', 'textdomain'),
      'singular_name'     => _x('Categoria Marmota', 'taxonomy singular name', 'textdomain'),
      'search_items'      => __('Buscar Categorias Marmota', 'textdomain'),
      'all_items'         => __('Todas as Categorias Marmota', 'textdomain'),
      'parent_item'       => __('Categoria Marmota Pai', 'textdomain'),
      'parent_item_colon' => __('Categoria Marmota Pai:', 'textdomain'),
      'edit_item'         => __('Editar Categoria Marmota', 'textdomain'),
      'update_item'       => __('Atualizar Categoria Marmota', 'textdomain'),
      'add_new_item'      => __('Adicionar Nova Categoria Marmota', 'textdomain'),
      'new_item_name'     => __('Nome da Nova Categoria Marmota', 'textdomain'),
      'menu_name'         => __('Categorias Marmota', 'textdomain'),
  );

  $args = array(
      'hierarchical'      => true, // true para categoria (com subníveis), false para tags
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'show_in_rest'      => true, // Suporte ao Gutenberg
      'query_var'         => true,
      'rewrite'           => array('slug' => 'categoria-template-marmota'),
  );

  register_taxonomy('template_category_marmota', array('templates_marmota'), $args);
}
add_action('init', 'register_templates_marmota_taxonomy');