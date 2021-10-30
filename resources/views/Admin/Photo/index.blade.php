@extends('layouts.app')
@section('admin')


    <section class="container">




    <button type="button" class="btn btn-primary mybutton" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add new photo
    </button>
{{--<div class="btn   btn-adn  mt-5">--}}
{{--    <a href="#" class="text-decoration-none font-bold"  data-toggle="modal" data-target="#modaldemo3">اضافه کردن عکس جدید</a>--}}

{{--</div>--}}




                    <table   class="table table-dark table-striped table-hover table"  >
                        @csrf
                        <thead>
                        <tr class="text-center orange">
                            <th class="text-right" >No.</th>
                            <th class="text-right">Title</th>
                            <th class="text-right">Category</th>
                            <th class="text-right">Image</th>
                            <th class="text-right">Description</th>
                            <th class="text-right">Added on</th>
                            <th class="text-right"><i class="fa fa-edit"></i></th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photo as $key=>$row)
                            <tr>
                                <td class="text-center">{{ $photo->firstItem()+$loop->index }}</td>
                                <td class="hidden">{{$row->id }}</td>
                                <td class="text-center">{{ $row->title }}</td>
                                <td class="text-center">{{ $row->category }}</td>


                                <td height="50px;" width="160px;" class="text-center"> <img src="{{ URL("backend/img/photos/thumbnails/".$row->thumbnail) }}" style="max-height:120px " > </td>
                                <td>{{Str::limit($row->description, 40)}}</td>
                                <td class="hidden">{{ $row->image }}</td>
                                <td class="text-center">{{ $row->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                   <button class="btn btn-sm btn-info editingTRbutton" type="button"  data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                    <a href="{{ URL::to('delete/photo/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{$photo->links()}}
               <!-- table-wrapper -->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titleadd" id="exampleModalLabel">Adding new Photo </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form method="post" action="{{route('Photo.Store')}}" enctype="multipart/form-data" id="myForm" onsubmit="return validateForm()" >
                            @csrf
                    <div class="form-group col-xl-11">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" name="title">
                        <label for="category">Category</label>
                        <select id="category" name="category">
                            <option value="Portrait">Portrait</option>
                            <option value="Photo Manipulation">Manipulation photos</option>
                            <option value="Product Photography">Commercial Photography</option>
                            <option value="Music">Music Covers</option>
                        </select><br>
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="This is the description of the " name="description">

                    </div>


                    <div class="form-group col-xl-7">
                        <label for="image">Photo</label>
                        <img id="showImage" src=""  style="max-width: 380px; max-height: 290px"   alt="">

                        <input type="file" id="img" class="form-control" aria-describedby="emailHelp"  name="image" required >

                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <!-- modal edit table-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Edit</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action=""  enctype="multipart/form-data"  method="POST" id="ModalForm" onsubmit="return validateFormedit()">
                        {{csrf_field()}}
                        <input type="hidden" id="editId" value="">
                        <div class="form-group col-xl-11">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="edittitle" placeholder="title">
                        </div>



                        <div class="form-group col-xl-11">
                            <label for="category">Category</label>
                            <select class="form-control" id="editcategory" name="category">
                                <option value="Portrait">Portrait</option>
                                <option value="Product Photography">Commercial Photography</option>
                                <option value="Photo Manipulation">Manipulation photos</option>
                                <option value="Music">Music Covers</option>
                            </select>
                            <input type="hidden" id="oldimage" name="oldimage"  value="">

                            <label for="showImageedit" style="padding-right: 20px">Current photo</label>
                            <img id="showImageedit" src=""  style="max-width: 250px; max-height: 160px"  alt=""><br>
                                <label for="newimage" style="padding-right: 20px">New photo</label>
                                <img id="showImagenew" src="" style="max-width: 250px; max-height: 160px"  alt="">

                            <div class="form-group col-xl-7">



                                {{--                        <input type="file" id="img" class="form-control" aria-describedby="emailHelp"  name="image" required oninvalid="this.setCustomValidity('Please select the photo')">--}}
                                <input type="file" id="imgnew" class="form-control" aria-describedby="emailHelp"  name="newimage" >

                            </div>
                            <div class="form-group col-xl-11">
                                <label for="editdescription">Description</label>
                                <input type="text" name="description" class="form-control" id="editdescription" placeholder="description">
                            </div>
                            <input type="checkbox" id="renew" name="renew" >
                            <label for="renew">Renew</label><br><br>
{{--                            <label for="image">عکس</label>--}}
{{--                            <input type="text"  name="image" class="form-control" id="editimage"  >--}}

                        </div>
{{--<!--                        --><?php--}}
{{--//                        $random = $_POST["editimage"];--}}
{{--//                        echo $random;--}}
{{--//                        ?>--}}
                        <div class="modal-footer">
                            <a  class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                            <button type="submit"  id="saveModalButton" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal edit table-->
    </section>



@endsection

@section('scripts')
    @parent
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#img").change(function() {
            readURL(this);
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".modal").on("hidden.bs.modal", function() {
                $('#showImagenew').attr('src', '');
            });
        });
    </script>
    <script>
        function readURLd(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showImagenew').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgnew").change(function() {
            readURLd(this);
        });
    </script>
    <script type="text/javascript">
       function validateForm() {
            var formData = new FormData();
            var file = document.getElementById("img").files[0];

            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp") {
                alert('Please select a valid image file');
                document.getElementById("img").value = '';
                return false;
            }

            var fsize = (file.size / 1024 / 1024).toFixed(4);

            if (fsize > 4 ) {
                alert('Max Upload size is 4MB only');
                document.getElementById("img").value = '';
                $('#showImage').attr('src','');
                return false;
            }
            }
           function validateFormedit() {
           var formDataedit = new FormData();
           var fileedit = document.getElementById("imgnew").files[0];
           formDataedit.append("Filedata", fileedit);
           var tedit = fileedit.type.split('/').pop().toLowerCase();
           if (tedit != "jpeg" && tedit != "jpg" && tedit != "png" && tedit != "bmp") {
               alert('Please select a valid image file');
               document.getElementById("imgnew").value = '';
               return false;
           }
           var fileeditsize = (fileedit.size / 1024 / 1024).toFixed(4);
           if (fileeditsize > 4 ) {
               alert('Max Upload size is 4MB only');
               document.getElementById("imgnew").value = '';
               $('#showImageedit').attr('src','');
               return false;
           }
            return true;
        }
    </script>
{{-- <script type="text/javascript">--}}
{{--        function validateFormEdit() {--}}
{{--            var formDataedit = new FormData();--}}
{{--            var fileedit = document.getElementById("imgnew").files[0];--}}
{{--            var tedit = fileedit.type.split('/').pop().toLowerCase();--}}
{{--            if (tedit != "jpeg" && tedit != "jpg" && tedit != "png" && tedit != "bmp") {--}}
{{--                alert('Please select a valid image file');--}}
{{--                document.getElementById("imgnew").value = '';--}}
{{--                return false;--}}
{{--            }--}}
{{--            var fileeditsize = (fileedit.size / 1024 / 1024).toFixed(4);--}}
{{--            if (fileeditsize > 4 ) {--}}
{{--                alert('Max Upload size is 4MB only');--}}
{{--                document.getElementById("imgnew").value = '';--}}
{{--                $('#showImageedit').attr('src','');--}}
{{--                return false;--}}
{{--            }--}}
{{--            return true;--}}
{{--        }--}}
{{--    </script>--}}
    <script>
        $(function() {
            //Take the data from the TR during the event button
            $('table').on('click', 'button.editingTRbutton',function (ele) {
                //the <tr> variable is use to set the parentNode from "ele
                var tr = ele.target.parentNode.parentNode;

                //I get the value from the cells (td) using the parentNode (var tr)
                var id = tr.cells[1].textContent;
                var title = tr.cells[2].textContent;
                var category = tr.cells[3].textContent;
                var description = tr.cells[5].textContent;
                var image = tr.cells[6].textContent;
                // var phone = tr.cells[4].textContent;
                // var level = tr.cells[5].textContent;

                //Prefill the fields with the gathered information
                $('h5.modal-title').html('Editing Photo : '+title);
                $('#edittitle').val(title);
                $("#editcategory").val(category).attr('Portrait', 'Photo Manipulation','Product Photography','Music');

                // $('#editimage').val(image);
                $('#editdescription').val(description);
                $('#oldimage').val(image);
                $('#showImageedit').attr('src', 'http://127.0.0.1:8000/backend/img/photos/originals/'+image);
                // $('#editPhone').val(phone);
                // $('#editId').val(id);
                // $("#editLevel").val(level).attr('selected', 'selected');

                //If you need to update the form data and change the button link
                $("form#ModalForm").attr('action', 'update/'+id);
                $("a#saveModalButton").attr('href','update/'+id);
            });
        });
    </script>

@endsection
