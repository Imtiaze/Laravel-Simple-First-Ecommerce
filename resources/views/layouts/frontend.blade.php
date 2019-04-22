 @include('partials._header')

@include('partials._navbar')

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      
        @include('partials._sidebar')
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        @yield('carousal')

        <div class="row">

            @yield('content')

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
@include('partials._footer')