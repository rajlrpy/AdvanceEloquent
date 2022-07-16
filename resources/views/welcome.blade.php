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
    <a href="{{ route('products') }}"> Products  </a>

    <center> <h1> Advance Eloquent </h1></center>
    <div class="container">
        <table class="table text-center ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Product Count</th>
            <th scope="col">Items Count</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }} </td>
                    <td>{{ $category->products_count }}</td>
                    <td>{{ $category->thirds_count }}</td>
                </tr>
            @endforeach


        </tbody>
      </table>
</div>

</body>
</html>
