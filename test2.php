<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach (array_keys($_POST['price']) as $key => $val) {
        echo $_POST['price'][$key] . ' - ' . $_POST['description'][$key] . '<br />';
    }
}
?>
<!DOCUMENT html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

    <body>
        <br />
        <button onClick="addPart('top')">Ajouter le haut</button><br />
        <button onClick="addPart('bottom')">Ajouter le bas</button><br />
        <button onClick="addPart('side')">Ajouter le côté</button><br />
        <br />

        <form id="form" method="post">
            <input type="submit" /><br />
        </form>

        <script>
            const parts = {
                top: {
                    price: 10,
                    description: 'Je suis le top',
                },
                bottom: {
                    price: 10,
                    description: 'Je suis le bottom',
                },
                side: {
                    price: 10,
                    description: 'Je suis le side',
                },
            };

            function addPart(part) {
                if (parts[part]) {
                    let index = $('#form input:not([type="submit"]').length / 2;
                    $('#form').append($(`<input type="text" name="price[${index}]" value="${parts[part].price}" />`));
                    $('#form').append($(`<input type="text" name="description[${index}]" value="${parts[part].description}" />`));
                    $('#form').append($(`<br />`));
                    index++;
                }
            }
        </script>
    </body>
</html>


