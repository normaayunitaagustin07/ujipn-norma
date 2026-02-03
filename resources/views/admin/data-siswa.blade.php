@extends('admin.layouts.templates')

@section('content')
<div class="shadow p">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-succsess text-light">No</th>
                <th class="bg-succsess text-light">Nis</th>
                <th class="bg-succsess text-light">Nama Siswa</th>
                <th class="bg-succsess text-light">Email</th>
                <th class="bg-succsess text-light">Kelas</th>
                <th class="bg-succsess text-light">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $index => $sis)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $sis->nis }}</td>
                    <td>{{ $sis->user->name }}</td>
                    <td>{{ $sis->user->email }}</td>
                    <td>{{ $sis->kelas }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-info m-0 me-2" style="box-shadow: none !Important">
                        <i class="fas fa-trash"></i>Tanggal
                        </a>
                        <a href="" class="btn btn-sm btn-danger m-0 me-2" style="box-shadow: none !Important" onclick="return confirm('Yakin')">
                        <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>           
            @endforeach
        </tbody>
    </table>
</div>