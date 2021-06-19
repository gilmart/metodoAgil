<form method="POST" action="<?php echo base_url().'/signup'?>" > 

<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="" aria-describedby="emailHelp" required>
</div>
<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido" value="" aria-describedby="emailHelp" required>
</div>
<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" value="" aria-describedby="emailHelp" required>
</div>

  <div class="col-md-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="col-md-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="col-md-3">
     <div class="form-check form-check-inline" >
        <input class="form-check-input" type="checkbox" id="estado" name="estado" value="option1"  >
          <label class="form-check-label" for="inlineCheckbox1">Estado Activo</label>
             </div>
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
