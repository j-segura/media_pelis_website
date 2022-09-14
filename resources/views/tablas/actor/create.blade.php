<x-app-layout>
    <x-nav_bar_admin>
        <div class="admin_tables">
            <div class="header_crear">
                <a href="{{ route('actors_index') }}" class="volver_btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h1>Agregando un nuevo Actor</h1>
            </div>


            <form action="{{ route('actors_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-black dark:text-black">Nombre del Actor</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder=""
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-6">
                    <label for="link" class="block mb-2 text-sm font-medium text-black dark:text-black">Link sobre
                        info del Actor</label>
                    <input type="text" name="link" value="{{ old('link') }}" placeholder=""
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img id="imagenSeleccionada" style="max-height: 300px;">
                </div>
                <div class="mb-6">
                    <label for="foto" class="block mb-2 text-sm font-medium text-black dark:text-black">Foto del Actor</label>
                    <input id="imagen" type="file" name="foto" accept="image/*"
                        class="bg-white border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-7 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Agregar
                </button>

            </form>
        </div>

        

    </x-nav_bar_admin>
</x-app-layout>

{{-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
    $(document).ready(function (e) {
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.file[0]);
        });
    });
</script>
 --}}