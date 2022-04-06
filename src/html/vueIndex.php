<?php

namespace game\html;

class vueIndex{

    public static function render(): string
    {
        return <<<END
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
</head>
<body>
<a href="seance1">Seance 1</a>
<a href="seance2">Seance 2</a>
<a href="seance3">Seance 3</a>
<a href="seance4">Seance 4</a>
</body>
</html>
END;

    }
}