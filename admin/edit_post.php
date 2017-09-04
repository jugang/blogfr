<?php require('core/ini.php'); ?>
<?php include 'includes/header.php'; ?>
<?php if (isLoggedIn()) : ?>
<?php
$id = $_GET['id'];

//Create Topic object
$post = new Post;

//Create Query
$post = $post->getPost($id);

//$category = $post->getCategoryC();
?>

<?php
if (isset($_POST['submit'])){
    $update = new Post;
    //Create Topic object
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
        if ($update->update($data, $id)){
            redirect('index.php', 'Your Post has bin posted', 'success');
        }else{
            redirect('edit_post.php?id='.$id, 'something when wrong with you', 'error');
        }
    }else{
        redirect('edit_post.php?id='.$id, 'Please fill in all required fields', 'error');
    }
}
?>
<?php
if (isset($_POST['delete'])){
    $delete = new Post;
    if ($delete->delete($id)){
        redirect('index.php', 'Your Post has bin delete', 'success');
    }else{
        redirect('index.php', 'something when wrong with you', 'error');
    }
}

?>
<form method="post" action="edit_post.php?id=<?php echo $id; ?>">
    <div class="form-group">
        <label>Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post->title; ?>">
    </div>
    <div class="form-group">
        <label>Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body">
            <?php echo $post->body; ?>
        </textarea>
        <script>CKEDITOR.replace('body');</script>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php foreach (getCategories() as $category) : ?>
                <?php
                if ($category->id == $post->category){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                ?>
                <option value="<?php echo $category->id; ?>"  <?php echo $selected; ?>><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Author</label>
        <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post->author; ?>">
    </div>
    <div class="form-group">
        <label>Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post->tags; ?>">
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
