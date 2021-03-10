<div class="container" id="benefits-section">
    <?php

    $imageBenefit = get_field('testemonial_image');

    ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="benefit-testemonial">
                <div class="img-wrapper">
                    <img src="<?php echo esc_url($imageBenefit['url']); ?>" alt="<?php echo esc_url($imageBenefit['alt']); ?>">
                </div>
                <div class="content">
                    <?php echo the_field('benefit_testemonial'); ?>
                </div>
            </div>
        </div>
        <?php

        // Check rows exists.
        if (have_rows('icon_box')) :

            // Loop through rows.
            while (have_rows('icon_box')) : the_row();
                $boxImage = get_sub_field('box_image');
                $boxTitle = get_sub_field('box_title_benefits');
                $boxContent = get_sub_field('box_content_benefits');

        ?>
                <div class="col-lg-3">
                    <div class="benefit-card">
                        <div class="img-wrapper">
                            <img src="<?php echo esc_url($boxImage['url']); ?>" alt="<?php echo esc_url($boxImage['alt']); ?>" class="img-fluid">
                        </div>
                        <h4><?php echo $boxTitle; ?></h4>
                        <?php echo $boxContent; ?>
                    </div>
                </div>
        <?php
            // Load sub field value.
            // Do something...

            // End loop.
            endwhile;

        // No value.
        else :
            echo '<h2> No posts Found </h2>';
        endif; ?>



    </div>
</div>