<?php

class WP_Bootstrap_Navwalker extends Walker_Nav_Menu 
 { 
  /**
   * Start Level
   *
   */
  function start_lvl( &$output, $depth = 0, $args = array() ) 
  {
    $indent = str_repeat( "\t", $depth );
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    //$output	.= "\n$indent<div class=\"dropdown-menu$submenu depth_$depth\"><ul>\n";
    $output	.= "\n$indent<ul class=\"menu-dropdown\">\n";
  }
 
  /**
   * Start Element
   *
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
  {
    $indent         = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $li_attributes  = '';
    $class_names    = $value = '';
    $hasMegaMenu    = is_active_sidebar( 'mega-menu-item-' . $item->ID );
     
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    // managing divider: add divider class to an element to get a divider before it.
    $divider_class_position = array_search('divider', $classes);

    if($divider_class_position !== false)
    {
      $output .= "<li class=\"divider\"></li>\n";
      unset($classes[$divider_class_position]);
    }

    $classes[] = ($args->has_children || $hasMegaMenu) ? 'dropdown' : '';
    $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $classes[] = 'nav-item-' . $item->ID;

    if($depth && $args->has_children)
    {
      $classes[] = 'dropdown-menu';
    }

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="nav-item ' . esc_attr( $class_names ) . '"';
     
    $id = apply_filters( 'nav_menu_item_id', 'nav-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
     
    // $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

    //$output .= (($depth == 0 || 1) && ($args->has_children || $hasMegaMenu)) ? $indent . '<li id="cat-lnk"' . $id . $value . $class_names . $li_attributes . '>' : $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
    $output .= (($depth == 0 || 1) && ($args->has_children)) ? $indent . '<li>' : $indent . '<li>';
    $output .= (($hasMegaMenu)) ? $indent . '<li class="menu-megamenu-li">' : $indent . '<li>';
     
    $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
    $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
    $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

    $attributes .= ($args->has_children) ? ' class="" data-toggle="dropdown"' : ''; 
    $attributes .= ($hasMegaMenu) ? ' class="show-hide-init"' : ''; 

    $item_output = $args->before;
    // $item_output .= '<a'. $attributes .'>';
    $item_output .= (($depth == 0 || 1) && ($args->has_children || $hasMegaMenu)) ?'<a'. $attributes .'>' : '<a class="main-lnk"'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
  
  
    $item_output .= ($args->has_children ) ? ' <i class="fa fa-chevron-down"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 220.297px; height: 220.297px; transform: translate(-50%, -50%) translate(41px, 30px);"></span></span></a>' : '';

    $item_output .= ($hasMegaMenu) ? ' <i class="fa fa-chevron-down"></i><span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 220.297px; height: 220.297px; transform: translate(-50%, -50%) translate(41px, 30px);"></span></span></a>' : '';

    $item_output .= ($depth == 0) ? '</a>' : '</a>';
    //$item_output .= ($hasMegaMenu) ? ' <div class="change-arrow"> <i class="fas fa-plus" id="plus-minus"></i> </div></a><div class="anim-ho"></div>' : '</a>';

    $item_output .= $args->after;     
     
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );


/*============================================= 
======================  Mega Menu =============
==============================================*/
	if ($hasMegaMenu)
    {
      //$output .= "<ul id=\"mega-menu-{$item->ID}\" class=\"mega-menu-wrapper dropdown-menu depth_".$depth."\">";
      $output .='<ul class="menu-megamenu menu-megamenu-large"><li class="row">';
        ob_start();
        dynamic_sidebar( 'mega-menu-item-' . $item->ID );
        $dynamicSidebar = ob_get_contents();
        ob_end_clean();
        $output .=  $dynamicSidebar;
      //$output .= "</ul>";
      $output .= '</li></ul>';
	}
	
	//End Mega Menu

  }

  /**
   * Display Element
   *
   */
  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) 
  {
    //v($element);
    if ( !$element )
    return;
     
    $id_field = $this->db_fields['id'];
     
    //display this element
    if ( is_array( $args[0] ) )
    $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
    else if ( is_object( $args[0] ) )
    $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
    $cb_args = array_merge( array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'start_el'), $cb_args);
     
    $id = $element->$id_field;
     
    // descend only when the depth is right and there are childrens for this element
    if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) 
    {
      foreach( $children_elements[ $id ] as $child )
      {
        if ( !isset($newlevel) ) 
        {
          $newlevel = true;
          //start the child delimiter
          $cb_args = array_merge( array(&$output, $depth), $args);
          call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
        }

        $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
      }

      unset( $children_elements[ $id ] );
    }
     
    if ( isset($newlevel) && $newlevel )
    {
      //end the child delimiter
      $cb_args = array_merge( array(&$output, $depth), $args);
      call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
    }
     
    //end this element
    $cb_args = array_merge( array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'end_el'), $cb_args);
  }
}