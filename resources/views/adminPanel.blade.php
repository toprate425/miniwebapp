@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--Success Msg--}}
            @if (session('msg_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('msg_success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="text-center">
                <h1 class="display-4">Cars table</h1>
                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="mediumBody">
                                <div>
                                    <form method="POST" action="/admin-newcar" enctype="multipart/form-data">
                                    @csrf 
                                        <div class="form-group">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                        {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                        {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="period">Period</label>
                                            <input type="text" name="period" class="form-control @error('period') is-invalid @enderror" id="period">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                        {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                        {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-block" value="Save"></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" id="mediumButton" data-target="#mediumModal" class="btn btn-success" type="button">New Car</button>
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">No</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Type</th>
                                    <th class="border-0">Period</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">View</th>
                                    <th class="border-0">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($car_list as $key => $info)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td class="fw-bold d-flex align-items-center">{{$info['car']->name}}</td>
                                            <td>{{$info['car']->type}}</td>
                                            <td>{{$info['car']->period}}</td>
                                            <td>{{$info['car']->price}}</td>
                                            <td id="{{$info['car']->id}}">
                                                <button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal" data-bs-target="#modal-generalinfo{{$info['car']->id}}">View</button>
                                                <div class="modal fade" id="modal-generalinfo{{$info['car']->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-generalinfo{{$info['car']->id}}" aria-hidden="true" >
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="h6 modal-title">Car:: {{$info['car']->name}}</h2>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-centered table-nowrap mb-0 rounded">
                                                                        <thead class="thead-light">
                                                                        <tr>
                                                                            <th class="border-0 rounded-start">No</th>
                                                                            <th class="border-0">Firstname</th>
                                                                            <th class="border-0">Lastname</th>
                                                                            <th class="border-0">Birthday</th>
                                                                            <th class="border-0">Gender</th>
                                                                            <th class="border-0">Email</th>
                                                                            <th class="border-0">Phone</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @forelse ($info['general'] as $j => $genInfo)
                                                                                <tr>
                                                                                    <td>{{$j+1}}</td>
                                                                                    <td class="fw-bold d-flex align-items-center">{{$genInfo->firstname}}</td>
                                                                                    <td>{{$genInfo->lastname}}</td>
                                                                                    <td>{{$genInfo->birthday}}</td>
                                                                                    <td>{{$genInfo->gender}}</td>
                                                                                    <td>{{$genInfo->email}}</td>
                                                                                    <td>{{$genInfo->phone}}</td>
                                                                                </tr>
                                                                            @empty
                                                                                <div class="display-3 text-center">No Users Available</div>
                                                                            @endforelse
                                                                        </tbody>
                                                                    </table>
                                                                </div>  
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button data-bs-toggle="modal" data-bs-target="#modal-delete" class="btn btn-danger" type="button" value="{{$info['car']->name}}"  onclick=getremoveval(this.value)>Remove</button>
                                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                                    <div class="modal-dialog modal-primary modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <button type="button" class="btn-close theme-settings-close fs-6 ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            <div class="modal-header">
                                                                <p class="modal-title text-gray-200" id="modal-title-notification">Warning...</p>
                                                            </div>
                                                            <div class="modal-body text-danger">
                                                                <div class="py-3 text-center">
                                                                    <h2 class="h4 modal-title my-3">Are you sure?</h2>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-info" onclick=remove();>OK</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("document").ready(function(){
        // refreshTable();


    });
       
    function refreshTable() {
        $('div.table-container').fadeOut();
        $('div.table-container').load('/admin-getcar', function() {
            $('div.table-container').fadeIn();
        });
    }

    var removeValue = '';

    function getremoveval(value) {
        removeValue = value;
    }

    function remove() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/admin-removecar',
            type: 'POST', 
            datatype: 'json', 
            data: { id: removeValue },
            success: function(response)
            {
                $('#modal-delete').modal("hide");
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert(error);
                $('#loader').hide();
            },
        });
    }

    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

    document.getElementById('warningAlert').addEventListener('click', function () {
        swalWithBootstrapButtons.fire(
            'Warning alert',
            'You clicked the button!',
            'warning'
        )
    });

    function newCar() {
        var name = document.getElementById("full_name").value;
        var name = document.getElementById("full_name").value;
        alert(name);
    }

</script>
@endsection