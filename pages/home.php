<?php include 'pages/includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($types as $type) { ?>
            <div class="col-md-3">
                <div class="card " style="height: 350px">
                    <img src="<?php echo $type['image']; ?>" alt="">
                    <div class="card-body pt-2 pb-4 px-1">
                        <a href="" class="pb-5"><h5 style="font-size: 15px; font-weight: bold "><?php echo $type['title']; ?></h5></a>
                        <p class="text-justify" style="font-size: 14px; color: #929292 "><?php echo $type['description']; ?></p>
                        <span style="font-size: 12px; color: #bebebe "><?php echo $type['time']; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
