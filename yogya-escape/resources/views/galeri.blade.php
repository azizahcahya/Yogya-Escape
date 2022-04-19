@extends('layouts.main')

@section('bootstrap')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('styling')
  <link rel="stylesheet" href="/css/galeri.css">
@endsection


@section('container')

<br><br>

<div class="container">
  @foreach ($posts as $key => $post)
    @if ($key % 3 == 0)
        @php echo '<div class = "row">';@endphp

    @endif
    @php echo "<div class='col'>
          <figure class='figure'>";
    @endphp
            <img src='{{ asset('storage/' . $post->image) }}' class='figure-img img-fluid rounded-lg' alt='keratonYogya'>
            <figcaption class='figure-caption'> {{$post->nama}} </figcaption>
            <p class="ms-3 mt-3">{{$post->lokasi}}</p>
            <a href='/articles/{{$post->id}}'>
              @php echo "<button type='button' class='btn btn-success ms-2'>Read More</button></a>
          </figure>
        </div> ";
    @endphp
    @if ($key % 3 == 2)
        @php echo '</div>';@endphp
    @endif
  @endforeach
</div>
@endsection