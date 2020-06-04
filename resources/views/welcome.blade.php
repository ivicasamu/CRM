<x-login-register>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Welcome to {{ config('app.name', 'Laravel') }} system</div>

                    <div class="card-body">
                        <img class="rounded mx-auto d-block mb-5" src="image/logo.png" alt="" width="100" height="100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <a href="/login" class="btn btn-outline-dark btn-lg">Login</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="/register" class="btn btn-outline-dark btn-lg">Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-register>


<title>{{ config('app.name', 'Laravel') }}</title>
