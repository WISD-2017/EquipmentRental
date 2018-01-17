@extends('layouts.master')
@section('title','租借紀錄')
@section('content')


     <div class="table table-striped">
          <br/>
          <br/>
          <br/>
          <center>
               <table style="font-family: 微軟正黑體">
                         <h1 style="font-family: 微軟正黑體">待審核</h1>
                    <br>
                    <tr style="border-bottom-color: #888888">
                         <td>
                              <center>姓名</center>
                         </td>
                         <td>
                              <center>班級</center>
                         </td>
                         <td>
                              <center>學號</center>
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
                              <center>借用數量</center>
                         </td>
                         <td>
                              <center></center>
                         </td>
                    </tr>

                    @foreach($equipment as $equipment)

                         <tr >
                              <td>
                                   <center>
                                        {{$equipment->user_name}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->user_class}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->user_id}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->equipments_name}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->equipments_date}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->equipments_from}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->equipments_too}}
                                   </center>
                              </td>
                              <td>
                                   <center>
                                        {{$equipment->equipments_rentalnumber}}
                                   </center>
                              </td>
                              <form action="{{ route('cancelapply', $equipment->id) }}" method="POST">
                                   {{ csrf_field() }}
                                   {{ method_field('DELETE') }}
                                   <td>
                                        <button class="btn btn-danger ">取消</button>
                                   </td>
                              </form>
                         </tr>
                    @endforeach
               </table>
          </center>
     </div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



@endsection