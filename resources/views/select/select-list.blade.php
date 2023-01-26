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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$('#nation_id').change(function($){
    var tid = $(this).val();;
    alert(tid);
    if(tid){
        
    }
});
});
</script>



@endsection





