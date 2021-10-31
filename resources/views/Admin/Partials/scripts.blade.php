<script src="{{asset('backend/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('backend/js/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script>

    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    toastr.options.positionClass = 'toast-bottom-left';
    switch(type){

        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
