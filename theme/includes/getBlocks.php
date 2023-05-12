<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'policies':
              include 'blocks/policies.php';
              break;
            case 'top_categories':
              include 'blocks/top_categories.php';
              break;
            case 'product_tabs':
              include 'blocks/product_tabs.php';
              break;
            case 'product_slider':
              include 'blocks/product_slider.php';
              break;
            case 'favourite_brands':
              include 'blocks/favourite_brands.php';
              break;
            case 'banner':
              include 'blocks/banner.php';
              break;
            case 'features':
              include 'blocks/features.php';
              break;
            case 'trending_brands':
              include 'blocks/trending_brands.php';
              break;
            case 'contact':
              include 'blocks/contact.php';
              break;
          }
        }
      }
    }
  }

?>