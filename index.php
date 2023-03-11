<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--FOTNS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <script>
    $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"searchresult.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
        });
    });
    </script>
</head>
<body>   
    <div class="container">
        <div class="sidebar">
            <ul>
                <li class="icon"><i class='bx bx-user-circle'></i><label>Profile</label></li>
                <li class="icon"><i class='bx bx-book-alt'></i><label>Book</label></li>
                <li class="icon"><i class='bx bx-search-alt'></i><label>Search</label></li>
                <li class="icon"><i class='bx bx-table'></i><label>Table</label></li>
                <li class="icon"><i class='bx bx-trash'></i><label>Trash</label></li>
            </ul>
        </div>
        <section class="inner-content">
         <nav> 
           <li><i id="menu" class='bx bx-menu-alt-left'></i></li>
         </nav>
         <div class="search-content">
             <div class="container-fluid">       
                <div class="content-wrapper">
                   <div class="container">
                       <div class="row">
                       <div class="col-xs-12">
                           <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
                           <div id="result"></div>
                       </div>
                       </div>  
                   </div>
               </div>
            </div>
         
   <?php
require('connections.php');
$return = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connections, $_POST["query"]);
    $query = "SELECT * FROM tbl_informations
    WHERE usename  LIKE '%".$search."%'
    OR firstname LIKE '%".$search."%' 
    OR surname LIKE '%".$search."%' 
    OR address LIKE '%".$search."%' 
    ";}
else
{
   
    $query = "SELECT * FROM tbl_informations";
}
$result = mysqli_query( $connections, $query);
if(mysqli_num_rows($result) > 0)
{
    $return .='
    <div class="table-responsive">
    <table class="table table bordered">
    <tr>
        <th>ID</th>
        <th>Emp Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created Date</th>
    </tr>';
    while($row1 = mysqli_fetch_array($result))
    {
        $return .= '
        <tr>
        <td>'.$row1["username"].'</td>
        <td>'.$row1["password"].'</td>
        <td>'.$row1["firstname"].'</td>
        <td>'.$row1["surname"].'</td>
        <td>'.$row1["address"].'</td>
        </tr>';
    }
    echo $return;
    }
else
{
    echo 'No results containing all your search terms were found.';
}
?>
</table>
</div>
</div>
        </section>
    </div>
    <script src="index.js"></script>
</body>
</html>