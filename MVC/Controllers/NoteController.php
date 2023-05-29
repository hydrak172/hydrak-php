<h1>Note Controller</h1>
<?php
    class NoteController extends BaseController{

        private $noteModel;
        public function __construct(){
            
            $this->loadModel('NoteModel.php');
            $this->noteModel = new noteModel;
        }
        public function index(){
            $notes = $this->noteModel->getListNote();

            return $this->view('note.list_note', ['notes' => $notes]);
        }
        public function create(){
            
            $errors=[];
            if(isset($_POST['create_note'])){
                //validate input data 
                if(strlen(trim($_POST['content']))=== 0){
                    $errors['content'][]='Content is required!';
                }
                if($_POST['user_id'] === '0'){
                    $errors['user_id'][]='User Id is required!';
                }
                if(count($errors) > 0){
                    return $this->view('note.create_note',['errors'=>$errors]);
                }
                //Fresh Data 
                $data = [
                    'content' => $_POST['content'],
                    'user_id' => $_POST['user_id']
                ];
                $check =$this->noteModel->create($data);
                if($check){
                    header ('Location: '.URL.'?url=note/index');
                }else {
                    throw new \Exception ('Create note something went wrong !'); 
                }
            }

            return $this->view('note.create_note');
        }
        public function detail($id){
            $note = $this->noteModel->getDetail($id);
            return $this->view('note.detail_note', ['note'=> $note] );

            // $sql = 'SELECT * FROM note where id='.$id;
            // var_dump($sql);die;
        }
        public function delete($id){
            $check= $this->noteModel->destroy($id);
            if($check){
                header ('Location: '.URL.'?url=note/index');
            }else{
                throw new \Exception ('Delete note something went wrong !'); 
            }
        }
    }



?>