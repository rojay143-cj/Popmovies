<div class="COUNTRY w-full lg:w-[65rem] mx-10 flex flex-col mt-10" style="display: none">
    <div class="flex flex-col items-center">
        <div class="w-full flex justify-between">
            <div class="flex gap-3 text-xl font-bold tracking-wide underline underline-offset-4 mb-10 mt-2">
                <h3>Dashboard</h3>
                <span><i class="fa-solid fa-caret-right"></i></span>
                <h3>Country</h3>
            </div>
            <div class="mt-2">
                <button data-toggle="modal-add_country"
                    class="btn-add_country text-nowrap p-3 bg-yellow-700 hover:bg-yellow-600 focus:outline-none rounded-lg text-xs text-gray-200 flex justify-center items-center"
                    aria-label="Add new country">
                    Add Country
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-auto bg-opacity-15">
            <table id="country" class="mx-auto shadow-sm w-full text-xs border border-stone-600">
                <thead class="p-3 text-left bg-stone-700 bg-opacity-40">
                    <tr>
                        <th
                            class="py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                            Country Name</th>
                        <th class="text-center py-3 px-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-b border-stone-600"
                            width="10%">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td class="py-2 px-1 border-b border-stone-600">{{ $country->country_name }}</td>
                            <td class="p-2 px-1 text-center border-b border-stone-600">
                                <button type="button" value="{{$country->country_id}}"
                                    class="btn-edit_country text-blue-500 hover:text-blue-700">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button type="button" value="{{$country->country_id}}"
                                    class="btn-delete_country text-red-500 hover:text-red-700 ml-2">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('pages.admin.components.admin_check_error')
</div>
@foreach ($countries as $country)
    <div class="modal-edit_country_{{$country->country_id}} closeedit fixed inset-0 flex items-center justify-center z-30"
        style="display: none">
        <div class="modal-content bg-stone-800 text-gray-200 rounded-lg shadow-lg w-[25rem] relative p-6 z-20">
            <div class="modal-header flex justify-between items-center mb-6">
                <h4 class="modal-title text-lg font-semibold tracking-widest">Edit - {{$country->country_name}}</h4>
                <button type="button" class="close-editmodal text-gray-400 hover:text-gray-200">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form action="{{route('Edit_Country', $country->country_id)}}" method="POST" class="space-y-4">
                @csrf
                <div class="modal-body">
                    <div class="text-xs mb-3">
                        <label for="name" class="block font-medium mb-1">Country Name</label>
                        <input type="text" id="name" name="country_name" value="{{old('name')}}"
                            class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    </div>
                </div>
                <div class="modal-footer flex justify-end space-x-3 mt-6">
                    <button type="button"
                        class="close-editmodal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                        Cancel
                    </button>
                    <button type="submit" name="save_country"
                        class="btn-save px-4 py-2 bg-yellow-700 text-sm text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
    </div>
    <div class="modal-delete_country_{{$country->country_id}} closedelete fixed inset-0 flex items-center justify-center z-30"
        style="display: none">
        <div class="modal-content bg-gray-200 text-stone-800 rounded-lg shadow-lg w-auto relative p-6 z-20">
            <div class="flex w-full justify-center"><i
                    class="fa-solid fa-triangle-exclamation fa-beat-fade text-4xl text-red-600"></i></div>
            <div class="modal-header flex justify-between items-center mb-6">
                <h4 class="modal-title text-lg font-bold tracking-widest text-nowrap">Are you sure you want to remove
                    {{$country->country_name}}?
                </h4>
                <button type="button"
                    class="close-deletemodal absolute right-3 top-3 text-gray-400 hover:text-gray-600 ml-10">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form action="{{route('Delete_Country', $country->country_id)}}" method="POST">
                @csrf
                <p class="text-xs w-96 font-semibold tracking-wider">Note: This will delete this person permanently. You
                    cannot undo this action.</p>
                <div class="modal-footer flex justify-start space-x-3 mt-10">
                    <button type="button"
                        class="close-deletemodal px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 border border-stone-800">
                        Cancel
                    </button>
                    <button type="submit" name="save_country"
                        class="btn-save px-4 py-2 bg-red-700 text-sm text-gray-200 rounded hover:bg-red-600 focus:outline-none">
                        Delete
                    </button>
                </div>
            </form>
        </div>
        <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
    </div>
@endforeach
<div class="modal-add_country fixed inset-0 flex items-center justify-center z-30" style="display: none">
    <div class="modal-content bg-stone-800 text-gray-200 rounded-lg shadow-lg w-[25rem] relative p-6 z-20">
        <div class="modal-header flex justify-between items-center mb-6">
            <h4 class="modal-title text-lg font-semibold tracking-widest">Add country</h4>
            <button type="button" class="close-modal text-gray-400 hover:text-gray-200">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <form action="{{route('Add_Country')}}" method="POST" class="space-y-4">
            @csrf
            <div class="modal-body">
                <div class="text-xs mb-3">
                    <label for="name" class="block font-medium mb-1">Name</label>
                    <input type="text" id="name" name="country_name" value="{{old('name')}}"
                        class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                </div>
            </div>
            <div class="modal-footer flex justify-end space-x-3 mt-6">
                <button type="button"
                    class="close-modal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                    Cancel
                </button>
                <button type="submit" name="save_country"
                    class="btn-save px-4 py-2 bg-yellow-700 text-sm text-gray-200 rounded hover:bg-yellow-600 focus:outline-none">
                    Save
                </button>
            </div>
        </form>
    </div>
    <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
</div>