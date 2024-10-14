@extends('admin.base.base')

@section('content')
<section>
    <div class="h-auto border-2 m-6 p-4 rounded">
        <h1 class="font-semibold text-4xl">Entry Nomor Resi</h1>

        <div class="w-64">
            <form action="{{ route('admin.entry') }}" method="POST" class="flex flex-col mt-4">
                @csrf
                <label for="">Tanggal</label>
                <input type="date" name="tanggal" class="border-2 rounded p-2">
                <label for="">Nomor Resi</label>
                <input type="text" name="resi" class="border-2 rounded p-2">
                <input type="submit" value="Entry" class="bg-[#343a40] text-white rounded p-2 my-1 mt-2">
            </form>
        </div>

        <table class="w-full mt-12">
            <thead class="bg-[#343a40]">
                <tr class="text-white">
                    <th class="p-4 text-start border-2">Tanggal Resi</th>
                    <th class="p-4 text-start border-2">Nomor Resi</th>
                    <th class="p-4 text-start border-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $data)
                <tr>
                    <td class="p-4 border-2">{{ $data->tanggal_resi }}</td>
                    <td class="p-4 border-2">{{ $data->resi }}</td>
                    <td class="p-4 border-2">
                        <a href="#" class="bg-blue-600 text-white rounded p-2">Entry Log</a>
                        <form action="{{ route('admin.delete', $data->id) }}" method="POST" class="inline">
                            @csrf
                            <input type="submit" value="Delete" class="bg-red-600 text-white rounded p-1.5">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection