<?php include "autenticate.php"; ?>
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
        $stmt = $conn->prepare("SELECT * FROM vote_count WHERE poll_id = ? ");
        $stmt->execute([$_GET["id"]]);
        $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $conn->prepare("SELECT SUM(count) as totalCount FROM vote_count WHERE poll_id = ? ");
        $stmt->execute([$_GET["id"]]);
        $total_votes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total_votes = $total_votes[0]["totalCount"];

        
        //echo $total_votes;
    } else {
        header("Location: index.php");
        die();
    }
} else {
    header("Location: index.php");
    die();
}

?>

<h3> <?php echo $polls["title"] ?> </h3>
<h5> <?php echo $polls["description"] ?> </h5>


<?php foreach ($options as $option) : ?>
    <div>
        <label> <?php echo $option["option"]  ?> <span style="font-weight: 400" > (<?php echo $option["count"]  ?> votes) </span></label>
        <div class="progress" style="width: 40%; ">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= @round(($option['count'] / $total_votes) * 100) ?>%" aria-valuemin="0" aria-valuemax="100">
                <?= @round(($option['count'] / $total_votes) * 100) ?>%</div>
        </div>
    </div>
<?php endforeach; ?>



<!-- <?= @round(($option['count'] / $total_votes) * 100) ?>%">
                <?= @round(($poll_answer['votes'] / $total_votes) * 100) ?>% -->