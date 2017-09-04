<?php include('core/ini.php'); ?>
<?php
if (isset($_POST['do_login'])){
    //Get Vars
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //Create User Object
    $user = new User;

    if ($user->login($username, $password)){
        redirect('index.php', 'You have bin logged in', 'success');
    }else{
        redirect('test.php', 'That login is not valid', 'error');
    }
}else{
    redirect('login.php');
}
?>
