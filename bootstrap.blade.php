@extends('Master')
<div class="row row-1 m-0 p-0 ">
<div class="card col-5 bg-warning m-0 p-0  "  >
<h1 class="card-header bg-danger w-100 m-0 p-0" style=" height: 50px" > هدر</h1>
<div class="card-body" >

    <h6 class="card-subtitle text-muted" > Subtitle</h6 >
</div >
<img src = "alpha.png" alt = "" >
<div class="card-body">
    <p class="card-text" > Text</p >
    <a href = "#" class="card-link" > Link 1 </a >
    <a href = "#" class="card-link" > Link 2 </a >
</div >
</div >
</div>
<div class="form-group" >
<label for="" > </label >
<input type = "email" class="form-control" name = "" id = "" aria - describedby = "emailHelpId" placeholder = "" >
<small id = "emailHelpId" class="form-text text-muted" > Help text </small >
</div >
<label for="inputName" > Input label </label >
<input type = "text" class="form-control is-valid" name = "inputName" id = "inputName" >
<div class="invalid-feedback" >
    Validation message
</div >
<!--TODO: This is for server side, there is another version for browser defaults-->
<div class="container" >
<form >
    <div class="form-group row" >
        <label for="inputName" class="col-sm-1-12 col-form-label" > </label >
        <div class="col-sm-1-12" >
            <input type = "text" class="form-control" name = "inputName" id = "inputName" placeholder = "" >
        </div >
    </div >
    <fieldset class="form-group row" >
        <legend class="col-form-legend col-sm-1-12" > Group name </legend >
        <div class="col-sm-1-12" >

        </div >
    </fieldset >
    <div class="form-group row" >
        <div class="offset-sm-2 col-sm-10" >
            <button type = "submit" class="btn btn-primary" > Action</button >
        </div >
    </div >
</form >
</div>




<div class="row">
    <div class="col-6">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>