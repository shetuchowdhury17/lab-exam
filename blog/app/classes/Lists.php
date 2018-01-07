<?php


namespace App\classes;


class Lists
{
    private function dbConnection()
    {
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'blog';
        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }
    public function saveBlogInfo($data)
    {
        $sql = "INSERT INTO lists (blog_title, author_name, description, states) VALUE ('$data[blog_title]', '$data[author_name]', '$data[description]', '$data[states]')";
        if(mysqli_query(Lists::dbConnection(), $sql))
        {
            $message = "Blog info save successfully";
            return $message;
        }
        else
        {
            die('Query problem'.mysqli_error(Lists::dbConnection()));
        }
    }
    public function getAllInfo()
    {
        $sql = "SELECT * FROM lists";
        if (mysqli_query(Lists::dbConnection(), $sql))
        {
            $queryResult = mysqli_query(Lists::dbConnection(), $sql);
            return $queryResult;
        }
        else
        {
            die('Query problem'.mysqli_error(Lists::dbConnection()));
        }
    }

}