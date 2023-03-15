<div class="mt-5">
    <div class="flex row">
        @if ($updateMode)
        @livewire('admin-event-update')
          @else
         @livewire('admin-event-create')
        @endif
    
       
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg  w-full">
            <table class="w-screen text-sm text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
        <th scope="col" class="px-6 py-3">
        Nama Event
        </th>
        <th scope="col" class="px-6 py-3">
        Lokasi
        </th>
        <th scope="col" class="px-6 py-3">
       Deskripsi
        </th>
        <th scope="col" class="px-6 py-3">
        Mulai
        </th>
        <th scope="col" class="px-6 py-3">
            Selesai
        </th>
        <th scope="col" class="px-6 py-3">
            Photo
            </th>
        <th scope="col" class="px-6 py-3">
            Action
        <span class="sr-only">Edit</span>
        </th>
        </tr>
        </thead>
        <tbody>
            @foreach ($event as $data )
                
           
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
        {{ $data->nama_event }}
        </th>
        <td class="px-6 py-4">
            {{ $data->lokasi }}
        </td>
        <td class="px-6 py-4">
            {{ $data->deskripsi }}
        </td>
        <td class="px-6 py-4">
            {{ $data->mulai }}
        </td>
        <td class="px-6 py-4">
            {{ $data->selesai }}
        </td>
        <td class="px-6 py-4 ">
           <img src="{{ asset('storage/photos/'.$data->foto) }}" alt="" srcset="" width="100" height="100"> 
        </td>
        <td class="px-6 py-4 text-right">
            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" wire:click="getevent({{ $data->id }})">Edit</button>
            <form action="" class="inline">
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"wire:click="destroy({{ $data->id }})">Delete</button>
            </form>
        </td>
        </tr>
       
        @endforeach
        </tbody>
    
        </table>
        </div>
        {{ $event->links() }}
    
    </div>
    
    
    
    
    </div>