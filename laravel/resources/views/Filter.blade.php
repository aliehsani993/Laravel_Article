<meta charset="UTF-8">
@extends('Master')
@section('postwriter')

    @if($articles->isEmpty())

        <div class="alert alert-info">
            <strong>متاسفانه موردی یافت نشد!</strong>
        </div>

    @endif

    @foreach($articles as $article)
        <div class="card text-center mb-5">
            <div class="card-header bg-dark">
                <ul class="list-inline green text-right text-center m-0">
                    @foreach($article->category as $category)
                        <a class="btn btn-primary btn-sm" href="{{route('article.filtercategory.get',['id'=>$category->name])}}"> <li class="list-inline-item ">{{$category->name}} </li></a>                                    </li></a>
                    @endforeach
                </ul>
            </div>
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">

                @if(auth()->check() && (auth()->user()->id == $article->user->id))
                    <a href="{{route('dell',["id"=>$article->title])}}" class="badge badge-danger">حذف</a>
                    <a href="{{route('article.edite.get',["id"=>$article->title])}}" class="badge badge-info">ویرایش</a>
                @endif
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text mt-3">{{$article->summary}}</p>
                <a href="{{route('article.single.get',["id"=>$article->title])}}" class="btn btn-primary">مطالعه مقاله </a>
            </div>
            <div class="card-footer text-muted d-flex justify-content-around">
                <a href="#" class="badge badge-secondary "> {{$article->category()->count()}} comments</a>
                {{$article->created_at}}
                <a class="badge badge-warning" href="{{route('article.filterwriter.get',["id"=>$article->user->id])}}">  {{$article->user->name }}  </a>


            </div>

        </div>
    @endforeach


@endsection