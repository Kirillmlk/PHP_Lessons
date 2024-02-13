<?php

?>

<form action="server.php" method="post">
    <fieldset>
        <legend><h2>Заполните форму</h2></legend>
        <p>
            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" size="21" autofocus required/>
        </p>
        <p>
            <label for="name">Домашний адрес:</label>
            <input type="text" id="name" name="name" size="20" required/>
        </p>
        <p>
            <label for="start">Дата рождения:</label>
            <input type="date" id="start" name="b_day" value="2018-07-22" min="2000-01-01" max="2024-12-31" required/>
        </p>
        <p>
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" pattern=".+@example\" required/>
        </p>
        <p>
            <label for="gender">Укажите пол:</label>

            <select id="gender" name="gender">
                <option>Мужской</option>
                <option>Женский</option>
            </select>
        </p>
    </fieldset>
    <p>
        <button type="submit">Отправить</button>
    </p>
</form>
