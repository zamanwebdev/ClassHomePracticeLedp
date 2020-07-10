<?php
    class Blog{
        function dbConnect(){
            $link = mysqli_connect('localhost','root','','blog');
            return $link;
        }
        function addBlog(){
            date_default_timezone_set("Asia/Dhaka");
            $time = date('Y-m-d h:i:s');

            $directory = '../images/';

            $filename = $_FILES['image']['name'];
            $imageUrl = $directory.$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],$imageUrl);
            $sql = "INSERT INTO blogs(title,description,author,file,status,timestamp) VALUES('$_POST[title]','$_POST[description]','$_POST[author]','$imageUrl','$_POST[status]','$time')";
            if(mysqli_query($this->dbConnect(),$sql)){
                return "Blog Added Successfully";
                // echo "success";
            }else{
                die(mysqli_error($this->dbConnect()));

            }


        }
        function viewAllBlog(){
            $sql = "SELECT * FROM blogs";
            if($result = mysqli_query($this->dbConnect(),$sql)){
                return $result;
               
            }else{
                die(mysqli_error($this->dbConnect()));

            }
        }
        function editBlog($id){
            $sql = "SELECT * FROM blogs WHERE id = '$id' ";
            if($result = mysqli_query($this->dbConnect(),$sql)){
                return $result;
               
            }else{
                die(mysqli_error($this->dbConnect()));

            }
        }
        function updateBlog($id){
            date_default_timezone_set("Asia/Dhaka");
            $blogImage = $_FILES['image']['name'];

            if ($blogImage) {
               
                $directory = '../images/';
                $filename = $_FILES['image']['name'];
                $imageUrl = $directory.$filename;
                move_uploaded_file($_FILES['image']['tmp_name'],$imageUrl);

                
                $time = date('Y-m-d h:i:s');

                $sql = "UPDATE blogs SET title = '$_POST[title]', description = '$_POST[description]', author = '$_POST[author]', file = '$imageUrl', status = '$_POST[status]', timestamp = '$time' WHERE id = '$id' ";
            }else{
                date_default_timezone_set("Asia/Dhaka");
                $time = date('Y-m-d h:i:s');
                $sql = "UPDATE blogs SET title = '$_POST[title]',description = '$_POST[description]',author = '$_POST[author]',status = '$_POST[status]',timestamp = '$time' WHERE id = '$id'";
            }

            if(mysqli_query($this->dbConnect(),$sql)){
                return "Blog Updated Successfully";
            }else{
                die(mysqli_error($this->dbConnect()));

            }

            
        }
        function viewPublishedBlog(){
            $sql = "SELECT * FROM blogs WHERE status = 1";
            if($result = mysqli_query($this->dbConnect(),$sql)){
                return $result;
               
            }else{
                die(mysqli_error($this->dbConnect()));

            }
        }
    }
?>