<?php
include "config.php";
if (isset($_POST['submit'])) {
    $keyword = $_POST['keyword'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $metadata = $_POST['metadata'];
    $slug = $_POST['slug'];

    $ins = "INSERT INTO `blog`(`keyword`,`title`,`message`,`metadata`,`slug`) values ('$keyword','$title','$message','$metadata',' $slug')";
    $s = mysqli_query($con, $ins);
    if ($s) {
        echo "<script>alert('done')</script>";
    }
}
?>











<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="" class="w-75 m-auto text-capitalize" method="post">
        <div class="my-3">
            <label for="">keyword</label>
            <input type="text" name="keyword" class="form-control  ">
        </div>
        <div class="my-3">
            <label for="">title</label>
            <input type="text" name="title" class="form-control  ">
        </div>
        <div class="my-3">
            <label for="">message</label>
            <textarea name="message" class="form-control" id=""></textarea>
        </div>
        <div class="my-3">
            <label for="">metadata / meta description </label>
            <textarea name="metadata" class="form-control" id=""></textarea>
        </div>
        <div class="my-3">
            <label for="">slug</label>
            <input type="text" name="slug" placeholder="" class="form-control">
        </div>
        <input type="submit" name="submit">
    </form>



    <table class="table table-bordered w-75">
        <tr>
            <td>keyword</td>
            <td>title</td>
            <td>message</td>
            <td>metadata /meta description</td>
            <td>slug</td>
            <td>delete</td>
        </tr>
        <?php
        include "config.php";
        $sel = "SELECT * FROM `blog`";
        $q = mysqli_query($con,$sel);
        while($row=mysqli_fetch_array($q)){

        
        
        ?>
 <tr>
            <td><?php echo $row['keyword'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td><?php echo $row['metadata'] ?></td>
            <td><?php echo $row['slug'] ?></td>
            <td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
        </tr>
        <?php }?>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>