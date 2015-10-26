<div id="sidebar4" role="complementary">

    <div class="content-block">
        <div class="links">
            <h5>Profile</h5>
            <div class="contact-information">

                <!-- ADD ALL LABELS FOR THIS SECTION-->

                <?php if (types_render_field("dept-email", array('raw' => 'true'))) { ?>
                    <a href="mailto:<?= types_render_field("dept-email", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Email: <?= types_render_field("dept-email", array('raw' => 'true')); ?>">
                        <i class="fa fa-envelope"></i>
                    </a>
                <?php } ?>

                <?php if (types_render_field("dept-phone", array('raw' => 'true'))) { ?>
                    <a href="tel:<?= types_render_field("dept-phone", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Phone: <?= types_render_field("dept-phone", array('raw' => 'true')); ?>">
                        <i class="fa fa-phone"></i>
                    </a>
                <?php } ?>

                <?php if (types_render_field("dept-fax", array('raw' => 'true'))) { ?>
                    <a href="fax:<?= types_render_field("dept-fax", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Fax: <?= types_render_field("dept-fax", array('raw' => 'true')); ?>">
                        <i class="fa fa-fax"></i>
                    </a>
                <?php } ?>

                <?php if (types_render_field("dept-hours", array('raw' => 'true'))) { ?>
                    <a href="#" data-toggle="tooltip" title="<?= types_render_field("dept-hours", array('raw' => 'true')); ?>">
                        <i class="fa fa-clock-o"></i>
                    </a>
                <?php } ?>

                <?php if (types_render_field("dept-location", array('raw' => 'true'))) { ?>
                    <a href="#" data-toggle="tooltip" title="<?= types_render_field("dept-location", array('raw' => 'true')); ?>">
                        <i class="fa fa-location-arrow"></i>
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="content-block">
        <!-- Departmental Links -->
        <div class="links">
            <?php if (types_render_field("dept-links", array('raw' => 'true'))) { ?>
                <h5>Departmental Links</h5>
            <?php } ?>
            <?php if (types_render_field("dept-links", array('raw' => 'true'))) { ?>
                <p><?= types_render_field("dept-links", array('raw' => 'true')); ?></p>
            <?php } ?>
        </div>
    </div>

    <div class="content-block">
        <div class="links">
            <!-- Departmental Pages -->
            <?php if (types_render_field("dept-pages", array('raw' => 'true'))) { ?>
                <h5>Departmental Pages</h5>
            <?php } ?>
            <?php if (types_render_field("dept-pages", array('raw' => 'true'))) { ?>
                <p><?= types_render_field("dept-pages", array('raw' => 'true')); ?></p>
            <?php } ?>
        </div>
    </div>


</div>