<?php
    include("simple_html_dom.php");
    $html=file_get_html("https://www.myanmarmoviestore.com/dear-dakanda-2005");
    $title=$html->find("a#tracking-url",0)->innertext;
    echo $title;
    ?>
