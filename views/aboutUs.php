<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is about Us</h1>
    <form action="" method="get">
        <input type="text" name="userName" id=""><br>
        <input type="password" name="password" id=""><br>
        <input type="reset" value="reset" name="reset">
        <input type="submit" value="submit" name="submit">

        <br><br>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>userName</th>
            </tr>
            <?php
            foreach($controllerData as $row){
                echo("
                    <tr>
                        <td>$row[Name]</td>
                        <td>$row[userName]</td>
                        <td>$row[password]</td>
                    </tr>
                ");
            }

        ?>
        </table>
    </form>
</body>
</html>