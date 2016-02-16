

    <?php

  $rs = $db->query("SELECT* FROM T_Menu where parent_id = 0  order by sort");
    $menu = $rs->fetchAll();

                   foreach ($menu as $item){

                       $srs = $db->query("SELECT* FROM T_Menu where parent_id =".$item['id']." order by sort");
                       $submenu = $srs->fetchAll();

                       if($submenu){


                        echo "<li class='dropdown'>";
                        echo "<a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$item[$current_lang.'_title']."<span class='caret'></span></a>";
                          echo "<ul class='dropdown-menu'>";
                              foreach ($submenu as $subitem){

                                         echo "<li class='allw' ><a  href='".$subitem['url']."'>".$subitem[$current_lang.'_title']."</a>";

                                }
                            echo "</ul>";

                       }else{//no sub menu

                        echo "<li >";
                        echo "<a class='' href='".$item['url']."'>".$item[$current_lang.'_title']."</a>";


                       }












                        echo "</li>";

                       }
                       if($current_lang=='eng')
                      echo "<li><a href='?lang=chi'>中文</a></li>";
                      else
                      echo "<li><a href='?lang=eng'>English</a></li>";


?>
