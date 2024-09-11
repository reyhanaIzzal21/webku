<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - Reyhana izzal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(90deg, #000000, #7F00FF, #1C1CD1, #FFD700);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #ffffff;
        }
        @keyframes gradient {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .container {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .card {
            border: none;
            border-radius: 1rem;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card img {
            border-radius: 1rem;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.05);
        }

        .card h3 {
            font-size: 1.75rem;
            color: #333333;
            margin-bottom: 1rem;
        }

        .card p {
            font-size: 1.125rem;
            color: #555555;
            margin-bottom: 0.75rem;
        }

        .card code {
            font-size: 0.875rem;
            color: #444444;
        }

        .card hr {
            border: 0;
            border-top: 1px solid #e0e0e0;
            margin: 1rem 0;
        }

        .card-footer {
            background: linear-gradient(135deg, #000000, #8a2be2);
            border-top: 1px solid #e0e0e0;
            padding: 0.75rem 1.5rem;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $product->title }}</h3>
                        <hr/>
                        <p>{{ "Rp " . number_format($product->price,2,',','.') }}</p>
                        <code>
                            <p>{!! $product->description !!}</p>
                        </code>
                        <hr/>
                        <p>Stock : {{ $product->stock }}</p>
                    </div>
                    <div class="card-footer">
                        Product Details
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
