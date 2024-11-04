@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    {{-- HERO PART 3 --}}
    {{-- <div class="col-lg-3 col-xl-2">
        <div class="d-grid gap-2">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create Employee</a>
        </div>
    </div> --}}

    <div class="text-center" style="background-color: #F4CDB0">
        <div class="container text-center">
            <div class="row">
                <p class="text-center fw-bold display-1 my-5" style="color: #644961">Catalog Product</p>
                <div class="row row-cols-1 row-cols-md-5 g-6">
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/roti1.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Roti Sosis Keju</h5>
                                <h5 class="card-title" style="color: #644961">Rp.12.000,00</h5>
                                <small class="text-muted">Available: 100</small>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/roti2.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Coffee Bun</h5>
                                <h5 class="card-title" style="color: #644961">Rp.10.500,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/roti3.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Garlic Bread</h5>
                                <h5 class="card-title" style="color: #644961">Rp.25.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/roti4.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Roti Pizza Mini</h5>
                                <h5 class="card-title" style="color: #644961">Rp.12.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/roti5.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Stuffed Tuna Bun</h5>
                                <h5 class="card-title" style="color: #644961">Rp.10.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/pars6.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Croissant</h5>
                                <h5 class="card-title" style="color: #644961">Rp.12.500,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/pars7.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Cinnamon Palmiers</h5>
                                <h5 class="card-title" style="color: #644961">Rp.6.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/pars8.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Cinnamon Roll</h5>
                                <h5 class="card-title" style="color: #644961">Rp.12.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/pars9.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Blackberry Cream Cheese</h5>
                                <h5 class="card-title" style="color: #644961">Rp.25.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/pars10.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Cromboloni</h5>
                                <h5 class="card-title" style="color: #644961">Rp.18.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/cake1.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Blueberry Cheesecake</h5>
                                <h5 class="card-title" style="color: #644961">Rp.42.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/cake2.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Strawberry Lemon Layer Cake</h5>
                                <h5 class="card-title" style="color: #644961">Rp.40.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/cake3.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Chocolate Raspberry Cheesecake</h5>
                                <h5 class="card-title" style="color: #644961">Rp.45.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/cake4.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Red Velvet</h5>
                                <h5 class="card-title" style="color: #644961">Rp.42.000,00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col py-4">
                        <div class="card h-100">
                            <img src="{{ Vite::asset('resources/images/cake5.jpeg') }}">
                            <div class="card-body">
                                <h5 class="card-title">Opera Cake</h5>
                                <h5 class="card-title" style="color: #644961">Rp.40.000,00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
