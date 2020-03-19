@extends('layouts.app')

@section('file')
<div class="container mt-5">

@isset($message)
<div class="alert alert-success" role="alert">
  {{$message}}
</div>
@endisset
    <!-- Material form login -->
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Upload File </strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="{{ url('create') }}"
                enctype='multipart/form-data'
                method='POST'>
                @csrf
                <!-- Email -->
                <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <!-- Password -->
                <!-- <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control">
                    <label for="materialLoginFormPassword">Password</label>
                </div> -->



                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                    type="submit">upload </button>

                <!-- Register -->


            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form login -->

@endsection