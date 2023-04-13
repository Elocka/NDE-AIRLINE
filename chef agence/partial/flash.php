   
<?php if(isset($_SESSION['notifications']['message']) || isset($_SESSION['notifications']['type'])): ?>

    <div class="container">

        <div class="alert  alert-<?= $_SESSION['notifications']['type'] ?>">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true"> &times;</button>

            <h4><?= $_SESSION['notifications']['message']; ?> </h4>

        </div>
    </div>
    <?php $_SESSION['notifications'] = []; ?>
    <?php endif; ?>