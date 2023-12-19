@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Sosial Media Link</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('media.edit', $data->id) }}" class="btn btn-gradient-primary btn-sm">Edit <i
                                    class="mdi mdi-loupe btn-icon-append"></i></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Sosial Media </label>
                        <input type="text" class="form-control" name="sosmed" id="exampleInputEmail3"
                            placeholder="Email" value="{{ old('sosmed', $data->sosmed) }}" readonly>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
