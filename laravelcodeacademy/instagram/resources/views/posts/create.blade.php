@extends('layouts.app')
@section('content')
   
<form action="/p" enctype="multipart/form-data" method="POST">
    <div class="container">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add new Post</h1>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Image Caption</label>
                        <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror"  name="caption" value="{{ old('caption') }}" required autocomplete="caption" required>

                        @error('caption')
                                
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label"></label>
                        <input type="file" class="form-control-file" id="image" name="image" required>  
                        @error('image')
                                
                        <span class="invalid-feedback d-block @error('caption') is-invalid @enderror" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                         @enderror  
                    </div>
                    <div class="row pt-4">
                        
                        <input type="submit" class="btn btn-primary" value="Add New Post">
                    
                    </div>
                </div>  
            </div>
    </div>
</form>

@endsection