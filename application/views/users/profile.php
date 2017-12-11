<h2>Profile</h2>

<p><?php echo $user['name'] ?></p>
<p><?php echo $this->session->userdata['user_id'] ?></p>

<li><a href="<?php echo site_url(); ?>requests/send_request/<?php echo $user['id'] ?>">Send Friend Request</a></li>