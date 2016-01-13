 
              <ul id="nav">
<?php

  $rs = $db->query("SELECT* FROM T_Menu where parent_id = 0");
    $menu = $rs->fetchAll();
                 
                   foreach ($menu as $item){
                      
                   echo "<li class='down-menu'>";

                       if($item['type']=="page")
                        echo "<a href='".$item['url']."'>".$item[$current_lang.'_title']."</a>";
                        else if($item['type']=="sub"){
                             echo "<a href='#'>".$item[$current_lang.'_title']."</a>";
                         $srs = $db->query("SELECT* FROM menu where parent_id =".$item['id']);
                       if($srs){
                       $submenu = $srs->fetchAll();
                      
                          echo "<ul>";
                              foreach ($submenu as $subitem){
                          
                                         echo "<li ><a href='".$subitem['url']."'>".$subitem[$current_lang.'_title']."</a>";

                                }
                            echo "</ul>";
                           
                       }  
                       }
                        else{
                        echo "<a href='#'>".$item[$current_lang.'_title']."</a>";     
                          $rs = $db->query("SELECT* FROM ".$item['type']);   
                           if($rs){
                                   $subMenu = $rs->fetchAll();
                                    echo "<ul>";
                                    foreach ($subMenu as $subItem){
                          
                                         echo "<li ><a href='".$item['url']."?id=".$subItem['id']."'>"
                                             
                                             .$subItem[$current_lang.'_'.$item['type']]."</a>";

                                    }
                                    echo "</ul>";
                           } 
                            
                            
                        }
                       
                      
                       
                       echo "</li>";
                    
                  }
 
?>
                 
    </ul>
            
        
                 