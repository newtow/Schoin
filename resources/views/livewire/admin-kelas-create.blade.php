
    <div class="w-2/4 ml-5">

    
        <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" wire:submit.prevent="storekelas">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Form Add Kelas</h5>
               
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
                <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Tahun Ajaran</label>
                <input  wire:model="tahun_ajaran"type="text" name="tahun_ajaran" id="tahun_ajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="tahun ajaran" required>
            </div>
            <div>
                <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Wali kelas</label>
                <input  wire:model="walikelas"type="text" name="walikelas" id="walikelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="wali kelas" required>
            </div>
            <div>
                <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Letak</label>
                <input  wire:model="letak"type="text" name="letak" id="letak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="letak" required>
            </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                
            </form>
        </div>
    
    
    
      </div>
      