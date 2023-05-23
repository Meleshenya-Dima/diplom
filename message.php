    <?php
        // Проверяем, была ли нажата кнопка submit
        if (isset($_POST['submit'])) {
            // Выполняем подключение к серверу MySQL
            $servername = "db4free.net";
            $username = "dimkahevedimka";
            $password = "12345678";
            $dbname = "diplom123";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверяем успешность подключения
            if ($conn->connect_error) {
                die("Ошибка подключения: " . $conn->connect_error);
            }

            // Ваш запрос к базе данных
            $sql = "SELECT * FROM Tickets";

            // Выполняем запрос
            $result = $conn->query($sql);

            // Обрабатываем результаты запроса
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Имя: " . $row["Firstname"]. " - Lastname: " . $row["	Lastname"]. "<br>";
                }
            } else {
                echo "Нет результатов.";
            }

            // Закрываем соединение с базой данных
            $conn->close();
        }
    ?>