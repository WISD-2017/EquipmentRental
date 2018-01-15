@extends('layouts.master')
@section('title','器材借用申請')
@section('content')


     <form action="/apply" method="POST" role="form">
     {{ csrf_field() }}
     <!--新增器材-->
          <div class="table table-striped">
               <br/>
               <br/>
               <br/>
               <br/>
               <center>
                    <table style="font-family: 微軟正黑體">
                         <tr style="border-bottom-color: #888888">
                              <td>
                                   <center>器材名稱</center>
                              </td>
                              <td>
                                   <center>單位</center>
                              </td>
                              <td>
                                   <center>總數量</center>
                              </td>


                              <td>
                                   <center></center>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <center><input name="equipments_name" type="text" class="form-control" id="equipment_name" placeholder=""></center>
                              </td>
                              <td>
                                   <center><input name="equipments_unit" type="text" class="form-control" id="equipment_unit" placeholder=""></center>
                              </td>
                              <td>
                                   <center><input name="equipments_total" type="text" class="form-control" id="equipment_total" placeholder=""></center>
                              </td>


                         </tr>
                    </table>
               </center>
               <hr>
          </div>
     </form>

     <!--取消申請-->
     <div class="table table-striped">
          <br/>
          <br/>
          <br/>
          <br/>

          <center>
               <table style="font-family: 微軟正黑體">
                    <tr style="border-bottom-color: #888888">
                         <td>
                              <center>班級</center>
                         </td>
                         <td>
                              <center>學號</center>
                         </td>
                         <td>
                              <center>姓名</center>
                         </td>
                         <td>
                              <center>器材名稱</center>
                         </td>
                         <td>
                              <center>租借日期</center>
                         </td>
                         <td>
                              <center>租借時間</center>
                         </td>
                         <td>
                              <center>歸還時間</center>
                         </td>
                         <td>
                              <center>租借數量</center>
                         </td>
                         <td>
                              <center></center>
                         </td>

                    </tr>
                    @foreach($apply as $apply)
                         <tr >
                              <td>
                                   <center>{{$apply->users_class}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->users_id}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->users_name}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->equipments_name}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->equipments_date}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->equipments_from}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->equipments_too}}</center>
                              </td>
                              <td>
                                   <center>{{$apply->equipments_rentalnumber}}</center>
                              </td>
                              <td>
                                   <center><a href="{{route('unapply',['apply_id'=>$apply->id]) }}" class="btn btn-xs btn-danger">取消</a></center>
                              </td>
                         </tr>
                    @endforeach
               </table>
          </center>

     </div>


@endsection