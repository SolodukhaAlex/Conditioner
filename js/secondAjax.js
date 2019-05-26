/* Ajax-запрос */

function SendSecondPost() // Наша функция, которая будет осуществлять ajax-отправку
{
       jQuery.ajax({	// Начала конструкции для работы с Ajax через jQuery
                type: "GET", // Метод, которым получаем данные из формы
                url: "/secondSend.php", // Обработчик формы. 
                data: jQuery("#secondForm").serialize(), // Этот метод, берет форму с id=form и достает оттуда данные
                success: function(html) {	// функция выполняемая при успешном отправлении данных
                                      alert("Сообщение отправленно");
                }
        });
}