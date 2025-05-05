@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('skills.store')}}" method="POST">
    @csrf

    <fieldset>
        <legend>Yeni YETENEK Ekle </legend>
        <div class="mb-3">
            <label class="form-label">YETENEK ADI</label>
            <input type="text" class="form-control" name="skill_name">
        </div>
        <div class="mb-3">
            <label class="form-label">YETENEK DERECESİ</label>
            <input type="text" class="form-control" name="skill_percentage">
        </div>
        
       

        <button type="submit" class="btn btn-primary">EKLE</button>
    </fieldset>
</form>




@endsection