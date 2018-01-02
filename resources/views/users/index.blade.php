@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#" id="bntone">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="bnttwo">My Interests</a>
      </li>
    </ul>
    <div class="row mt-5" id="text1">
      <div class="col-md-6 offset-md-3 abc">

      </div>
    </div>
    <div class="row mt-5" style="display:none;" id="text2">
      aa
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(function(){
    $('#bntone').on('click',function(){
      $('#text1').show();
      $('#text2').hide();
      $('#bntone').addClass('active');
      $('#bnttwo').removeClass('active');
    });
    $('#bnttwo').on('click',function(){
      $('#text2').show();
      $('#text1').hide();
      $('#bnttwo').addClass('active');
      $('#bntone').removeClass('active');
    });
  });
</script>
@endsection
