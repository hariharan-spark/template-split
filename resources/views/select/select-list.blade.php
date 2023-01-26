@extends('layouts.app')

@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Select</h4>
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <select class="form-control form-control-sm" name="nation_id" id="nation_id">
                                        <option value="1">Admin</option>
                                        <option value="2">Restaurent</option>
                                    </select>
                                </div>
                                <div class="form-group province">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">
            $(document).ready(function(){
            $('#nation_id').change(function(){
                var tid = $(this).val();
                var op=" ";

                if(tid){
                    $.ajax({
                    type:"get",
                    url:"{{url('/select-restaurant')}}/"+tid,
                    success:function(res)
                    {
                            $(".province").empty();
                            if(res)
                            {
                            let html = '<select class="form-control form-control-sm "><option>--Select Res</option>'
                                $.each(res,function(key,value){
                                    html += '<option value='+key+'>'+value.name+'</option>';
                                });
                                html += '</select>';
                                $(".province").append(html);
                            }
                    }
                    });
                }
            });
            });
</script>
@endsection





