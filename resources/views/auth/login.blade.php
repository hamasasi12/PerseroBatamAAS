<x-login-component>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('./assets/img/logo1.png') }}" alt="" width="300" />
                </span>
                <!-- <span class="app-brand-text demo text-body fw-bolder">persero</span> -->
              </a>
            </div>
            <!-- /Logo -->

            <!-- ucapan -->
            <h4 class="mb-4" style="text-align: center; color: black; font-weight: bold;">Selamat Datang di Aplikasi
              Manajemen Layanan Teknis Dan IT Persero Batam</h4>
            <!-- /ucapan -->

            <!-- login -->
            @if ($errors ->any())
              <div class="alert alert-danger">
                <ul style="list-style: none">
                  @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST" >
                @csrf
              <div class="mb-3">
                {{-- email --}}
                <input type="email" class="form-control" id="email" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus autocomplete="username" />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                </div>
                <div class="input-group input-group-merge">
                {{-- password --}}
                  <input type="password" id="password" class="form-control" name="password" placeholder="Password"
                    aria-describedby="password" />
                </div>
              </div>
              <div class="mb-3">
              </div>
              {{-- <div class="mb-3" style="text-align: center;">
                <a href="/dashboard" type="button" class="btn btn-rounded mb-3"
                  style="background-color: #061097; color: white; width: 3  0%">Login</a>
              </div> --}}
              <button name="submit" type="submit" class="btn btn-rounded mb-3"  style="background-color: #061097; color: white; width: 30%;">
                Login
              </button>
            </form>
            <!-- /login -->
          </div>
        </div>
        <!-- /Register-->
      </div>
    </div>
  </div>
</x-login-component>