@extends('layouts.admin_master')
@section('title','器材管理')
@section('content')

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
                        <center><input type="text" class="form-control" id="equipment_name" placeholder=""></center>
                    </td>
                    <td>
                        <center><input type="text" class="form-control" id="equipment_unit" placeholder=""></center>
                    </td>
                    <td>
                        <center><input type="text" class="form-control" id="equipment_total" placeholder=""></center>
                    </td>

                    <td>
                        <center><button type="button" class="btn btn-secondary">新增</button></center>
                    </td>
                </tr>
            </table>
        </center>
        <hr>
    </div>


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
                    <td>
                        <center></center>
                    </td>
                    <td>
                        <center></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>（器材名稱）</center>
                    </td>
                    <td>
                        <center>（單位）</center>
                    </td>
                    <td>
                        <center>（總數量）</center>
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-success">編輯</button></center>
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-danger">刪除</button></center>
                    </td>
                </tr>
            </table>
        </center>
    </div>


@endsection