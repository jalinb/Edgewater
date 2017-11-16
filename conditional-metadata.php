<?php

$menuID = JSite::getMenu()->getActive()->id ;
  if ($menuID == '337') // contact-us
  {
    echo '<link rel="canonical" href="http://www.ewboats.com/company/contact" />';
  }
  elseif ($menuID == '101') // index.php
  {
    echo '<link rel="canonical" href="http://www.ewboats.com/" />';
  }
  elseif ($menuID  == '316' || '317' || '318' || '572') // Center Consoles, Dual Consoles, Inshores or Express model pages
  {
    echo '<link rel="canonical" href="http://www.ewboats.com/boat-models" />';
  }
  else  // No canonical tag for all other pages
  {
    echo '';
  }

?>