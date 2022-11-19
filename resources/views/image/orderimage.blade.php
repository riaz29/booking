@extends('layouts.app')
@section('content')
    {{-- <div class="container">
    <div class="row">
        <h3>Title : {{ $title}}</h3>
        <h3>Chasis : {{ $chasis }}</h3>
        <div class="col mt-3">
            @foreach ($images as $item )
            <img src="{{ URL::to($item)}}"  class="img-fluid" style=" width:500px; height:350px;" >
           @endforeach
        </div>
    </div>
    </div>    --}}
<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row"> 
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Images!</h1>
        </div>
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-5">
                <div class="card-body">
                <h3 class="text-center">Image Records</h3>
                <br>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-12">
                            <div class="h5 mb-0 text-gray-800">
                                {{-- @foreach ($title as $title )
                                    <h3>Title : {{ $title}}</h3>
                                    <br>
                                @endforeach --}}
                                <ul class="list-group popup-gallery">
                                    <div class="row">
                                        
                                            @foreach ($image as $item )
                                            <div class="col">
                                                <a href="{{ URL::to($item)}}"><img src="{{ URL::to($item)}}" width="400" height="300"></a>
                                                <br>
                                            </div>
                                            @endforeach
                                            
                                    </div>
                                    <br>
                                    <div class="row">
                                        @foreach ($title as $title )
                                            <div class="col">
                                                <h3>Title : {{ $title}}</h3>
                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        {{-- <h3>Title : {{ $title}}</h3>
        <h3>Chasis : {{ $chasis }}</h3>
        <div class="popup-gallery">
            @foreach ($images as $item )
            <a href="{{ URL::to($item)}}"><img src="{{ URL::to($item)}}" width="300" height="200"></a>
            @endforeach
         </div> --}}

    <script>
        $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
    </script>
@endsection        