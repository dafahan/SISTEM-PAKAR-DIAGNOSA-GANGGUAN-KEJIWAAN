<?php

function is_active($menu = '',$page='')
{
  if (isset($page)) {
   // dd($page);
    if ($page === $menu) {
      
      // dd(1);
      return  'active';
    }
    
  } 
}

?>