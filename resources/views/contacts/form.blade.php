<input type='hidden' name='_token' value="{{csrf_token()}}" /><br />
<div class="form-group">
    <label for="name" class="col-sm-2">Name</label>
    <div class="col-sm-12">
        <input type='text' class="form-control" id="name" name="name" minlength="5" placeholder="Name" value="{{@$contact->name}}" />
    </div>
</div>
<div class="form-group">
    <label for="contact" class="col-sm-2">Contact</label>
    <div class="col-sm-12">
        <input type='string' class="form-control" id="contact" name="contact" placeholder="Contact" value="{{@$contact->contact}}" />
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2">E-mail</label>
    <div class="col-sm-12">
        {{@$contact->error ?? ''}}
        <input type='email' class="form-control" id="email" name="email" placeholder="E-mail" value="{{@$contact->email}}" />
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type='submit' class="btn btn-primary" >Save</button>
    </div>
</div>
