<?php include 'database.php'; ?>
<?php
    //Create select query
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SHOUT IT!</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! ShoutBox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout"><span><?php echo $row['time'] ?> - </span><b><?php echo $row['user'] ?>:</b> <?php echo $row['message'] ?> </li>
                    <?php endwhile; ?>
                    
                   
                </ul>
            </div>
            <div id="input">
                <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
                
                <?php endif; ?>
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name" />
                    <input type="text" name="message" placeholder="Enter a message" />
                    <br />
                    <input type="submit" name="submit" value="Shout It Out!" class="shout-btn"/>
                </form>
            </div>
        </div>
    </body>
</html>