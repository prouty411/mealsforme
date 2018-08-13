
<?php
 function curl($search_string){
     $url = "https://www.allrecipes.com/search/results/?ingIncl={$search_string}&sort=re";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL , $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
} 
?>

<?php
 $scraped_website = curl("chicken");
 preg_match_all("!https://images.media-allrecipes.com/userphotos/300x300/[^\s]*?.jpg!",$scraped_website,$matches);
 $images = array_values(array_unique($matches[0]));
 print_r($images);
 for($i = 0;$i < count($images);$i++){
     echo "<div style='float: left; margin: 10 0 0 0; '>";
     echo "<img src='{$images[$i]}'></br>";
     echo "</div>";
 } 
?>

