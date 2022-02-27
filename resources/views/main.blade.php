<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @csrf <!-- {{ csrf_field() }} -->
  @include('shared/head')

  <body>
    @include('shared/navigator')
    @include('shared/sidebar')
    @if ($message = Session::get('success'))
        <div class="panel w3-green">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="{{ route('customer.create') }}" class="w3-btn w3-blue w3-border-white w3-margin-top">Create</a>
    @include('main/table', ['customers' => $customers])
    @include('shared/script')
  </body>
</html>
