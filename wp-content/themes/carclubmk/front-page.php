<?php
 
get_header();
 
 ?>
 
<main class="main">
   
    <?php
    get_template_part( 'sections/begginer', 'v1' ); ?>

    <?php 

    $people = array(
        "person1" => array(
            "first_name" =>"Filip",
            "last_name" => "Gelevski",
            "desc" => "Programer, Uci vo semos, Mnogu Dobar Student (Trudi se da bide)",
            "details" => array( 
                "age"=> 19,
                "height" => 194,
                "weight" => 90,
            ),             
        ),
        "person2" => array(
            "first_name" => "Trajko",
            "last_name" => "Trajkovski",
            "desc" => "Muzicar, Ne Uci vo semos, Mnogu Dobar Gitarist (Trudi se da bide)",
            "details" => array( 
                "age"=> 20,
                "height" => 187,
                "weight" => 76,
            ),    
        ),
        "person3" => array(
            "first_name" => "Pero",
            "last_name" => "Perovski",
            "desc" => "Stolar, Ne Uci vo semos, Mnogu Dobar rabobdsh;l (Trudi se da bide)",
            "details" => array( 
                "age"=> 20,
                "height" => 187,
                "weight" => 76,
            ),    
        ),

    );


    $filip_name = $people["person1"]["first_name"];
    $trajko_name = $people["person2"]["first_name"];

    $filip_age = $people["person1"]["details"]["age"];
    $trajko_age = $people["person2"]["details"]["age"];
    
    // echo $filip_name . " " . $filip_age . " " . $trajko_name . " " . $trajko_age;
    ?>

    <div>
        <?php
            $isOlderSporedba = isOlder($filip_age, $trajko_age);
            if($isOlderSporedba)
            {
                echo $filip_name . " e postar od " . $trajko_name;
            }else {
                echo $filip_name . " ne e postar od " . $trajko_name;
            };
        ?>

    </div>

    <section class="people">
        <?php 
            foreach($people as $item)
            {
                echo "<div class='person_card'>";
                echo "<h3>" . $item["first_name"] . " " . $item["last_name"] . "</h3>";
                echo "<p>" . $item["desc"] . "</p>";
                echo "</div>";
            };
             
        ?> 
        
        
    </section>
 
</main>
 
<?php
 
get_footer();

?> 