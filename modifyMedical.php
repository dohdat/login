<?php include ("includes/header.php")?>
<?php include ("includes/nav.php")?>
<div class="jumbotron">
   <h1 class="text-center"> Medical Data Screen</h1>
</div>
<div class="container-fluid">
<div class="row">
   <div class="col-md-12">
      <form role="form" class="form">
         <div class="form-group">
            <label for="exampleInputEmail1">
            Code(id):
            </label>
            <input type="email" class="form-control" id="exampleInputEmail1" />
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">
            Full name:
            </label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">
            Abbreviation:
            </label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">
            Description:
            </label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
         </div>
      </form>
   </div>
   <div class="col-md-6">
      <a href="index.php">			 
      <button type="button" class="btn btn-block btn-outline-primary">
      Save
      </button>
      </a>
   </div>
   <div class="col-md-6">
      <a href="index.php">			 
      <button type="button" class="btn btn-block btn-outline-primary">
      Cancel
      </button>
      </a>
   </div>
</div>
<?php include ("includes/footer.php")?>