@extends('munaqosah.layout')
@section('judul', 'Penilaian Munaqosah')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif
    <form action="{{ route('munaqosah.update') }}" method="POST" enctype="multipart/form-data" class="signin-form">
        @csrf
        @method('POST')
        @php
            $tgl = now()->timestamp;
        @endphp
        <input type="hidden" name="exam_date" value="{{ $tgl }}">
        @if (!is_null($students))
            <div class="mb-3">
                <label class="form-label">Pilih Siswa</label>
                <select class="form-control" name="id">
                    <option selected disabled>-- Pilih --</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Kelancaran</label>
            <input type="number" name="kelancaran" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Fasohah Makhroj</label>
            <input type="number" name="fasohah_makhroj" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tajwid</label>
            <input type="number" name="tajwid" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Penguji</label>
            <input type="text" name="examiner" class="form-control" placeholder="contoh: Ust. Fauzan">
        </div>
        <button type="submit" class="btn btn-success col-12">Kirim Hasil Ujian</button>
    </form>
@endsection
