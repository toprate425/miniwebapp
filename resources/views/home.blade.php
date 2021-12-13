@extends('layouts.userLayout')

@section('content')
<div class="container">
    <div id='header' style="display: flex; justify-content: space-between;">
        <h1 class="display-4">Welcome {{Auth::user()->name}},</h1>
    </div>
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
        </div>
    </div>

    @forelse ($car_list as $key => $car)
        <div class="card card-body border-0 shadow mb-4 col-12 everycar" style="display: flex; flex-direction: row;">
            <div class="col-4">
                <h2 class="h5 mb-4">CarName: {{$car->name}}</h2>
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <div id={{$key}} type="button" data-bs-toggle="modal" data-bs-target="#modal-default{{$key}}">
                            <img class="rounded avatar-xl" src="../../../bootstrap/assets/img/profile-cover.jpg" alt="change avatar" style="width:80px; height:80px;" >
                        </div>
                        <div class="modal fade" id="modal-default{{$key}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="h6 modal-title">Information</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body shadow border-0 text-center p-0">
                                        <div class="profile-cover rounded-top" data-background="../../../bootstrap/assets/img/profile-cover.jpg"></div>
                                        <div class="card-body pb-5">
                                            <img src="../../../bootstrap/assets/img/profile-cover.jpg" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                            <h1>{{$car->name}}</h1>
                                            <h3>Type:: {{$car->type}}</h3>
                                            <h5>period:: {{$car->period}}</h5>
                                            <h5>price:: {{$car->price}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="file-field" style="margin-left:10px;">
                        <div>
                            <div style="display: flex;">
                                <div>
                                    <div class="fw-normal text-dark mb-1">type:: {{$car->type}}</div>
                                    <div class="text-gray ">period:: {{$car->type}}</div>
                                    <div class="text-gray ">price:: {{$car->price}}</div>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="checkbox{{$car->id}}" value="{{$car->id}}" onchange=check(this.value)>
                                    <label class="form-check-label" for="user-notification-1"></label>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                </div>
            </div>
            
            <!-- General Information -->

            <div id="generation{{$car->id}}" class="col-8" style="display: none;">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">General information</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="birthday">Birthday</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                                    </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender</label>
                                <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                    <option selected>Gender</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                                </div>
                            </div>
                        </div>
                        <h2 class="h5 my-4">Location</h2>
                        <div class="row">
                            <div class="col-sm-9 mb-3">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <div class="form-group">
                                    <label for="number">Number</label>
                                    <input class="form-control" id="number" type="number" placeholder="No." required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control" id="city" type="text" placeholder="City" required>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label for="state">State</label>
                                <select class="form-select w-100 mb-0" id="state" name="state" aria-label="State select example">
                                    <option selected>State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="zip">ZIP</label>
                                    <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button  data-bs-toggle="modal" data-bs-target="#modal-notification" class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="display-3 text-center">No Cars Available</div>
    @endforelse

    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-info modal-dialog-centered" role="document">
            <div class="modal-content bg-gradient-secondary">
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
                    <button id="choosecar" type="button" class="btn btn-sm btn-white" onclick=send();>O K !</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var ids = [];
    function seeInfo(value) {
        console.log('value', value);
        // var name = document.getElementById("full_name").value;
        // alert(name);
    }

    function check(value) {
        var checkboxId = 'checkbox'+value;
        var temp = ids.indexOf(value);
        if (temp >= 0) {
            ids.splice(temp, 1);
        } else {
            ids.push(value);
        }
        var genInfoId = 'generation'+value;
        var checkboxStatus = document.getElementById(checkboxId).checked;
        if (checkboxStatus == true) {
            document.getElementById(genInfoId).style.display = "block";
        } else {
            document.getElementById(genInfoId).style.display = "none";
        }
    }
    
    function send() {
        var firstname = document.getElementById('first_name').value;
        var lastname = document.getElementById('last_name').value;
        var birthday = document.getElementById('birthday').value;
        var gender = document.getElementById('gender').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;
        var number = document.getElementById('number').value;
        var city = document.getElementById('city').value;
        var state = document.getElementById('state').value;
        var zip = document.getElementById('zip').value;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/user-choosecar',
            beforeSend: function() {
                $('#loader').show();
            },
            type: 'POST', 
            datatype: 'json', 
            data: { ids: ids, firstname: firstname, lastname: lastname,birthday: birthday,gender: gender,email: email,phone: phone,address: address,number: number,city: city,state: state,zip: zip},
            success: function(result) {
                $('#modal-notification').modal("hide");
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
    }

</script>

@endsection
