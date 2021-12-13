<!-- @extends('layouts.adminPanel')

@section('content')

    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
        <tr>
            <th class="border-0 rounded-start">No</th>
            <th class="border-0">Name</th>
            <th class="border-0">Type</th>
            <th class="border-0">Period</th>
            <th class="border-0">Price</th>
            <th class="border-0">Remove</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($car_list as $key => $car)
                <tr>
                    <td>{{$key+1}}</td>
                    <td class="fw-bold d-flex align-items-center">{{$car->name}}</td>
                    <td>{{$car->type}}</td>
                    <td>{{$car->period}}</td>
                    <td>{{$car->price}}</td>
                    <td>
                        <button data-bs-toggle="modal" data-bs-target="#modal-delete" class="btn btn-danger" type="button" value="{{$car->name}}"  onclick=getremoveval(this.value)>Remove</button>
                        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                            <div class="modal-dialog modal-secondary modal-dialog-centered" role="document">
                                <div class="modal-content bg-gradient-light">
                                    <button type="button" class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-header">
                                        <p class="modal-title text-gray-200" id="modal-title-notification">Warning...</p>
                                    </div>
                                    <div class="modal-body text-white">
                                        <div class="py-3 text-center">
                                            <h2 class="h4 modal-title my-3">Are you sure?</h2>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-info" onclick=remove();>OK</button>
                                        <button type="button" class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <div class="display-3 text-center">No Cars Available</div>
            @endforelse
        </tbody>
    </table>

@endsection -->
