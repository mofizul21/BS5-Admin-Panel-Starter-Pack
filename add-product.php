<?php include_once 'partials/dash_header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'partials/dash_sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Add Product</h1>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Price">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>
    </div>
</div>

<?php include_once 'partials/dash_footer.php'; ?>