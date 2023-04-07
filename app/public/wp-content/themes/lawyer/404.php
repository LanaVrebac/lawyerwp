<?php

get_header();
?>


<main>
    <section class='error-page text-center mb-5 p-4'>
        <div class='container'>
            <h1 class='text-danger'>
              404  
            </h1>   
            <p class='text-uppercase'>OOPSS, SORRY WE CAN'T FIND THAT PAGE.</p>
            <a class="btn btn-primary text-uppercase py-2 px-5 rounded-pill" href='<?php echo home_url();?>'>Back to Homepage</a>
        </div>
        
    </section>
</main>

<?php get_footer();?>
