<div>
   <div class="mt-10 ml-10 font-monts text-3xl text-[#4C4C4C] font-semibold">Guru</div>
  
</div>
<hr class="h-px mx-10 my-4 bg-gray-200 border-1 dark:bg-gray-700">
<div class="mx-10 grid grid-cols-2 ">
    @foreach ($guru as $data )
    <div class="flex items-center space-x-4 my-5">
        <div class="w-14 h-14 rounded-md bg-[#65A8F5]  flex items-center justify-center font-monts font-semibold text-white">{{ $data->codeguru }}</div>
        <div class="font-medium text-xl text-[#595959] dark:text-white">
            <div>{{ $data->namaguru }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Mata Pelajaran : {{ $data->mapel }} </div>
        </div>
    </div>  
    @endforeach
  
</div>