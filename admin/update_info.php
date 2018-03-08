<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cravings | Admin - Update Cake Info</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    <style media="screen">
      .pageBtn {
        font-size: 20px;
      }
      a:link, a:visited {
      background-color: #cccc00;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      }
      a:hover {
          background-color: #669900;
      }
      a.active{
        background-color: #669900;
      }
    </style>
  </head>
  <body>
    <?php
    include ('../php/config/db_config.php');

    $query = "select * from cravings_test_cake_details where status = 'active'";
    $result = $conn->query($query);
    $cake_count = mysqli_num_rows($result);
    $cake_count = ceil($cake_count/30);
    if(isset($_GET['page'])){
      $page = (int) $_GET['page'];
    }
    else {
      $page= 1;
    }
    if($page == 1){
      $limit = 0;
    }
    else {
      $limit = $page*30-30;
    }

    $query = "select * from cravings_test_cake_details where status = 'active' LIMIT $limit, 30";
    $result = $conn->query($query);
    ?>
    <div class="table-responsive">


    <table class="table table-hover white-bg">
      <tr>
        <th>Cake ID</th>
        <th>Cake Image</th>
        <th>title</th>
        <th>description</th>
        <th>Update</th>
      </tr>
    <?php
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
          <tr>
            <td> <?php echo $row['cake_id'] ?> </td>
            <td> <img src="../<?php echo $row['location'] ?>" alt="cake" height=200px> </td>
            <td> <input type="text" id="<?php echo $row['cake_id'] ?>-title" name="<?php echo $row['cake_id'] ?>-title" value="<?php echo $row['title'] ?>"> </td>
            <td> <textarea name="<?php echo $row['cake_id'] ?>-description" id="<?php echo $row['cake_id'] ?>-description"  rows="3" cols="40"><?php echo $row['description'] ?></textarea> </td>
            <td> <button type="button" class="btn btn-default" name="<?php echo $row['cake_id'] ?>-button" onclick="update_cake(<?php echo $row['cake_id'] ?>)">UPDATE</button> </td>
          </tr>
        <?php
      }
    }
    echo "</table></div>";
    echo "<div class='pageBtn center white-bg'>";       //Navigation buttons
    echo "<p>Page ".$page." of ".$cake_count;
    echo "</p><br>";
    if($page>1)
         echo "<a href=update_info.php?page=".($page-1)."><< Prev</a>"." ";
    for($pageIndex=1;$pageIndex<=$cake_count;$pageIndex++){
        if ($pageIndex==$page)
             echo "<a href='' class=active>".$pageIndex."</a> ";
        else
             echo "<a href='update_info.php?page=".$pageIndex."'>".$pageIndex."</a> ";
        }
    if($page<$cake_count)
        echo "<a href=update_info.php?page=".($page+1).">Next >></a>";

    echo"</div>";
    ?>
    <script src="../js/jquery.3.3.1.min.js" ></script>
    <script src="../js/sweetalert.min.js" ></script>
    <script type="text/javascript">
      function update_cake(cake_id)
      {

        var title = $('#'+cake_id+'-title').val();
        var description = $('#'+cake_id+'-description').val().trim();
        var update = 1;
        if(title =='')
        {
          alert("Please enter the details");
          update = 0;
        }

        if(update)
        {
          var url = "submit_update_info.php";

          $.ajax({
           type: "POST",
           url: url,
           data: {
             cake_id : cake_id,
             title : title,
             description : description
           },
           success: function(data)
           {
             data = JSON.parse(data);
             console.log(data);
             swal(data.message,'',data.state);
           }
         });
        }

      }
    </script>
  </body>
</html>
