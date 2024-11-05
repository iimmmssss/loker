<!-- Daftar Aplikasi Pekerjaan -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Lamaran Pekerjaan</h1>
    
    <!-- Tombol untuk menambah aplikasi pekerjaan baru -->
    <a href="{{ route('applications.create') }}" class="btn btn-primary">Tambah Lamaran Pekerjaan</a>

    <table>
        <thead>
            <tr>
                <th>Judul Pekerjaan</th>
                <th>Perusahaan</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->job_title }}</td>
                    <td>{{ $application->company }}</td>
                    <td>
                        <!-- Tombol untuk melihat aplikasi -->
                        <a href="{{ route('applications.show', $application->id) }}" class="btn btn-info">Lihat</a>
                        
                        <!-- Tombol untuk mengedit aplikasi -->
                        <a href="{{ route('applications.edit', $application->id) }}" class="btn btn-warning">Edit</a>
                        
                        <!-- Form untuk menghapus aplikasi -->
                        <form action="{{ route('applications.destroy', $application->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus lamaran ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

