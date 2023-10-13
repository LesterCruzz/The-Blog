<?php

/**
 * Template Name: Contact
 */

?>

<?php get_header();?>

<div class="contact">
    <div class="container">
        <div class="logo text-3xl font-bold">
            Contact Me
        </div>

        <div class="contactWrapper grid grid-cols-2 gap-5 py-10">
            <div class="contactDetails grid place-items-center [&>ul>li]:flex [&>ul>li]:gap-2 [&>ul>li]:mb-6 [&>ul>li]:items-center">
                <ul class="text-xl">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>+63-912-364-89</p>
                        
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <p>cpe.cruz.marklester@gmail.com</p>
                        
                    </li>
                </ul>
            </div>
            <div class="contactForm">

            <!-- <form action="">
                
                <div class="inputGroup">
                    <label for="">Name</label> <br>
                    <input type="text" id="" name="">
                </div>

                <div class="inputGroup">
                    <label for="">Email</label> <br>
                    <input type="email" id="" name="">
                </div>

                <div class="inputGroup">
                    <label for="">Subject</label> <br>
                    <input type="text" id="" name="">
                </div>

                <div class="inputGroup">
                    <label for="">Mobile Number</label> <br>
                    <input type="text" id="" name="">
                </div>

                <div class="inputGroup">
                    <label for="">Message</label> <br>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                <input class="bg-white text-black" type="submit" value="Send Message">

            </form> -->

            <?php echo do_shortcode('[contact-form-7 id="2d36c85" title="Contact form 1"]'); ?>

            </div>

        
        </div>

    </div>
</div>

<?php get_footer();?>