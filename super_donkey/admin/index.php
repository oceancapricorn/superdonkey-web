<?php 
session_start();
if ( !$_SESSION['logged_in'] ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: login-system/error.php");    
}

require_once '../../models/DBConnectModel.php';  
require_once '../../models/BarItemsModel.php';  
require_once '../../models/BarCategoriesModel.php';  

/*$barItemsModel = new BarCategoriesModel();
$salateItems = $barItemsModel->getAllSalateItems();
$sokoviItems = $barItemsModel->getAllSokoviItems();
$smoothiesItems = $barItemsModel->getAllSmoothiesItems();
// not used for now


*/

$obkat = new BarCategoriesModel();
$kat = $obkat -> getBarCategories();


$obitem = new BarItemsModel();
$itm = $obitem -> getAllItems();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Complete Bootsrap 4 Website Layout</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		

	</head>
	<body>

		<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Super Donkey</a>
        </div>
        <div  class="navbar-collapse collapse navbar-right">
        	<ul class="nav navbar-nav">
         <li class="nav-item">
							<a class="nav-link" href="login-system/logout.php">Logout</a>
						</li>
					</ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Izmena kategorija <button class="btn btn-success" onClick="OtvoriModalCat(0)">+</button></h3>
						<table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center"><thead><tr><th>Naziv</th><th>Opis</th><th></th><th></th></tr></thead><tbody> 
						<?php 
				      foreach($kat as $item) { ?>
				        <tr>
				        <th><?php echo $item['cat_title']?></th>
				        <th><?php echo $item['cat_desc']?></th>
				        <th><button class='btn btn-success' onClick="OtvoriModalCat(<?php echo $item['id']?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></th>
				        <th><button class='btn btn-danger' onClick="DelCat(<?php echo $item['id']?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></th>
				        </tr>
				            <?php }?>
				        </tbody>
				    </table>
				</div>
				<div class="col-md-6">
					<h3>Izmena artikala <button class="btn btn-success" onClick="OtvoriModalItem(0)">+</button></h3>

					<table class="table table-striped table-bordered table-hover table-condensed text-uppercase text-center"> <thead><tr><th>Naziv</th><th>Opis</th><th>Cena</th><th></th><th></th></tr></thead><tbody> 
						<?php 
				      foreach($itm as $item) { ?>
				        <tr>
				        <th><?php echo $item['title']?></th>
				        <th><?php echo $item['description']?></th>
				        <th>RSD <?php echo $item['price']?></th>
				        <th><button class='btn btn-success' onClick="OtvoriModalItem(<?php echo $item['id']?>)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button></th>
				        
				        <th><button class='btn btn-danger' onClick="DelItem(<?php echo $item['id']?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></th>
				        </tr>
				            <?php }?>
				        </tbody>
				    </table>
				</div>
			</div>




<!-- Modal -->
<div class="modal fade" id="ModalEditCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Izmena kategorije</h4>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="ModalEditCatID">
        <input type="text" class="form-control" id="ModalEditCatTitle">
        <textarea class="form-control" id="ModalEditCatDesc"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="SacuvajModalCat()">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ModalEditItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Izmena itema</h4>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="ModalEditItemID">
        <input type="text" class="form-control" id="ModalEditItemTitle">
        <select class="form-control" id="ModalEditItemKategorija">
        <?php 
        	foreach($kat as $item) { ?>
        	<option value=<?php echo $item['id']?>><th><?php echo $item['cat_title']?></option>
        		<?php }?>
        </select>
        <input type="text" class="form-control" id="ModalEditItemPrice">
        <textarea class="form-control" id="ModalEditItemDesc"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="SacuvajModalItem()">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>

	function OtvoriModalCat(id){

		if (id==0){
			ResetKat()
			$("#ModalEditCat").modal("show")
			$("#ModalEditCatID").val(id)
			return
		}
		 $.ajax({
			  type: "POST",
			  url: "ajax/getDataCat.php",
			  data: { id: id }
			}).done(function( msg ) {
			  if (msg.length>0){
			  	var tmp = msg.split("||")
			  	var title = tmp[0]
			  	var desc = tmp[1]

			  	$("#ModalEditCatTitle").val(title)
			  	$("#ModalEditCatDesc").val(desc)
			  	$("#ModalEditCatID").val(id)
			  	$("#ModalEditCat").modal("show")
			  }
			});    
		
	}

	function SacuvajModalCat(){
		var title = $("#ModalEditCatTitle").val()
		var desc = $("#ModalEditCatDesc").val()
		var id = $("#ModalEditCatID").val()

		if (title.length == 0) {
			alert("Morate uneti Title")
			return
		}


		 $.ajax({
		  type: "POST",
		  url: "ajax/saveDataCat.php",
		  data: { 
		  	title: title,
		  	id:id,
		  	desc:desc
		   }
		}).done(function( msg ) {
			console.log(msg)
		  alert( "Data Saved "  );
		  $("#ModalEditCat").modal("hide")
		  window.location.replace("index.php");
		});    

	}



	function OtvoriModalItem(id){
		if (id==0){
			ResetItem()
			$("#ModalEditItem").modal("show")
			$("#ModalEditItemID").val(id)
			return
		}
		 $.ajax({
			  type: "POST",
			  url: "ajax/getDataItem.php",
			  data: { id: id }
			}).done(function( msg ) {
			  if (msg.length>0){
			  	
			  	var tmp = msg.split("||")
			  	var title = tmp[0]
			  	var desc = tmp[1]
			  	var id_cat = tmp[2]
			  	var price= tmp[3]



			  	$("#ModalEditItemTitle").val(title)
			  	$("#ModalEditItemDesc").val(desc)
			  	$("#ModalEditItemID").val(id)
			  	$("#ModalEditItemKategorija").val(id_cat)
			  	$("#ModalEditItemPrice").val(price)
			  }
			});    
		$("#ModalEditItem").modal("show")
	}



	function SacuvajModalItem(){
		var title = $("#ModalEditItemTitle").val()
		var desc = $("#ModalEditItemDesc").val()
		var id = $("#ModalEditItemID").val()
		var kat = $("#ModalEditItemKategorija").val()
		var price = $("#ModalEditItemPrice").val()

		console.log(price)

		if (title.length == 0) {
			alert("Morate uneti Title")
			return
		}

		 $.ajax({
		  type: "POST",
		  url: "ajax/saveDataItem.php",
		  data: { 
		  	title: title,
		  	id:id,
		  	desc:desc,
		  	kat:kat,
		  	price:price
		   }
		}).done(function( msg ) {
			console.log(msg)
		  alert( "Data Saved "  );
		  $("#ModalEditItem").modal("hide")
		  window.location.replace("index.php");
		});    

	}


	function DelCat(id){
		var c= confirm("Da li zelite da obrisete ovu kategoriju?")
		if(!c) return
		$.ajax({
		  type: "POST",
		  url: "ajax/delDataCat.php",
		  data: { 
		  	id:id
		   }
		}).done(function( msg ) {

		  alert( "Kategorija obrisana "  );
		  $("#ModalEditItem").modal("hide")
		  window.location.replace("index.php");
		});    

	}


	function DelItem(id){
		var c= confirm("Da li zelite da obrisete ovaj item?")
		if(!c) return

		$.ajax({
		  type: "POST",
		  url: "ajax/delDataItem.php",
		  data: { 
		  	id:id
		   }
		}).done(function( msg ) {
			console.log(msg)
		  alert( "Item obrisana "  );
		  $("#ModalEditItem").modal("hide")
		  window.location.replace("index.php");
		});    

	}


	function ResetKat(){
		$("#ModalEditCatTitle").val("")
		$("#ModalEditCatDesc").val("")
		$("#ModalEditCatID").val("")
	}

	function ResetItem(){
		$("#ModalEditItemTitle").val("")
		$("#ModalEditItemDesc").val("")
		$("#ModalEditItemID").val("")
		$("#ModalEditItemKategorija").val(1)
		$("#ModalEditItemPrice").val(0)
	}
</script>