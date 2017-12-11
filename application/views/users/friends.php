<h2>Friend List</h2>

<div class="container">
    <div class="col-md-offset-3">
        <?php foreach($apples as $friend) : ?>
            <h6><?php echo $friend['sent_by']; ?></h6>
            <p><?php echo $friend['status']; ?></p>

            <?php if($friend['status'] === 'Pending' ): ?>
                <p><a href="<?php echo site_url(); ?>request/accept_request">Accept</a></p>
                <p><a href="<?php echo site_url(); ?>request/reject_request">Reject</a></p>
            <?php else: ?>
                <p><?php echo $friend['status']; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>