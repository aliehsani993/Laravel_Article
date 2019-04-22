@extends('Master')
@section('Article')
    <div class="card mb-4">

        <img  class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <ul class="list-inline green text-right">

                @foreach($article->category as $category)
                    <a href="{{route('article.filtercategory.get',['id'=>$category->name])}}"> <li class="list-inline-item ">{{$category->name}} - </li></a>

                @endforeach

            </ul>
            <h2 id="text-right" class="card-title">{{$article->title}}</h2>

            @if(auth()->check() && (auth()->user()->id == $article->user->id))
                <a href="{{route('article.edite.get',["id"=>$article->title])}}"><h6  class="card-title">ویرایش</h6></a>
                <a href="{{route('dell',["id"=>$article->title])}}"><h6  class="card-title">حذف</h6></a>

            @endif

            <p id="text-right" class="card-text"> {!!  $article->body!!}</p>
            <a href="#" class="btn btn-primary"> اشتراک گذاری  &rarr;</a>
        </div>

        <div class="card-footer text-muted">

            <a href="{{route('article.filterwriter.get',["id"=>$article->user->id])}}">  {{$article->user->name }}: نویسنده </a>
            <br>


        </div>
        @include('Comment')

    </div>
@endsection
