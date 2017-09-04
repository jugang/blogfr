<?php require('core/ini.php'); ?>
<?php include 'includes/header.php'; ?>
<?php if (isLoggedIn()) : ?>
<?php
if (isset($_POST['submit'])){
    $insert = new Post;
    $validate = new Validator;

    //Create data array
    $data = array();
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];
    $data['category'] = $_POST['category'];
    $data['author'] = $_POST['author'];
    $data['tags'] = $_POST['tags'];

    //Required fields
    $field_array = array('title', 'category', 'body', 'author', 'tags');

    if ($validate->isRequired($field_array)){
        //Update Post
        if ($insert->insertPost($data)){
            redirect('index.php', 'Your Poat has bin added', 'success');
        }else{
            redirect('add_post.php', 'something when wrong with you', 'error');
        }
    }else{
        redirect('add_post.php', 'Please fill in all required fields', 'error');
    }
}
?>

<form method="post" action="add_post.php">
    <div class="form-group">
        <label>Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label>Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
        <script>CKEDITOR.replace('body');</script>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php foreach (getCategories() as $category) : ?>
            <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
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
