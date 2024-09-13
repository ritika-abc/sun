<?php
include "header.php";

?>


<!-- Page Header Start -->
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Blog Grid</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                <li class="breadcrumb-item text-white active" aria-current="page">Blog </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container mt-20 pb-20">

    <div class="row">
        <div class="col-12 col-lg-8 col-md-12 col-sm-12">
            <?php
            include "config.php";
            $select = "SELECT * FROM  `blog` ";
            $q = mysqli_query($con, $select);
            while ($row = mysqli_fetch_array($q)) {


            ?>
                <div class="card p-4 my-2">
                    <div class="row">
                        <!-- <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                <img src="./gentelella-master/?php echo $row['image'] ?>" width="100%" height="100%">
                            </div> -->
                        <div class="col-12 ">
                            <div class="text">

                                <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['keyword'] ?> </h1>
                                <h1 style="color: #000b72;" class="fs-4"><?php echo $row['title'] ?> </h1>

                                <p> <?php
                                    echo $row['metadata'];
                                    ?></p>
                            </div>
                            <div class="text-start text-lg-end">
                                <a href="single-blog.php?slug=<?php echo $row['slug'] ?>">
                                    <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php   } ?>
        </div>

        <div class="col-12 col-lg-4 col-md-12 col-sm-12">

            <div class="card mt-3 p-2">
                <div class="card-header">
                    <h4>Recent Post</h4>
                </div>
                <?php
                include "config.php";

                $select = "SELECT * FROM `blog` limit 3";
                $q = mysqli_query($con, $select);
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="card p-3 my-2">
                        <div class="row">
                            <!-- <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                    <a href=" "><img src="./gentelella-master/?php echo $row['image'] ?>" alt=" " class="img-fluid"></a>
                                </div> -->
                            <div class="col-12  ">
                                <div class="text">
                                    <h1 style="color: #000b72;" class="fs-6 text-muted"><?php echo $row['keyword'] ?> </h1>

                                    <h4 style="color: #000b72;" class="fs-5"><?php echo $row['title'] ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
            </div>


        </div>

    </div>
</div>


</div>


<?php
include "footer.php";

?>