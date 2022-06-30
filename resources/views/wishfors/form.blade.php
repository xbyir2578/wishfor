{!! Form::open(['route' => 'wishfor.store']) !!}

<form method="POST" action="https://amazonaws.com/wishfor">

    <div class="form-group">
            <!--<input type="url" class="form-control" id="exampleFormControlInput1" placeholder="URL">-->
                <input class="form-control" placeholder="URL" id="exampleFormControlInput1" name="url" type="text"> 
        
            <!--<input type="content" class="form-control" id="exampleFormControlInput1" placeholder="Item">-->
                <textarea class="form-control" rows="1" placeholder="Item" id="exampleFormControlInput1" name="content" cols="50"></textarea>
            
            <div class="text-right">        
                <input class="btn btn-info btn-lg" type="submit" value="Post">
            </div>
    </div>
</form>