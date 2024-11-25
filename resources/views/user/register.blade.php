@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .form-group input {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            width: 100%;
        }
        .btn {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            width: 100%;
        }
        .text-center {
            text-align: center;
        }
        .card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.25rem;
        }

        .btn-register{
            background-color: #4a628a;
            color: #fff;
        }

    </style>
@endsection

@section('title', 'Register')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Register</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('ereporthub.register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="Your NIK" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone Number</label>
                        <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Your Telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required>
                    </div>
                    <button type="submit" class="btn btn-register btn-block">Register</button>
                </form>
            </div>
        </div>
        <div class="text-center mt-3">
            <small>Already have an account?</small>
            <a href="{{ route('ereporthub.index') }}" class="text-decoration-none">Login</a>
        </div>
    </div>
    @if (Session::has('pesan'))
        <div class="alert alert-danger mt-2">
            {{ Session::get('pesan') }}
        </div>
        
    @endif
@endsection
</body>

</html>


