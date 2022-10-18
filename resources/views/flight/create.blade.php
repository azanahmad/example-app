<form action="{{url('flight/save')}}" method="POST">
    @csrf()
    @if(session('success'))
       <span> {{session('success')}} </span>
    @endif
    @if(session('error'))
        <span> {{session('error')}} </span>
    @endif
    <br>
    <label>Name:</label>
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
    <span> {{$message}}</span>
    @enderror
    <br>
    <label>City:</label>
    <input type="text" name="city" value="{{old('city')}}">
    @error('city')
    <span> {{$message}}</span>
    @enderror
    <br>
    <label>Country:</label>
    <input type="text" name="country" value="{{old('country')}}">
    @error('country')
    <span> {{$message}}</span>
    @enderror
    <br>
    <label>Date:</label>
    <input type="date" name="date" value="{{old('date')}}">
    @error('date')
    <span> {{$message}}</span>
    @enderror
    <br>
    <button type="submit" >Save </button>
</form>
