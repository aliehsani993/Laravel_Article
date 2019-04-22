<meta charset="UTF-8">
@extends('Master')
@section('postwriter')

    @if($articles->isEmpty())

        <div class="alert alert-info">
            <strong>متاسفانه موردی یافت نشد!</strong>
        </div>

    @endif

    @foreach($articles as $article)


        <div class="card mb-4">
            <img  class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body ">
                <ul class="list-inline green text-right">

                    @foreach($article->category as $category)
                        <a href="{{route('article.filtercategory.get',['id'=>$category->name])}}"> <li class="list-inline-item ">{{$category->name}} - </li></a>

                    @endforeach

                </ul>
                <h2 id="text-right" class="card-title">{{$article->title}}</h2>

                <a href="{{route('article.edite.get',["id"=>$article->title])}}"><h6  class="card-title">ویرایش</h6></a>
                <a href="{{route('dell',["id"=>$article->title])}}"><h6  class="card-title">حذف</h6></a>

                <p id="text-right" class="card-text">{{$article->summary}}</p>
                <a href="{{route('article.single.get',['title'=>$article->title])}}" class="btn btn-primary"> مطالعه مقاله &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                {{$article->created_at}}
                <a href="{{route('article.filterwriter.get',["id"=>$article->user->id])}}">  {{$article->user->name }}: نویسنده </a>
            </div>
        </div>
    @endforeach
@endsection