<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="submit_upload_file.php" method="post" id="photo_form" enctype="multipart/form-data" ng-app="MyApp1" ng-controller="MyController">
  <table class="rates-table">
      <tr>
        <td>
          Cake type:
        </td>
          <td>
              <div class="select">
                  <select name="cake_type" id="cake_type" ng-model="feed.drop_pick" ng-options="template.value as template.name for template in feed.picks">
                  </select>
               </div>
          </td>
        </tr>
        <tr>
          <td>
            Cake Sub type:
          </td>
          <td>
              <div class="select">
                  <select name="cake_subtype" id="cake_subtype" ng-model="feed.drop_select" ng-options="template.sub_type as template.sub_type for template in feed.drops | filter: {'type' : feed.drop_pick}" >
                  </select>
               </div>
          </td>
      </tr>
      <tr>
        <td>
          Cake title:
        </td>
        <td>
          <input type="text" name="cake_title" id="cake_title" required>
        </td>
      </tr>
      <tr>
        <td>
          Cake Price (per KG):
        </td>
        <td>
          <input type="text" name="cake_price" id="cake_price" required>
        </td>
      </tr>
      <tr>
        <td>
          Select image to upload:
        </td>
        <td>
          <input type="file" name="fileToUpload" id="fileToUpload" required>
        </td>
      </tr>
  </table>


    <input type="submit" value="Upload Image" name="submit">
</form>

<script src="../js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="../js/angular.min.js"></script>
<script type="text/javascript">
var MyApp=angular.module('MyApp1',[])
MyApp.controller('MyController', function($scope) {
$scope.feed = {};

//pick up locations
$scope.feed.picks = [
{'name': 'Anniversary',
'value': 'Anniversary'},
{'name': 'Baptism',
'value': 'Baptism'},
{'name': 'Birthday',
'value': 'Birthday'},
{'name': 'Communion',
'value': 'Communion'},
{'name': 'Wedding',
'value': 'Wedding'},
{'name': 'Adult',
'value': 'Adult'},
{'name': 'Other',
'value': 'Other'}
];

//drop locations
$scope.feed.drops = [
    {
      "type": "Anniversary",
      "sub_type": "25th Anniversary",
      "location": "images/cakes/anniversary/25-anniversary/"
    },
    {
      "type": "Anniversary",
      "sub_type": "50th Anniversary",
      "location": "images/cakes/anniversary/50-anniversary/"
    },
    {
      "type": "Anniversary",
      "sub_type": "other",
      "location": "images/cakes/anniversary/other/"
    },
    {
      "type": "Baptism",
      "location": "images/cakes/baptism/"
    },
    {
      "type": "Birthday",
      "sub_type": "1st Birthday",
      "location": "images/cakes/birthday/1-birthday/"
    },
    {
      "type": "Birthday",
      "sub_type": "21st Birthday",
      "location": "images/cakes/birthday/21-birthday/"
    },
    {
      "type": "Birthday",
      "sub_type": "50th Birthday",
      "location": "images/cakes/birthday/50-birthday/"
    },
    {
      "type": "Birthday",
      "sub_type": "football",
      "location": "images/cakes/birthday/football/"
    },
    {
      "type": "Birthday",
      "sub_type": "Kids",
      "location": "images/cakes/birthday/kids/"
    },
    {
      "type": "Birthday",
      "sub_type": "other",
      "location": "images/cakes/birthday/other/"
    },
    {
      "type": "Communion",
      "location": "images/cakes/communion/"
    },
    {
      "type": "Wedding",
      "location": "images/cakes/wedding/"
    },
    {
      "type": "Adult",
      "location": "images/cakes/adult/"
    },
    {
      "type": "other",
      "location": "images/cakes/other/"
    }
  ];

//Setting first option as selected in configuration select
$scope.feed.drop_pick = $scope.feed.picks[0].value;
$scope.feed.drop_select = $scope.feed.drops[0].sub_type;
});
</script>

<script type="text/javascript">
$("#photo_form").submit(function(e) {

  var cake_type = $('#cake_type').find(":selected").text();
  var cake_subtype = $('#cake_subtype').find(":selected").text();
  var cake_title = $('#cake_title').val();
  var cake_price = $('#cake_price').val();

 console.log(cake_type);
 console.log(cake_subtype);
 console.log(cake_title);
 console.log(cake_price);

if((cake_type == 'Anniversary' || cake_type == 'Birthday') && (cake_subtype == ''))
{
  alert("Please select a cake sub-type");
  $('#cake_subtype').focus();
  e.preventDefault();
}
if(!Checkfiles())
{
  e.preventDefault();
}


});
</script>
<script type="text/javascript">
function Checkfiles()
  {
      var file = document.getElementById('fileToUpload');
      var fileName = file.value;
      var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

  if(ext =="PNG" || ext=="png" || ext =="JPG" || ext=="jpg" || ext =="JPEG" || ext=="jpeg")
  {
      return true;
  }
  else
  {
      alert("Upload jpg or png Images only");
      return false;
  }
  }
</script>
</body>
</html>
