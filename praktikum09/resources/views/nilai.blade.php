 @php
    $nama = 'Husna';
    $nilai = 90;
 @endphp
{{-- struktur kendali if --}}
@if ($nilai >= 60)
    @php 
        $ket = "Lulus";
     @endphp
@else
    @php
        $ket = "Gagal"; 
     @endphp
@endif
Mahasiswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}
