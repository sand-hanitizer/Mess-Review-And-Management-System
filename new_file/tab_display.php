<?php
include("connection2.php");
$query="select * from reviews";
$result=mysqli_query($query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reviews for mess</title>
</head>
<body>
    <center>
    <h1> Reviews </h1>
    <table align="center" border="1px" style="width:300px; line-height:30px;" >
        <thead>
            <tr>
                <td>Name</td>
                <td>Enrollment No.</td>
                <td>Slot</td>
                <td>Feedback</td>
            </tr>
        </thead>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
                <td> <?php echo $rows.['name']; ?></td>
                <td> <?php echo $rows.['enroll']; ?></td>
                <td> <?php echo $rows.['slot']; ?></td>
                <td> <?php echo $rows.['feedback']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </center>
</body>
</html>