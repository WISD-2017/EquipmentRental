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
        @foreach($equipment as $equipment)
        <tr>
            <td>
                <center>{{$equipment->equipments_name}}</center>
            </td>
            <td>
                <center>{{$equipment->equipments_unit}}</center>
            </td>
            <td>
                <center>{{$equipment->equipments_total}}</center>
            </td>
            <td>
                <div class="form-group">
                    <input type="date" id="bookdate" placeholder="2014-09-18" min="time()">

                </div>
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
                    <select name="rentalnumber"id="rentalnumber"class="form-control">
                        <option>1</option>
                    </select>
                </center>
            </td>
            <td>
                <center><button type="button" class="btn btn-secondary" >申請</button></center>
            </td>
        </tr>
        @endforeach
    </table>


    <script>
        function convertToISO(timebit) {

            timebit.setHours(0, -timebit.getTimezoneOffset(), 0, 0);
            // format convert and take first 10 characters of result
            var isodate = timebit.toISOString().slice(0,10);
            return isodate;
        }

        var bookdate = document.getElementById('bookdate');
        var currentdate = new Date();
        bookdate.min = convertToISO(currentdate);
        bookdate.placeholder = bookdate.min;
        var futuredate = new Date();
        // go forward 7 days into the future
        futuredate.setDate(futuredate.getDate() + 7);
        bookdate.max = convertToISO(futuredate);
    </script>
    <script>
        layer.alert('已申請，待審核', {
            skin: 'layui-layer-molv' //样式类名
            ,closeBtn: 0
        });
    </script>
</center>
</div>
@endsection