<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Poiché la mail dev'essere compatibile con tutti i tipi di browser e client di posta elettronica, allora è necessario usare un codice molto base, è meglio evitare CSS o Bootstrap e nel caso è meglio usarli in-line -->
    <div>
        Hai ricevuto una richiesta di contatto:
        <br>
        Nome: {{ $name }}<br>
        Email: {{ $email }}<br>
        Messaggio: <br>
        {{ $messageContent }}
    </div>
</body>
</html>