<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <?php 
            if(!isset($_COOKIE["points"])){   
                setcookie("points","50");
            }
            echo "<div class='alert alert-primary'> You have ".$_COOKIE["points"]." points !";
            echo "<center>You must have atleast 100 points to get the flag package!</center>";
            
            if(array_key_exists('get_flag',$_POST)){
                if(isset($_COOKIE["points"])){
                    if((int)$_COOKIE["points"]>=100){
                        echo "<div class='jumbotron'>Thank you for purchasing! Here's your package.
                                <hr/><center>MLEM{saagwcu_ipc_maax} </center><hr/>
                                It's A very FINE package. I would give it a solid 5/8.
                             </div>";
                    }
                    else{
                        echo "<div class='alert alert-dark'><center>You don't have enough points, sorry!</center></div>";
                    }
                }
            }
        ?>
        <form method="post">
            <input name="get_flag" class="btn btn-success" type="submit" value="Click here to purchase the flag!"/>
        </form>
    </div>
</body>
</html>
