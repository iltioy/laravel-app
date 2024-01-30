<form action="{{route('login')}}" method="post">

    @csrf
    
    <div>
        <input type="email" name="email">
    </div>
    
    <div>
        <input type="text" name="password">
    </div>

    <button type="submit">Submit</button>
</form>