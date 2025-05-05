@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('education.store')}}" method="POST">
    @csrf

    <fieldset>
        <legend>Yeni EĞİTİM Ekle </legend>
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="text" class="form-control" name="education_start">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILIŞ TARİHİ</label>
            <input type="text" class="form-control" name="education_end">
        </div>
        <div class="mb-3">
            <label class="form-label">OKUL</label>
            <input type="text" class="form-control" name="school_name">
        </div>
        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="school_description">
        </div>
       

        <button type="submit" class="btn btn-primary">EKLE</button>
    </fieldset>
</form>




@endsection