@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('skills.update',$skills->id)}}" method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>YETENEK GÜNCELLE </legend>
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="text" class="form-control" name="skill_name" value="{{$skills->skill_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILIŞ TARİHİ</label>
            <input type="text" class="form-control" name="skill_percentage" value="{{$skills->skill_percentage}}">
        </div>



        <button type="submit" class="btn btn-info">GÜNCELLE</button>
    </fieldset>
</form>




@endsection