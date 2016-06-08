<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ads` WHERE CONCAT(`id`, `type`, `price`, `square`, `city_id`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
else {
    $query = "SELECT * FROM `ads`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>