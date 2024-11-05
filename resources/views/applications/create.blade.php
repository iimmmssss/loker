<!-- Create Lamaran Pekerjaan -->
@extends('layouts.app')

@section('content')
    <h1>Tambah Lamaran Pekerjaan</h1>

    <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="job_id">ID Lowongan Pekerjaan:</label>
            <input type="text" id="job_id" name="job_id" required>
        </div>

        <div>
            <label for="applicant_name">Nama Pelamar:</label>
            <input type="text" id="applicant_name" name="applicant_name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="resume">Resume:</label>
            <input type="text" id="resume" name="resume" required>


        </div>

        <button type="submit">Kirim Lamaran</button>
    </form>
@endsection
