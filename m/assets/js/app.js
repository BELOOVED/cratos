function logIn() {
    event.preventDefault();
    
      $.ajax({
        type: "POST",
        url: "/request.php?q=login",
        data: $("#login_form").serialize(),
        success: (response) => {
          if (response == "error") {
            $(".loginSteps #step_1").removeClass("dnone");
            $(".loginSteps #step_2").addClass("dnone");
            Swal.fire("Hata!", "Kullanıcı adı ve ya şifre hatalı.", "error");
            return;
          } else if (response == "error_phone") {
            Swal.fire("Hata!", "Telefon numarasını yanlış girdiniz.", "error");
            return;
          } else {
            window.location.href = "deposit";
          }
        },
      });
    
  }
  
  function logOut() {
    $.ajax({
      type: "POST",
      url: "/request.php?q=logout",
      success: (response) => {
        window.location.href = "/";
      },
    });
  }
  
  function signUp() {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "/request.php?q=signup",
      data: $("#register_form").serialize(),
      success: (response) => {
        if (response == "error") {
          Swal.fire("Hata!", "Bilgileri doğru girdiğinizden emin olun", "error");
        } else {
          window.location.href = "/deposit";
        }
      },
    });
  }
  