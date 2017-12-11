<html>
<head>
    <title>Sofia</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">Sofia</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <?php if($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url(); ?>posts">Posts</a></li>
                    <li><a href="<?php echo site_url(); ?>friends">Friend List</a></li>
                <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo site_url(); ?>users/login">Login</a></li>
                    <li><a href="<?php echo site_url(); ?>users/register">Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo site_url(); ?>posts/create">Create Post</a></li>
                    <li><a href="<?php echo site_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Flash messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('request_sent')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('request_sent').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('request_accepted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('request_rejected').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('request_rejected')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('request_rejected').'</p>'; ?>
    <?php endif; ?>
