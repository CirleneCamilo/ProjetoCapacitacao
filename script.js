var form = document.getElementById("form");
form.addEventListener("submit", function (Event) {
    Event.preventDefault();
    console.log(form.idUsername);
    console.log(form.idEmail);
    console.log(form.idPhone);

  alert("CADASTRADO COM SUCESSO!!");
})

   

