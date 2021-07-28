<?php
    if (count($cat)>0){
        $num= 3;
        foreach ($cat as $nav){
            if ($nav >= $num){
                ?>
                <li>
                    <a href="/category/{{$nav->categoryName}}/{{$nav->id}}">{{ $nav->categoryName }}</a>
                </li>
                <?php
            }
        }
    }
?>
