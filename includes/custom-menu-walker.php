<?php
class CustomMenuWalker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= "<li class='" .  implode(" ", (array) $item->classes) . "'>";
        $output .= '<a href="' . $item->url . '">';
        $output .= $item->title;
        $output .= '</a>';
        if (in_array('menu-item-has-children', (array) $item->classes)) {
            $output .= '<span class="sub-menu-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg></span>';
        }
    }
}
