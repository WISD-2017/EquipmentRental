@extends('layouts.admin_master')
@section('content')
    <div class="table table-striped">
        <br/>
        <br/>
        <br/>
        <br/>

        <center>
            <table style="font-family: 微軟正黑體">
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
                    </td>                    <td>
                        <center>歸還時間</center>
                    </td>
                    <td>
                        <center>借用數量</center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>



                </tr>
                @foreach($equipment as $equipment)
                        <tr >
                            <td>
                                <center>
                                <input name="user_name" type="text" class="form-control" id="user_name" value="{{$equipment->user_name}}" readonly="true">
                               </center>
                            </td>
                            <td>
                                <center>
                                <input name="user_class" type="text" class="form-control" id="user_class" value="{{$equipment->user_class}}" readonly="true">
                                </center>
                            </td>
                            <td>
                                <center>
                                <input name="user_id" type="text" class="form-control" id="user_id" value="{{$equipment->user_id}}" readonly="true">
                                </center>
                            </td>
                            <td>
                                <center>
                                <input name="equipments_name" type="text" class="form-control" id="equipments_name" value="{{$equipment->equipments_name}}" readonly="true">
                               </center>
                            </td>
                            <td>
                                <center>
                                <input name="equipments_date" type="text" class="form-control" id="equipments_date" value="{{$equipment->equipments_date}}" readonly="true">
                                </center>
                            </td>
                            <td>
                                <center>
                                <input name="equipments_from" type="text" class="form-control" id="equipments_from" value="{{$equipment->equipments_from}}" readonly="true">
                               </center>
                            </td>
                            <td>
                                <center>
                                <input name="equipments_too" type="text" class="form-control" id="equipments_too" value="{{$equipment->equipments_too}}" readonly="true">
                              </center>
                            </td>
                            <td>
                                <center>
                                <input name="equipments_rentalnumber" type="text" class="form-control" id="equipments_rentalnumber" value="{{$equipment->equipments_rentalnumber}}" readonly="true">
                                </center>
                            </td>
                            <td>
                                <center><a href="" class="btn btn-xs btn-warning">核准</a></center>
                            </td>
                            <td>
                                <center><a href="" class="btn btn-xs btn-danger">拒絕</a></center>
                            </td>
                        </tr>
                @endforeach
            </table>
        </center>

    </div>


@endsection