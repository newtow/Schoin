
    <div class="w-2/4 ml-5">

    
        <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" wire:submit.prevent="updatejadwal">
                <input type="hidden" wire:model="jadwalid">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Form Update Jadwal Mapel</h5>
                <div>
                    <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mata Pelajaran</label>
                    <input wire:model="mapel" type="text" mapel="mapel" id="mapel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" mapel" required>
                </div>
                <div>
                    <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Kelas</label>
                    <input  wire:model="kelas" type="text" name="kelas" id="kelas" placeholder=" kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                  <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Hari</label>
                  <input  wire:model="hari"type="text" name="hari" id="hari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" hari" required>
              </div>
              <div>
                  <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Jam pelajaran</label>
                  <input type="text"  wire:model="jampel" name="jampel" id="jampel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" jampel" required>
              </div>
              <div>
                <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Mulai</label>
                <input type="time"  wire:model="mulai" name="mulai" id="mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" mulai" required>
            </div>
            <div>
                <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Selesai</label>
                <input type="time"  wire:model="selesai" name="selesai" id="selesai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
            </div>
            <div>
                <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Code Guru</label>
                <input  wire:model="codeguru"type="text" name="codeguru" id="codeguru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="code guru" required>
            </div>
            <div>
                <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Tahun Ajaran</label>
                <input  wire:model="tahun_ajaran"type="text" name="tahun_ajaran" id="tahun_ajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="tahun ajaran" required>
            </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                
            </form>
        </div>
    
    
    
      </div>
      