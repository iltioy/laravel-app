<form action="{{route('register')}}" method="post">

    @csrf
    
    <div>
        <input type="email" name="email">
    </div>

    <div>
        <input type="text" name="name">
    </div>

    <div>
        <input type="text" name="password">
    </div>

    <button type="submit">Submit</button>
</form>