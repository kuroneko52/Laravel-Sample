<form id="js-languageForm" method="POST" action="">
    @csrf
    <input type="hidden" name="currentPath" value="/{{ request()->path() }}">
    <select name="language" onchange="updateActionAndSubmit(this);">
        @foreach ($languages as $code => $name)
            <option value="{{ $code }}" {{ $currentLocale == $code ? 'selected' : '' }}>
                {{ $name }}
            </option>
        @endforeach
    </select>
</form>

<script>
    function updateActionAndSubmit(select) {
        var selectedLanguage = select.value;
        var form = document.getElementById('js-languageForm');
        form.action = '/' + selectedLanguage + '/set-language';
        form.submit();
    }
</script>
