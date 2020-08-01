@include('admin.header')
<body id="page-top">
  {{-- <!-- Page Wrapper --> --}}
  <div id="wrapper">
    {{-- sitebar here --}}
    @include('admin.sitebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      {{-- <!-- Main Content --> --}}
      <div id="content">
       {{-- Tobar here --}}
        @include('admin.tobbar')
       {{-- <!-- Begin Page Content --> --}}
       {{-- contein here --}}
       {{-- @yield('componen') --}}
       @include('admin.contein')
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
        {{-- footer here --}}
        @include('admin.foother')
    </div>
    {{-- <!-- End of Content Wrapper --> --}}
  </div>
  {{-- <!-- End of Page Wrapper --> --}}
</body>
