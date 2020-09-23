<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
    <thead>
    <tr class="table-dark">
    <th class="text-center">Nome dos estados</th>
    </tr>
    </thead>
        <?php
        while($e = $estados->fetch()){
            echo "<tr></tr>";
            echo  "<td>" .$e["nome"]."</td>";
        }
        ?>
     </table>
     </div>
</body>
</html>