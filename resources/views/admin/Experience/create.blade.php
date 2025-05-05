@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('experience.store')}}" method="POST">
    @csrf

    <fieldset>
        <legend>Yeni Deneyim Ekle </legend>
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="text" class="form-control" name="job_start">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILIŞ TARİHİ</label>
            <input type="text" class="form-control" name="job_end">
        </div>
        <div class="mb-3">
            <label class="form-label">ŞİRKET</label>
            <input type="text" class="form-control" name="campany_name">
        </div>
        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="job_description">
        </div>
       

        <button type="submit" class="btn btn-primary">EKLE</button>
    </fieldset>
</form>




@endsection