@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Create About Us</h1>

   <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
       
       <div class="row">
           <div class="col-md-6">
               <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" class="form-control" id="title" name="title" required>
               </div>

               <div class="mb-3">
                   <label for="subtitle" class="form-label">Subtitle</label>
                   <input type="text" class="form-control" id="subtitle" name="subtitle">
               </div>

               <div class="mb-3">
                   <label for="description" class="form-label">Description</label>
                   <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
               </div>
           </div>

           <div class="col-md-6">
               <div class="mb-3">
                   <label for="mission" class="form-label">Mission</label>
                   <textarea class="form-control" id="mission" name="mission" rows="3"></textarea>
               </div>

               <div class="mb-3">
                   <label for="vision" class="form-label">Vision</label>
                   <textarea class="form-control" id="vision" name="vision" rows="3"></textarea>
               </div>

               <div class="mb-3">
                   <label for="image" class="form-label">Image</label>
                   <input type="file" class="form-control" id="image" name="image">
               </div>
           </div>
       </div>

       <button type="submit" class="btn btn-success">Save</button>
       <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Back</a>
   </form>
</div>

@push('scripts')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace('description');
   CKEDITOR.replace('mission');
   CKEDITOR.replace('vision');
</script>
@endpush
@endsection