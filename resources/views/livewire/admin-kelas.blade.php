<div class="mt-5">
    <div class="flex row">
        @if ($updateMode)
        @livewire('admin-kelas-update')
          @else
         @livewire('admin-kelas-create')
        @endif
    
       
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg  w-full">
        <table class="w-screen text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
        <th scope="col" class="px-6 py-3">
        Kelas
        </th>
        <th scope="col" class="px-6 py-3">
       Jurusan
        </th>
        
        <th scope="col" class="px-6 py-3">
            Angkatan
            </th> 
        <th scope="col" class="px-6 py-3">
            Tahun Ajaran
            </th>
        <th scope="col" class="px-6 py-3">
            Wali Kelas
        </th>
        <th scope="col" class="px-6 py-3">
            Letak
        </th>    
        <th scope="col" class="px-6 py-3">
        Action
        <span class="sr-only">Edit</span>
        </th>
        </tr>
        </thead>
        <tbody>
    @foreach ($kelas as $data )
                
           
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
    
        <td class="px-6 py-4">
            {{ $data->kelas }}
        </td>
        <td class="px-6 py-4">
            {{ $data->jurusan }}
        </td>
        <td class="px-6 py-4 ">
            {{ $data->angkatan }}
        </td>
      
         <td class="px-6 py-4">
            {{ $data->tahun_ajaran }}
         </td>
         <td class="px-6 py-4">
            {{ $data->walikelas }}
         </td>
         <td class="px-6 py-4">
            {{ $data->letak }}
         </td>
        <td class="px-6 py-4 text-center ">
            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" wire:click="getkelas({{ $data->id }})">Edit</button>
            <form action="" class="inline">
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"wire:click="destroy({{ $data->id }})">Delete</button>
            </form>
        </td>
        </tr>
       
        @endforeach
        </tbody>
    
        </table>
        {{ $kelas->links() }}
        </div>
        
    
    </div>
    
    
    
    
    </div>