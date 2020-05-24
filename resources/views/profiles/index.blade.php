@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/storage/{{$user->profile->image}}" style="height: 140px" class="rounded-circle w-75">
        </div>
        <div class="col-9 pt-5">
            <div class="justify-content-between d-flex align-items-baseline">

               <h1>{{ $user->username  }}</h1>

                @guest

                @else
                    <a href="/p/create">Add a new post</a>
                @endguest

            </div>


            @guest

            @else
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>

            @endguest

                <div class="d-flex">
                <div class="pr-3"><strong>{{$user->posts->count()}}</strong> publications</div>
                <div class="pr-3"><strong>260</strong> abonnés</div>
                <div class="pr-3"><strong>680</strong> abonnements</div>
            </div>
            <div class="pt-3"> <strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="lydiabnaida.sarahah.com">{{$user->profile->url ?? 'N\A'}} </a></div>
        </div>

    </div>
    <div class="row pt-4" >
       @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
