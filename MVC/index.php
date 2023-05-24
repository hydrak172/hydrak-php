<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chu</h1>

    <?php 
    require('./Helpers/helper.php');
    require './Controllers/BaseController.php';
    require './Core/App.php';
        // $controller=$_GET['controller'] ?? 'user'; 
        // $action=$_GET['action'] ?? 'index';
            // $url =$_GET['url'] ?? 'user';
            // $controller=explode('/',$url)[0]?? 'user';
            // $action=explode('/',$url)[1]?? 'index';
    $app = new App;
    //product_category
        // if(str_contains($controller,'_')){
        //     $valueList = array_map(function($v){
        //         return ucfirst($v);
        //     },explode('_',$controller));
        //     $controller=implode('',$valueList);
        // }else{
        //     $controller=ucfirst($controller);
        // }
        // $url = './Controllers/'.$controller.'Controller.php'; 
        // require $url;

        // $controllerName=$controller.'Controller';
        // $objectController= new $controllerName; 
        // $objectController ->$action();

        // dd($objectController);
        // $UserController= new UserController();
        // $UserController->index();
        // $UserController->create();
    ?>


    <a href="index.php?url=user/index">List User</a> <br>
    <a href="index.php?url=user/create">Create User</a><br>
    <a href="index.php?url=product_category/index">List Product Category</a><br>
    <a href="index.php?url=product_category/create">Create Product Category</a><br>
    <a href="index.php?url=product/index">List Product</a><br>
    <a href="index.php?url=product/create">Create Product</a><br>
    <a href="index.php?url=note/index">List Note</a><br>
    <a href="index.php?url=note/create">Create Note</a><br>
</body>
</html>