<x-app-layout>
    <x-page-title>Categories</x-page-title>

    <div class="bg-white rounded-2 shadow-sm p-4 mb-4">
        <div class="row">
            <div class="d-grid d-lg-block col-lg-5 col-xl-6 mb-4 mb-lg-0">
                <a href="{{ route('categories.create') }}" class="btn btn-primary py-2 px-3">
                    <i class="ti ti-plus me-2"></i> Add Category
                </a>
            </div>
            <div class="col-lg-7 col-xl-6">
                <form action="{{ route('categories.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control form-search py-2" value="{{ request('search') }}" placeholder="Search category ..." autocomplete="off">
                        <button class="btn btn-primary py-2" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2 shadow-sm pt-4 px-4 pb-3 mb-5">
        <div class="table-responsive mb-3">
            <table class="table table-bordered table-striped table-hover" style="width:100%">
                <thead>
                    <th class="text-center">No.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Actions</th>
                </thead>
                <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td width="30" class="text-center">{{ ++$i }}</td>
                        <td width="200">{{ $category->name }}</td>
                        <td width="70" class="text-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm m-1" data-bs-tooltip="tooltip" data-bs-title="Edit">
                                <i class="ti ti-edit"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $category->id }}" data-bs-tooltip="tooltip" data-bs-title="Delete"> 
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="modalDelete{{ $category->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        <i class="ti ti-trash me-2"></i> Delete Category
                                    </h1>
                                </div>
                                <div class="modal-body">
                                    <p class="mb-2">
                                        Are you sure to delete <span class="fw-bold mb-2">{{ $category->name }}</span>?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary py-2 px-3" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger py-2 px-3"> Yes, delete it! </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="ti ti-info-circle fs-5 me-2"></i>
                                <div>No data available.</div>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="pagination-links">{{ $categories->links() }}</div>
    </div>
</x-app-layout>