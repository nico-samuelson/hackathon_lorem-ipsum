@extends('layouts.admin')

@section('style')
    <style>
        #tabel-kambing_wrapper {
            width: 100%;
            float: right;
        }

        #tabel-kambing_length select {
            width: 70px;
        }

        @media (max-width: 768px) {
            #tabel-kambing_wrapper {
                width: 100%;
                float: none;
            }
        }
    </style>
@endsection

@section('content')
    <section class="px-10 md:pl-32 pr-10 pt-8 gap-8">
        <div class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mt-8">
            <div class="overflow-x-auto p-6">
                <p class="font-bold pb-5 text-xl">Detail Kepemilikian Kambing</p>
                <table id="tabel-kambing" class="table-auto overflow-scroll w-full">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th>No Kambing</th>
                            <th>Tanggal Lahir</th>
                            <th>Gender</th>
                            <th>Hamil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kambing as $k)
                            <tr class="border-b dark:border-neutral-500">
                                <td>{{ $k->kambing->no_kambing }}</td>
                                <td>{{ $k->kambing->tanggal_lahir }}</td>
                                @if($k->kambing->gender == 0)
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-success-700">
                                        Jantan
                                        </span>
                                    </td>
                                @else
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-danger-700">
                                        Betina
                                        </span>
                                    </td>
                                @endif
                                @if ($k->kambing->hamil == 0)
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-secondary-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-secondary-700">
                                        Tidak
                                        </span>
                                    </td>
                                @else
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-primary-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-primary-700">
                                        Hamil
                                        </span>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#tabel-kambing').DataTable();
    });
</script>
@endsection