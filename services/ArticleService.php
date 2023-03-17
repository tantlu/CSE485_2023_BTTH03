<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM baiviet ";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['ma_bviet'],$row['tieude'], $row['tomtat'], $row['ten_bhat'], $row['hinhanh']);
            array_push($articles,$article);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $articles;
    }
    public function getDetailArticle($id){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // Truy vấn SQL
        $sql = "SELECT tieude,ten_bhat,tomtat,noidung,hinhanh,theloai.ten_tloai,tacgia.ten_tgia FROM baiviet,theloai,tacgia WHERE baiviet.ma_tloai=theloai.ma_tloai AND baiviet.ma_tgia=tacgia.ma_tgia AND ma_bviet =:id";

        //Tạo Prepared Statement
        $stmt = $conn -> prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //Gán giá trị và thực thi
        $stmt->execute(array('id' => $id));
        $row = $stmt->fetch();
        return $row;
    }
}