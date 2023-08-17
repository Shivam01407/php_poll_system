
<?php
include "dbconfig.php";


// Insert new record into the "polls" table 
$stmt = $conn->prepare("SELECT * FROM `polls`");
$stmt->execute();
$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($polls);

?>



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">createdAt</th>
      <th scope="col">action</th>

    </tr>
  </thead>

  <tbody>
    <?php foreach ($polls as $poll) : ?>
      <tr>
        <td><?= $poll['id'] ?></td>
        <td><?= $poll['title'] ?></td>
        <td><?= $poll['description'] ?></td>
        <td><?= $poll['createdAt'] ?></td>
        <td>
        <a href="vote.php?id=<?php echo $poll['id'] ?>" class="btn btn-success">Vote</a>
        <a href="result.php?id=<?php echo $poll['id'] ?>"  class="btn btn-info">Result</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>