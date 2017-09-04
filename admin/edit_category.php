<?php require('core/ini.php'); ?>
<?php include 'includes/header.php'; ?>
<?php if (isLoggedIn()) : ?>
<?php
$id = $_GET['id'];

//Cereate Database object
$post = new Post;

$category = $post->getCategory($id);

?>
<?php
if (isset($_POST['submit'])){
    //Create Topic object
    $validate = new Validator;

    //Create data array
    $name = test_input($_POST['name']);


    if ($validate->isRequired($name)  && !empty($name)){
        //Update category
        if (updateCat($name, $id)){
            redirect('index.php', 'Your Category has bin Update', 'success');
        }else{
            redirect('edit_category.php?id='.$id, 'something when wrong with you', 'error');
        }
    }else{
        redirect('edit_category.php?id='.$id, 'Please fill in all required fields', 'error');
    }
}
?>
<?php

if (isset($_POST['delete'])) {
        if (deleteCat($id)) {
            redirect('index.php', 'Your Category has bin Delete', 'success');
        } else {
            redirect('edit_post.php?id=' . $id, 'something when wrong with you', 'error');
        }
}
?>

    <form method="post" action="edit_category.php?id=<?php echo $id; ?>">
        <div class="form-group">
            <label>Category Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category->name; ?>">
        </div>
        <div>
            <input name="submit" type="submit" class="btn btn-default" value="Submit">
            <a href="index.php" class="btn btn-default">Cancel</a>
            <input name="delete" type="submit" class="btn btn-default" value="Delete">
        </div>
        <br>
    </form>
<?php else: ?>
    <?php redirect('index.php', 'Morate se ulogovati', 'success'); ?>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>