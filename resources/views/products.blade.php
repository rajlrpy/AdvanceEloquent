<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Advance Eloquent</title>
</head>
<body>

    <x-package-alert/>

    <a href="{{ route('root') }}"> Root</a>

    <center> <h1> Advance Eloquent </h1></center>
    <div class="container">
        <table class="table text-center ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Item Count</th>
            </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->name }} </td>
                    <td>{{ $product->thirds_count }}</td>
                </tr>
            @endforeach


        </tbody>
      </table>

        {{ $products->links('pagination::bootstrap-5') }}
</div>

    <x-forms-button>
        {{ _('Register') }}
    </x-forms-button>

</body>
</html>
