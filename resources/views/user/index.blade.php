@extends('user.base.base')

@section('content')
<section>
    <div class="h-auto border-2 m-6 p-4 rounded">
        <h1 class="font-semibold text-4xl">Cek Pengiriman</h1>

        <form action="" class="flex mt-8">
            <input type="text" class="border-2 rounded p-2" placeholder="Nomor Pengiriman">
            <input type="submit" value="Lihat" class="bg-[#343a40] text-white rounded px-2 my-1 ms-2">
        </form>

        <table class="w-full mt-12">
            <thead class="bg-[#343a40]">
                <tr class="text-white">
                    <th class="p-4 text-start border-2">Tanggal</th>
                    <th class="p-4 text-start border-2">Kota</th>
                    <th class="p-4 text-start border-2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail_transaksis as $data)
                <tr>
                    <td class="p-4 border-2">{{ $data->tanggal }}</td>
                    <td class="p-4 border-2">{{ $data->kota }}</td>
                    <td class="p-4 border-2">{{ $data->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection