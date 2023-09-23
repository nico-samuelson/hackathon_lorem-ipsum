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
<section class="py-8 border-b-2 border-double pb-3">
    <h1 class="sm:pl-32 pl-8 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">SEMUA KAMBING</h1>
</section>
<section class="px-10 md:pl-32 pr-10 gap-8">
    <div
        class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mt-8">
        <div class="overflow-x-auto p-6">
            <p class="font-bold pb-5 text-xl">Tabel Kambing</p>
            <table id="tabel-kambing" class="table-auto overflow-scroll w-full">
                <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th>No Kambing</th>
                        <th>Tanggal Lahir</th>
                        <th>Gender</th>
                        <th>Hamil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kambing as $k)
                    <tr class="border-b dark:border-neutral-500">
                        <td>{{ $k->no_kambing }}</td>
                        <td>{{ $k->tanggal_lahir }}</td>
                        @if($k->gender == 0)
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
                        @if ($k->hamil == 0)
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
                        <td>
                            <form action="{{ route('set-kambing-meninggal', ['id' => $k->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>
                            <button type="button"
                                class="set-meninggal inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                Set Meninggal</button>
                        </td>
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
        $('#tabel-kambing').on('click', 'button.set-meninggal', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).siblings('form').submit();
                }
            })
        });
    });
</script>
@endsection