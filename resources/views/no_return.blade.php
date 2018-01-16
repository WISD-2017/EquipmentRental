@extends('layouts.admin_master')
@section('content')

    <div class="table table-striped">
        <br/>
        <br/>
        <br/>
        <br/>

        <center>
            <table style="font-family: 微軟正黑體">
                <tr>
                    <h1>尚未歸還</h1>
                </tr>
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
                                <center>{{$equipment->user_name}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->user_class}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->user_id}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->equipments_name}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->equipments_date}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->equipments_from}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->equipments_too}}</center>
                            </center>
                        </td>
                        <td>
                            <center>
                                <center>{{$equipment->equipments_rentalnumber}}</center>
                            </center>
                        </td>
                            <td>
                                <a href ="{{route('equipment.adminReturnPass', ['id'=>$equipment->id])}}"class="btn btn-success " role="button">歸還</a>
                            </td>

                    </tr>

    @endforeach

    </table>
    </center>

    </div>
    <hr>

@endsection