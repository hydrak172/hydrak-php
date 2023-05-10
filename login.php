<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <?php 
             require('header.php');
        ?>
    </header> 
    <?php 
    require('database.php');
    if(isset($_POST['Login'])){
            $Email = $_POST['Email'] ?? null;
            $password =$_POST['password'] ?? null;
            
            $Email= trim($Email);
            $Email = htmlspecialchars($Email);
            $Email = strip_tags($Email);

            $password =sha1($password.'@asadsajhdskjah');

            $sql= "SELECT * FROM hydrak WHERE Email = '".$Email."' AND password = '".$password."'";

            $result = mysqli_query($conn,$sql);

            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $_SESSION['Email']=$Email;
                echo '<br>'.'User co trong he thong nha cu'.'<br>';
            }else{
                echo '<br>'."Email or Password is Wrong ".'<br>';
                
            }
    }
    if(isset($_POST['dangxuat'])){
        session_unset();//session_destroy(); la remove het
    } 

    if(isset($_GET['lang'])){
        // setcookie('lang',$_GET['lang'],time()-(86400*30),"/");//xoa ra khoi roucher
        setcookie('lang',$_GET['lang'],time()+(86400*30),"/");
        $_COOKIE['lang'] =$_GET['lang'];
    }
    ?>

<?php if(!isset($_SESSION['Email'])){ ?>
    <form id="Login" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h3 class="text-center text-info">Login</h3>
        <div class="form-group">
            <label for="Email" class="text-info">Username:</label><br>
            <input type="text" name="Email" id="Email" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password" class="text-info">Password:</label><br>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="Login" class="btn btn-info btn-md" value="submit" >

        </div>
        <div id="register-link" class="text-right">
            <a href="#" class="text-info">Register here</a>
        </div>
    </form>
<?php } else { ?>
    <a href="?lang=vi"> <img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg/230px-Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg.png" width="50px" height ="30px" > </a>
    <a href="?lang=en"> <img src= "https://vuongquocanh.com/wp-content/uploads/2018/04/la-co-vuong-quoc-anh.jpg" width="50px" height ="29px" > </a>
    <?php 
    $string ='Xin Chao';
    if(isset($_COOKIE['lang'])){
        //if($_COOKIE['lang])==='en'
        match($_COOKIE['lang']){
            'en' => $string ='Welcome',
            'vi'=>$string= 'Xin Chao',
            default => $string='Welcome',
        };
        //if($_COOKIE['lang])=='en'
        // switch($_COOKIE['lang']){
        //     case 'en' : 
        //         $string= 'Welcome';break;
        //     case 'vi' : 
        //         $string ='Xin Chao';break;
        // }
    }
    echo $string;
    ?>
    <?php echo $_SESSION['Email']; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
        <input type="submit" name ="dangxuat" value="dangxuat"/> 
    </form>
<?php }?>
<footer>
    <?php 
             include('footer.php');
        ?>
</footer>
</body>
</html>