<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
?>
<section class="bn-bg">
    <div class="container-fluid">
        <div class="text-center bn-h-screen bn-d-flex">
            <div class="m-auto">
                <div>
                    <img src="./images/notfound-bg-1.png" class="img-responsive m-auto" alt="not found">
                </div>
                <div>
                    <h1 class="mt-5 mb-5">Woops!</h1>
                    <p>Sorry, we are not able to find what you are looking for</p>
                    <a href="index.php" class="btn btn-primary mt-5 px-5 py-3">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include 'footer.php';
?>