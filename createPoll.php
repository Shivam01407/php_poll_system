<?php include "autenticate.php"; ?>
<?php

include "dbconfig.php";

if (!empty($_POST)) {
    // Assigning values to the variable  
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';

    // Insert new record into the "polls" table 
    $stmt = $conn->prepare("INSERT INTO polls (title, description) VALUES ('$title', '$description' )");
    $stmt->execute();

    $poll_id = $conn->lastInsertId();

    $options = isset($_POST['options']) ? explode(PHP_EOL, $_POST['options']) : ''; // not use "\n"

    foreach ($options as $option) {
        if ($option === '') {
            //echo ("option values :" . $option );
            continue;
        }
        $stmt = $conn->prepare("INSERT INTO vote_count ( poll_id, option) VALUES (?, ?)");
        $stmt->execute([$poll_id, $option]);
    }
    // Output message
    // echo '<script>alert("Poll Sucessfully created")</script>';
    header("Location: index.php");
    die();
}
?>

<html>
<?php include "header.php"; ?>

<body>
    <?php include "navbar.php"; ?>
    <div style="padding:40; padding-top: 5px;">
        <div>
            <h2>Create Poll</h2>
            <hr />
        </div>
        <div>
            <form action="createPoll.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description(Optional) ">
                </div>
                <div class="form-group">
                    <label for="answers">Options</label>
                    <textarea class="form-control" id="options" name="options" placeholder="Enter Options one in a line" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</body>

</html>