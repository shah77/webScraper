<?php
error_reporting(E_ALL & ~E_NOTICE);


  $phone_model_data = file_get_contents("https://www.kimovil.com/en/compare-smartphones/name.samsung");
  
  $phone_model = explode('<div class="item-wrapper">',$phone_model_data);
     //print_r($phone_model);

    $array = count($phone_model);

    for($i=1;$i<$array;$i++){
      //echo "$phone_model[$i]";


        

        $image1 = explode('src="', $phone_model[$i]);
        $image2 = explode('"', $image1[1] );
        echo "<img src='".$image2[0]."'</br>";

        $model1 = explode('<span class="title">', $phone_model[$i]);
        $model2 = explode('</span>', $model1[1] );
        echo "<h3>".$model2[0]."</h3>";

        $rating1 = explode('<span class="nota ki10">', $phone_model[$i]);
        $rating2 = explode('</span>', $rating1[1] );
        //echo $rating2[0]."</br>";

        if(!$rating2[0]){
              echo "<p>Rating: N/A</p>";
          }
          else{
              //echo "N/A</br>";
            echo "<p>Rating: ".$rating2[0]."</p>";
          }


        

    

     
}


 ?>