<div class="mt-5">
    <div class="flex row">
        @if ($updateMode)
        @livewire('admin-guru-update')
          @else
         @livewire('admin-guru-create')
        @endif
    
       
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg  w-full">
        <table class="w-screen text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
        <th scope="col" class="px-6 py-3">
        Mata Pelajaran
        </th>
        <th scope="col" class="px-6 py-3">
        Kelas
        </th>
        <th scope="col" class="px-6 py-3">
       NUPTK
        </th>
        
        <th scope="col" class="px-6 py-3">
            Code Guru
            </th>
        <th scope="col" class="px-6 py-3">
           Jabatan
        </th>
        <th scope="col" class="px-6 py-3">
            Nama Guru
        </th>
        
        <th scope="col" class="px-6 py-3">
        Action
        <span class="sr-only">Edit</span>
        </th>
        </tr>
        </thead>
        <tbody>
    @foreach ($guru as $data )
                
           
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
        <td scope="row" class="px-6 py-4 ">
        {{ $data->mapel }}
        </td>
        <td class="px-6 py-4">
            {{ $data->kelas }}
        </td>
        <td class="px-6 py-4">
            {{ $data->nuptk }}
        </td>
        <td class="px-6 py-4">
            {{ $data->codeguru }}
        </td>
        <td class="px-6 py-4">
           {{ $data->jabatan }}
        </td>
        <td class="px-6 py-4">
            {{ $data->namaguru }}
         </td>
         
        <td class="px-6 py-4 text-center">
            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" wire:click="getguru({{ $data->id }})">Edit</button>
            <form action="" class="inline">
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"wire:click="destroy({{ $data->id }})">Delete</button>
            </form>
        </td>
        </tr>
       
        @endforeach
        </tbody>
    
        </table>
        {{ $guru->links() }}
        </div>
        
    
    </div>
    
    
    
    
    </div>