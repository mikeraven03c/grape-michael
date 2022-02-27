<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @csrf <!-- {{ csrf_field() }} -->
  @include('shared/head')

  <body>
    @include('shared/navigator')
    @include('shared/sidebar')
    <div style="margin-top:30px;">
      <div class="w3-container" style="width:80%;margin:auto;">

      <a href="{{ route('customer.index') }}" class="w3-btn w3-white w3-border-white w3-margin-bottom">Back</a>
        @if ($errors->any())
        <div class="w3-panel w3-red">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @includeWhen($create,'main/create')
        @includeUnless($create,'main/edit')
      </div>
    </div>
    @include('shared/script')
  </body>
</html>