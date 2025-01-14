<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Edit Produk</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="main-content">
                <div class="container">
                    <form method="post" action="{{route('products.update', $product->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="card mt-5">
                            <div class="card-header">
                                <h3>Edit Product</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div class="alert-title"><h4>Whoops!</h4></div>
                                    There are some problems with your
                                    input.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if (session('success2'))
                                <div class="alert alert-success">{{session('success2') }}</div>
                                @endif
                                @if (session('error2'))
                                <div class="alert alert-danger">{{session('error2') }}</div>
                                @endif
                                <div class="mb-3">
                                    <label class="form-label">KODE</label>
                                    <input type="text" class="form-control" name="kode" value="{{ old('kode', $product->kode) }}" placeholder="#KODE">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price', $product->price) }}" placeholder="Price">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input type="text" class="form-control" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="Stock">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->name }} " @if(old('category', $product->category) == $category->name) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Brand</label>
                                    <input type="text" class="form-control" name="brand" value="{{ old('brand', $product->brand) }}" placeholder="brand">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-warning" href="{{route('index')}}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>