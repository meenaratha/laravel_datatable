<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Tickers Table</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Tickers Table</h2>
        <input type="text" id="search" class="form-control mt-3" placeholder="Search Tickers">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tricker</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nasdaq as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->Tickers}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-md-12">
            {!! $nasdaq->links() !!}
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
