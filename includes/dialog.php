<?php function card($title, $content, $class = "card-success")
{ ?>
    <div class="backdrop"></div>
    <div class="card semi-container specific <?php echo $class ?>">
        <h1 class="fs-2 fw-normal lh-lg text-center text-capitalize">
            <?php echo $title ?></h1>
        <div class="def-padding text-center ">
            <p class="light">
                <?php echo $content ?>
            </p>
        </div>
    </div>
<?php } ?>