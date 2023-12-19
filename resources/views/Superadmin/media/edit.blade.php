@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Sosial Media Link</h4> <br>
                    <form class="forms-sample" action="{{ route('media.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Sosial Media Link</label>
                            <input type="text" name="sosmed" class="form-control" id="exampleInputName1"
                                placeholder="Sosial Media Link" value="{{ old('sosmed', $data->sosmed) }}">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
