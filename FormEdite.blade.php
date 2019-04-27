@extends('Master')
@section('FormEdite')

    <div class="card">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong> ارسال مقاله</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form action="{{route('article.edite.post',['param'=>$article->title])}}" method="post" class="text-center" style="color: #757575;">
                {!! csrf_field() !!}


                <div class="md-form">
                    <label for="materialContactFormEmail">عنوان مقاله </label>
                    <input value="{{$article->title}}" name="title" type="text" id="materialContactFormEmail" class="form-control">

                </div>

                <!-- Subject -->
                <span><br></span>

                <div class="md-form">
                    <label for="materialContactFormEmail">خلاصه مقاله </label>
                    <input value="{{$article->summary}}" name="title" type="text" id="materialContactFormEmail" class="form-control">

                </div>

                <span><br></span>
                <!--Message-->
                <div class="md-form">
                    <label for="materialContactFormMessage">متن مقاله</label>
                    <textarea name="body" id="materialContactFormMessage" class="form-control md-textarea" rows="10"> {{$article->body}}</textarea>

                </div>


                <!-- Copy -->

                <label for="materialContactFormEmail">انتخاب دسته بندی ها </label>
                <select name="category[]" class="custom-select" multiple>
                    <option selected>شاخه ها</option>


                    @foreach($article->category as $categoriii)
                    @foreach($category as $categor)

                        @if($categor->id == $categoriii->id)
                            <option selected="selected" value={{$categor->id}}>{{$categor->name}}</option>

                        @else
                             <option  value={{$categor->id}}>{{$categor->name}}</option>
                        @endif

                    @endforeach

                    @endforeach






                </select>


                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ارسال</button>

            </form>
            <!-- Form -->

        </div>

    </div>

@endsection