<h1>User Controller</h1>
<?php 
    class UserController extends BaseController{

        private $userModel;
        public function __construct(){
            
            $this->loadModel('UserModel.php');
            $this->userModel = new userModel;
        }
        public function index(){
            $users = $this->userModel->getListUser();

            return $this->view('user.list_user', ['users' => $users]);
        }
        // public function index(){
        //     return $this->view('user.list_user');
        // }
        public function create(){
            
            $errors=[];
            if(isset($_POST['create_user'])){
                //validate input data 
                //Name
                if(strlen(trim($_POST['name']))=== 0){
                    $errors['name'][]='Name is required!';
                }

                if(strlen(trim($_POST['email']))=== 0){
                    $errors['email'][]='Email is required!';
                }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $errors['email'][]= 'Email is invalid';
                }else{
                    $checkUser = $this->userModel->checkUser($_POST['email']);
                    if($checkUser){
                        $errors['email'][]= 'Email exist in system!'; 
                    }
                }

                if($_POST['password'] < 6){
                    $errors['password'][]='Password at least 6 character!';
                }
                //error ->view
                if(count($errors) > 0){
                    return $this->view('user.create_user',['errors'=>$errors]);
                }
                //Fresh Data 
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' =>   sha1($_POST['password']. 'ABC@123')
                ];

                $check =$this->userModel->create($data);
                if($check){
                    header ('Location: '.URL.'?url=user/index');
                }else {
                    throw new \Exception ('Create User something went wrong !'); 
                }
            }

            return $this->view('user.create_user');
        }

        public function detail($id){
            $errors=[];
            
            if(isset($_POST['update_user'])){
                //validate input data 
                if(strlen(trim($_POST['name']))=== 0){
                    $errors['name'][]='Name is required!';
                }

                if(strlen(trim($_POST['email']))=== 0){
                    $errors['email'][]='Email is required!';
                }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $errors['email'][]= 'Email is invalid';
                }else{
                    $checkUser = $this->userModel->checkUser($_POST['email']);
                    if($checkUser){
                        $errors['email'][]= 'Email exist in system!'; 
                    }
                }

                if($_POST['password'] < 6){
                    $errors['password'][]='Password at least 6 character!';
                }
                //error ->view
                if(count($errors) > 0){
                    return $this->view('user.detail_user',['errors'=>$errors]);
                }
                //Fresh Data 
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' =>   sha1($_POST['password']. 'ABC@123')
                ];

                $id = $_POST['id'];
                $check =$this->userModel->update($data,$id);
                if($check){
                    header ('Location: '.URL.'?url=user/index');
                }else {
                    throw new \Exception ('Update User something went wrong !'); 
                }
            }

            $user = $this->userModel->getDetail($id);
            return $this->view('user.detail_user', ['user'=> $user] ); 
        }


        public function delete($id){
            $check= $this->userModel->destroy($id);
            if($check){
                header ('Location: '.URL.'?url=user/index');
            }else{
                throw new \Exception ('Delete user something went wrong !'); 
            }
        }
    
        public function login(){
            if(isset($_POST['login'])){   

                $username = $_POST['email'] ?? null;
                $password =$_POST['password'] ?? null;
                
                $username= trim($email);
                $username = htmlspecialchars($email);
                $username = strip_tags($email);
    
                $password =sha1($password.'ABC@123');
    
                $check = $this->userModel->attempLogin($username,$password); 

                if($check){
                    header ('Location: '.URL.'?url=user/index');
                }else{
                    return $this->view('user.login',['errors'=> 'Username or password is invalid!']);
                }
            }
            return $this->view('user.login');
        }
    }


?>