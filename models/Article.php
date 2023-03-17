<?php
class Article{
    // Thuộc tính

    private $id;
    private $title;
    private $summary;
    private $cat_name;
    private $image;

    public function __construct($id,$title, $summary,$cat_name,$image){
        $this->id= $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->cat_name = $cat_name;
        $this->image = $image;
    }

    // Setter và Getter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getCatName()
    {
        return $this->cat_name;
    }

    public function setCatName($cat_name)
    {
        $this->cat_name = $cat_name;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }


}
?>