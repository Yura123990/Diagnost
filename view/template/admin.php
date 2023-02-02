<?php 
	include('header.php');
?>
                                <h2 class="art-postheader">Панель адміністратора</h2>

    <div class="art-postcontent art-postcontent-0 clearfix"><p>Керування системою</p>
        <h2>
            <?php
            echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " Функції роботи з системою";

            
            ?>
        </h2></p></div>
    </h2></p>
    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/register.php'"> Додати експерта</button>
    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/view/template/avgexp.php'"> Експерти</button>
    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/view/template/avgexp.php'"> Користувачи</button>
    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/view/template/personal/statistic.php'"> Кабінет</button>
    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/view/template/avgexp.php'"> База знань</button>
    </div>
                                
                

<?php
	include('footer.php');
?>