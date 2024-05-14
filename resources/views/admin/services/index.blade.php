@extends('layouts.adminmaster')
@section('content')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Creation Soft Nepal</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Services section</li>
        </ul>
    </div>

    <div class="dashboard-content-one">
        <div class="card height-auto">
            <div class="card-body">
                <!-- <div class="heading-layout1">
                  
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div> -->


                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3>Services</h3>
                        </div>
                        <!-- Button trigger modal -->
                        <div>
                            <button type="button" class="fw-btn-fill btn-gradient-yellow" data-toggle="modal" data-target="#exampleModal">
                                Add Service
                            </button>

                        </div>


                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Add Service</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="new-added-form" id="myForm" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Title</label>
                                                <input type="text" placeholder="" id="" value="{{old('title')}}" class="form-control" name="title">
                                                <div id="titleError"></div>
                                            </div>
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Description *</label>
                                                <textarea rows="9" cols="10" type="text" placeholder="" id='' class="form-control" name="description">{{old('description')}}</textarea>
                                                <div id="descriptionError"></div>
                                            </div>
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Icon *</label>
                                                <input type="text" placeholder="" id='' class="form-control" name="icon" value="{{old('icon')}}">
                                                <div id="iconError"></div>
                                            </div>

                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                <button type="rest" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Edit Service</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="new-added-form" id="myForm" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Title</label>
                                                <input type="text" placeholder="" id="title" value="{{old('title')}}" class="form-control" name="title">
                                                <div id="titleError"></div>
                                            </div>
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Description *</label>
                                                <textarea rows="9" cols="10" type="text" placeholder="" id='description' class="form-control" name="description">{{old('description')}}</textarea>
                                                <div id="descriptionError"></div>
                                            </div>
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>Icon *</label>
                                                <input type="text" placeholder="" id='icon' class="form-control" name="icon" value="{{old('icon')}}">
                                                <div id="iconError"></div>
                                            </div>

                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                <button type="rest" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <form class="mg-b-20">
                    <div class="row gutters-8">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by ID ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by Name ..." class="form-control">
                        </div>
                        <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by Phone ..." class="form-control">
                        </div>
                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkAll">
                                        <label class="form-check-label">ID</label>
                                    </div>
                                </th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>Action</th>

                            </tr>


                        </thead>
                        <tbody>
                            @foreach ($services as $key=>$service)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->ShortDescription }}</td>
                                <td>{{ $service->icon }}</td>

                                <td>
                                    <div class="d-flex flex-row gap-4 font-semibold">
                                        <div class="px-1">
                                            <!-- <button type="button" class="btn btn-primary btn-lg" onclick="edit('{{ $service->id }}', '{{ $service->title }}', '{{ $service->description }}','{{ $service->icon }}' )" data-toggle="modal" data-target="#editModal">
                                                Edit
                                            </button> -->

                                            <button type="button" class="btn btn-primary btn-lg" onclick="edit('{{ addslashes($service->id) }}', '{{ addslashes($service->title) }}', '{{ addslashes($service->description) }}','{{ addslashes($service->icon) }}' )" data-toggle="modal" data-target="#editModal">
                                                Edit
                                            </button>

                                        </div>
                                        <div>
                                            <button class="btn btn-danger btn-lg">Delete</button>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- Teacher Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
    <!-- Add New Teacher Area End Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">Creation Soft Nepal</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
    </footer>
</div>
@endsection

@section('scripts')

<script>
    function edit(id, title, description, icon) {
        $('#title').val(title);
        $('#description').val(description);
        $('#icon').val(icon);
        $('#service_id').val(id);
    }

    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this); // Create FormData object
            $.ajax({
                url: "{{ route('service.store') }}",
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false, // Set content type to false for file uploads
                processData: false, // Prevent jQuery from automatically processing the data
                success: function(response) {

                    if (response.status == 400) {
                        $('#titleError').html('');
                        $('#descriptionError').html('');
                        $('#iconError').html('');

                        $.each(response.errors, function(key, err_value) {
                            $('#' + key + 'Error').html('<p class="text-danger">' + err_value + '</p>');
                        });
                    } else {
                        $('#result').text(response.message);
                        $('#result').addClass('btn btn-success')
                        $('form')[0].reset();
                        // Reload the page if $services exists
                        @if($services)
                        location.reload();
                        @endif
                    }
                }

            });
        });
    });
</script>
@endsection