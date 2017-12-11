<h2>Profile</h2>

<p><?php echo $user['name'] ?></p>
<p><?php echo $this->session->userdata['user_id'] ?></p>

<?php echo form_open('users/profile'); ?>
    <input type="hidden" name="requesting">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>