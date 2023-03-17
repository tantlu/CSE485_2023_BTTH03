<?php
include("configs/DBConnection.php");
include("models/Category.php");
class CategoryService{
    public function getAllCategories(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM theloai ";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'],$row['ten_tloai']);
            array_push($categories,$category);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $categories;
    }
    public function getCategory($id){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // Truy vấn SQL
        $sql = "SELECT ten_tloai FROM theloai WHERE ma_tloai =:id";

        //Tạo Prepared Statement
        $stmt = $conn -> prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //Gán giá trị và thực thi
        $stmt->execute(array('id' => $id));
        $row = $stmt->fetch();;
        return $row;
    }
}