<section class="py-8 md:py-16">
<div class="max-w-5xl mx-auto p-6 md:p-12 rounded-2xl">
    
<?php

while ( have_posts() ) :
    the_post();
?>
    <h1 class="text-3xl font-bold font-display"><?php the_title( ); ?></h1>
<?php
    the_content();

endwhile; // End of the loop.

?>

</div>
</section>