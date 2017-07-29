<?php include ('includes/header.php'); ?>
<form role="form" enctype="multipart/form-data" method="POST" action="register.php">
    <div class="form-group">
        <label>Topic Title*</label>
        <input type="text" class="form-control" name="title" placeholder="Topic Title">
    </div>
    <div class="form-group">
        <label>Categotry*</label>
        <select class="form-control">
            <option>Design</option>
            <option>Development</option>
            <option>Business & Marketing</option>
            <option>Search Engine</option>
            <option>Cloud & Hosting</option>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea id="about" rows="6" cols="80" class="form-control" name="body" placeholder="Topic Body"></textarea>
        <script>CKEDITOR.replace('body');</script>
    </div>
    <input name="register" type="submit" class="btn btn-default" value="register"/>
</form>
<?php include ('includes/footer.php'); ?>
