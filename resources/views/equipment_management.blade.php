@extends('layouts.admin_master')
@section('title','器材管理')
@section('content')

    <form action="/equipment" method="POST" role="form">
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
                        <center><input name="equipments_name" type="text" class="form-control" id="equipment_name" placeholder="請輸入器材名稱"></center>
                    </td>
                    <td>
                        <center><input name="equipments_unit" type="text" class="form-control" id="equipment_unit" placeholder=""></center>
                    </td>
                    <td>
                        <center><input name="equipments_total" type="text" class="form-control" id="equipment_total" placeholder=""></center>
                    </td>

                    <td>
                        <center><button type="submit" class="btn btn-secondary">新增</button></center>
                    </td>
                </tr>
            </table>
        </center>
        <hr>
    </div>
    </form>

    <!--編輯、刪除器材-->
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

                </tr>
                @foreach($equipments as $id)
                <tr>
                    <td>
                        <center>{{ $equipment-> equipments_name }}</center>
                    </td>
                    <td>
                        <center>{{ $equipment-> equipments_unit }}</center>
                    </td>
                    <td>
                        <center>{{ $equipment-> equipments_total }}</center>
                    </td>

                </tr>
                @endforeach
            </table>
        </center>
    </div>



@endsection