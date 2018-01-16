@extends('layouts.admin_master')
@section('content')

    <form action="/record" method="POST" role="form">
    {{ csrf_field() }}
    <!--租借記錄-->
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
                            <center>單位</center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center><input name="name" type="text" class="form-control" id="name" value="{{Auth::user()->name}}" readonly="true"></center>
                        </td>
                        <td>
                            <center><input name="user_class" type="text" class="form-control" id="user_class" value="{{Auth::user()->user_class}}" readonly="true"></center>
                        </td>
                        <td>
                            <center><input name="user_id" type="text" class="form-control" id="user_id" value="{{Auth::user()->user_id}}" readonly="true"></center>
                        </td>

                    </tr>
                </table>
            </center>
        </div>
    </form>
@endsection