
<style>
    .note {
        width: 300px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        cursor: pointer;
    }
</style>

<div class="note" onclick="navigateToNote({{$id}})">
    {{$text}}
</div>