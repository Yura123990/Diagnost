<?php 
session_start();
$_SESSION['path']='path.php';
	include('header.php');
?>
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 50%" >
        <h1>Результати роботи</h1><p><img width="260" height="130" alt="" src="images/cle3.jpg" class=""></p><p><span style="font-style:italic;">Вся інформація про роботу користувача із системою є конфіденційною та доступна з кабінету користувача.</span></p><p>В системі працює 3 типи користувачів: Користувач (Пацієнт), Експерт (Лікар) та Адміністратор </p><p style="text-align:right;">
            <ol type="A">До вхідних даних відносяться:
            <li>персональні данні лікарів при реєстрації:
            <ol>
                <li>прізвище;</li>
                <li>ім'я;</li>
                <li>логін;</li>
                <li>ключ реєстрації;</li>
                <li>електронна адреса;</li>
                <li>пароль облікового запису.</li>
            </ol>
            </li>
            <li>персональні дані пацієнтів:
                <ol>
                    <li>прізвище;</li>
                    <li>ім'я;</li>
                    <li>дата народження;</li>
                    <li>контактний номер телефону</li>
                    <li>номер медичної картки.</li></ol></li>

            <li>інформація про новий симптом:
                <ol>
                    <li>назва симптому;</li>
                    <li>межі симптому (числові значення лівого та правого кордону)</li>
                    <li>крок показника симптому (наприклад, крок '0.1' для температури тіла та крок '1' для систолічного тиску);</li>
                    <li>трикутні функції для кожного рівня захворювання.</ol>
            </li>
            <li>інформація про нове захворювання (назва захворювання)</li>
            <li>інформація про нову групу захворювань (назва групи);</li>
            <li>інформація про нове правило взаємозв'язку симптомів та захворювань:
                <ol>
                    <li>симптоми та рівень їх приналежності (інтенсивність)</li>
                    <li>імовірність захворювання для цієї комбінації симптомів.</li>
                </ol>
            </li>
            <li>інформація для діагностики захворювання:
                <ol>
                    <li>персональні дані пацієнта;</li>
                    <li>область діагностики (група правил);</li>
                    <li>показники симптомів для певної групи правил.</li>
                </ol>
            </li>
        </ol>

        </p>
    </div>
    </div>
</div>
</div>
                                
                

<?php
	include('footer.php');
?>