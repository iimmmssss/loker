<!-- Create Lowongan Pekerjaan -->
@extends('layouts.app')

@section('content')
    <h1>Tambah Lowongan Pekerjaan</h1>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div>
            <label for="job_title">Judul Pekerjaan:</label>
            <input type="text" id="job_title" name="job_title" required>
        </div>

        <div>
            <label for="company">Perusahaan:</label>
            <input type="text" id="company" name="company" required>
        </div>

        <div>
            <label for="location">Lokasi:</label>
            <input type="text" id="location" name="location" required>
        </div>

        <div>
            <label for="description">Deskripsi:</label>
            <input type="text" id="description" name="description" required>

        </div>

        <div>
            <label for="salary">Gaji:</label>
            <input type="number" id="salary" name="salary" required>
        </div>

        <button type="submit">Simpan Lowongan</button>
    </form>
@endsection
