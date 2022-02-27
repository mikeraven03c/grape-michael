<form class="w3-container" action="{{ route('customer.update',$customer->id) }}" method="POST">

  @csrf <!-- {{ csrf_field() }} -->

  {!! method_field('PUT') !!}
  <label class="w3-text"><b>First Name</b></label>
  <input value="{{ $customer->first_name }}" class="w3-input w3-border w3-margin-bottom" type="text" name="first_name">

  <label class="w3-text"><b>Last Name</b></label>
  <input value="{{ $customer->last_name }}" class="w3-input w3-border w3-margin-bottom" type="text" name="last_name">
  <label class="w3-text"><b>Age</b></label>
  <input value="{{ $customer->age }}" class="w3-input w3-border w3-margin-bottom" type="text" name="age">
  <label class="w3-text"><b>Gender</b></label>

  <input {{ $customer->gender == 'male' ? 'checked' : ''}} class="w3-radio" type="radio" name="gender" value="male" checked>
  <label>Male</label>

  <input {{ $customer->gender == 'female' ? 'checked' : ''}} class="w3-radio" type="radio" name="gender" value="female">
  <label>Female</label>
  <br><br>

  <label class="w3-text"><b>Address</b></label>
  <input value="{{ $customer->address_1 }}" class="w3-input w3-border w3-margin-bottom" type="text" name="address_1">
  <label class="w3-text"><b>Birthdate</b></label>
  <input value="{{ $customer->birthdate }}" class="w3-input w3-border w3-margin-bottom" type="date" name="birthdate">

  <button type="submit" class="w3-btn w3-blue w3-margin-bottom">Update</button>
</form>
