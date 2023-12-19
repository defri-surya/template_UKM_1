@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Integration Link</h4> <br>
                    <form class="forms-sample" action="{{ route('link.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">URL Marketplace</label>
                            <input type="text" name="url_marketplace" class="form-control" id="exampleInputName1"
                                placeholder="Url Marketplase" value="{{ old('url_marketplace', $data->url_marketplace) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">WhatsApp Admin</label>
                            <input type="text" name="url_wa" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('url_wa', $data->wa_admin) }}">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
