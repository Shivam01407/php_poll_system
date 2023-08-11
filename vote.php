<?php
include "dbconfig.php";

if (isset($_GET["id"])) {

    // Insert new record into the "polls" table 
    $stmt = $conn->prepare("SELECT * FROM polls WHERE id = ? ");
    $stmt->execute([$_GET["id"]]);
    $polls = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //print_r(count($polls));
    if (count($polls)) {
        $polls = $polls[0];
        $stmt = $conn->prepare("SELECT id,option FROM vote_count WHERE poll_id = ? ");
        $stmt->execute([$_GET["id"]]);
        $options = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        die();
    }
} else {
    header("Location: index.php");
    die();
}

?>


<html>
<?php include "header.php"; ?>

<body>
    <?php include "navbar.php"; ?>

    <div style="padding:40">
        <div>
            <h2>Vote</h2>
            <hr /><br />
        </div>
        <div>
            <h3> <?php echo $polls["title"] ?> </h3>
            <h5> <?php echo $polls["description"] ?> </h5>

            <form action="updateVoteCount.php" method="post">
                <?php foreach ($options as $option) : ?>
                    <div class="form-check">
                        <input class="form-check-input" value="<?php echo $option["id"]?>" type="radio" name="optionId" id="option<?php echo $option["id"]?>">
                        <label class="form-check-label" for="flexRadioDefault1"> 
                            <?php echo $option["option"]?>
                        </label>
                    </div>
                <?php endforeach; ?>
                <br>
                <button class="btn btn-success">Vote</button>
                <a class="btn btn-primary" href="result.php?id=<?php echo $_GET["id"]?>">Result</a>
            </form>

        </div>
    </div>
</body>

</html>