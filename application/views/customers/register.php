<?php echo validation_errors();?>

<div class="container">
<h4> Sign Up </h4>
</div>

<div class="container">


<?php echo form_open('customers/register');?>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name = "firstname" placeholder = "First Name" >
    </div>

    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name = "lastname" placeholder = "Last Name" >
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name = "email" placeholder = "Email" >
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name = "username" placeholder = "Username" >
    </div>

    <div class="form-group">
        <label>Zip Code</label>
        <input type="text" class="form-control" name = "zipcode" placeholder = "Zip Code" >
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name = "password" placeholder = "Password" >
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name = "password2" placeholder = "Confirm Password" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>





</div>
