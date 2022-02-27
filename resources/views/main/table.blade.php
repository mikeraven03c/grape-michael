<div class="w3-responsive">
  <table class="w3-table w3-bordered">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Actions</th>
    </tr>
    @foreach ($customers as $d)
      <tr>
        <td>{{ $d->first_name }}</td>
        <td>{{ $d->last_name }}</td>
        <td>{{ $d->age }}</td>
        <td>
          <form action="{{ route('customer.destroy',$d->id) }}" method="POST">
            <button type="button" onclick="show( {{ 'demo' . $d->id }} )" class="w3-btn w3-white w3-text-blue w3-border-blue">Show</button>
            <a href="{{ route('customer.edit',$d->id) }}" class="w3-btn w3-white w3-text-green w3-border-green">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="w3-button w3-text-red w3-border-red">Delete</button>
          </form>
        </td>
      </tr>
      <tr id="{{ 'demo' . $d->id }}" class="w3-container w3-hide">
        <td>
          <div>
            FirstName: {{ $d->first_name }}<br/>
            LastName: {{ $d->first_name }}<br/>
            Age: {{ $d->age }}<br/>
            Gender: {{ $d->gender }}<br/>
            Address: {{ $d->address_1 }}<br/>
            Birthdate: {{ $d->birthdate }}<br/>
          </div>
        </td>
      </tr>
    @endforeach
  </table>
</div>

<script>
function show(e) {
  if (e.className.indexOf("w3-show") == -1) {
    e.className += " w3-show";
  } else {
    e.className = e.className.replace(" w3-show", "");
  }
}
</script>