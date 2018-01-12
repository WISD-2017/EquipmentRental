@extends('layouts.admin_master')
@section('content')

    <form action="/equipment" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label>器材名稱</label>
            <input name="equipments_name" class="form-control" placeholder="請輸入器材名稱">
        </div>
        <div class="form-group">
            <label>單位</label>
            <textarea name="equipments_unit" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>總數量</label>
            <textarea name="equipments_total" class="form-control" rows="1"></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success">新增</button>
        </div>
    </form>


@endsection