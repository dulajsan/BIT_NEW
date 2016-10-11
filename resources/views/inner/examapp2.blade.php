@extends('layouts.app')
@section('content')
<div class="container">
 <form class="form-horizontal" role="form">

 
    <div class="form-group">
	 
	  <label class="control-label col-sm-2" for="email">first preference</label>
      <div class="col-sm-10">
         <select class="form-control" id="sel1">
		    <option>--select--</option>
			<option>Jaffna</option>
			<option>Colombo</option>
			<option>Jaffna</option>
			<option>Galle</option>
			<option>Kandy</option>
		  </select>
     </div>

    </div>
	
	 <div class="form-group">
	  <label class="control-label col-sm-2" for="email">Second preference</label>
      <div class="col-sm-10">
         <select class="form-control" id="sel1">
		    <option>--select--</option>
			<option>Jaffna</option>
			<option>Colombo</option>
			<option>Jaffna</option>
			<option>Galle</option>
			<option>Kandy</option>
		  </select>
     </div>
    </div>
	
	 <div class="form-group">
	  <label class="control-label col-sm-2" for="email">Third preference</label>
      <div class="col-sm-10">
         <select class="form-control" id="sel1">
		    <option>--select--</option>
			<option>Jaffna</option>
			<option>Colombo</option>
			<option>Jaffna</option>
			<option>Galle</option>
			<option>Kandy</option>
		  </select>
     </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">&nbsp;</label>
      <div class="col-sm-10">          
         <label class="radio-inline"><input type="radio" name="optradio">Self study</label>
		<label class="radio-inline"><input type="radio" name="optradio">Private institution</label>
		<label class="radio-inline"><input type="radio" name="optradio">private </label> 
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">From</label>
      <div class="col-sm-4">          
         <input type="date" class="form-control"/>
      </div>
	  
	  <label class="control-label col-sm-2" for="pwd">To</label>
      <div class="col-sm-4">          
         <input type="date" class="form-control"/>
      </div>
    </div>
	
	 <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Institute:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
	
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection