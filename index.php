<!DOCTYPE HTML>
<html>

<head>
    <title>Tableau des élèves</title>
    <meta charset="utf-8">
    <meta name="tableau des élèves">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
<?php $students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
]; ?>
    <table class="table table-default">
        <th>Nom de l'élève</th>
        <th>âge</th>
        <?php
        $age_total=0;
        foreach ($students as $name => $age)
        {   echo "<tr><td>".$name."</td><td>".$age."</td></tr>";
            $age_total += $age;}
          ?>

    </table>
<p>la moyenne est de <?php echo $age_total/count($students) ?> </p>

</body>

</html>