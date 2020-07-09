<?php
    class Blog{
        public function dbConnect(){
            $link = mysqli_connect('localhost','root','','blog');
            return $link;
        }
        public function addBlog(){
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
    }
?>