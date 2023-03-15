<div>
    <div class="flex  justify-between items-center ml-40">
        <div class="grid grid-cols-3 ">
        <div class="">
            <div class="mt-10 border-r-2 border-[#C5C5C5]  ml-10 font-monts text-3xl text-[#4C4C4C] font-semibold">kelas</div>
            <div class="ml-10 font-monts font-regular text-[#C5C5C5]">{{ $post->kelas }}</div>
        </div>
        <div class="">
            <div class="mt-10 border-r-2 border-[#C5C5C5] ml-10 font-monts text-3xl text-[#4C4C4C] font-semibold">Wali Kelas</div>
            <div class="ml-10 font-monts font-regular text-[#C5C5C5]">{{ $post->walikelas }}</div>
        </div>
        <div class="">

            <div class="mt-10  ml-10 font-monts text-3xl text-[#4C4C4C] font-semibold">Letak Kelas</div>
            <div class="ml-10 font-monts font-regular text-[#C5C5C5]">{{ $post->letak }}</div>
        </div>
        </div>
    
    
   

   
  

    </div>
    <hr class="h-px mx-10 my-4 bg-gray-200 border-1 dark:bg-gray-700 ">
<div class="overflow-y-auto h-[400px]">
<div class="grid grid-cols-3">
    @foreach ($siswa as $data )
  
@if ($data->kelamin == 1)
<div class="flex justify-between">
<div class="flex items-center my-4 mx-10 w-80">
    <div class="bg-[#CDE3FF] h-10 w-10 py-4 px-8  m-4 flex  font-monts rounded-md font-semibold text-[#595959] justify-center items-center">{{ $data->absen }}</div>
    <div class="text-[#595959] font-monts text-lg">{{ $data->nama_siswa}}</div>
</div>
</div>
@else
<div class="flex justify-between">
<div class="flex items-center my-4 mx-10">
    <div class="bg-[#FFC4DD] h-10 w-10 py-4 px-8  m-4 flex  font-monts rounded-md font-semibold text-[#595959] justify-center items-center">{{ $data->absen }}</div>
    <div class="text-[#595959] font-monts text-lg">{{ $data->nama_siswa}}</div>
</div>
</div>
@endif
    

    @endforeach
</div>
</div>
</div>

