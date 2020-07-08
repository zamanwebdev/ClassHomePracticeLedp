<?php
    class Blog{
        function dbConnect(){
            $link = mysqli_connect('localhost','root','','blog');
            return $link;
        }
        function addBlog(){
//            echo "<pre>";
//            print_r($this->dbConnect());
//            $filename = $_FILES[''];
            echo "<pre>";
            print_r($_FILES['image']);
        }
    }
?>