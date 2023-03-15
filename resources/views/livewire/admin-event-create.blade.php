
<div class="w-2/4 ml-5">

    
    <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" wire:submit.prevent="storeevent">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Form Add Event</h5>
            <div>
                <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Event</label>
                <input wire:model="nama_event" type="text" name="nama_event" id="nama_event" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="nama event" required>
            </div>
            <div>
                <label for="password" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lokasi</label>
                <input  wire:model="lokasi" type="text" name="lokasi" id="lokasi" placeholder="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
              <label for="email" class="block  text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi</label>
              <input  wire:model="deskripsi"type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="descripsi" required>
          </div>
          <div>
              <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mulai</label>
              <input type="date"  wire:model="mulai" name="mulai" id="mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="mulai" required>
          </div>
          <div>
            <label for="email" class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Selesai</label>
            <input type="date"  wire:model="selesai" name="selesai" id="selesai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="selesai" required>
        </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input wire:model="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, or JPG.</p>
        </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            
        </form>
    </div>



  </div>
  