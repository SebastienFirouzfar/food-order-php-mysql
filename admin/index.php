<?php include('partials/menu.php'); ?>

<!-- Main content Section start -->
<div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>

            <?php 
                 if(isset($_SESSION['login'])){
                    echo $_SESSION['login']; 
                    unset($_SESSION['login']);
                }
            ?>

        <div class="col-4 text-center">
            <h1>5 </h1>
            <br />
            categories
        </div>

        <div class="col-4 text-center">
            <h1>5 </h1>
            <br />
            categories
        </div>

        <div class="col-4 text-center">
            <h1>5 </h1>
            <br />
            categories
        </div>

        <div class="col-4 text-center">
            <h1>5 </h1>
            <br />
            categories
        </div>
        <div class="clearfix">

        </div>
    </div>
</div>
<!-- Main content Section end -->

<?php include('partials/footer.php'); ?>