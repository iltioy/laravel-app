<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @yield('styles')
    @yield('sctipt')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script>
        const navigateToNote = (noteId) => {
            window.location.href = `http://localhost:8000/notes/${noteId}`
        } 
        const navigateBack = () => {
            window.location.href = 'http://localhost:8000/notes'
        }

        const navigateToEdit = (noteId) => {
            window.location.href = `http://localhost:8000/notes/${noteId}/edit`
        }

        const navigateToCreate = () => {
            window.location.href = `http://localhost:8000/notes/create`
        }
    </script>
</head>

<style>

    * {
        font-family: 'Roboto', sans-serif;
    }

    input {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        font-size: 20px;
        outline: none;
    }

    .button {
        outline: none;
        background: rgb(73, 14, 175);
        color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        display: inline;
        font-size: 16px;
    }

    .inputItem {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin-bottom: 10px;
    }

    .container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    .error {
        font-size: 14px;
        color: red;
    }
</style>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>