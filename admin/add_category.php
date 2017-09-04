<?php require('core/ini.php'); ?>
<?php include 'includes/header.php'; ?>
<?php if (isLoggedIn()) : ?>
<?php
//Cereate Database object


if (isset($_POST['submit'])){
    $validate = new Validator;
    $name = test_input($_POST['name']);

    //Create data array
    if ($validate->isRequired($name)  && !empty($name)) {
            //Update category
            if (insertCat($name)) {
                redirect('index.php', 'Your Category has bin Insert', 'success');
            } else {
                redirect('add_category.php', 'something when wrong with you', 'error');
            }
        } else {
            redirect('add_category.php', 'Please fill in required field', 'error');
        }
}
?>

    <form method="post" action="add_category.php">
        <div class="form-group">
            <label>Title</label>
            <input name="name" type="text" class="form-control" placeholder="Enter Category">
        </div>
        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit">
            <a href="index.php" class="btn btn-default">Cancel</a>
        </div>
        <br>
    </form>
<?php else: ?>
    <?php redirect('index.php', 'Morate se ulogovati', 'success'); ?>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>