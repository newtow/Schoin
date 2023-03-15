<div>
    <div class="flex  justify-between items-center">
        <div class="">
        <div class="mt-10 ml-10 font-monts text-3xl text-[#4C4C4C] font-semibold">kelas</div>
        <div class=" ml-10 font-monts text-sm ">@foreach ($kelas->unique('tahun_ajaran') as $T )
            {{ $T->tahun_ajaran }}
          @endforeach</div>
        </div>
        <button id="dropdownRadioBgHoverButton" data-dropdown-toggle="dropdownRadioBgHover" class="text-white mt-10 mx-10 bg-[#65A8F5] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Tahun Ajaran <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

        <!-- Dropdown menu -->
        <div id="dropdownRadioBgHover" class="z-10 hidden w-30 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioBgHoverButton">
              @foreach ($thn->unique('tahun_ajaran') as $type )
              <li>
                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="default-radio-4" type="radio" value="{{ $type->tahun_ajaran }}" wire:model="selected" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="default-radio-4" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $type->tahun_ajaran }}</label>
                </div>
              </li>
              @endforeach
            </ul>
        </div>
    </div>
    
    <hr class="h-px mx-10 my-4 bg-gray-200 border-1 dark:bg-gray-700">
    <div class="mx-10 font-monts font-semibold text-[#ADADAD] ">Jurusan</div>
    <div class=" overflow-y-auto h-96">
     <div class="mx-20 grid grid-cols-2 ">
        <div class="flex items-center font-monts text-[#65A8F5] text-lg">TKJ</div>
       
        <div class=" grid grid-cols-3">
            
            @foreach ($tkj as $t)
            <a href="kelas/{{ $t->id }}" class="py-5 px-10 my-5 mx-5 rounded-lg bg-[#F1F5FA]  hover:bg-[#65A8F5] hover:text-white text-center font-monts text-[#4C4C4C] font-semibold">
            {{ $t->kelas }}
            </a>
            @endforeach
        </div>
    </div>
    <div class="mx-20 grid grid-cols-2">
        <div class="flex items-center font-monts text-[#65A8F5] text-lg">AKL</div>
       
        <div class=" grid grid-cols-3">
            
            @foreach ($akl as $a)
            <a href="kelas/{{ $a->id }}" class="py-5 px-10 my-5 mx-5 rounded-lg bg-[#F1F5FA]  hover:bg-[#65A8F5] hover:text-white text-center font-monts text-[#4C4C4C] font-semibold">
            {{ $a->kelas }}
            </a>
            @endforeach
        </div>
    </div> 
    
    <div class="mx-20 grid grid-cols-2">
        <div class="flex items-center font-monts text-[#65A8F5] text-lg">BDP</div>
       
        <div class=" grid grid-cols-3">
            
            @foreach ($bdp as $b)
            <a href="kelas/{{ $b->id }}" class="py-5 px-10 my-5 mx-5 rounded-lg bg-[#F1F5FA]  hover:bg-[#65A8F5] hover:text-white text-center font-monts text-[#4C4C4C] font-semibold">
            {{ $b->kelas }}
            </a>
            @endforeach
        </div>
    </div> 

    </div>
</div>

