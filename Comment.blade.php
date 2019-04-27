<div class="m-0">

<form action="{{route('comment.post',['id'=>$article->title])}}" method="post">
    {!! csrf_field() !!}
    @if(auth()->check())
        <div class="form-group">
            <label for="comment"></label>
            <br>
            <textarea name="body" class="form-control" rows="5" id="comment"></textarea>
            <input  class="btn btn-success" type="submit" value="ارسال نظر">
        </div>
</form>
@endif



@if(!auth()->check())
    <div class="text-center ">
    <a href="{{url('/login')}}" class="btn btn-info btn-sm border-2 text-center ">   <h6 class="text-center"> برای ثبت نظر باید وارد شوید</h6></a>
    </div>
@endif
@foreach($comments as $comment)
    <!--To Work with icons-->

    @if(($comment->validate==0 && $article->user->id==auth()->user()->id) or $comment->validate==1)
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                            <p class="text-secondary text-center">{{$comment->created_at}}</p>
                        </div>
                        <div class="col-md-10">
                            <p>
                                <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$comment->name}}</strong></a>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                            </p>
                            <div class="clearfix"></div>
                            <p>{{$comment->body}}</p>
                            <p>
                                <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                            </p>
                        </div>
                        @if($comment->validate==0 && $article->user->name==auth()->user()->name)
                            <form method="post" action="{{route('comment.check.comment',['id'=>$comment->id])}}">
                                {!! csrf_field() !!}
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="materialUnchecked" name="ok" value=1>
                                    <label class="form-check-label" for="materialUnchecked">   تایید   </label>
                                    &nbsp &nbsp &nbsp
                                    <input type="radio" class="form-check-input" id="materialUnchecked" name="ok" value=2>
                                    <label class="form-check-label" for="materialUnchecked"> زباله </label>
                                    <br>
                                    <input  class="btn btn-default" type="submit" value=" ثبت">
                            </form>

                    </div>
                    @endif


                </div>

            </div>
        </div>
        </div>
    @endif
@endforeach
</div>
