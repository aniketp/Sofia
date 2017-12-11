<h2>Friend List</h2>

<div class="container">
    <div class="col-md-offset-3">
        <?php foreach($apples as $friend) : ?>
            <h6><?php echo $friend['sent_by']; ?></h6>
            <p><?php echo $friend['status']; ?></p>

            <?php if($friend['status'] === 'Pending' ): ?>
                <p>Accept</p>
                <p>Reject</p>
            <?php else: ?>
                <p><?php echo $friend['status']; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>