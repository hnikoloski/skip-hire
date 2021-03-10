<div class="container-fluid" id="cta_section" style="background: url(<?php echo the_field('cta_bg_home'); ?>); background-size:cover; background-repeat:no-repeat; background-position:bottom center;">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <h1><?php echo the_field('cta_title'); ?><span>.</span></h1>
                            <?php echo the_field('cta_paragraph'); ?>
                            <form action="#">
                                <input type="text" placeholder="Enter your postcode"> <button>View Prices</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>