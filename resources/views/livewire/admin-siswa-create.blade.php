
<div class="w-2/4 ml-5">

    
    <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" wire:submit.prevent="storesiswa">
          
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Form Add Siswa</h5>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Nama Siswa</label>
                <input  wire:model="nama_siswa" type="text" name="nama_siswa" id="nama_siswa" placeholder=" nama siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Nisn</label>
                <input  wire:model="nisn" type="text" name="nisn" id="nisn" placeholder=" nisn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Nis</label>
                <input  wire:model="nis" type="text" name="nis" id="nis" placeholder=" nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Kelas</label>
                <input  wire:model="kelas" type="text" name="kelas" id="kelas" placeholder=" kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
              <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Jurusan</label>
              <input  wire:model="jurusan"type="text" name="jurusan" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" jurusan" required>
          </div>
          <div>
              <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Angkatan</label>
              <input type="text"  wire:model="angkatan" name="angkatan" id="angkatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" angkatan" required>
          </div>
          
        <div>
            <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Absen</label>
            <input  wire:model="absen"type="text" name="absen" id="absen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Absen" required>
        </div>
        <div>
            <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Tanggal Lahir</label>
            <input  wire:model="tanggal_lahir"type="date" name="tanggal_lahir" id="tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Tanggal Lahir" required>
        </div>
        <div>
            <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Tempat Lahir</label>
            <input  wire:model="tempat_lahir"type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="tempat-lahir" required>
        </div>
        <div class="">
            <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Jenis Kelamin</label>
            <div class="flex ">
        <div class="flex items-center mb-4 mr-4">
            <input wire:model="kelamin" id="country-option-1" type="radio" name="countries" value="1" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
             Laki-laki
            </label>
          </div>
          <div class="flex items-center mb-4">
            <input wire:model="kelamin" id="country-option-1" type="radio" name="countries" value="0" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
             Perempuan
            </label>
          </div>
        </div>
        </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            
        </form>
    </div>



  </div>
  