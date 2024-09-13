<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content={{csrf_token()}}>
    @stack("style")
    <title>Projeto Usuários Laravel</title>
</head>
<body @stack("bodyOnLoad")>
    @component("nav")
    @endcomponent

    @hasSection("body")
        @yield("body")
    @endif

    @stack("script")
</body>
</html>