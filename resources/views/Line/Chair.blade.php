@extends('Line.master')
@section('content')
<div class="card text-center">

    <div class="card-body">
        <div class="card-header">
            MÀN HÌNH
        </div>
        <br>
        <br>
        <div class="container">
            
            <div class="row align-items-start" id="chair">
                @foreach ($chair as $ch)
              <div class="col-3">
                <ol class="nav-item" >
                    @if ($ch->Status==1)
                    <button type="button" name ="{{$ch->ID}}" class="btn btn-danger" style="width: 50%" value="{{$ch->ID}}" onclick="red()">Ghế số {{$ch->ID}}</button>
                    @else
                    <button type="button" name ="{{$ch->ID}}" class="btn btn-primary" style="width: 50%" value="{{$ch->ID}}" >Ghế số {{$ch->ID}}</button>
                    @endif 
                </ol>
              </div>
              @endforeach
            </div>
                    <br>
        </div>
        <br>
        <div class="card-footer text-muted">
            <br>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <button type="button" class="btn btn-danger">GHẾ ĐÃ ĐẶT</button>&ensp;
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" >GHẾ TRỐNG</button>&ensp;
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="ketthuc">
                        XEM THÔNG TIN ĐẶT VÉ
                      </button>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Thông Tin Vé</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul>
            @foreach ($film as $phim )
              <li>Tên Phim : {{$phim->TenPhim}} </li>
              @endforeach
              <li id="sove" value="sove"></li>
              <li id="soghe" value=""></li>
              @foreach ($gia as $gi)
                <li id="gia" value="{{$gi->Gia}}">Giá :{{$gi->Gia}}</li>
              @endforeach
              <li id="tong"></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="huy">HỦY</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="datve">ĐẶT VÉ</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function red(){
        alert("vi tri da dc dat!");    
    }
    

        var x=new Array();
      $(document).ready(function(){
          $("#chair").find("button").click(function(){
            $(this).css("background-color", "red");
                var value=$(this).val();
                if(x.includes(value)){
                  $(this).css("background-color", "blue");
                  x.pop(value);
                }else{
                  x.push(value);  
                }
                $("#ketthuc").click(function(){
                    let sove1=x.length;
                    var b=document.querySelector("#gia").value;
                    console.log(b);
                     $("#sove").html("Số Vé :" +x.length);
                     $("#soghe").html("Số Ghế : " +x + ',');
                     $("#tong").html("Tổng : " + sove1*b);
                });
        });
       
        $("#datve").click(function(e){
            e.preventDefault();
            var data=x;
            $.ajax({
              url: "/request-ajax",
              type:'post',
              data: {_token:$('meta[name="csrf-token"]').attr('content'),data:x},
              success: function(response) {
                  if(response.success){
                      alert(response.success);
                  }
              }
              });            
        });
      });
  </script>
@endsection