<!-- Daftar Pekerjaan -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Lowongan Pekerjaan</h1>

    <!-- Tombol untuk menambah lowongan pekerjaan baru -->
    <a href="{{ route('jobs.create') }}" class="btn btn-primary">Tambah Lowongan Pekerjaan</a>

    <!-- Tabel untuk menampilkan daftar pekerjaan -->
    <table>
        <thead>
            <tr>
                <th>Judul Pekerjaan</th>
                <th>Perusahaan</th>
                <th>Lokasi</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->job_title }}</td>
                    <td>{{ $job->company }}</td>
                    <td>{{ $job->location }}</td>
                    <td>
                        <!-- Tombol untuk melihat detail pekerjaan -->
                        <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-info">Lihat</a>

                        <!-- Tombol untuk mengedit pekerjaan -->
                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning">Edit</a>

                        <!-- Form untuk menghapus pekerjaan -->
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus lowongan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
