@extends('admin.layouts.master')

@section('admin.layouts.master.content')
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form class="form-inline" action="" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" name="search-query" data-width="250" style="width: 250px;" class="form-control" placeholder="Search" aria-label="">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price HTML</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $product->id }}</td>
                                    <td><img class="img-thumbnail" width="200" height="200"
                                            src="{{ $product->images[0]->src }}" alt="{{ $product->images[0]->alt }}" />
                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price_html }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td><a href="#" class="btn btn-icon btn-primary mr-2"><i
                                                class="far fa-edit"></i></a><a href="#"
                                            class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
