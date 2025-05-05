@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('education.update',$education->id)}}" method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>EĞİTİM GÜNCELLE </legend>
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="text" class="form-control" name="job_start" value="{{$education->education_start}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILIŞ TARİHİ</label>
            <input type="text" class="form-control" name="job_end" value="{{$education->education_end}}">
        </div>
        <div class="mb-3">
            <label class="form-label">OKUL</label>
            <input type="text" class="form-control" name="company_name" value="{{$education->school_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="job_description" value="{{$education->school_description}}">
        </div>


        <button type="submit" class="btn btn-info">GÜNCELLE</button>
    </fieldset>
</form>




@endsection