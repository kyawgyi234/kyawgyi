<?php
require('simple_html_dom.php');
class YandexModel implements JsonSerializable {
    private $url;
    public function __construct($url) {
        $this->url = $url;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}


//$url="https://yoteshinportal.cc/yandex/4-th-class-2009-mp-4";
function getDirectLink($url){

    $html=new  simple_html_dom();
    $html->load_file($url);

    $meta = $html->find('meta[itemprop=contentURL]', 0);
       $videolink = $meta->content;
      if(isset($meta)) {
          $model=new YandexModel($videolink);
     }
      else{
          $model=new YandexModel(null);
    }

    return $model;

}


if(isset($_GET['url'])){
    $url=$_GET['url'];
    $model=getDirectLink($url);
    echo json_encode($model);
}

?>
