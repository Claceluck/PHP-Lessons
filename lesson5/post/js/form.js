
let form = document.forms.lang;

// отправка с перезагрузкоой страницы
// JS нам сдесь что бы не отправялть не валидные данные на сервер
function formHandler(event) {
    event.preventDefault();
    if(!validate(this)) return;

    console.log("Отправка на сервер");
    this.submit();
}

// form.addEventListener('submit', formHandler);

// отправка формы без перезагрузки страницы
// ajax запрос

function validate(form) {
    // проверка пользователя
    return true;
}

function ajaxformHandler(event) {
    event.preventDefault();
    if(!validate(this)) return;

   let formData = new FormData(this);
   
   // создание объекта запроса
   let xhr = new XMLHttpRequest();
   xhr.open('POST', this.action, true);
   xhr.send(formData); // -> отправка запроса
//    обработчик события Load объекта запроса
   xhr.onload = function () { // <- ответ сервера
    //  данная функция сработает, когда придет ответ от сервера
    if(xhr.status === 200){
        // xht.responseText - ответ сервера 
        responseHandler(xhr.responseText);
    }
   }
}

function  responseHandler(serverAnswer){
    console.log(serverAnswer);
    let ans = document.getElementById('answer');
    ans.innerText = serverAnswer;
}

form.addEventListener('submit', ajaxformHandler);


