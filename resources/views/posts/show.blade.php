@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">  
        </div>
   
        <div class="col-4">
          <div class="d-flex align-items-center">
                <div class="pr-3">
                  <a href="/profile/{{ $post->user->id }}">
                    <img src="{{ $post->user->profile-> profileImage() }}" 
                    class="rounded-circle w-100" 
                    style="max-width:40px"></a>
                </div>
                <div>
                     <h3 class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        {{ $post->user->userName }}</a>

                        <a href="#" class="pl-3" style="font-size:20px;">Follow</a>
                     </h3>
                </div>
          </div>
            <hr>
            <p class="pr-5"><span class="font-weight-bold">
              <a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->userName }}</a>
            </span>
            {{ $post->caption }}</p>
        </div>
    </div>
  </div>
@endsection
