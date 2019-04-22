@extends('Master')
@section('formAddTag')
    <div class="card">


        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form action="{{route('category.form.post')}}" method="post" class="text-center" style="color: #757575;">
                {!! csrf_field() !!}




                <!--Message-->
                <div class="md-form">
                    <label for="materialContactFormMessage">نام تگ</label>
                    <input type="text" name="tag" id="materialContactFormMessage" class="form-control md-textarea" rows="10"></input>

                </div>

                    <div class="md-form">
                        <label for="materialContactFormMessage"> توضیحات</label>
                        <textarea name="desc" id="materialContactFormMessage" class="form-control md-textarea" rows="10"></textarea>

                    </div>



                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">ارسال</button>

            </form>
            <!-- Form -->

        </div>

    </div>
@endsection