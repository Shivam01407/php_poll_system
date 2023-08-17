
<?php include "autenticate.php"; ?>

<html>
<?php include "header.php"; ?>

<body>
    <?php include "navbar.php"; ?>

    <div style="padding:40; padding-top: 5px;">
        <div>
           <a class="btn btn-primary" href="createPoll.php">Create Poll</a>
            <h4>Welcome! You can view the list of polls.</h4>
            <hr /><br />
        </div>
        <div>
        <?php include "pollslist.php"; ?>
        </div>
    </div>
</body>

</html>