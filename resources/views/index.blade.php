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
            <form action="{{route('apply.equipmentApplication')}}" method="POST" role="form">
                {{ csrf_field() }}
        <tr>
            <div class="form-group">
            <td>
                <center> <input name="equipments_name" type="text" class="form-control" id="equipments_name" value="{{$equipment->equipments_name}}" readonly="true"></center>
            </td>
            </div>
            <td>
                <center>{{$equipment->equipments_unit}}</center>
            </td>
            <td>
                <div class="form-group">
                    <input name="equipments_date" type="date" id="equipments_date" placeholder="" min="">


                </div>
            </td>
            <td>
                <center>
                    <div class="form-group">
                    <select name="equipments_from" id="equipments_from" class="form-control">
                        <option value="08:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08:00</font></font></option>
                        <option value="09:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:00</font></font></option>
                        <option value="10:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10:00</font></font></option>
                        <option value="11:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11:00</font></font></option>
                        <option value="12:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></option>
                        <option value="13:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13:00</font></font></option>
                        <option value="14:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14:00</font></font></option>
                        <option value="15:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15:00</font></font></option>
                        <option value="16:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16:00</font></font></option>
                    </select>
                    </div>
                </center>
            </td>
            <td>
                <center>
                    <div class="form-group">
                    <select name="equipments_too" id="equipments_too" class="form-control">
                        <option value="09:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:00</font></font></option>
                        <option value="10:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10:00</font></font></option>
                        <option value="11:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11:00</font></font></option>
                        <option value="12:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12:00</font></font></option>
                        <option value="13:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13:00</font></font></option>
                        <option value="14:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14:00</font></font></option>
                        <option value="15:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15:00</font></font></option>
                        <option value="16:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16:00</font></font></option>
                        <option value="17:00"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17:00</font></font></option>
                    </select>
                    </div>
                </center>
            </td>
            <td>
                <center>
                    <div class="form-group">
                    <select name="equipments_rentalnumber" id="equipments_rentalnumber"class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                    </div>
                </center>
            </td>
            <td>

                <center><button type="submit" class="btn btn-secondary" >申請</button></center>
            </td>
        </tr>
            </form>
        @endforeach
    </table>
</center>>
</div>




@endsection