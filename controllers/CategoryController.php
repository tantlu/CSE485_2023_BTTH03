<?php
include("services/CategoryService.php");
class CategoryController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        include './models/category.php';
        include './services/CategoryService.php';
        $categorylService = new CategoryService();
        $categories = $categoryService->getAllCategories($id);
        // Nhiệm vụ 2: Tương tác với View
        include './views/category/category.php ';
    }

    public function detail(){
        if(isset($_GET['id']))
            $id=$_GET['id'];
            $categorylService = new CategoryService();
            $categories = $categoryService->getAllCategories($id);
        include("views/category/category.php");
    }

    public function add(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        include './models/category.php';
        include './services/CategoryService.php';
        $categorylService = new CategoryService();
        $categories = $categoryService->getAllCategories($id);
        // Nhiệm vụ 2: Tương tác với View
        include './views/category/add_category.php ';
    }
}
?>