@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
            </div>
                <div class="row">

                    <div class="col-6 offset-3 mt-3 mb-5">
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle w-100" style ="max-width:40px;">
                            </div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username  }}</span>
                                </a>
                                <span class="pl-2">{{ $post->caption }}</span>
                            </div>
                        </div>


                    </div>

                </div>



        @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center pt-5">
                    {{ $posts->links() }}
                </div>
            </div>
    </div>
@endsection
