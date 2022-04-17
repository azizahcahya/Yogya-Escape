@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts/{{$post->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Tempat</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $post->nama) }}">
      @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi</label>
        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi',  $post->lokasi) }}">
        @error('lokasi')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="hidden" name="oldImage" value="{{ $post->image }}">
      @if($post->image)
        <img src="{{asset('storage/' . $post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <img class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
     @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        @error('deskripsi')
            <p class="text-danger"> {{ $message }}</p>
        </div>
        @enderror
        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi',  $post->deskripsi) }}">
        <trix-editor input="deskripsi"></trix-editor>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }

  }
</script>
@endsection