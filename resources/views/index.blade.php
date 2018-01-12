@extends('layouts.master')
@section('title',' ')
@section('content')

<div class="table table-striped">
<center>
    <table style="font-family: 微軟正黑體; margin-top: 5%">
        <tr style="border-bottom-color: #888888">
            <td>
                <center>器材名稱</center>
            </td>
            <td>
                <center>單位</center>
            </td>
            <td>
                <center>剩餘數量</center>
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
                <center>（剩餘數量）</center>
            </td>
            <td>
                <div class="form-group">
                    <input type="date" class="form-control"/></div>
            </td>
            <td>
                <center>
                    <select class="form-control">
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16:00</font></font></option>
                    </select>
                </center>
            </td>
            <td>
                <center>
                    <select class="form-control">
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16:00</font></font></option>
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17:00</font></font></option>
                    </select>
                </center>
            </td>
            <td>
                <center>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </center>
            </td>
            <td>
                <center><button type="button" class="btn btn-secondary">申請</button></center>
            </td>
        </tr>
    </table>
</center>
</div>
@endsection