<?php include('partials/menu.php'); ?>

<!-- Main content Section start -->
<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE ADMIN</h1>

        <!-- Button to add Admin-->

        <?php 
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; 
            }
        ?>

        <br><br>
        <a href="add-admin.php" class="btn-primary">Add admin </a>

        <table class="tbl-full">
            <tr>
                <th> Surname </th>
                <th> Full Name </th>
                <th> Username </th>
                <th> Actions </th>
            </tr>

            <tr>
                <td> 1. </td>
                <td> sebastien </td>
                <td> firouzfar </td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>

            <tr>
                <td> 2. </td>
                <td> sebastien </td>
                <td> firouzfar </td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>

            <tr>
                <td> 3. </td>
                <td> sebastien </td>
                <td> firouzfar </td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
            </tr>
        </table>


    </div>
</div>
<!-- Main content Section end -->
<?php include('partials/footer.php'); ?>