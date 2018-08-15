<?php
/*$categories = get_the_category();
$category_id = $categories[0]->cat_ID;*/

$category = get_queried_object();
$category_id =  $category->term_id;

if($category_id == 8){
    include_once 'categories/uslugi.php';
}
elseif($category_id == 2){
    include_once 'categories/produkcija.php';
}
elseif($category_id == 12){
    include_once 'categories/blagoustrojstvo.php';
}
elseif($category_id == 24){
    include_once 'categories/inform.php';
}
elseif($category_id == 17){
    include_once 'categories/katalog-kamnja.php';
}
elseif($category_id == 25){
    include_once 'categories/portfolio.php';
}else{
    include_once 'categories/katalog-kamnja.php';
    /*header("HTTP/1.0 404 Not Found");
    echo "<script type='text/javascript'> document.location.href = '/404/'; </script>";
    exit();*/
}

