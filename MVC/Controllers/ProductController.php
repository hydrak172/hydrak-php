<h1>Product Controller</h1>
<?php 
    class ProductController extends BaseController{
        private $productModel;
        private $usertModel;

        public function __construct(){
            $this->loadModel('ProductModel.php');
            $this->productModel= new ProductModel;

            $this->loadModel('UserModel.php');
            $this->usertModel= new UserModel;
        }
        public function index(){
            $listproductHot=$this->productModel->getListProductHot();
            $listproductNewArrival=$this->productModel->getListProductNewArrival();;
            $arrayDatas= [
                'listproductHot'=>$listproductHot,
                'listproductNewArrival'=>$listproductNewArrival,
                'heading_hot'=>'List Heading Hot',
                'heading_newarrival'=>'List Heading New Arrival'
            ];
            return $this->view('product.list_product',$arrayDatas);
        }
        public function create(){
            return $this->view('product.create_product');
        }
    }
?>