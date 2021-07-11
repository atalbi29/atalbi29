<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
header {
    height: 30px;
    background-color: coral;
    color: white;
}

header > ul {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    list-style-type: none;
    margin-right: 10%;
}

header > ul > li {
    padding-left: 15px;
}

</style>

<body>
    <header>
        <ul>
            <li>Accueil</li>
            <li>A propos de moi</li>
            <li>Mes projets</li>
            <li>Contact</li>
        </ul>
    </header>
</body>
</html>