@extends('layouts.master')
@section('title','器材借用申請')
@section('content')

<div style="margin-top: 5%;">

     <h1>體育器材借用</h1>
     <hr class="colorgray">

     <form action="" method="post" role="form" class="">




     <!--班級-->
          <div class="form-group"><center>班級</center>
     <input type="text" name="name" class="form-control" id="user_class"/>
     <div class="validation"></div>
<br>
     <!--學號-->
     <div class="form-group"><center>學號</center>
     <input type="text" name="name" class="form-control" id="user_id"/>
     <div class="validation"></div>
<br>
     <!--姓名-->
     <div class="form-group"><center>姓名</center>
     <input type="text" name="name" class="form-control" id="user_name"/>
     <div class="validation"></div>



<br>
     <!--體育器材-->
     <div class="form-group"><center>體育器材</center>
     <select name="體育器材" class="form-control">
     <option value="體育器材"></option>
     <option value="籃球">籃球</option>
     <option value="羽球">羽球</option>
     <option value="羽毛球拍">羽毛球拍</option>
     <option value="排球">排球</option>
     <option value="桌球">桌球</option>
     </select>
     <div class=""></div>
<br>
     <!--日期-->
     <div class="form-group"><center>日期</center>
          <input type="date" name="name" class="form-control" id="name" />
     <div class=""></div>

</div>


<div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">送出</button></div>
</form>
<hr class="colorgray">
@endsection