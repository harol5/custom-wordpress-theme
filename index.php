<?php
     get_header();
     function printName($name){
          echo "<h1> my name is $name </h1>";
     }
     function printUsernames(){
          $names = array('juan', 'gloria', 'harol');
          $index = 0;
          while($index < count($names)){
               echo "<li>username: $names[$index] </li>";
               $index++;
          }
     }
     printName("pedro");
     printUsernames();

     while(have_posts()){
          the_post(); ?>
          <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
          <?php the_content(); ?>
          <hr>
          
     <?php 
     }
     get_footer();
?>

     