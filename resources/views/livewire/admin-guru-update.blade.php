<div class="w-2/4 ml-5">

    
    <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" wire:submit.prevent="updateguru">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Form Update Guru </h5>
            <div>
                <input type="hidden" wire:model="guruid">
                <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NUPTK</label>
                <input wire:model="nuptk" type="text" nuptk="nuptk" id="nuptk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" nuptk" required>
            </div>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Nama Guru</label>
                <input  wire:model="namaguru" type="text" name="namaguru" id="namaguru" placeholder=" nama guru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
              <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Code Guru</label>
              <input  wire:model="codeguru"type="text" name="codeguru" id="codeguru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" code guru" required>
          </div>
          <div>
              <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Mata Pelajran</label>
              <input type="text"  wire:model="mapel" name="mapel" id="mapel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" mata pelajaran" required>
          </div>
          <div>
            <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Kelas</label>
            <input type="text"  wire:model="kelas" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" kelas" required>
        </div>
        <div>
            <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Jabatan</label>
            <input type="text"  wire:model="jabatan" name="jabatan" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=" jabatan" required>
        </div>
        
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            
        </form>
    </div>



  </div>