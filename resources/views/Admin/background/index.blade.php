@extends('layouts.app')
@section('admin')

    <div class="container" style="margin:50px 100px 50px 100px ; ">
        <div class="row adminmobile">
            <div class="col-xl-5">

                <form action="{{route('Background.Update',$filename)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
{{--                        <label for="image" class="form-label">Mobile Banner Background Picture</label>--}}
                        <label for="image" class="form-label">{{$label}}</label>
                    </div>

                    <input class="col-4" id="image" name="image" type="file">
                    <button type="submit" class="btn btn-primary mb-4">Update</button>

                </form>
                <img id="showImageback" src="{{asset('frontend/img/'.$filename)}}" style="max-width:450px;max-height:300px;padding: 30px"  alt="">
            </div>
            <div class="col-xl-7 align-items-center bigone">
                <img src="{{asset('frontend/img/'.$filename)}}" style="max-height: 800px; max-width: 900px; " />
            </div>
        </div>



    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function readURLback(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showImageback').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#image").change(function() {
            readURLback(this);
        });
    </script>
@endsection
